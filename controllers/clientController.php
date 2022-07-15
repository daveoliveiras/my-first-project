<?php

    include("../models/client.php");
    //include("models/database.php");

    $objClient = new Client();
    $objClient->name = $_POST["nome"];
    $objClient->email = $_POST["email"];

    try{
        $objClient->insertClient();
    }
    catch(Exception $e){
        echo "Não foi cadastrado no banco. | " . $e;
    }
    
    echo "A controller funcionou!";

?>