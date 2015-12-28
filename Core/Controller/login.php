<?php
include("conexion.php");
include_once("Consultas.php");
$email=$_POST['txtemail'];
$contrasenia=$_POST['txtcontrasenia'];

$objlogin=new Clconsulta();
$objlogin->Verificar($email,$contrasenia,$conexion);
?>
