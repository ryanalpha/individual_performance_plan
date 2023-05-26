<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Relation_MidYear extends Model
{
    public function getMidYear()
    {
         return $this->db->table('meta_task')
         ->join('mid_year','mid_year.id_mid_year=meta_task.id_mid_year')
         ->get()->getResultArray();  
    }
}
