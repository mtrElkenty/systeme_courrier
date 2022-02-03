<?php

/**
 * User Controller Class
 */
class User extends Controller
{
	private $user;

	function __construct()
	{
		$this -> user = $this -> model('User');
	}

	public function index($param = "")
	{
		// $employees = $this -> employee -> getAll();
		
		// Returning The User View:
		$this -> view('admin', ['title' => 'Users']);
	}

	// User Controllers
	public function users()
	{
		// 1. Getting All The Employees:
		$users = $this -> user -> getAll();

		// 2. Returning The View:
		$this -> view('admin/users', ['title' => 'Employees', 'users' => $users]);
	}

	public function getAllUsers()
	{
		// Getting All THe Users
		$this -> user -> getAll();
	}

	public function getUsersBy()
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
				$this -> user -> getByFullNameLike($keyword);
				break;
			case 'phone':
				$this -> user -> getByPhoneLike($keyword);
				break;
			case 'email':
				$this -> user -> getByEmailLike($keyword);
				break;
			case 'job_title':
				$this -> user -> getByJobTitleLike($keyword);
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

	public function editUser()
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

        // 3. Updating User:
        $this -> user -> update($id, $full_name, $phone, $email, $job_title);
	}

	public function userDelete()
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
}
