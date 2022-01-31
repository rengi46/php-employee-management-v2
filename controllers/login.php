<?php
 class login extends controller{

    function __construct()
    {
        parent::__construct();
        $this->view->render("login/index");
    }


    function singin(){
        $getuser = $this->model->getUser();
        foreach($getuser as $user){
            if($user["email"] == $_POST["nameLogin"]){
                if(password_verify($_POST["namePassword"], $user["password"])){
                    $_SESSION["user"] = $user["email"];
                    $_SESSION["time"] = time();
                    header("Location: ../employee/render");
                }
            }
        }
    }

    function logout(){
        unset($_SESSION["user"]);
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
    
        session_destroy();
    }

 }