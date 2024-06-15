<?php

namespace App\Controllers;

use App\Models\TreeModel;
use App\Models\LocationModel;

class Home extends BaseController
{
    public function index()
    {
        $treeModel = new TreeModel();
        $locationModel = new LocationModel();

        $data['trees'] = $treeModel->findAll();
        $data['locations'] = $locationModel->findAll();

        return view('welcome_message', $data);
    }
}
