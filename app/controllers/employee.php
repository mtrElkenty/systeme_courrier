<?php

/**
 * Employee Controller Class
 */
class Employee extends Controller
{
	private $employee;

	function __construct()
	{
		$this -> employee = $this -> model('EmployeeModel');
	}

	public function index($param = "")
	{
		// $employees = $this -> employee -> getAll();
		
		// Returning The Employee View:
		$this -> view('employee', ['title' => 'Employee']);
	}

	// Employee Controllers
	public function employees()
	{
		// 1. Getting All The Employees:
		$employees = $this -> employee -> getAll();

		// 2. Returning The View:
		$this -> view('employees', ['title' => 'Employees', 'employees' => $employees]);
	}

	public function getAllEmployees()
	{
		// Getting All THe Employees
		$this -> employee -> getAll();
	}

	public function getEmployeesBy()
	{
		// 1. Getting Data:
		$by = $_GET['by'];
		$keyword = $_GET['keyword'];

		// 2. Matching Search By Case
		switch ($by) {
			case 'id':
				$this -> employee -> getById($keyword);
				break;
			case 'full_name':
				$this -> employee -> getByFullNameLike($keyword);
				break;
			case 'phone':
				$this -> employee -> getByPhoneLike($keyword);
				break;
			case 'email':
				$this -> employee -> getByEmailLike($keyword);
				break;
			case 'job_title':
				$this -> employee -> getByJobTitleLike($keyword);
				break;
			
			default:
	            $res = array('ok' => false, 'error' => 'Parametres de Recerche Invalides.');

	            header('Content-Type: application/json');
	            echo json_encode($res);
	            exit();
				break;
		}
	}

	public function addEmployee()
	{
        // 1. Validating Data:
        if (!isset($_POST['full_name']) || !isset($_POST['phone']) || !isset($_POST['email']) || !isset($_POST['job_title'])) {
            $res = array('ok' => false, 'error' => 'Tous Les Champs Sont Obliguatoires.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        if (empty($_POST['full_name']) || empty($_POST['phone']) || empty($_POST['job_title'])){
            $res = array('ok' => false, 'error' => 'Tous Les Champs Sont Obliguatoires.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 2. Getting Data:
        $full_name = $_POST['full_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $job_title = $_POST['job_title'];

        // 3. Setting Employee:
        $this -> employee -> set($full_name, $phone, $email, $job_title);

        // 4. Inserting Employee:
        $this -> employee -> insert();
	}

	public function editEmployee()
	{
        // 1. Validating Data:
        if (!isset($_POST['id']) || !isset($_POST['full_name']) || !isset($_POST['phone']) || !isset($_POST['email']) || !isset($_POST['job_title'])) {
            $res = array('ok' => false, 'error' => 'Tous Les Champs Sont Obliguatoires.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        if (empty($_POST['id']) || empty($_POST['full_name']) || empty($_POST['phone']) || empty($_POST['job_title'])){
            $res = array('ok' => false, 'error' => 'Tous Les Champs Sont Obliguatoires.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 2. Getting Data:
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $job_title = $_POST['job_title'];

        // 3. Updating Employee:
        $this -> employee -> update($id, $full_name, $phone, $email, $job_title);
	}

	public function employeeDelete()
	{
        // 1. Validating Data:
        if (!isset($_GET['id'])) {
            $res = array('ok' => false, 'error' => 'L\'id est Obliguatoires.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        if (empty($_GET['id'])){
            $res = array('ok' => false, 'error' => 'Tous Les Champs Sont Obliguatoires.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

		// 2. Getting Employee Id:
		$id = $_GET['id'];

		// 3. Deleteting Employee:
		$this -> employee -> delete($id);
	}
}