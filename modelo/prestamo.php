<?php

class prestamo{
    public $Id;
    public $LineaPrestamo;
    public $Titular;
    public $FechaAlta;
    public $CantidadCuotas;
    public $MontoCapital;

    public function MostrarDatos(){
        echo 'Id: '. $this->Id. '<br>';
        echo 'Linea de prestamo Id: '. $this->LineaPrestamo->Id. '<br>';
        echo 'Linea de prestamo Descripcion: '. $this->LineaPrestamo->Descripcion. '<br>';
        echo 'Linea de prestamo Taza: '. $this->LineaPrestamo->TazaEfectivaMensual. '<br>';
        echo 'Datos de la persona Id: '. $this->DatosPersona->Id. '<br>';
        echo 'Datos de la persona Nombre: '. $this->DatosPersona->Nombre. '<br>';
        echo 'Datos de la persona Apellido: '. $this->DatosPersona->Apellido. '<br>';
        echo 'Datos de la persona Dni: '. $this->DatosPersona->Documento. '<br>';
        echo 'Dirección Id: '. $this->DatosPersona->Direccion->Id. '<br>';
        echo 'Dirección Calle: '. $this->DatosPersona->Direccion->Calle. '<br>';
        echo 'Dirección Numero: '. $this->DatosPersona->Direccion->Numero. '<br>';
        echo 'Dirección Localidad: '. $this->DatosPersona->Direccion->Localidad. '<br>';
        echo 'Provincia Id: '. $this->DatosPersona->Direccion->Provincia->Id. '<br>';
        echo 'Provincia Id: '. $this->DatosPersona->Direccion->Provincia->Descripcion. '<br>';
    }
}