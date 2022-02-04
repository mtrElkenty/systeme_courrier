<?php

/**
 * Admin Controller Class
 */
class Admin extends Controller
{
	private $role;

	function __construct()
	{
		$this -> courrier = $this -> model('CourrierModel');
		$this -> employee = $this -> model('EmployeeModel');
		$this -> user = $this -> model('UserModel');
		$this -> role = $this -> model('RoleModel');
	}

	public function index($param = "")
	{
		// $employees = $this -> employee -> getAll();
		
		// Returning The Admin View:
		$this -> view('admin', ['title' => 'Admin']);
	}
}
