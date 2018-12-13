<?php

require ("connect.php");

$registrarUsuario = "INSERT INTO usuarios VALUES (
	'',
	'nombreCliente',
	'EmailCliente',
	'UsuarioCliente',
	'Pasword',
	'DireccionCliente',
	'Pais',
	'Idioma',
	'inicioContrato',
	'finContrato',
    'Activo',
	'NumContrato',
	'Descripcion'
	)";

$regitrarContacto = $conexion->query($registrarUsuario);
//$ultimoIdUsuario ="SELECT MAX(id) AS id FROM usuarios";

echo "usuario creado"

?>