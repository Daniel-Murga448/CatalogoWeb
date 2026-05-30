<?php
// Incluimos la conexión a la base de datos
include 'conexion.php';

// Consulta para traer los mensajes de la base de datos 
$sql = "SELECT nombre, mensaje, fecha_envio FROM contactos ORDER BY fecha_envio DESC";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web Personal - Daniel Murga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Mi Portal Personal</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="index.php">Inicio</a>
                <a class="nav-link" href="contacto.php">Contacto</a>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <div class="row">
            
            <section class="col-md-5 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <img src="mi_foto.jpeg" alt="Foto de Daniel Murga" class="rounded-circle img-thumbnail mb-3" style="width: 150px; height: 150px; object-fit: cover; background-color: #ddd;">
                        
                        <h2 class="card-title fw-bold text-dark h4">Daniel Alexander Murga Aguilar</h2>
                        <p class="text-muted fw-semibold small mb-2">21 años | Originario de Zaruma</p>
                        <p class="text-primary fw-bold small">Estudiante de Tecnologías de la Información</p>
                        <hr>
                        
                        <div class="text-start">
                            <h4 class="h5 fw-bold text-secondary">Sobre mí</h4>
                            <p class="text-secondary small" style="text-align: justify;">
                                Hola, soy estudiante de la carrera de Tecnologías de la Información en la Universidad Técnica Particular de Loja (UTPL). Me apasiona el desarrollo de software, la arquitectura tecnológica y la creación de soluciones web seguras y eficientes que impacten positivamente en la comunidad.
                            </p>
                            
                            <h4 class="h5 fw-bold text-secondary mt-3">Mis Hobbies</h4>
                            <ul class="text-secondary small ps-3">
                                <li>Ver y practicar fútbol.</li>
                                <li>Jugar videojuegos.</li>
                                <li>Modelado de sistemas y diagramación arquitectónica.</li>
                                <li>Explorar nuevas tecnologías y desarrollo backend con PHP y MySQL.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="col-md-7 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h3 class="card-title fw-bold text-dark mb-4 h4">Buzón de Mensajes Recibidos</h3>
                        <p class="text-muted small">A continuación se muestran en tiempo real los comentarios y mensajes que los usuarios envían a través del formulario de contacto, extraídos directamente desde MySQL.</p>
                        
                        <div class="list-group mt-3">
                            <?php
                            // Verificamos si hay registros en la base de datos
                            if ($resultado && $resultado->num_rows > 0) {
                                // Bucle para mostrar cada fila de la base de datos de forma dinámica
                                while($fila = $resultado->fetch_assoc()) {
                                    echo '<div class="list-group-item list-group-item-action border-start border-primary border-3 mb-2 shadow-sm rounded-end">';
                                    echo '  <div class="d-flex w-100 justify-content-between">';
                                    echo '    <h5 class="mb-1 fw-bold text-primary">' . htmlspecialchars($fila['nombre']) . '</h5>';
                                    echo '    <small class="text-muted">' . date("d/m/Y H:i", strtotime($fila['fecha_envio'])) . '</small>';
                                    echo '  </div>';
                                    echo '  <p class="mb-1 text-secondary small">' . htmlspecialchars($fila['mensaje']) . '</p>';
                                    echo '</div>';
                                }
                            } else {
                                // Mensaje por defecto si la base de datos está vacía
                                echo '<div class="alert alert-info text-center small" role="alert">';
                                echo '  Aún no se han recibido mensajes. ¡Sé el primero en escribir en la pestaña de contacto!';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <footer class="bg-dark text-light text-center py-3 mt-auto shadow-lg">
        <div class="container">
            <small class="text-secondary">&copy; 2026 Daniel Murga. Todos los derechos reservados. | UTPL Práctica de Desarrollo Web</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>