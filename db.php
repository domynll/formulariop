<?php
function conn(){
    $hostname="localhost:3308";
    $usuariodb="root";
    $password="";
    $dbname="registro";
    $conectar = mysqli_connect($hostname, $usuariodb, $password, $dbname);
    return $conectar;
}
?>
