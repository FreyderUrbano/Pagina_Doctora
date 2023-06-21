<?php
function conexion()
{
    $host = "localhost";
    $port = "5432";
    $bdname = "DoctoraBD";
    $user = "postgres";
    $pasword = "1234";

    $dbconnection = pg_connect("host=localhost port=5432 bdname=DoctoraBD user=postgres password=1234");

    // if ($dbconnection) {
    //     echo "EXITOSA";
    // } else {
    //     echo "FALLIDA" . pg_last_error();
    // }
    return $dbconnection;
}
//echo conexion();
?>