<?php
    include("conexion.php");
    include_once("Consultas.php");
    $alias=$_POST['txtalias'];
    $nombres=$_POST['txtnombres'];
    $apellidos=$_POST['txtapellidos'];
    $email=$_POST['txtemail'];
    $contrasenia=$_POST['txtcontrasenia'];
    $contrasenia2=$_POST['txtcontrasenia2'];

    $objin=new Clconsulta();
    $objin->insertar($nombres,$apellidos,$alias,$contrasenia,$email,$conexion);


?>
