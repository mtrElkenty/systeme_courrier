<?php

/**
 * User Model Class
 */
class User extends Model
{
	protected $id;
	protected $employee_id;
	protected $username;
	protected $password;
	protected $role_id;
	protected $created_at;

	function __construct()
	{
		parent::__construct();
	}

	public function set($employee_id, $username, $password, $role_id)
	{
		$this -> employee_id = $employee_id;
		$this -> username = $username;
		$this -> password = $password;
		$this -> role_id = $role_id;
	}

	public function authenticate($username, $password)
	{
		// 1. Sanitise Data:
		$username = htmlspecialchars($username);
		$password = htmlspecialchars($password);

		// 2. Hash Password Before Authentication:
		$password_hash = hash("sha256", $password);

		// 3. Authenticating:
		$query = 'SELECT id, employee_id, username, role_id, created_at FROM users WHERE username = ? AND password = ? LIMIT 1';
		$statement = $this -> connection -> prepare($query);
		$statement -> bind_param('ss', $username, $password_hash);
		$statement -> execute();
		$result = $statement -> get_result();

		// 4. Returning Success Sessage And User Data If Found:
		if (mysqli_num_rows($result) > 0) {
			$user = array($result -> fetch_assoc());

			$res = array('ok' => true, 'message' => 'Connectee Avec Succee', 'user' => $user);

			session_start();
			$_SESSION['user'] = json_encode($user);
			
			header('Content-Type: application/json');
			echo json_encode($res);
			exit();
		}

		// 5. Returning User Not Found Error
		$res = array('ok' => false, 'error' => 'Username ou Password Incorrect.');

		header('Content-Type: application/json');
		echo json_encode($res);
		exit();
	}

	public function insert()
	{
		// 1. Sanitise Data:
		$employee_id = htmlspecialchars($this -> employee_id);
		$username = htmlspecialchars($this -> username);
		$password = htmlspecialchars($this -> password);
		$role_id = htmlspecialchars($this -> role_id);

		// 2. Check if Employee Id Is Valid:
		$query = 'SELECT * FROM employees WHERE id = ? LIMIT 1';
		$statement = $this -> connection -> prepare($query);
		$statement -> bind_param('i', $employee_id);
		$statement -> execute();

		if (mysqli_num_rows($statement -> get_result()) < 1) {
            $res = array('ok' => false, 'error' => 'Employee Introuvable. Essayez Avec un autre.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

		// 3. Check if username already exists:
        if ($this -> getCountBy("username", $username) > 0) {
            $res = array('ok' => false, 'error' => 'Username Existe Deja. Entrez un autre.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

		// 4. Check if employee already exists:
        if ($this -> getCountBy("employee_id", $employee_id) > 0) {
            $res = array('ok' => false, 'error' => 'Employee a deja un compte.
			<br />
			Essayez avec un autre.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

		// 5. Hash Password:
		$password_hash = hash("sha256", $password);

		// 6. Insert 
		$query = 'INSERT INTO users (employee_id, username, password, role_id) VALUES (?, ?, ?, ?)';
		$statement = $this -> connection -> prepare($query);
		$statement -> bind_param('issi', $employee_id, $username, $password_hash, $role_id);

		// 7. Executing:
		if($statement -> execute()) {
			$res = array('ok' => true, 'message' => 'Utilisateur Ajoutee A Succee');
			header('Content-Type: application/json');
			echo json_encode($res);
			exit();
		}

		// 8. Falling To Default Error:
		$res = array('ok' => false, 'error' => 'Une Erruer c\'est produite au niveau d\'insertion. Verifiez votre connection');
		header('Content-Type: application/json');
		echo json_encode($res);
		exit();
	}

	public function getById($id)
	{
		$query = "SELECT users.id, username, full_name, role, users.created_at, employee_id, role_id FROM users
        JOIN employees ON users.employee_id = employees.id
        JOIN roles ON users.role_id = roles.id
        WHERE users.id = ? LIMIT 1";
        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('i', $id);
        $statement-> execute();
        $result = $statement -> get_result();
        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'utilisateurs' => $result -> fetch_assoc());

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        } else {
            $res = array('ok' => false, 'error' => 'Aucun users avec cet nom.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }
	}

	public function getByUsernameLike($username)
	{
		$query = "SELECT users.id, username, full_name, role, users.created_at, employee_id, role_id FROM users
        JOIN employees ON users.employee_id = employees.id
        JOIN roles ON users.role_id = roles.id
        WHERE username LIKE ?";
        $statement = $this -> connection -> prepare($query);
        $key = "%" . htmlspecialchars($username) . "%";
        $statement -> bind_param('s', $key);
        $statement-> execute();
        $result = $statement -> get_result();

        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'utilisateurs' => $result -> fetch_all());

            header('Content-Type: application/json');
            echo json_encode($res);
        } else {
            $res = array('ok' => false, 'error' => 'Aucun utilisateur avec cet username.');

            header('Content-Type: application/json');
            echo json_encode($res);
			exit();
        }
	}

	public function getByEmployeeFullNameLike($full_name)
	{
		$query = "SELECT users.id, username, full_name, role, users.created_at, employee_id, role_id FROM users
        JOIN employees ON users.employee_id = employees.id
        JOIN roles ON users.role_id = roles.id
        WHERE employees.full_name LIKE ?";
        $statement = $this -> connection -> prepare($query);
        $key = "%" . htmlspecialchars($full_name) . "%";
        $statement -> bind_param('s', $key);
        $statement-> execute();
        $result = $statement -> get_result();

        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'utilisateurs' => $result -> fetch_all());

            header('Content-Type: application/json');
            echo json_encode($res);
        } else {
            $res = array('ok' => false, 'error' => 'Aucun utilisateur avec cet nom.');

            header('Content-Type: application/json');
            echo json_encode($res);
			exit();
        }
	}

	public function getByRole($role)
	{
		$query = "SELECT users.id, username, full_name, role, users.created_at, employee_id, role_id FROM users
        JOIN employees ON users.employee_id = employees.id
        JOIN roles ON users.role_id = roles.id
        WHERE roles.role LIKE ?";
        $statement = $this -> connection -> prepare($query);
        $key = "%" . htmlspecialchars($role) . "%";
        $statement -> bind_param('s', $key);
        $statement-> execute();
        $result = $statement -> get_result();

        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'utilisateurs' => $result -> fetch_all());

            header('Content-Type: application/json');
            echo json_encode($res);
			exit();
        } else {
            $res = array('ok' => false, 'error' => 'Aucun utilisateur avec le role '.$role);

            header('Content-Type: application/json');
            echo json_encode($res);
			exit();
        }
	}

	public function getAll()
	{
        $query = 'SELECT users.id, username, full_name, role, users.created_at, employee_id, role_id FROM users
        JOIN employees ON users.employee_id = employees.id
        JOIN roles ON users.role_id = roles.id';
        $result = $this -> connection -> query($query);

        if ($result) {
            $res = array('ok' => true, 'utilisateurs' => $result -> fetch_all());

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }
	}

	public function update($id, $employee_id, $username, $role_id)
	{
        // 1. Sanitising Data:
        $employee_id = htmlspecialchars($employee_id);
        $username = htmlspecialchars($username);
        $role_id = htmlspecialchars($role_id);

        // 2. Checking if New Employee Already Exist:
        if ($this -> getCountBy("employee_id", $employee_id) > 0) {
            $res = array('ok' => false, 'error' => 'EMployee a deja un compte.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 3. Checking If New Username Already Existe:
        if ($this -> getCountBy("username", $username) > 0) {
            $res = array('ok' => false, 'error' => 'Username Existe Deja.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 4. Updating:
        $query = 'UPDATE users SET employee_id = ?, username = ?, role_id = ? WHERE id = ?';
        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('isii', $employee_id, $username, $role_id, $id);

        // 5. Executing:
        if($statement -> execute()) {
            $res = array('ok' => true, 'message' => 'Utilisateur Modifie Avec Succee');
            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 7. Falling To Server Connection Error:
        $res = array('ok' => false, 'error' => 'Une Erruer c\'est produite au niveau d\'insertion. Verifiez votre connection');
        header('Content-Type: application/json');
        echo json_encode($res);
        exit();
	}

    public function changePassword($id, $password)
    {
        // 1. Sanitising Data:
        $id = htmlspecialchars($id);
        $password = htmlspecialchars($password);

        // 2. Hassing New Password
		$password_hash = hash("sha256", $password);

        // 4. Updating:
        $query = 'UPDATE users SET password = ? WHERE id = ?';
        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('si', $password_hash, $id);

        // 5. Executing:
        if($statement -> execute()) {
            $res = array('ok' => true, 'message' => 'Password Modifie Avec Succee');
            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 7. Falling To Server Connection Error:
        $res = array('ok' => false, 'error' => 'Une Erruer c\'est produite au niveau d\'insertion. Verifiez votre connection');
        header('Content-Type: application/json');
        echo json_encode($res);
        exit();
    }

	public function delete($id)
	{
        // 1. Sanitising Data:
        $id = htmlspecialchars($id);

        // 2. Deleting:
        $query = "DELETE FROM users WHERE id = ?";
        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('i', $id);

        // 3. Executing:
        if($statement -> execute()) {
            $res = array('ok' => true, 'message' => 'Utilisateur Supprimee Avec Succee');
            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 4. Falling To Server Connection Error:
        $res = array('ok' => false, 'error' => 'Une Erruer c\'est produite au niveau d\'insertion. Verifiez votre connection');
        header('Content-Type: application/json');
        echo json_encode($res);
        exit();
	}

    public function getCountBy($attr, $value)
    {
        $query = "SELECT * FROM users WHERE ? = ?";
        $statement = $this -> connection -> prepare($query);
        strpos($attr, 'id')
            ? $statement -> bind_param('si', $attr, $value)
            : $statement -> bind_param('ss', $attr, $value);
        $statement-> execute();
        $result = $statement -> get_result();
        return mysqli_num_rows($result);
    }
}
