<?php

require_once 'modelo/datospersona.php';
require_once 'modelo/direccion.php';
require_once 'modelo/lineaprestamo.php';
require_once 'modelo/prestamo.php';
require_once 'modelo/provincia.php';


$pr = new Provincia();
$pr->Id=1;
$pr->Descripcion='Santa Fe';

$d = new Direccion();
$d->Id=1;
$d->Calle='Montevideo';
$d->Numero=34;
$d->Localidad='Rosario';
$d->Provincia=$pr;

$dp = new DatosPersona();
$dp->Id=1;
$dp->Nombre='Daniel';
$dp->Apellido='Rodriguez';
$dp->Documento=12456789;
$dp->Direccion=$d;

$lp = new LineaPrestamo();
$lp->Id=1;
$lp->Descripcion='Personal sola firma';
$lp->TazaEfectivaMensual='15%';

$pres = new Prestamo();
$pres->Id=1;
$pres->LineaPrestamo=$lp;
$pres->DatosPersona=$dp;
$pres->FechaAlta='21/08/19';
$pres->CantidadCuotas=36;
$pres->MontoCapital='10.000';

$pres->MostrarDatos();
