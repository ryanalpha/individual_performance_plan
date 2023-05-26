<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectManagementMidYear extends Model
{
    protected $table = "pm_mid_year";
    protected $primaryKey = "id_pm_mid_year";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_pm_mid_year', 'commitment', 'delegating', 'coaching', 'developing', 'avg_mid_year'];
}

