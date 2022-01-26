<?php 
class views{
    function __construct()
    {
    }
    function render($vista){
        require_once VIEWS.$vista.".php";
    }
}