<?php 

// error output
ini_set('display_errors', 1);

// all types of errors
error_reporting(E_ALL);

function debug($str) {
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
    exit;
}