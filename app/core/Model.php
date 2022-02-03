<?php

class Model {	
    // ============= CONNECTION PARAMS ============= //
    protected $host = 'localhost'; // ============== //
    protected $user = 'root'; // =================== //
    protected $password = ''; // =================== //
    protected $database = 'systeme_courrier'; // === //
    protected $connection; // ====================== //
    // ============================================= //

    function __construct() {
      // Attempt To Connect
      $this -> connection = new mysqli($this -> host, $this -> user, $this -> password, $this -> database);

      // Check If Connected
      if ($this -> connection -> connect_errno) {
          echo "Failed to connect to MySQL: " . $this -> connection -> connect_error;
          exit();
        }
    }

}