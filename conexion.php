<?php
$servidor   = 'localhost';
$usuario    = 'root';
$clave = '';
$bd = 'autos';

/* // se crea la conexión
$conexion = new mysqli($servidor, $usuario, $clave, $bd);

// se valida la conexión

if ($conexion->connect_error) {

    die('Falló en la conexión ' . $conexion->connect_error);
};
 */

try {
    // Crear conexión
    $pdo = new PDO("mysql:host=$servidor;dbname=$bd", $usuario, $clave);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("No se pudo conectar a la base de datos: " . $e->getMessage());
}