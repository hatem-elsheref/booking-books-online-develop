<?php


class Database{

    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;
    private $db_port;

    public function __construct($host,$user,$pass,$name,$port){
        $this->db_host=$host;
        $this->db_user=$user;
        $this->db_pass=$pass;
        $this->db_name=$name;
        $this->db_port=$port;
    }

    public function openConnection(){
        return mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_name,$this->db_port);
    }
    public function closeConnection($connectionLink){
        mysqli_close($connectionLink);
    }
}