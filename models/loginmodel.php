<?php

class loginModel extends model{

    public function __construct()
    {
        parent::__construct();
    }

    public function getUser(){
        //pdo and get user
        $query = $this->db->conect()->prepare('SELECT email,password FROM users');
        $query->execute();
        $queryFetch = $query->fetchAll();
        return $queryFetch;
    }
}