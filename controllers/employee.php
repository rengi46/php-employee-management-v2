<?php

class employee extends controller{

    function __construct()
    {
        parent::__construct();
    }

    function render(){
        $this->view->render("dashboard/index");
    }

    function getEmployees(){
        $this->view->render("employees/index");
    }

    function newemployee(){
        $name           = $_POST["name"];
        $lastName       = $_POST["lastName"];
        $email          = $_POST["email"];
        $gender         = $_POST["gender"];
        $city           = $_POST["city"];
        $streetAddress  = $_POST["streetAddress"];
        $state          = $_POST["state"];
        $age            = $_POST["age"];
        $postalCode     = $_POST["postalCode"];
        $phoneNumber    = $_POST["phoneNumber"];

        $this->model->insert(
            [
            "name"          => $name, 
            "lastName"      => $lastName,
            "email"         => $email,
            "gender"        => $gender,
            "city"          => $city,
            "streetAddress" => $streetAddress,
            "state"         => $state,
            "age"           => $age,
            "postalCode"    => $postalCode,
            "phoneNumber"   => $phoneNumber,
            ]
        );
        echo "employee registrado";
        $this->view->render("dashboard/index");
    }
}