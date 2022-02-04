<?php

/**
 * EMployee Model Class
 */
class EmployeeModel extends Model
{
	protected $id;
	protected $full_name;
	protected $phone;
	protected $email;
    protected $job_title;
	protected $created_at;

	function __construct()
	{
		parent::__construct();
	}

	public function set($full_name, $phone, $email = null, $job_title)
	{
		$this -> full_name = $full_name;
		$this -> phone = $phone;
		$this -> email = $email;
        $this -> job_title = $job_title;
	}

	public function insert()
	{
        // 1. Checking if Phone Already Exist:
        if ($this -> getCountBy("phone", $this -> phone) > 0) {
            $res = array('ok' => false, 'error' => 'Telephone Existe Deja.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 2. Setting Email Null If Empty:
        $this -> email = empty($this -> email) ? null : $this -> email;

        // 3. Checking If Email Already Existe:
        if ($this -> email !== null && $this -> getCountBy("email", $this -> email) > 0) {
            $res = array('ok' => false, 'error' => 'Email Existe Deja.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 4. Sanitising Data:
        $full_name = htmlspecialchars($this -> full_name);
        $phone = htmlspecialchars($this -> phone);
        $email = htmlspecialchars($this -> email);
        $job_title = htmlspecialchars($this -> job_title);

        // 5. Inserting:
        $query = 'INSERT INTO employees (full_name, phone, email, job_title) VALUES (?, ?, ?, ?)';
        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('ssss', $full_name, $phone, $email, $job_title);

        // 6. Executing:
        if($statement -> execute()) {
            $res = array('ok' => true, 'message' => 'Employee Ajoutee Avec Succee');
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

	public function getById($id)
	{
		$query = "SELECT * FROM employees WHERE id = ? LIMIT 1";
        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('i', $id);
        $statement-> execute();
        $result = $statement -> get_result();
        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'employees' => $result -> fetch_assoc());

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        } else {
            $res = array('ok' => false, 'error' => 'Aucun employees avec cet Id.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }
	}

	public function getByFullNameLike($full_name)
	{
		$query = "SELECT * FROM employees WHERE full_name LIKE ?";
        $statement = $this -> connection -> prepare($query);
        $key = "%" . htmlspecialchars($full_name) . "%";
        $statement -> bind_param('s', $key);
        $statement-> execute();
        $result = $statement -> get_result();
        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'employees' => $result -> fetch_all());

            header('Content-Type: application/json');
            echo json_encode($res);
        } else {
            $res = array('ok' => false, 'error' => 'Aucun employees avec cet nom.');

            header('Content-Type: application/json');
            echo json_encode($res);
        }
	}

	public function getByPhoneLike($phone)
	{
		$query = "SELECT * FROM employees WHERE phone LIKE ?";
        $statement = $this -> connection -> prepare($query);
        $key = "%" . htmlspecialchars($phone) . "%";
        $statement -> bind_param('s', $key);
        $statement-> execute();
        $result = $statement -> get_result();
        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'employees' => $result -> fetch_all());

            header('Content-Type: application/json');
            echo json_encode($res);
        } else {
            $res = array('ok' => false, 'error' => 'Aucun employees avec cet telephone.');

            header('Content-Type: application/json');
            echo json_encode($res);
        }
	}

	public function getByEmailLike($email)
	{
		$query = "SELECT * FROM employees WHERE email LIKE ?";
        $statement = $this -> connection -> prepare($query);
        $key = "%" . htmlspecialchars($email) . "%";
        $statement -> bind_param('s', $key);
        $statement-> execute();
        $result = $statement -> get_result();
        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'employees' => $result -> fetch_all());

            header('Content-Type: application/json');
            echo json_encode($res);
        } else {
            $res = array('ok' => false, 'error' => 'Aucun employees avec cet email.');

            header('Content-Type: application/json');
            echo json_encode($res);
        }
	}

	public function getByJobTitleLike($job_title)
	{
		$query = "SELECT * FROM employees WHERE job_title LIKE ?";
        $statement = $this -> connection -> prepare($query);
        $key = "%" . htmlspecialchars($job_title) . "%";
        $statement -> bind_param('s', $key);
        $statement-> execute();
        $result = $statement -> get_result();
        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'employees' => $result -> fetch_all());

            header('Content-Type: application/json');
            echo json_encode($res);
        } else {
            $res = array('ok' => false, 'error' => 'Aucun employees avec cette position.');

            header('Content-Type: application/json');
            echo json_encode($res);
        }
	}

	public function getAll()
	{
        $query = 'SELECT * FROM employees';
        $result = $this -> connection -> query($query);

        if ($result) {
            $res = array('ok' => true, 'employees' => $result -> fetch_all());

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }
	}

	public function update($id, $full_name, $phone, $email = null, $job_title)
	{
        // 1. Sanitising Data:
        $full_name = htmlspecialchars($full_name);
        $phone = htmlspecialchars($phone);
        $email = htmlspecialchars($email);
        $job_title = htmlspecialchars($job_title);

        // 2. Checking if Phone Already Exist:
        if ($this -> getCountBy("phone", $phone) > 0) {
            $res = array('ok' => false, 'error' => 'Telephone Existe Deja.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 3. Setting Email Null If Empty:
        $email = empty($email) ? null : $email;

        // 4. Checking If Email Already Existe:
        if ($email !== null && $this -> getCountBy("email", $email) > 0) {
            $res = array('ok' => false, 'error' => 'Email Existe Deja.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 5. Updating:
        $query = 'UPDATE employees SET full_name = ?, phone = ?, email = ?, job_title = ? WHERE id = ?';
        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('ssssi', $full_name, $phone, $email, $job_title, $id);

        // 6. Executing:
        if($statement -> execute()) {
            $res = array('ok' => true, 'message' => 'Employee Modifier Avec Succee');
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
        $query = "DELETE FROM employees WHERE id = ?";
        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('i', $id);

        // 3. Executing:
        if($statement -> execute()) {
            $res = array('ok' => true, 'message' => 'Employee Supprimee Avec Succee');
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
        $query = "SELECT * FROM employees WHERE ? = ?";
        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('ss', $attr, $value);
        $statement-> execute();
        $result = $statement -> get_result();
        return mysqli_num_rows($result);
    }
}
