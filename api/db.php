<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');

// 1. Conexión
$conexion = mysqli_connect($host, $user, $pass, $db);

// 2. Validación de conexión
if (mysqli_connect_errno()) {
     echo "Error al conectar a MySQL: " . mysqli_connect_error();
     exit();
}

?>
