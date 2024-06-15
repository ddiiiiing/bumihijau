<?php

// File: app/Controllers/Donation.php

namespace App\Controllers;

use App\Models\DonationModel;
use App\Models\TreeModel;
use App\Models\LocationModel;

class Donation extends BaseController
{
    public function create()
    {
        $treeModel = new TreeModel();
        $locationModel = new LocationModel();

        $data['trees'] = $treeModel->findAll();
        $data['locations'] = $locationModel->findAll();

        return view('donations/create', $data);
    }

    public function calculateTotal()
    {
        $treeModel = new TreeModel();
        $locationModel = new LocationModel();

        $treeId = $this->request->getPost('tree_id');
        $locationId = $this->request->getPost('location_id');
        $quantity = $this->request->getPost('quantity');

        $tree = $treeModel->find($treeId);
        $location = $locationModel->find($locationId);

        $totalPrice = $tree['price'] * $location['price_multiplier'] * $quantity;

        return $this->response->setJSON(['totalPrice' => $totalPrice]);
    }

    public function store()
    {
        $donationModel = new DonationModel();

        $data = [
            'user_id' => session()->get('user')['id'],
            'tree_id' => $this->request->getPost('tree_id'),
            'location_id' => $this->request->getPost('location_id'),
            'amount' => $this->request->getPost('amount'),
            'payment_method' => $this->request->getPost('payment_method'),
            'quantity' => $this->request->getPost('quantity')
        ];

        $donationModel->insert($data);

        return redirect()->to('/donations/success');
    }

    public function success()
    {
        return view('donations/success');
    }
}