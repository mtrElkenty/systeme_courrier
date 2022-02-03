<?php

class Login extends Controller {
    private $user;
    function __construct() {
        // Inititialise Necessary Models
        $this -> user = $this -> model('User');
    }

    public function index($param = '') {
        // Use Initialised Models To Get Initial Data
        // ...

        // Render The Appropriate View Or Return JSON Data
        // ...
        $this -> view('login', ['title' => 'Login']);
    }

    public function auth()
    {
        // 1. Validating Data:
        if (!isset($_POST['username']) || !isset($_POST['password'])) {
            $res = array('ok' => false, 'error' => 'Username ou Password Incorrect.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        if (empty($_POST['username']) || empty($_POST['password'])){
            $res = array('ok' => false, 'error' => 'Username et Password sont Obligatoire.');

            header('Content-Type: application/json');
            echo json_encode($res);
            exit();
        }

        // 2. Getting Data:
        $username = $_POST['username'];
        $password = $_POST['password'];

        // 3. Authenticationg User:
        $this -> user -> authenticate($username, $password);
    }

    public function deauth()
    {
        session_start();
        echo session_destroy();
    }
}