
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
            if(method_exists($url[0], $url[1])|| $url[0]=="login"){
                $controller = new $url[0];
                $controller->loadModel($url[0]);
                $nparam=sizeof($url);

                
                    if ($nparam>1){
                        if($nparam>2){
                            $param=[];
                            for($i=2;$i<$nparam;$i++){
                                array_push($param,$url[$i]);
                            }
                            
                            $controller->{$url[1]}($param);
                        
                        }
                        else{
                            $controller->{$url[1]}("");
                        }
                    }
            } else{ 
                require_once "controllers/errors.php";
                $controller= new errors("Function Not Found");
            }
        }
        else{
            require_once "controllers/errors.php";
            $controller= new errors("Controller Not Found");
        }
    
    }
}