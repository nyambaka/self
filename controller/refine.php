<?php

class refine{
    function  __construct()
    {
          header('application/json'); 
    }

    function assets(){
        global $location;
        echo json_encode(array(
            "name"=>"assets",
            "css"=>$location."assets/home.css",
            "profile"=>$location."/assets/profile.jpg",
            "video"=>$location."/assets/video.mp4",
            "javascript"=>$location."/assets/controller.js"
        ));
    }

    function template(){
        global $location;
        echo json_encode(array(
            "name"=>"template",
            "template"=>$location."/view/temp.html"
        ));
    }

    function text(){
        echo json_encode(array(
            "name"=>"NElSON NYAMBAKA",
            "personal_details"=>"PERSONAL DETAILS",
            "computer_skills"=>"COMPUTER SKILLS"
        ));
    }
    
}
