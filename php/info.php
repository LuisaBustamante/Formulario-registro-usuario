<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
</head>

<body>

    <?php
    include('conexion.php');
    $sql = "SELECT * FROM usuarios WHERE id=" . $_GET['id'];
    $usuarios = $conn->query($sql);
    if ($usuarios) {
        foreach ($usuarios as $usuario) {
            echo "<h2>Información de usuario</h2>";
            echo "<p>ID: " . $usuario['id'] . "</p>";
            echo "<p>Nombre: " . $usuario['nombre'] . "</p>";
            echo "<p>Edad: " . $usuario['edad'] . "</p>";
            echo "<p>Correo: " . $usuario['mail'] . "</p>";
        }
    }
    mysqli_close($conn);
    ?>
</body>

</html>