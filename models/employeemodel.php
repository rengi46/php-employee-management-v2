<?php
class employeeModel extends model{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data){
        $query = $this->db->conect()->prepare('INSERT INTO employee 
        (name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber) VALUES (:name,:lastName,:email,:gender,:city,:streetAddress,:state,:age,:postalCode,:phoneNumber)');
        $query->execute(
            [
            "name"          => $data["name"],
            "lastName"      => $data["lastName"],
            "email"         => $data["email"],
            "gender"        => $data["gender"],
            "city"          => $data["city"],
            "streetAddress" => $data["streetAddress"],
            "state"         => $data["state"],
            "age"           => $data["age"],
            "postalCode"    => $data["postalCode"],
            "phoneNumber"   => $data["phoneNumber"]
            ]
        );
        //echo "insertar datos";
    }

    public function getAll(){
        $query = $this->db->conect()->prepare("SELECT * FROM employee");
        $query->execute();
        return $query->fetchAll();
    }
    public function getUser($id){
        
    }
}