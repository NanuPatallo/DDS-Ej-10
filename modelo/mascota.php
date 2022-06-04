<?php

require_once 'modelo/dueniomascota.php';


class Mascota
{
    public $Id;
    public $Nombre;
    public $Raza;

    public $Duenio;

    public function MostrarMascotayDuenio()
    {
        echo 'Datos Mascotas y sus Dueños: ' . '<hr>';
        echo 'Nro de Identificación Mascota: ' . $this->Id . '<hr>';
        echo 'Nombre Mascota: ' . $this->Nombre . '<hr>';
        echo 'Raza de mi Mascota: ' . $this->Raza . '<hr>';
        echo 'Mi Dueño es: ' . '<hr>';
        echo 'Nro de Identificación Dueño: ' . $this->Duenio->Id . '<hr>';
        echo 'Nombre: ' . $this->Duenio->Nombre . '<hr>';
        echo 'Apellido: ' . $this->Duenio->Apellido . '<hr>';
        echo 'Nro de Documento: ' . $this->Duenio->Doc . '<hr>';
        echo 'Nro de Celular: ' . $this->Duenio->Celular . '<hr>';
        echo 'Dirección: ' . $this->Duenio->Direccion . '<hr>';
    }
}
