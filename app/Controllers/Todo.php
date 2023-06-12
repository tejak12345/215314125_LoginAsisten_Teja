<?php

namespace App\Controllers;

use App\Models\ModelTodo;

class Todo extends BaseController
{
    protected $todoModel;
    public function __construct()
    {
        $this->todoModel = new ModelTodo();
    }
    public function index()
    {
        $todoModel = new ModelTodo();
        $todo = $todoModel->findAll();
        $data = [
            'title' => 'Aplikasi Todo-List',
            'todo' => $todo
        ];

        return view('/todo/ViewTodo', $data);
    }
    public function save()
    {
        $todoModel = new ModelTodo();
        $this->todoModel->save([
            'kegiatan' => $this->request->getVar('kegiatan')
        ]);
        return redirect()->to('/Todo');
    }
}
