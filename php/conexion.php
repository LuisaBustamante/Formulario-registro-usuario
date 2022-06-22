
        <?php

            $servername = "127.0.0.1";
            $database = "universidad";
            $username = "root";
            $password = "";

            $conn = mysqli_connect($servername, $username, $password, $database);

            //Comprobar la conexion 
            if(!$conn){
                die("Conexión fallida. " . mysqli_connect_error());
            }

          //  echo "Conectado<br>";




?>

