<?php
require_once __DIR__ . '/../core/Controller.php';

// Controlador para el módulo de empleados.
class EmpleadosController extends Controller {

 //Metodo por defecto.
 public funtion idenx():void{
    $this->view('empleados/reportes')
 }
}