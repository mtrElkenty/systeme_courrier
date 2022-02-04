<?php

/**
 * Admin Controller Class
 */
class Admin extends Controller
{
	private $role;

	function __construct()
	{
		$this -> role = $this -> model('RoleModel');
	}

	public function index($param = "")
	{
		// $employees = $this -> employee -> getAll();
		
		// Returning The Admin View:
		$this -> view('admin', ['title' => 'Admin']);
	}

	public function getAllRoles()
	{
		// Get All Roles
		$this -> role -> getAll();
	}
}
