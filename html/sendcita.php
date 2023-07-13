<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//base datos
 $servername= "localhost";
 $database="dbcen";
 $username= "root";
 $password=  "";

//recuperar 

$cedula =  ($_POST['cedula']);
$especialidad = ($_POST['especialidad']);
$fecha=($_POST['fecha']);


//conetar db
$conexion = mysqli_connect($servername, $username, $password, $database);

$sql= "INSERT INTO `citas`(`cedula`, `especialidad`, `fecha`) 
VALUES ('$cedula','$especialidad','$fecha')";

if (mysqli_query($conexion, $sql)) {
    
   echo"REGISTRO COMPLETO";
   
    
}

?>
<Br>
<button> <a href="./index.html">REGRESAR A PAGINA PRINCIPAL </a></button>
    
</body>
</html>