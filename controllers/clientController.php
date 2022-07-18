<?php

    include("../models/client.php");
    //include("models/database.php");

    $objClient = new Client();
    
    if($_REQUEST["action"] == 1)
    {
        $objClient->name = $_POST["nome"];
        $objClient->email = $_POST["email"];
        $objClient->pass = $_POST["pass"];
    
    try{
        $objClient->insertClient();
        echo "Cadastro feito!";
    }
    catch(Exception $e){
        echo "Não foi cadastrado no banco. | " . $e;
    }
    }

    if($_REQUEST["action"] == 2)
    {
        $objClient->email = $_POST["email"];
        $objClient->pass = $_POST["pass"];
        $objClient->login();
    }

?>