<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\InModel;
use App\Models\VModel;
use App\Models\PModel;

class Inward extends BaseController
{
    public function index()
    {
        $vendor_model = new VModel();
        $product_model = new PModel();
        $data = [
            'vendor' => $vendor_model->findAll(),
            'products' => $product_model->findAll(),
        ];
        return view('inwardstockmg',$data);
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
        // return view('prd');
    }

    public function add()
    {
        helper('form');
        $data = [
            'vendor' => $this->request->getPost('vendor'),
            'po_no' => $this->request->getPost('po_no'),
            'po_date' => $this->request->getPost('po_date'),
            'invoice_date' => $this->request->getPost('invoice_date')
        ];
        
        $model = new InModel();
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
        $builder = $db->table('inward_items');
        $builder->insertBatch($data2);
        sleep(2);
        return redirect()->to('/add_inward');
    }

    public function view()
    {
        $model = new InModel();
        $data = [
            'inward' => $model->findAll()
        ];
        return view('view_inw',$data);
    }

    public function delete($id)
    {
        $model = new InModel();
        if ($model->where('id',$id)->delete()) {
            $db = \Config\Database::connect();
            $builder = $db->table('inward_items');
            $builder->where('id',$id)->delete();
        }
        return redirect()->to('/view_inward');
    }

    public function edit($id)
    {
        $model = new InModel();
        $data = [
            'inward' => $model->where('id',$id)->find()
        ];

        return view('edit_inward',$data);
    }

    public function update()
    {
        helper('form');
        $id = $this->request->getPost('id');
        $data = [
            'vendor' => $this->request->getPost('vendor'),
            'po_no' => $this->request->getPost('po_no'),
            'po_date' => $this->request->getPost('po_date'),
            'invoice_date' => $this->request->getPost('invoice_date')
        ];

        $model = new InModel();
        $model->update($id,$data);
        return redirect()->to('/view_inward');
    }

    public function view_products($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('inward_items');
        $items = $builder->where('id',$id)->get();
        $data = [
            'items' => $items->getResultArray()
        ];

        return view('view_inwprod',$data);
    }

    public function edit_product($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('inward_items');
        $product = $builder->where('item_id',$id)->get();
        $data = [
            'product' => $product->getResultArray()
        ];

        return view('edit_InwProd',$data);
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
        $builder = $db->table('inward_items');
        $builder->update($data,['item_id' => $item_id]);
        return redirect()->to('/view_inward_products/'.$id);
    }

    public function delete_product($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('inward_items');
        $info = $builder->where('item_id',$id)->get();
        $rd2 = $info->getResultArray();
        $rd = $rd2[0]['id'];
        $builder->delete(['item_id' => $id]);
        return redirect()->to('/view_inward_products/'.$rd);
    }

    public function invoice($id)
    {
        $inward_model = new InModel();
        $inward = $inward_model->where('id',$id)->findAll();
        $name = $inward[0]['vendor'];
        $vendor_model = new VModel();
        $vendor = $vendor_model->where('name',$name)->findAll();
        $db = \Config\Database::connect();
        $builder = $db->table('inward_items');
        $items = $builder->where('id',$id)->get();
        $data = [
            'inward' => $inward_model->where('id',$id)->findAll(),
            'customer' => $vendor,
            'items' => $items->getResultArray()
        ];
        // print_r($data);
        return view('invoice.php',$data);
    }
}
