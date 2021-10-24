<?php

$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$calle=$_POST['calle'];
$altura=$_POST['altura'];
$barrio=$_POST['barrio'];
$localidad=$_POST['localidad'];
$cp=$_POST['cp'];
$provincia=$_POST['provincia'];
$observaciones=$_POST['observaciones'];
$para='majitohiramatsu@gmail.com';
$titulo="ASUNTO";
$header='From' . $email;
$msjCorreo="Nombre:$nombre\n Telefono:$telefono\n Telefono móvil:$celular\n E - mail:$email\n Calle:$calle\n Altura:$altura\n Barrio:$barrio\n Localidad:$localidad Código Postal:$cp\n Provincia:$provincia\n Observaciones:$observaciones\n";

if($_POST['submit'])
{
	if(mail($para, $titulo, $msjCorreo, $header))
	{
		echo
		"<script lanjuaje='javascript>
		
			alert('Sus datos han sido enviados, muchas gracias.');
			widow.lacation.href="index.html";
		
		</script>'";
	}
	else
	{
		echo 'Falló el envío.'
	}
}

?>