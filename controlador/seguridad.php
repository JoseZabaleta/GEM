<?php 
// seguridad de sesiones
session_start();
error_reporting(0);
$variabsession = $_SESSION['usuario'];
if($variabsession==null || $variabsession=''){
	header("Location:index.html");
	die();

}
?>