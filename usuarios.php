<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuarios</title>
</head>

<body>
    <div>
        <h1>REGISTRO DE USUARIO EXITOSO</h1>
        <a href="contact.html">VOLVER</a>
    </div>
    <?php
    //INICIO REGISTRO DATOS FORMULARIO EMPLEADO
    include 'conexion.php';
    $conn = conexion();

    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $celular = $_POST['celular'];

    $sql = "insert into usuarios values(default,'$nombre','$email','$celular')";
    pg_query($conn, $sql);
    
    header('location:contact.html');

    $to = "freurbano@gmail.com";
    $subject = "Asunto del correo";
    $message = "From: " . $_POST["name"] . " <" . $_POST["email"] . $_POST["celular"]. ">";

    mail($to, $subject, $message);
    //FIN REGISTRO DATOS EMPLEADO 

    ?>
</body>

</html>