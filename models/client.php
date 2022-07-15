<?php

    include("database.php");

    class Client{

        public $name;
        public $email;
        public $country;

        public function __construct()
        {
            $this -> country = "Brazil";
        }

        public function insertClient(){
            $db = new database();
            $db->command("insert into person values(' ".$this->name."','".$this->email."','".$this->country."');");
        }

        public function Test(){
            echo $this -> name;
        }
    }

?>