<?php

    include("database.php");

    class Client{

        public $name;
        public $email;
        public $pass;
        public $country;

        public function __construct()
        {
            $this -> country = "Brazil";
        }

        public function insertClient(){
            $db = new database();
            $db->executeCommand("insert into person values(' ".$this->name."','".$this->email."', '".
            $this -> pass."', '".$this->country."');");
        }

        public function Login(){
            $db = new database();
            if($db->returnCommand("select * from person where email = '". $this->email."' and password = '".
            $this->pass ."';") != 0)
            {
                echo "Login realizado!";
            }
            else
            {
                echo "Falha no login!";
            }
        }
    }

?>