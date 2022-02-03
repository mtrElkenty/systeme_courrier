<?php

/**
 * Courrier Model Class
 */
class Courrier extends Model
{
	protected $id;
	protected $numero_inscription;
	protected $designateur;
	protected $destination;
	protected $date_depart;
	protected $date_arrive;
	protected $received_by_employee_id;
	protected $created_at;

	function __construct()
	{
		parent::__construct();
	}
	public function set($numero_inscription, $designateur = null, $destination, $date_depart = null, $date_arrive, $received_by_employee_id)
	{
		$this -> numero_inscription = $numero_inscription;
		$this -> designateur = $designateur;
		$this -> destination = $destination;
		$this -> date_depart = $date_depart;
		$this -> date_arrive = $date_arrive;
		$this -> received_by_employee_id = $received_by_employee_id;
	}

	public function insert()
	{
        // 1. Sanitising Data:
        $numero_inscription = htmlspecialchars($this -> numero_inscription);
        $designateur = htmlspecialchars($this -> designateur);
        $destination = htmlspecialchars($this -> destination);
        $date_depart = htmlspecialchars($this -> date_depart);
        $date_arrive = htmlspecialchars($this -> date_arrive);
        $received_by_employee_id = htmlspecialchars($this -> received_by_employee_id);

        // 2. Inserting:
        $query = 'INSERT INTO courriers (numero_inscription, designateur, destination, date_depart, date_arrive, received_by_employee_id) VALUES (?, ?, ?, ?, ?, ?)';
        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('sssssi', $numero_inscription, $designateur, $destination, $date_depart, $date_arrive, $received_by_employee_id);

        // 3. Executing:
        if($statement -> execute()) {
            $res = array('ok' => true, 'message' => 'Courrier Ajoutee Avec Succee');
            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 4. Falling To Server Connection Error:
        $res = array('ok' => false, 'error' => 'Une Erruer c\'est produite au niveau d\'insertion. Verifiez votre connection.
			<br />' . $this -> connection -> connect_error);
        header('Content-Type: application/json');
        echo json_encode($res);
        exit();
	}

	public function getById($id)
	{
		$query = "SELECT courriers.id, numero_inscription, designateur, destination, date_depart, date_arrive, full_name, courriers.created_at, received_by_employee_id FROM courriers
        JOIN employees ON courriers.received_by_employee_id = employees.id
        WHERE courriers.id = ? LIMIT 1";

        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('i', $id);
        $statement-> execute();
        $result = $statement -> get_result();

        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'courriers' => $result -> fetch_assoc());

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        } else {
            $res = array('ok' => false, 'error' => 'Aucun courrier avec cet nom.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }
	}

	public function getByNumeroInscription($numero_inscription)
	{
		$query = "SELECT courriers.id, numero_inscription, designateur, destination, date_depart, date_arrive, full_name, courriers.created_at, received_by_employee_id FROM courriers
        JOIN employees ON courriers.received_by_employee_id = employees.id
        WHERE courriers.numero_inscription LIKE ? ";

        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('s', "%" + $numero_inscription + "%");
        $statement-> execute();
        $result = $statement -> get_result();
		
        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'courriers' => $result -> fetch_assoc());

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        } else {
            $res = array('ok' => false, 'error' => 'Aucun courrier avec cet numero d\'inscription.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }
	}

	public function getByDesignateur($designateur)
	{
		$query = "SELECT courriers.id, numero_inscription, designateur, destination, date_depart, date_arrive, full_name, courriers.created_at, received_by_employee_id FROM courriers
        JOIN employees ON courriers.received_by_employee_id = employees.id
        WHERE courriers.designateur LIKE ?";

        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('s', "%" + $designateur + "%");
        $statement-> execute();
        $result = $statement -> get_result();
		
        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'courriers' => $result -> fetch_assoc());

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        } else {
            $res = array('ok' => false, 'error' => 'Aucun courrier avec cet designateur.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }
	}

	public function getByDestination($destination)
	{
		$query = "SELECT courriers.id, numero_inscription, designateur, destination, date_depart, date_arrive, full_name, courriers.created_at, received_by_employee_id FROM courriers
        JOIN employees ON courriers.received_by_employee_id = employees.id
        WHERE courriers.destination LIKE ?";

        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('s', "%" + $destination + "%");
        $statement-> execute();
        $result = $statement -> get_result();
		
        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'courriers' => $result -> fetch_assoc());

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        } else {
            $res = array('ok' => false, 'error' => 'Aucun courrier avec cette destination.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }
	}

	public function getByDateDepart($date_depart)
	{
		$query = "SELECT courriers.id, numero_inscription, designateur, destination, date_depart, date_arrive, full_name, courriers.created_at, received_by_employee_id FROM courriers
        JOIN employees ON courriers.received_by_employee_id = employees.id
        WHERE courriers.date_depart LIKE ?";

        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('s', "%" + $date_depart + "%");
        $statement-> execute();
        $result = $statement -> get_result();
		
        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'courriers' => $result -> fetch_assoc());

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        } else {
            $res = array('ok' => false, 'error' => 'Aucun courrier avec cette date de depart.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }
	}

	public function getByDateArrive($date_arrive)
	{
		$query = "SELECT courriers.id, numero_inscription, designateur, destination, date_depart, date_arrive, full_name, courriers.created_at, received_by_employee_id FROM courriers
        JOIN employees ON courriers.received_by_employee_id = employees.id
        WHERE courriers.date_arrive LIKE ?";

        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('s', "%" + $date_arrive + "%");
        $statement-> execute();
        $result = $statement -> get_result();
		
        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'courriers' => $result -> fetch_assoc());

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        } else {
            $res = array('ok' => false, 'error' => 'Aucun courrier avec cette date d\'arrivee.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }
	}

	public function getByEmployeeFullName($full_name)
	{
		$query = "SELECT courriers.id, numero_inscription, designateur, destination, date_depart, date_arrive, full_name, courriers.created_at, received_by_employee_id FROM courriers
        JOIN employees ON courriers.received_by_employee_id = employees.id
        WHERE employees.full_name LIKE ?";

        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('s', "%" + $full_name + "%");
        $statement-> execute();
        $result = $statement -> get_result();
		
        if (mysqli_num_rows($result) > 0) {
            $res = array('ok' => true, 'courriers' => $result -> fetch_assoc());

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        } else {
            $res = array('ok' => false, 'error' => 'Aucun courrier ajoute par cet nom.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }
	}

	public function getAll()
	{
        $query = 'SELECT courriers.id, numero_inscription, designateur, destination, date_depart, date_arrive, full_name, courriers.created_at, received_by_employee_id FROM courriers
        JOIN employees ON courriers.received_by_employee_id = employees.id';
        $result = $this -> connection -> query($query);

        if ($result) {
            $res = array('ok' => true, 'courriers' => $result -> fetch_all());

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        } 

		// 8. Falling To Default Error:
		$res = array('ok' => false, 'error' => 'Une Erruer c\'est produite au niveau d\'insertion. Verifiez votre connection.
		<br />' . $this -> connection -> connect_error);

		header('Content-Type: application/json');
		echo json_encode($res);
		exit();
	}

	public function update($id, $numero_inscription, $designateur = null, $destination, $date_depart = null, $date_arrive)
	{
        // 1. Sanitising Data:
        $id = htmlspecialchars($id);
        $numero_inscription = htmlspecialchars($numero_inscription);
        $designateur = htmlspecialchars($designateur);
        $destination = htmlspecialchars($destination);
        $date_depart = htmlspecialchars($date_depart);
        $date_arrive = htmlspecialchars($date_arrive);

        // 2. Updating:
        $query = 'UPDATE courriers SET numero_inscription = ?, designateur = ?, destination = ?, date_depart = ?, date_arrive = ? WHERE id = ?';
        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('sssssi', $numero_inscription, $designateur, $destination, $date_depart, $date_arrive, $id);

        // 3. Executing:
        if($statement -> execute()) {
            $res = array('ok' => true, 'message' => 'Courrier Modifier Avec Succee');
            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 4. Falling To Server Connection Error:
        $res = array('ok' => false, 'error' => 'Une Erruer c\'est produite au niveau d\'insertion. Verifiez votre connection.
			<br />' . $this -> connection -> connect_error);
        header('Content-Type: application/json');
        echo json_encode($res);
        exit();
	}

	public function delete($id)
	{
		# code...
	}

    public function getCountBy($attr, $value)
    {
        $query = "SELECT * FROM courriers WHERE ? = ?";
        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('ss', $attr, $value);
        $statement-> execute();
        $result = $statement -> get_result();
        return mysqli_num_rows($result);
    }
}