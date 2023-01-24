<?php
include_once('db.php');
//datos del formulario
$name=$_POST['name'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$conectar=conn();
$sql="INSERT INTO datos (nombre, email, celular, genero, mensaje) VALUES ('$name','$email','$telephone','$subject','$message')";
$result = mysqli_query($conectar, $sql);
echo "Los datos fueron ingresado correctamente a la base de datos";
echo '<a href="index.html"> Volver Atrás</a>' ;

?>
