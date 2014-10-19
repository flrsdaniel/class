
<?php
include ("class_usuarios.php");

$usu = new classUsuarios("Nombre1", "Apellido1", "cedula1", "telefono1", "correo1@gmail.com", "direccion1", "sexo1", "1900-01-01","estadocivil1", "login1", "clave1", "tipo1", "prueba1.jpg", "", "", "1");
echo 'Objeto 1 : '.$usu->nombreApellido().' '.$usu->calculoEdad().' ';

echo $usu->getLogin().'<br/> ';
$usu1 = new classUsuarios("Nombre2", "Apellido2", "cedula2", "telefono2", "correo2@gmail.com", "direccion2", "sexo2", "1900-01-01","estadocivil2", "login2", "clave2", "tipo2", "prueba2.jpg", "", "", "1");
echo 'Objeto 2 : '.$usu1->nombreApellido().' '.$usu->calculoEdad().' ';

echo $usu1->getLogin().' ';
?>
