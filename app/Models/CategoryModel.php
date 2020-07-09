<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table      = 'categories';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['title', 'parent_id'];

    protected $useTimestamps = false;
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}