<?php
namespace App\Controllers;

use App\Models\TreeModel;

class Tree extends BaseController
{
    public function index()
    {
        $treeModel = new TreeModel();
        $data['trees'] = $treeModel->findAll();
        return view('trees/index', $data);
    }

    public function create()
    {
        return view('trees/create');
    }

    public function store()
    {
        $treeModel = new TreeModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price')
        ];

        $treeModel->insert($data);

        return redirect()->to('/trees');
    }

    public function edit($id)
    {
        $treeModel = new TreeModel();
        $data['tree'] = $treeModel->find($id);
        return view('trees/edit', $data);
    }

    public function update($id)
    {
        $treeModel = new TreeModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price')
        ];

        $treeModel->update($id, $data);

        return redirect()->to('/trees');
    }

    public function delete($id)
    {
        $treeModel = new TreeModel();
        $treeModel->delete($id);

        return redirect()->to('/trees');
    }
}

