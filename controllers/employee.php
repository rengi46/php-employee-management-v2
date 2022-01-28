<?php

class employee extends controller{

    function __construct()
    {
        parent::__construct();
    }

    function render(){
        $this->view->render("dashboard/index");
    }

    function render2(){
        $this->view->render("employees/index");
    }

    function getEmployees(){
        echo json_encode($this->model->getAll()) ;
    }

    function getEmployee($id){
        $employe=($this->model->getById($id[0])) ;
        $this->view->employe=$employe;
        $this->view->render("employees/employe");
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
    function modifyEmployee($id){
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
        $this->model->modify(
            [
            "id"            =>$id,
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
        echo "employee actualizado";
        // $this->view->render("dashboard/index");
        header("location: ../render");
    }

    function deleteemployee($id){
        $this->model->delete($id[0]);
        return "true";
    }
}