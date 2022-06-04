<?php

require_once 'modelo/mascota.php';
require_once 'modelo/dueniomascota.php';


$dm1 = new DuenioMascota();
$dm1->Id=0000001;
$dm1->Nombre='Daiana';
$dm1->Apellido='Patallo';
$dm1->Doc=36738097;
$dm1->Celular=3404500353;
$dm1->Direccion='Alem1314';

$m1 = new Mascota();
$m1->Id=0000001;
$m1->Nombre='Jacob';
$m1->Raza='Boxer';
$m1->Duenio=$dm1;

$m1->MostrarMascotayDuenio();