<?php
// Parámetros de conexión a la base de datos
$host = "localhost:3307";
$user = "root";
$password = "your_password";
$dbname = "evidencia3";

// Obtener datos del formulario
$descripcion = $_POST['descripcion'];
$nombre_entidad = $_POST['nombre_entidad'];
$url_imagen = $_POST['url_imagen'];


// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Query para insertar el nuevo enemigo en la base de datos
$sql = "INSERT INTO sightings (nombre_entidad, descripcion, url_imagen) VALUES
('$nombre_entidad', '$descripcion', '$url_imagen')";

if ($conn->query($sql) === TRUE) {
    echo "New sighting added successfully! thank you for your support dearest user";
} else {
    echo "Paranormal Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
