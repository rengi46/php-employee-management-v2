<?php
session_set_cookie_params(600);
error_reporting(E_ERROR | E_PARSE);
require_once "config/constants.php";
require_once "config/db.php";
require_once "libs/dataBase.php";
require_once "libs/app.php";
require_once "libs/controller.php";
require_once "libs/views.php";
require_once "libs/model.php";


$app= new app;