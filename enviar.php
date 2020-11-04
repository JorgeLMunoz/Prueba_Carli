<?php
	
	$destino= "jorge_designer@hotmail.com";
	$nombre= $_POST["nombre"];
	$correo= $_POST["correo"];
	$telefono= $_POST["telefono"];
	$direccion= $_POST["direccion"];
	$mensaje= $_POST["mensaje"];

	$contenido= "Nombre ": . $nombre. "\nCorreo: " . $correo . "\nTeléfono: " $telefono . "\nDirección: " $direccion . "\nMensaje: " $mensaje;

	mail($destino, "Contacto" $contenido);
	header("Location:gracias.html");
?>