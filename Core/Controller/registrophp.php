<?php

    require("../../config.php");
	include("conexion.php");
	include_once(M.'Usuario.php');
    include_once("Consultas.php");

	$obj=new ClUsuario();
	$obj->_setalias($_POST['txtalias']);
	$obj->_setnombres($_POST['txtnombres']);
	$obj->_setapellidos($_POST['txtapellidos']);
	$obj->_setemail($_POST['txtemail']);
	$obj->_setcontrasenia($_POST['txtcontrasenia']);


    $objin=new Clconsulta();
    $objin->insertar(
		$obj->_getnombres(),
		$obj->_getapellidos(),
		$obj->_getalias(),
		$obj->_getcontrasenia(),
		$obj->_getemail(),
		$conexion
	);


?>
