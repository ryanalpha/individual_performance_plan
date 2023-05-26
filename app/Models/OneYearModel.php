
<?php

namespace App\Models;

use CodeIgniter\Model;

class OneYearModel extends Model
{
    protected $table = "one_year";
    protected $primaryKey = "id_one_year";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_one_year', 'one_year_achievement', 'score_one_year','total_one_year'];
}
