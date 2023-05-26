<?php

namespace App\Models;

use CodeIgniter\Model;

class AstraModel extends Model
{
    protected $table = "meta_task";
    protected $primaryKey = "id_task";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_task', 'id_mid_year', 'id_one_year', 'program', 'weight', 'target_mid_year', 'target_one_year', 'due_date'];
}

