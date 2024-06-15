<?php

namespace App\Controllers;

use App\Models\TreeModel;
use App\Models\LocationModel;

class Info extends BaseController
{
    public function trees()
    {
        $treeModel = new TreeModel();
        $data['trees'] = $treeModel->findAll();
        return view('info/trees', $data);
    }

    public function locations()
    {
        $locationModel = new LocationModel();
        $data['locations'] = $locationModel->findAll();
        return view('info/locations', $data);
    }
}