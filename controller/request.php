<?php

class request {

    private $request;

    function __construct() {
        header("Content-Type:application/json");
        $raw_data = file_get_contents("php://input");
        $this->request = json_decode($raw_data, TRUE);
        echo $this->check();
    }

    //save request to file
    private function save() {
        $handle = fopen("request.txt", "a+");
        $email = $this->request['name'] ?? "none";
        $name = $this->request['email'] ?? "none";
        $details = $this->request['details'] ?? "none";
        $line = $name . " \t" . $email . " \t" . $details . " \n";
        fwrite($handle, $line);
    }

    //check if the request if properly formated
    private function check() {
        if (!$this->email() || !$this->name() || !$this->sent_request()) {
            return json_encode($this->error);
        } else {
            $this->save();
            return json_encode(array(
                "success" => "request sent successfully"
            ));
        }
    }

    private function name() {
        $name = $this->request['name'] ?? false;
        $error = false;
        if (!$name) {
            $error = "fill in the name field";
        } else {
            if (strlen($name) > 40) {
                $error = "name field should have at most 40 characters";
            }
        }
        $this->error['error'] = $error;
        return $name;
    }

    private function email() {
        $email = $this->request['email'] ?? false;
        $error = false;
        if (!$email) {
            $error = "fill in the email field";
        } else {
            if (strlen($email) > 40) {
                $error = "email field should have at most 40 characters";
            }
        }
        $this->error['error'] = $error;
        return $email;
    }

    private function sent_request() {
        $details = $this->request['details'] ?? false;
        $error = false;
        if (!$details) {
            $error = "fill in the details field";
        } else {
            if (strlen($details) > 40) {
                $error = "details field should have at most 40 characters";
            }
        }
        $this->error['error'] = $error;
        return $details;
    }

//    function __toString() {
//        return "request";
//    }
}
