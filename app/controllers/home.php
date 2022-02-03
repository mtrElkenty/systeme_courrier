<?php

class Home extends Controller {
    function __construct() {
        // Inititialise Necessary Models
        // ...
    }

    public function index($param = "") {
        // Use Initialised Models To Get Initial Data
        // ...

        // Render The Appropriate View Or Return JSON Data
        // ...
        $this -> view('index', ["title" => "Accueil"]);
    }
}