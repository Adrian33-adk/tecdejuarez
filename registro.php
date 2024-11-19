<?php
// Incluir la conexión a la base de datos
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $rol = $_POST['rol'];

    // Mapeo de roles a IDs
    $rol_id = ($rol === 'administrativo') ? 1 : 2;

    // Verificar que los campos no estén vacíos
    if (empty($nombre) || empty($correo) || empty($usuario) || empty($password) || empty($rol_id)) {
        echo "Error: Todos los campos son obligatorios.";
        exit();
    }

    // Verificar si el correo o el usuario ya existen
    $checkSql = "SELECT * FROM usuarios WHERE correo = ? OR usuario = ?";
    $stmt = $conn->prepare($checkSql);
    $stmt->bind_param("ss", $correo, $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Error: El correo o el usuario ya están registrados.";
    } else {
        // Consulta para insertar el nuevo usuario
        $sql = "INSERT INTO usuarios (nombre, correo, usuario, password, rol_id) VALUES (?, ?, ?, ?, ?)";
        $stmtInsert = $conn->prepare($sql);
        $stmtInsert->bind_param("ssssi", $nombre, $correo, $usuario, $password, $rol_id);

        // Ejecutar la consulta
        if ($stmtInsert->execute()) {
            // Redirigir a index.php con un mensaje de éxito
            header("Location: index.php?mensaje=Registro exitoso");
            exit(); // Asegúrate de salir después de redirigir
        } else {
            echo "Error al registrar: " . $stmtInsert->error;
        }

        $stmtInsert->close();
    }

    $stmt->close();
}

$conn->close();
?>