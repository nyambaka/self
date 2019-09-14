<?php
require_once 'assets/constants.php';
session_start();

$router = new class($_GET['url']??"home") {
    function __construct($value) {
        $value = rtrim($value, '/');
        if (!empty($value)) {
            $this->urlArray = explode("/", $value);
        } else {
            $this->url="home";
        }
    }

    function getUrl() {
        return $this->urlArray;
    }

    function load() {
        switch (count($this->urlArray)) {
            case 3:
                return $this->loadControllerWithMethodAndParam();
                break;

            case 2:
                return $this->loadControllerAndMethodWithoutParam();
                break;

            case 1:
                return $this->LoadController();
                break;

            default :
                return $this->errorHandler();
        }
    }

    //used to preload the controller so that the function
    function ControllerPreloader() {
        $file= "controller/".$this->urlArray[0].".php";
        if (file_exists($file)) {
            require_once $file;
            return true;
        } else {
            return false;
        }
    }

    //used to load the method in the controller
    function MethodChecker() {
        return method_exists($this->urlArray[0], $this->urlArray[1]);
    }

    //load controller method with pameter
    function loadControllerWithMethodAndParam() {
        if ($this->ControllerPreloader()) {
            $controller = new $this->urlArray[0];
            if ($this->MethodChecker()) {
                $controller->{$this->urlArray[1]}($this->urlArray[2]);
            }
//            else {
//                $this->loadControllerAndMethodWithoutParam();
//           }
        }
//        else {
//            $this->LoadController();
//        }
    }


    //load controller and call method without parameter passed
    function loadControllerAndMethodWithoutParam() {
        if ($this->ControllerPreloader()) {
            $controller = new $this->urlArray[0];
            if ($this->MethodChecker()) {
                $controller->{$this->urlArray[1]}();
            }
//            else {
//                $this->LoadController();
//            }
        }
//        else {
//            $this->LoadController();
//        }
    }

    //used to load the controller without params to default method
    function LoadController() {
        if($this->ControllerPreloader($this->urlArray[0])){
            $controller=new $this->urlArray[0];
        }
        else{

            $this->errorHandler();

        }
    }


    function errorHandler(){
        if(file_exists('controller/error.php')){
            require_once 'controller/error.php';
            echo "{$this->urlArray[0]}";
        }
        else{
            var_dump($this->urlArray);
            echo "error";
        }
    }

};

echo $router->load();
