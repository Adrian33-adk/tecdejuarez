<?php
// insert_product.php

// Conexión a la base de datos
$servername = "localhost"; // Cambia esto si es necesario
$username = "root"; // Cambia esto por tu usuario
$password = ""; // Cambia esto por tu contraseña
$dbname = "inventarios"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener datos del formulario
$material = $_POST['material'];
$cantidad = $_POST['cantidad'];
$capacidad = $_POST['capacidad'];

// Preparar y ejecutar la consulta
$sql = "INSERT INTO laboratorio_quimica (material, cantidad, capacidad) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sis", $material, $cantidad, $capacidad); // 'sis' indica tipos de datos: string, integer, string

if ($stmt->execute()) {
    echo "Nuevo producto agregado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$stmt->close();
$conn->close();

// Redirigir a la página de productos
header("Location: products.html");
exit();
?>