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
        $this->view->render("dashboard/index");
        echo "employee registrado";
        $this->model->insert();
    }
}