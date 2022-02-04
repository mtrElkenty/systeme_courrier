<?php

/**
 * Courrier Controller Class
 */
class Courrier extends Controller
{
	private $courrier;

	function __construct()
	{
		$this -> courrier = $this -> model('CourrierModel');
	}

	public function index($param = "")
	{
		// $courriers = $this -> courrier -> getAll();
		
		// Returning The Courrier View:
		$this -> view('courrier', ['title' => 'Courrier']);
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
			case 'full_name':
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