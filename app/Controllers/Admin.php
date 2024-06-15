<?php

namespace App\Controllers;

use App\Models\TreeModel;
use App\Models\LocationModel;
use App\Models\DonationModel;

class Admin extends BaseController
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    // Pohon CRUD
    public function trees()
    {
        $treeModel = new TreeModel();
        $data['trees'] = $treeModel->findAll();
        return view('admin/trees', $data);
    }

    public function addTree()
    {
        return view('admin/add_tree');
    }

    public function storeTree()
    {
        $treeModel = new TreeModel();
        
        // Handle the file upload
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('public/images', $imageName);
        } else {
            return redirect()->back()->with('error', 'File upload failed');
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'image' => $imageName
        ];

        $treeModel->insert($data);

        return redirect()->to('/admin/trees')->with('message', 'Tree added successfully');
    }

    public function editTree($id)
    {
        $treeModel = new TreeModel();
        $data['tree'] = $treeModel->find($id);
        return view('admin/edit_tree', $data);
    }

    public function updateTree($id)
    {
        $treeModel = new TreeModel();

        // Handle the file upload
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('public/images', $imageName);
        } else {
            $imageName = $this->request->getPost('old_image');
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'image' => $imageName
        ];

        $treeModel->update($id, $data);

        return redirect()->to('/admin/trees')->with('message', 'Tree updated successfully');
    }

    public function deleteTree($id)
    {
        $treeModel = new TreeModel();
        $treeModel->delete($id);
        return redirect()->to('/admin/trees')->with('message', 'Tree deleted successfully');
    }

    // Lokasi CRUD
    public function locations()
    {
        $locationModel = new LocationModel();
        $data['locations'] = $locationModel->findAll();
        return view('admin/locations', $data);
    }

    public function addLocation()
    {
        return view('admin/add_location');
    }

    public function storeLocation()
    {
        $locationModel = new LocationModel();

        // Handle the file upload
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('public/images', $imageName);
        } else {
            return redirect()->back()->with('error', 'File upload failed');
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price_multiplier' => $this->request->getPost('price_multiplier'),
            'image' => $imageName
        ];

        $locationModel->insert($data);

        return redirect()->to('/admin/locations')->with('message', 'Location added successfully');
    }

    public function editLocation($id)
    {
        $locationModel = new LocationModel();
        $data['location'] = $locationModel->find($id);
        return view('admin/edit_location', $data);
    }

    public function updateLocation($id)
    {
        $locationModel = new LocationModel();

        // Handle the file upload
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('public/images', $imageName);
        } else {
            $imageName = $this->request->getPost('old_image');
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price_multiplier' => $this->request->getPost('price_multiplier'),
            'image' => $imageName
        ];

        $locationModel->update($id, $data);

        return redirect()->to('/admin/locations')->with('message', 'Location updated successfully');
    }

    public function deleteLocation($id)
    {
        $locationModel = new LocationModel();
        $locationModel->delete($id);
        return redirect()->to('/admin/locations')->with('message', 'Location deleted successfully');
    }

    public function donations()
    {
        $donationModel = new DonationModel();
        $data['donations'] = $donationModel->findAll();
        return view('admin/donations', $data);
    }
}
