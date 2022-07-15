<?php

    const hostname = "localhost";
    const database = "test";
    const password = "root425";
    const user = "davis";

    class database{

        public function connection()
        {
            $conn = mysqli_connect(hostname, user, password, database);
            
            if(!$conn)
                die("Não deu certo!" + mysqli_connect_error());
            else{
                
            }
                //echo "Conectou";

            return $conn;
        }

        public function command($query)
        {            
            $connection = $this -> connection();
            mysqli_query($connection, $query);
            mysqli_close($connection);
        }
    }

?>