<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CModel;

class Customers extends BaseController
{
    public function index()
    {
        return view('addcustomer');
    }

    public function add()
    {
        helper('fomr');
        $data = [
            'name' => $this->request->getPost('name'),
            'address' => $this->request->getPost('address'),
            'contact_person' => $this->request->getPost('contact_person'),
            'number' => $this->request->getPost('number'),
            'email' => $this->request->getPost('email'),
            'gst_no' => $this->request->getPost('gst_no')
        ];

        $model = new CModel();
        $model->insert($data);

        return redirect()->to('/add_customer');
    }

    public function view()
    {
        $model = new CModel();
        $data = [
            'customers' => $model->findAll()
        ];
        return view('view_customer',$data);
    }

    public function edit($id)
    {
        $model = new CModel();
        $data = [
            'customer' => $model->where('id',$id)->findAll()
        ];

        return view('edit_customer',$data);
    }

    public function update()
    {
        helper('form');
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('customer'),
            'address' => $this->request->getPost('address'),
            'contact_person' => $this->request->getPost('contact_person'),
            'number' => $this->request->getPost('number'),
            'email' => $this->request->getPost('email'),
            'gst_no' => $this->request->getPost('gst_no'),
        ];

        $model = new CModel();
        $model->update($id,$data);
        return redirect()->to('/view_customer');

    }

    public function delete($id)
    {
        $model = new CModel();
        $model->where('id',$id)->delete();
        return redirect()->to('/view_customer');
    }
}
