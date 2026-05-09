<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Empleado.php';

// Controlador para el módulo de empleados.
class EmpleadosController extends Controller {
     // Método por defecto. 
    public function index(): void {

    // Mientras no se inicie sesión - que se envie o redirija al login
        if(isset($_SESSION['usuario'])){
            echo "Usuario Existe";
            exit()
        } else {
            header("location: " . BASE_URL ./"login");
        }
         // Instanciamos el objeto de la clase empleados
    $modelo = new Empleado();
    $variable_empleados = $modelo->getAll();
    $this->view('empleados/reportes',[
            'usuario' => $_SESSION['usuario'],
            'empleados' => $variable_empleados
        ]);
    }


}