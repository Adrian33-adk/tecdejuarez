<?php
// Incluir la conexión a la base de datos
include 'conexion.php'; // Asegúrate de que este archivo existe y es correcto

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Verificar que los campos no estén vacíos
    if (empty($correo) || empty($password)) {
        echo "Error: Todos los campos son obligatorios.";
        exit();
    }

    // Consulta para buscar el usuario (usando consultas preparadas para evitar inyecciones SQL)
    $sql = "SELECT * FROM usuarios WHERE correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verificar la contraseña
        if (password_verify($password, $row['password'])) {
            // Aquí redirigimos a home.html en caso de éxito
            header("Location: home.html");
            exit(); // Asegúrate de salir después de redirigir
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "No se encontró un usuario con ese correo.";
    }

    // Cerrar la declaración
    $stmt->close();
}

// Cerrar la conexión a la base de datos
$conn->close();
?>