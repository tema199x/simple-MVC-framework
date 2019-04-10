<?php

namespace application\core;

use application\core\View;

abstract class Controller {

    public $route;
    public $view;

    public function __construct($route) {
        // echo '<p>Hello</p>';
        // var_dump($route);
        $this->route = $route;
        $this->view = new View($route);
    }

}