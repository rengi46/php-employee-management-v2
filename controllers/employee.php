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
        $this->nullID($id);
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
        $this->nullID($id);
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
        header("location: ../render");
    }

    function deleteemployee($id){
        $this->nullID($id);
        $this->model->delete($id[0]);
        return "true";
    }

    function nullID($data)
    {
        if($data[0]!= ""){
        $id=intval($data[0]);
            if($id != 0){
                $existe=$this->exist("id",$id);
                if($existe){
                }
                else{
                    echo "no existe";
                    header("location: ../error?msg=This id no exist");
                }
            }else{
                echo "mas alla";
                header("location: ../error?msg=Invalid Parameters");
            }
        }
        else{
            echo "mucho mas alla";
            header("location: ../error?msg=No Parameters");
        }
    }

    function exist($colum,$value){
        $a=0;
        $todo= $this->model->getAll();
        foreach($todo as $one){
            if($one[$colum] == $value){
                $a=1;
            }
        }
        if($a==1){
            return true;
        }else{
            return false;
        }
    }
}