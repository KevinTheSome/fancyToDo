<?php

require_once "../app/Core/DBConnect.php";

class todoModel {

    private $db;

    public function __construct() {
        $this->db = new DBConnect();
    }
}