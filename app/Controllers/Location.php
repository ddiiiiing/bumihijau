<?php

// File: app/Controllers/Location.php

namespace App\Controllers;

use App\Models\LocationModel;

class Location extends BaseController
{
    public function index()
    {
        $locationModel = new LocationModel();
        $data['locations'] = $locationModel->findAll();
        return view('locations/index', $data);
    }

    public function create()
    {
        return view('locations/create');
    }

    public function store()
    {
        $locationModel = new LocationModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description')
        ];

        $locationModel->insert($data);

        return redirect()->to('/locations');
    }

    public function edit($id)
    {
        $locationModel = new LocationModel();
        $data['location'] = $locationModel->find($id);
        return view('locations/edit', $data);
    }

    public function update($id)
    {
        $locationModel = new LocationModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description')
        ];

        $locationModel->update($id, $data);

        return redirect()->to('/locations');
    }

    public function delete($id)
    {
        $locationModel = new LocationModel();
        $locationModel->delete($id);

        return redirect()->to('/locations');
    }
}