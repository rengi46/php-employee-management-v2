
<?php


class app{
    function __construct()
    {
        session_start();

        $url= isset($_GET["url"]) ? $_GET["url"] : null;
        $url=rtrim($url, "/");
        $url=explode("/",$url);
        if(empty($url[0])){

            $archivosController = "controllers/login.php";
            require_once $archivosController;
            $controller = new login();
            $controller->loadModel("users");
            return false;
        }
            $archivosController = "controllers/". $url[0].".php";
        if ( file_exists($archivosController)){
            require_once $archivosController;
            $controller = new $url[0];
            $controller->loadModel($url[0]);
            if (isset($url[1])){
                $controller->{$url[1]}();
            }
        }
        else{
            require_once "controllers/errors.php";
            $controller= new errors();
        }
    
    }
}