<?php

/**
 * User Controller Class
 */
class user extends Controller
{
	private $user;

	function __construct()
	{
		$this -> user = $this -> model('UserModel');
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
		// Getting All Users
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

	public function addUser()
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

	public function changeUserPassword()
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
