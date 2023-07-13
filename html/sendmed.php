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

$nombre =  ($_POST['nombre']);
$apellido =  ($_POST['apellido']);
$especialidad = ($_POST['especialidad']);
$consultorio =  ($_POST['consultorio']);
$correo =  ($_POST['correo']);

//conetar db
$conexion = mysqli_connect($servername, $username, $password, $database);

$sql= "INSERT INTO medico(`nombre`, `apellido`, `especialidad`, `consultorio`, `correo`) 
        VALUES ('$nombre','$apellido','$especialidad','$consultorio','$correo')";

if (mysqli_query($conexion, $sql)) {
    
   echo"REGISTRO COMPLETO";
   
    
}

?>

<Br>
<button> <a href="./index.html">REGRESAR A PAGINA PRINCIPAL </a></button>


    
</body>
</html>