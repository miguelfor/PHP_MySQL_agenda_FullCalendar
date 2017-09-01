<?php

require('conector.php');

$con = new ConectorBD();
$con->initConexion('agenda');

$hash = password_hash('123456', PASSWORD_DEFAULT);

$data['username']= '"miguelfor"';
$data['password']= '"'.$hash.'"';
$data['nombre']='"Miguel For"';
$data['fecha_nacimiento']='"1984-01-01"';

$con->insertData('usuarios', $data);




 ?>
