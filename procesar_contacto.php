<?php
// Incluimos la conexión a la base de datos
include 'conexion.php';

// Verificamos que los datos hayan sido enviados por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Capturamos los datos del formulario y limpiar espacios en blanco laterales
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $correo = isset($_POST['correo']) ? trim($_POST['correo']) : '';
    $mensaje = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';
    
    // VALIDACIÓN EN EL SERVIDOR 
    // Comprobamos que ningún campo esté verdaderamente vacío tras la limpieza
    if (empty($nombre) || empty($correo) || empty($mensaje)) {
        // Si hay algún vacío, redirige con estado de error
        header("Location: contacto.php?estado=error");
        exit();
    }

    // Validar que el formato del correo sea correcto en el servidor
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        header("Location: contacto.php?estado=error");
        exit();
    }

    // REGISTRO EN LA BASE DE DATOS 
    // El uso de '?' evita ataques de Inyección SQL
    $sql = "INSERT INTO contactos (nombre, correo, mensaje) VALUES (?, ?, ?)";
    
    // Preparar la consulta en el servidor de MySQL
    if ($stmt = $conexion->prepare($sql)) {
        
        // Unir los parámetros reales 
        $stmt->bind_param("sss", $nombre, $correo, $mensaje);
        
        // Ejecutar la consulta
        if ($stmt->execute()) {
            $stmt->close();
            $conexion->close();
            header("Location: contacto.php?estado=exito");
            exit();
        } else {
            // Error al ejecutar la inserción en la BD
            $stmt->close();
        }
    }
}

// Si alguien intenta entrar a este archivo directo por la URL sin llenar el formulario, lo saca de aquí
$conexion->close();
header("Location: contacto.php?estado=error");
exit();
?>