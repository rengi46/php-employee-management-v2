<?php

class controller{
    public $view;
    function __construct()
    {
        $this->view= new views();
    }

    function loadModel($model){
        $url= "models/".$model."model.php";
        if(file_exists($url)){
            require $url;
            $modelName= $model."model";
            $this->model = new $modelName();
        }
    }
}