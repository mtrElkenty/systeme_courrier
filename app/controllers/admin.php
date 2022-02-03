<?php

/**
 * Admin Controller Class
 */
class Admin extends Controller
{
	private $courrier;
	private $employee;
	private $user;
	private $role;

	function __construct()
	{
		$this -> courrier = $this -> model('Courrier');
		$this -> employee = $this -> model('Employee');
		$this -> user = $this -> model('User');
		$this -> role = $this -> model('Role');
	}

	public function index($param = "")
	{
		// $employees = $this -> employee -> getAll();
		
		// Returning The Admin View:
		$this -> view('admin', ['title' => 'Admin']);
	}

	// Employee Controllers
	public function employees()
	{
		// 1. Getting All The Employees:
		$employees = $this -> employee -> getAll();

		// 2. Returning The View:
		$this -> view('admin/employees', ['title' => 'Employees', 'employees' => $employees]);
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

	// User Controllers
	public function users()
	{
		// 1. Getting All The Employees:
		$users = $this -> user -> getAll();

		// 2. Returning The View:
		$this -> view('admin/users', ['title' => 'Employees', 'users' => $users]);
	}

	public function getAllUtilisateurs()
	{
		// Getting All Users
		$this -> user -> getAll();
	}

	public function getUtilisateursBy()
	{
		// 1. Getting Data:
		$by = $_GET['by'];
		$keyword = $_GET['keyword'];

		// 2. Matching Search By Case
		switch ($by) {
			case 'id':
				$this -> user -> getById($keyword);
				break;
			case 'full_name':
				$this -> user -> getByEmployeeFullNameLike($keyword);
				break;
			case 'username':
				$this -> user -> getByUsernameLike($keyword);
				break;
			case 'role':
				$this -> user -> getByRole($keyword);
				break;
			
			default:
	            $res = array('ok' => false, 'error' => 'Parametres de Recerche Invalides.');

	            header('Content-Type: application/json');
	            echo json_encode($res);
	            exit();
				break;
		}
	}

	public function addUtilisateur()
	{
        // 1. Validating Data:
        if (!isset($_POST['employee_id']) || !isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['role_id'])) {
            $res = array('ok' => false, 'error' => 'Tous Les Champs Sont Obliguatoires.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        if (empty($_POST['employee_id']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['role_id'])){
            $res = array('ok' => false, 'error' => 'Tous Les Champs Sont Obliguatoires.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 2. Getting Data:
        $employee_id = $_POST['employee_id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role_id = $_POST['role_id'];

        // 3. Setting User:
        $this -> user -> set($employee_id, $username, $password, $role_id);

        // 4. Inserting User:
        $this -> user -> insert();
	}

	public function editUtilisateur()
	{
        // 1. Validating Data:
        if (!isset($_POST['id']) || !isset($_POST['employee_id']) || !isset($_POST['username']) || !isset($_POST['role_id'])) {
            $res = array('ok' => false, 'error' => 'Tous Les Champs Sont Obliguatoires.
			<br />
			Laissez Les Champs que vous ne desirez chancher comme ils sont.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        if (empty($_POST['id']) || empty($_POST['employee_id']) || empty($_POST['username']) || empty($_POST['role_id'])){
            $res = array('ok' => false, 'error' => 'Tous Les Champs Sont Obliguatoires.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 2. Getting Data:
        $id = $_POST['id'];
        $employee_id = $_POST['employee_id'];
        $username = $_POST['username'];
        $role_id = $_POST['role_id'];

        // 3. Updating User:
        $this -> user -> update($id, $employee_id, $username, $role_id);
	}

	public function changeUtilisateurPassword()
	{
        // 1. Validating Data:
        if (!isset($_POST['id']) || !isset($_POST['new-password'])) {
            $res = array('ok' => false, 'error' => 'Nouveau Password Est Obliguatoires.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        if (empty($_POST['id']) || empty($_POST['new-password'])){
            $res = array('ok' => false, 'error' => 'Nouveau Password Est Obliguatoires.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 2. Getting Data:
        $id = $_POST['id'];
        $password = $_POST['new-password'];

        // 3. Updating User:
        $this -> user -> changePassword($id, $password);
	}

	public function utilisateurDelete()
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

		// 2. Getting User Id:
		$id = $_GET['id'];

		// 3. Deleteting User:
		$this -> user -> delete($id);
	}

	//  Role Controllers
	public function getAllRoles()
	{
		// Getting All THe Roles
		$this -> role -> getAll();
	}

	// Courrier Controller
	public function addCourrier()
	{
        // 1. Validating Data:
        if (!isset($_POST['numero_inscription']) || !isset($_POST['designateur']) || !isset($_POST['destination']) || !isset($_POST['date_depart']) || !isset($_POST['date_arrive'])) {
            $res = array('ok' => false, 'error' => 'Tous Les Champs Sont Obliguatoires.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        if (empty($_POST['numero_inscription']) || empty($_POST['destination']) || empty($_POST['date_depart']) || empty($_POST['date_arrive'])){
            $res = array('ok' => false, 'error' => 'Tous Les Champs Sont Obliguatoires.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 2. Getting Data:
        $numero_inscription = $_POST['numero_inscription'];
        $designateur = $_POST['designateur'];
        $destination = $_POST['destination'];
        $date_depart = $_POST['date_depart'];
        $date_arrive = $_POST['date_arrive'];

		// Getting Courrier Id From Session:
		session_start();
		$employee = json_decode($_SESSION['user'])[0];
		$employee_obj_vars = get_object_vars($employee);
		$received_by_employee_id = $employee_obj_vars['employee_id'];

        // 3. Setting Courrier:
        $this -> courrier -> set($numero_inscription, $designateur, $destination, $date_depart, $date_arrive, $received_by_employee_id);

        // 4. Inserting Courrier:
        $this -> courrier -> insert();
	}

	public function getAllCourriers()
	{
		// Getting All Courriers
		$this -> courrier -> getAll();
	}

	public function getCourriersBy()
	{
		// 1. Getting Data:
		$by = $_GET['by'];
		$keyword = $_GET['keyword'];

		// 2. Matching Search By Case
		switch ($by) {
			case 'id':
				$this -> courrier -> getById($keyword);
				break;
			case 'numero_inscription':
				$this -> courrier -> getByNumeroInscription($keyword);
				break;
			case 'designateur':
				$this -> courrier -> getByDesignateur($keyword);
				break;
			case 'destination':
				$this -> courrier -> getByDestination($keyword);
				break;
			case 'date_depart':
				$this -> courrier -> getByDateDepart($keyword);
				break;
			case 'date_arrive':
				$this -> courrier -> getByDateArrive($keyword);
				break;
			case 'received_by_employee_id':
				$this -> courrier -> getByEmployeeFullName($keyword);
				break;
			
			default:
				$res = array('ok' => false, 'error' => 'Parametres de Recerche Invalides.');
				
				header('Content-Type: application/json');
				echo json_encode($res);
				exit();
				break;
		}
	}

	public function editCourrier()
	{
        // 1. Validating Data:
        if (!isset($_POST['id']) || !isset($_POST['numero_inscription']) || !isset($_POST['designateur']) || !isset($_POST['destination']) || !isset($_POST['date_depart']) || !isset($_POST['date_arrive'])) {
            $res = array('ok' => false, 'error' => 'Tous Les Champs Sont Obliguatoires.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        if (empty($_POST['id']) || empty($_POST['numero_inscription']) || empty($_POST['destination']) || empty($_POST['date_depart']) || empty($_POST['date_arrive'])){
            $res = array('ok' => false, 'error' => 'Tous Les Champs Sont Obliguatoires.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 2. Getting Data:
        $id = $_POST['id'];
        $numero_inscription = $_POST['numero_inscription'];
        $designateur = $_POST['designateur'];
        $destination = $_POST['destination'];
        $date_depart = $_POST['date_depart'];
        $date_arrive = $_POST['date_arrive'];

        // 3. Updating Courrier:
        $this -> courrier -> update($id, $numero_inscription, $designateur, $destination, $date_depart, $date_arrive);
	}
}
