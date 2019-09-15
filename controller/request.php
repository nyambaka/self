<?php


class request{
    
    function __construct(){
        
        
    }
    
    //save request to file
    private function save(){
        
    }

    //check if the request if properly formated
    private function check(){
    $error=true;
     if(!isset($_POST['name'])){
        $error = "fill in the name field";
     }
     else{
        if (len($_POST['name'])>40){
            $error ="name field should have a most 40 characters";
        }
     }
     
     if(!isset($_POST['emaill'])){
        $error = "fill in the email field";
     } else{
        if (len($_POST['email'])>40){
            $error ="email field should have a most 40 characters";
        }
     }
     
     if(!isset($_POST['request'])){
        $error = "fill in the request field";
        
     } else{
        if (len($_POST['request'])>140){
            $error ="name field should have a most 140 characters";
        }
     }
     
     return $error;
    }
    
    //display error when the request is sent.
    private function error($error){
        global $location;
        return header("Location:$location./error");
    }


}