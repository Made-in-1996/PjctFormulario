<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <meta charset="UTF-8">
    <!--<link rel="stylesheet" type="text/css" href="css/estilo.css">-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <br><br>
<div class="panel panel-default">
    <div class="panel-heading">Registro Empleado</div>
    <div class="panel-body">
        <div class="col-md-6">
<?php

/* 
 *Script que recoge los datos del formulario y los muestra por pantalla
 */

$name = $_POST['nombre'];
$direc = $_POST['direccion'];
$tel = $_POST['telefono'];
$email = $_POST['email'];
$sex = $_POST['sexo'];
$opc = $_POST['opcion'];
$anterior = $_POST['anteriortrabajo'];
$ref = $_POST['referencias'];
$coment = $_POST['comentario'];
$date = $_POST['fecha'];



echo "<p><h3>Datos del usuario registrado en el formulario:</h3></p>";
echo "<br/>Nombre: " .$name. "<br/>Direccion: ". $direc ."<br/>Telefono: ". $tel . "<br/>Email: ". $email. "<br/>Sexo: ". $sex.
"<br/>Opciones de Empleo: ". $opc. "<br/>Anterior Trabajo: ". $anterior. "<br/>Referencias: ". $ref. "<br/>Comentario: ". $coment;

echo "<br/>Fecha: ".$date;
?>

        </div>
    </div>
</div>
    </div>
</div>
</body>
</html>
