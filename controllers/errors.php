<?php

class errors extends controller{
    
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje="error fatal";
        $this->view->render("error/index");
        echo "<p> error</p>";
    }
}