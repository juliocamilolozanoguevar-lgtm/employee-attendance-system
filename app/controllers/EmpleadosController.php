<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../core/Empleado.php';

// Controlador para el módulo de empleados.
class EmpleadosController extends Controller {

    // Instanciamos el objeto de la clase empleados
    $modelo = new Empleado();
    $empleados = $modelo->getAll();
    // Método por defecto. 
    public function index(): void {
        $this->view('empleados/reportes',[
            'usuario' => $_SESSION['usuario'],
            'empleados' => $_
        ]);
    }


}