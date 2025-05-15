<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\CModel;
use App\Models\VModel;
use App\Models\PModel;
use App\Models\InModel;
use App\Models\OutModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $cmodel = new CModel();
        $pmodel = new PModel();
        $in_model = new InModel();
        $out_model = new OutModel();
        $data = [
            'customers' => $cmodel->countAllResults(),
            'products' => $pmodel->countAllResults(),
            'inward' => $in_model->countAllResults(),
            'outward' => $out_model->countAllResults()
        ];
        return view('dash',$data);
    }

    public function summary()
    {
        $db = \Config\Database::connect();
        $inward = $db->table('inward_items');
        $outward = $db->table('outward_items');
        $products = $inward->select('product')->groupBy('product')->get();
        $inward_summary = $inward->selectSum('qty')->groupBy('product')->get();
        $outward_summary = $outward->selectSum('qty')->groupBy('product')->get();
        $data = [
            'products' => $products->getResultArray(),
            'stock' => $inward_summary->getResultArray(),
            'sold' => $outward_summary->getResultArray()
        ];

        return view('summary',$data);

    }

    public function reportin()
    {
        $vmodel = new VModel();
        $data = [
            'vendors' => $vmodel->findColumn('name')
        ];
        return view('reportInw',$data);
    }

    public function reportout()
    {
        $cmodel = new CModel();
        $data = [
            'customers' => $cmodel->findColumn('name')
        ];
        return view('reportOut',$data);
    }

    public function convert()
    {
        return view('/test');
    }
}
