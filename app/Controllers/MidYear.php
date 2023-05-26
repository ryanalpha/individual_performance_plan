<?php
 
namespace App\Controllers;
 
use App\Models\MidYearModel;
 
class MidYear extends BaseController
{
    protected $mid_year;
 
    function __construct()
    {
        $this->mid_year = new MidYearModel();
    }
 
    public function index()
    {
        $data['mid_year'] = $this->mid_year->findAll();
        return view('astra/mid_year_result', $data);
    }
}