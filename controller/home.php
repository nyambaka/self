<?php
require_once "base.php";

class  home extends  base{
    function __construct()
    {
        parent::__construct();
        $this->index();
    }

    function index(){
        $this->render("home");
    }


}