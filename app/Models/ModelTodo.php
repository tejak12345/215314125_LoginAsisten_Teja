<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTodo extends Model
{
    protected $table = 'todolist';
    protected $primaryKey = 'idkegiatan';
    protected $allowedFields = ['kegiatan'];
}
