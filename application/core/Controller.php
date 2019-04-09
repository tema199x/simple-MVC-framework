<?php

namespace application\core;

abstract class Controller {

    public $route;

    public function __construct($route) {
        // echo '<p>Hello</p>';
        // var_dump($route);
        $this->route = $route;
    }

}