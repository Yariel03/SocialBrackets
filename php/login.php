<?php
include("conexion.php");
include_once("Consultas");
$email=$_POST['txtemail'];
$contrasenia=$_POST['txtcontrasenia'];

objlogin=new Clconsulta();
objLogin->Verificar();
?>
