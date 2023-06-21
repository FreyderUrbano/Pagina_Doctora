<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuarios</title>
</head>

<body>
    <div>
        <h1>REGISTRO DE EMPLEADO EXITOSO</h1>
        <a href="index.html">VOLVER A INDEX</a>
    </div>
    <?php
    //INICIO REGISTRO DATOS FORMULARIO EMPLEADO
    include 'conexion.php';
    $con = conexion();

    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $msj = $_POST['mensaje'];
    $telefono = $_POST['telemp'];
    
    $sql = "insert into usuarios values(default,'$nombre','$email','$msj ','$telefono')";
    pg_query($con, $sql);

    header('index.html');
    //FIN REGISTRO DATOS EMPLEADO 

    ?>
</body>

</html>