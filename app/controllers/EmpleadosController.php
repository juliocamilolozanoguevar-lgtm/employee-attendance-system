<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Empleado.php';

class EmpleadosController extends Controller {
    public function index(): void {
        $this->mostrarEmpleados('empleados/reportes');
    }

    public function reportes(): void {
        $this->mostrarEmpleados('empleados/reportes');
    }

    public function registro(): void {
        $this->validarSesion();

        $this->view('empleados/registro', [
            'usuario' => $_SESSION['usuario']
        ]);
    }

    private function mostrarEmpleados(string $vista): void {
        $this->validarSesion();

        $modelo = new Empleado();
        $variable_empleados = $modelo->obtenerEmpleados();

        $this->view($vista, [
            'usuario' => $_SESSION['usuario'],
            'empleados' => $variable_empleados
        ]);
    }

    private function validarSesion(): void {
        if (!isset($_SESSION['usuario'])) {
            header("Location: " . BASE_URL . "/login");
            exit();
        }
    }
}
