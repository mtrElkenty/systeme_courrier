<?php

/**
 * Role Model Class
 */
class Role extends Model
{
	protected $id;
	protected $role;
	protected $created_at;

	function __construct()
	{
		parent::__construct();
	}

	public function set($role)
	{
		$this -> role = $role;
	}

	public function insert($value='')
	{
		# code...
	}

	public function getById($id)
	{
		# code...
	}

	public function getByRole($role)
	{
		# code...
	}

	public function getAll()
	{
        $query = 'SELECT * FROM roles';
        $result = $this -> connection -> query($query);

        if ($result) {
            $res = array('ok' => true, 'roles' => $result -> fetch_all());

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }
	}

	public function update($role)
	{
		# code...
	}

	public function delete($id)
	{
		# code...
	}
}