<?php

namespace App\Models;

use CodeIgniter\Model;

class Task_Header_Model extends Model
{
    protected $table = "task_header";
    protected $primaryKey = "id_task_header";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_task_header', 'name_employee', 'department', 'division', 'company', 'date_review', 'supervisor_employee'];
}

