<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\OutModel;
use App\Models\CModel;
use App\Models\PModel;

class Outward extends BaseController
{
    public function index()
    {
        $vendor_model = new CModel();
        $product_model = new PModel();
        $data = [
            'vendor' => $vendor_model->findAll(),
            'products' => $product_model->findAll()
        ];
        return view('addout',$data);
    }

    public function product($id)
    {
        $pmodel = new PModel();
        $data = $pmodel->where('id',$id)->findAll();
        // $data = $pmodel->findAll();
        if ($data) {
            echo json_encode(array("status" => true, "data" => $data));
        }else {
            echo json_encode(array("status" => false));
        }
    }

    public function add()
    {
        helper('form');
        $data = [
            'customer' => $this->request->getPost('customer'),
            'po_no' => $this->request->getPost('po_no'),
            'po_date' => $this->request->getPost('po_date'),
            'invoice_date' => $this->request->getPost('invoice_date')
        ];
        
        $model = new OutModel();
        $model->insert($data);
        $id = $model->getInsertID();

        $prod = $this->request->getPost('prod[]');
        $partcode = $this->request->getPost('partcode[]');
        $qty = $this->request->getPost('qty[]');
        $rate = $this->request->getPost('rate[]');
        $freight = $this->request->getPost('freight[]');
        $gst = $this->request->getPost('gst[]');
        $unit = $this->request->getPost('unit[]');
        for ($i=0; $i < count($prod); $i++) { 
            $data2[] = [
                'id' => $id,
                'product' => $prod[$i],
                'partcode' => $partcode[$i],
                'qty' => $qty[$i],
                'rate' => $rate[$i],
                'freight' => $freight[$i],
                'gst' => $gst[$i],
                'unit' => $unit[$i]
            ];
        }

        $db = \Config\Database::connect();
        $builder = $db->table('outward_items');
        $builder->insertBatch($data2);
        return redirect()->to('/add_outward');
    }

    public function view()
    {
        $model = new OutModel();
        $data = [
            'outward' => $model->findAll()
        ];
        return view('view_out',$data);
    }

    public function delete($id)
    {
        $model = new OutModel();
        if ($model->where('id',$id)->delete()) {
            $db = \Config\Database::connect();
            $builder = $db->table('outward_items');
            $builder->where('id',$id)->delete();
        }
        return redirect()->to('/view_outward');
    }

    public function edit($id)
    {
        $model = new OutModel();
        $data = [
            'outward' => $model->where('id',$id)->find()
        ];

        return view('edit_out',$data);
    }

    public function update()
    {
        helper('form');
        $id = $this->request->getPost('id');
        $data = [
            'customer' => $this->request->getPost('customer'),
            'po_no' => $this->request->getPost('po_no'),
            'po_date' => $this->request->getPost('po_date'),
            'invoice_date' => $this->request->getPost('invoice_date')
        ];

        $model = new OutModel();
        $model->update($id,$data);
        return redirect()->to('/view_outward');
    }

    public function view_products($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('outward_items');
        $items = $builder->where('id',$id)->get();
        $data = [
            'items' => $items->getResultArray()
        ];

        return view('view_out_prod',$data);
    }

    public function edit_product($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('outward_items');
        $product = $builder->where('item_id',$id)->get();
        $data = [
            'product' => $product->getResultArray()
        ];

        return view('edit_OutProd',$data);
    }

    public function update_product()
    {
        helper('form');
        $id = $this->request->getPost('id');
        $item_id = $this->request->getPost('item_id');
        $data = [
            'product' => $this->request->getPost('prod'),
            'qty' => $this->request->getPost('qty'),
            'rate' => $this->request->getPost('rate'),
            'freight' => $this->request->getPost('freight'),
            'gst' => $this->request->getPost('gst'),
            'unit' => $this->request->getPost('unit'),
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('outward_items');
        $builder->update($data,['item_id' => $item_id]);
        return redirect()->to('/view_outward_products/'.$id);
    }

    public function delete_product($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('outward_items');
        $info = $builder->where('item_id',$id)->get();
        $rd2 = $info->getResultArray();
        $rd = $rd2[0]['id'];
        $builder->delete(['item_id' => $id]);
        return redirect()->to('/view_outward_products/'.$rd);
    }

    public function invoice($id)
    {
        $outward_model = new OutModel();
        $outward = $outward_model->where('id',$id)->findAll();
        $name = $outward[0]['customer'];
        $vendor_model = new CModel();
        $vendor = $vendor_model->where('name',$name)->findAll();
        $db = \Config\Database::connect();
        $builder = $db->table('outward_items');
        $items = $builder->where('id',$id)->get();
        $data = [
            'outward' => $outward_model->where('id',$id)->findAll(),
            'customer' => $vendor,
            'items' => $items->getResultArray()
        ];
        // print_r($data);
        return view('out_invoice',$data);
    }
}
