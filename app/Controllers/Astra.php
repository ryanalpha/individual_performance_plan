<?php

namespace App\Controllers;

use App\Models\AstraModel;
use App\Models\Model_Relation_MidYear;
use App\Models\Task_Header_Model;
use App\Models\ProjectManagementMidYear;

class Astra extends BaseController
{
    protected $meta_task;
    protected $task_header;
    protected $pm_mid_year;

    function __construct()
    {
        $this->meta_task = new AstraModel();
        $this->task_header = new Task_Header_Model();
    }

    public function index()
    {
        $data['meta_task'] = $this->meta_task->findAll();
        return view('astra/index', $data);
    }

    public function index_mid_year()
    {
        $model = new Model_Relation_MidYear();
        $data['meta_task'] = $model->getTask();
        echo view('view_task', $data);
    }

    public function header_task()
    {
        $data['task_header'] = $this->task_header->findAll();
        return view('astra/index', $data);
    }

    public function create()
    {
        return view('astra/create');
    }

    public function login()
    {
        return view('astra/login_view');
    }

    public function coach()
    {
        return view('astra/coach');
    }

    public function strength_weakness()
    {
        return view('astra/strength_weakness');
    }

    public function summary()
    {
        return view('astra/summary');
    }

    public function mid_year_result()
    {
        return view('astra/mid_year_result');
    }

    public function one_year_result()
    {
        return view('astra/one_year_result');
    }

    public function one_result()
    {
        return view('astra/one_result');
    }

    public function result_coach()
    {
        return view('astra/result_coach');
    }

    function delete($id)
    {
        $dataMetaTask = $this->meta_task->find($id);
        if (empty($dataMetaTask)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Does Not Found !');
        }
        $this->meta_task->delete($id);
        session()->setFlashdata('message', 'Delete Data Success');
        return redirect()->to('/astra');
    }

    public function store()
    {
        if (!$this->validate([
            'program' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'weight' => [
                'rules' => 'required|greater_than_equal_to[0]|less_than_equal_to[100]',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'target_mid_year' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
            'target_one_year' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'due_date' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->meta_task->insert([
            'program' => $this->request->getVar('program'),
            'weight' => $this->request->getVar('weight'),
            'target_mid_year' => $this->request->getVar('target_mid_year'),
            'target_one_year' => $this->request->getVar('target_one_year'),
            'due_date' => $this->request->getVar('due_date')
        ]);
        session()->setFlashdata('message', 'Add Data Success');
        return redirect()->to('/astra');
    }


}
