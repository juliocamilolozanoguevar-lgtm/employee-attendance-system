<?php
//llamamos a la conexión de la base de datos.
require_once __DIR__ . '/../core/Database.php';

//creamos un modelo o clase llamada empleados (Singular).
class empleado{
     // La propiedad $db guardará la conexión PDO.
    // Le decimos que solo puede ser de tipo PDO (tipado estricto).
    // modificador de acceso ("private") significa que solo se puede usar dentro de esta clase.
    private PDO $db;

    //Al crear el modelo, obtenemos la conexion automaticamente.
    public function __construct(){
        // Database::getConnection() nos regresa la conexión PDO que creamos en core/Database.php.
        // Al guardarla en $this->db, cualquier método de esta clase puede usarla.
        $this->db = Database::getConnection();
    }
    //creamos el modulo para llamar todos los datos de la tabla EMPLEADOS
    //public function obtenerTodo():array
    public function getAll():array {
        // Variable $sql para almacenar
        $sql = "SELECT * FROM empleado";
        // statement = declaracion 
        $stmt = $this->db->prepare($sql);
    }
}