<?php

// class location in the file system
namespace application\core;

class Router {

    protected $routes = [];
    protected $params = [];

    public function __construct() {
        $arr = require 'application/config/routes.php';
        // bust $route and $params
        foreach ($arr as $key => $val) {
            // to all methods
            $this->add($key, $val);
        }
    }

    // add route
    public function add($route, $params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    // check route
    public function math() {
        $url = trim($_SERVER['REQUEST_URI'], '/');  
        foreach ($this->routes as $route => $params) {
            // если сработало true иначе false
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
                // var_dump($matches);
            }
        }
    }

    // start route
    public function run() {
        if ($this->math()) {
            $controller = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller.php';
            if (class_exists($controller)) {
                echo 'Ок';
            } else { 
                echo 'Не найден '.$controller;
            }
            // echo $controller;
        } else {
            echo 'Маршрут не найден';
        }
    }

}