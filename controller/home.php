<?php
require_once "base.php";

class  home extends  base{
    function __construct()
    {
        parent::__construct();
        $this->index();
    }

    function index(){
         $holder= $_SERVER['HTTP_USER_AGENT']??"null";
        if(strstr($holder,"Windows") || strstr($holder,"Mac") ){
            $this->render("home");
        }
        else{
            $this->render("phone_home");
        }   
    }
}