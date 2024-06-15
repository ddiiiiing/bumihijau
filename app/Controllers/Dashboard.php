<?php

// File: app/Controllers/Dashboard.php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard/index');
    }
}
