<?php

require_once "config.php";

$host = 'localhost'; // Host de la base de datos
$dbname = 'db_proyecfacu'; // Nombre de la base de datos
$username = 'root'; // Usuario de la base de datos
$password = ''; // Contraseña de la base de dato
//dsn ()
$dsn = "mysql:host=$host;dbname=$dbname";

//creamos la conexion a la db 

try {
    $pdo = new PDO($dsn, $username, $password);
    // Configurar PDO para que lance excepciones en caso de errores
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //permite que la aplicación maneje correctamente caracteres especiales y multibyte en los datos que se envían y reciben desde la base de datos.
    $pdo->exec("SET NAMES 'utf8'");
    echo "conexion exitosa";
} catch (PDOException $e) {
    echo "error de conexion";
    die("Error de conexión: " . $e->getMessage());
}
