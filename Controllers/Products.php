<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PModel;

class Products extends BaseController
{
    public function index()
    {
        return view('addprod');
    }

    public function add()
    {
        helper('form');
        $data = [
            'name' => $this->request->getPost('name'),
            'partcode' => $this->request->getPost('partcode'),
            'unit' => $this->request->getPost('gst')
        ];

        $model = new PModel;
        $model->insert($data);
        return redirect()->to('/view_product');
    }

    public function view()
    {
        $model = new PModel();
        $data = [
            'items' => $model->findAll()
        ];
        return view('view_prod',$data);
    }

    public function edit($id)
    {
        $model = new PModel();
        $data = [
            'product' => $model->where('id',$id)->find()
        ];
        return view('edit_Product',$data);
    }

    public function update()
    {
        $model = new PModel();
        helper('form');
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'partcode' => $this->request->getPost('partcode'),
            'unit' => $this->request->getPost('unit')
        ];
        // print_r($data);
        $model->update($id,$data);
        return redirect()->to('/view_product');
    }

    public function delete($id)
    {
        $model = new PModel();
        $model->delete($id);
        return redirect()->to('/view_product');
    }
}
