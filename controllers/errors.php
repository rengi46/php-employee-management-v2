<?php

class errors extends controller{
    
    function __construct($message)
    {
        parent::__construct();
        if(isset($_GET["msg"])){
            $this->view->mensaje = $_GET["msg"];
        } else {
            $this->view->mensaje=$message;
        }
        $this->view->render("error/index");
        //echo "<p> error</p>";
    }
}