<?php
require "config.php";

$view=isset($_GET['view']) ?  $_GET['view'] : 'index';


if(file_exists(V.$view.'View.php'))
{
	include(V.$view.'View.php');
}
else
{
	echo "error";
}

?>
