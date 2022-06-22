<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Respuesta</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Respuestas</h1>
        <?php
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $mail = $_POST['mail'];

          /*  echo "<p>Nombre: " . $nombre . "</p>";
            echo "<p>Edad: " . $edad . "</p>";
            echo "<p>Correo electronico: " . $mail . "</p>";*/

            //Conexión
              include ('conexion.php');

            //Setencia SQL

            $sql = "INSERT INTO usuarios (nombre, edad, mail) VALUES('$nombre', $edad, '$mail')";

            //Ejecución de la consulta

            if(mysqli_query($conn, $sql)){
                echo "¡Se ha guardado el registro satisfactoriamente!";
            }
            else{
                echo "No se pudo guardar el registro :(";
            }

            //Cerrar la conexion 
            mysqli_close($conn);


?>
<a href="../index.php" class="btn btn-primary mt-3 w-100">Volver</a>
    </div>
</body>
</html>
