<?php

namespace App\Models;

use CodeIgniter\Model;

class MidYearModel extends Model
{
    protected $table = "mid_year";
    protected $primaryKey = "id_mid_year";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_mid_year', 'mid_year_achievement', 'score_mid_year','total_mid_year'];
}
