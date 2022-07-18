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
                die("Erro na conexão!" + mysqli_connect_error());
            else{
                return $conn;
            }
        }

        public function executeCommand($query)
        {            
            $connection = $this -> connection();
            mysqli_query($connection, $query);
            mysqli_close($connection);
        }

        public function returnCommand($query)
        {
            $connection = $this -> connection();
            $data = mysqli_query($connection,$query);
            //$array = mysqli_fetch_assoc($data);
            $rows = mysqli_num_rows($data);
            mysqli_close($connection);

            return $rows;
        }
    }

?>