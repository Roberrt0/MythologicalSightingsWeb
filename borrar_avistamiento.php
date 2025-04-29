<?php
// Parámetros de conexión a la base de datos
$host = "localhost:3307";
$user = "root";
$password = "your_password";
$dbname = "evidencia3";

// Obtener el ID del avistamiento a borrar
$id = $_POST['id'];

// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Query para borrar el avistamiento de la base de datos
$sql = "DELETE FROM sightings WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Avistamiento eliminado exitosamente!";
} else {
    echo "Error al intentar borrar el avistamiento: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
