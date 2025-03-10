<?php

namespace app\controllers;

use Exception;
use Error;

function myErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "My error handler called";
    exit(); 
}

class ErrorController {

    public function errorFunction() {
        $price = 7;
        $quantity = 'five';

        if (!is_numeric($quantity)) {
            throw new Exception("Custom Error: Quantity must be a number!");
        }

        return $price * $quantity;
    }

    public function viewErrors() {
        try {
            $this->errorFunction();
        } catch (Exception $e) {
            echo "Caught Exception: " . $e->getMessage() . "<br>";  
        }

        set_error_handler("myErrorHandler");

        trigger_error("This is a custom triggered error!", E_USER_WARNING);
    }
}

$controller = new ErrorController();
$controller->viewErrors();

?>
