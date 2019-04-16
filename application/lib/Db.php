<?php

namespace application\lib;

use PDO;

class Db {

    protected $db;

    public function __construct() {
        $config = require 'application/config/db.php';
        // debug($config);
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['name'].'', $config['user']);
    }

}