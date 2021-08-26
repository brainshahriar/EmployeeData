<?php


namespace App\Controllers;
use App\Models\Employee;
class EmployeeController extends BaseController
{
	public function index()
	{
        $employee = new Employee();
        $data['employee']=$employee->findAll();
		return view('employee/index',$data);
	}
    public function add()
    {
        return view('employee/add');
    }
    public function store()
    {
        
            $employee = new Employee();
            $data = [
               'first name'=>$this->request->getPost('first name'),
               'last name'=>$this->request->getPost('last name'),
               'phone'=>$this->request->getPost('phone'),
               'email'=>$this->request->getPost('email'),
               'designation'=>$this->request->getPost('designation')
            ];
            $employee->save($data);
            return redirect()->to(base_url('employee'))->with('status','Employee Inserted Successfully') ;
        
    }
}
?>