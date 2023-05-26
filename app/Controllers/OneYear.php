<?php
 
namespace App\Controllers;
 
use App\Models\OneYearModel;
 
class OneYear extends BaseController
{
    protected $one_year;
 
    function __construct()
    {
        $this->one_year = new OneYearModel();
    }
 
    public function index()
    {
        $data['one_year'] = $this->one_year->findAll();
        return view('astra/one_year_result', $data);
    }
}