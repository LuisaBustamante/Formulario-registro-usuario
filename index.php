<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Usuarios</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Formulario</h1>
        <div class="card my-5 bg-light rouded shadow">
            <div class="card-body">
                <h5 class="card-title text-center">Registro de usuarios</h5>
                <form action="./php/acciones.php" method="post">
                    <div class="mb-3">
                        <label> Nombre: </label>
                        <input type="text" name="nombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label> Edad: </label>
                        <input type="number" name="edad" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label> Correo electronico: </label>
                        <input type="mail" name="mail" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-3">Guardar</button>
                    <button type="reset" class="btn btn-info">Limpiar</button>
                </form>
            </div>
        </div>
        <div class="card my-5 bg-light rouded shadow">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php     
                        include('php/conexion.php');
                        $sql = "SELECT * FROM usuarios";
                        $usuarios= $conn->query($sql);
                        if($usuarios){ 
                            foreach($usuarios as $usuario) {  
                                $id=$usuario['id'];                                                      
                        echo "<tr>"
                            . "<td>".$usuario['id']."</td>"
                            . "<td>".$usuario['nombre']."</td>"
                            . "<td>"
                            . "<a href='php/info.php?id=$id' class='btn btn-info'>Ver</a>"
                            . "</td>"
                            . "</tr>";
                            }
                        }
                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>