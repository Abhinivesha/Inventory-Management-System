<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\VModel;

class Vendor extends BaseController
{
    public function index()
    {
        return view('add_vendor');
    }

    public function add()
    {
        helper('form');
        $data = [
            'name' => $this->request->getPost('name'),
            'address' => $this->request->getPost('address'),
            'contact_person' => $this->request->getPost('contact_person'),
            'number' => $this->request->getPost('number'),
            'email' => $this->request->getPost('email'),
            'gst_no' => $this->request->getPost('gst_no'),
        ];
        
        $model = new VModel();
        $model->insert($data);
        sleep(2);
        return redirect()->to('/add_vendor');
    }

    public function view()
    {
        $model = new VModel();
        $data = [
            'vendors' => $model->findAll()
        ];

        return view('view_vendor',$data);
    }

    public function edit($id)
    {
        $model = new VModel();
        $data = [
            'vendor' => $model->where('id',$id)->findAll()
        ];

        return view('edit_vendor',$data);
    }

    public function update()
    {
        helper('form');
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'address' => $this->request->getPost('address'),
            'contact_person' => $this->request->getPost('contact_person'),
            'number' => $this->request->getPost('number'),
            'email' => $this->request->getPost('email'),
            'gst_no' => $this->request->getPost('gst_no'),
        ];

        $model = new VModel();
        $model->update($id,$data);
        return redirect()->to('/view_vendor');

    }

    public function delete($id)
    {
        $model = new VModel();
        $model->where('id',$id)->delete();
        return redirect()->to('/view_vendor');
    }
}
