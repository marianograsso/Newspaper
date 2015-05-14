<?php
function conectar()
{
	$conexion = new PDO ('mysql:host=localhost;dbname=newspaper','root','');
	return $conexion;
}
function desconectar($conexion)
{
	$conexion = null;
}
?>