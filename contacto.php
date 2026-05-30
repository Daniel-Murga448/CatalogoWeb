<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Daniel Murga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Mi Portal Personal</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Inicio</a>
                <a class="nav-link active" href="contacto.php">Contacto</a>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <?php if (isset($_GET['estado'])): ?>
                    <?php if ($_GET['estado'] == 'exito'): ?>
                        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                            <strong>¡Mensaje enviado!</strong> Los datos se registraron correctamente en la base de datos de forma dinámica.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php elseif ($_GET['estado'] == 'error'): ?>
                        <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                            <strong>Error:</strong> No se pudo guardar el mensaje. Por favor, verifica los campos.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h2 class="card-title fw-bold text-dark h4 mb-3">Formulario de Contacto</h2>
                        <p class="text-muted small mb-4">Escríbeme un mensaje. Al enviarlo, la información se procesará con PHP y se guardará automáticamente en MySQL.</p>
                        
                        <form action="procesar_contacto.php" method="POST">
                            
                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-semibold text-secondary small">Nombre Completo</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej. Pablo Aguilar" required minlength="3" maxlength="100">
                            </div>
                            
                            <div class="mb-3">
                                <label for="correo" class="form-label fw-semibold text-secondary small">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="mensaje" class="form-label fw-semibold text-secondary small">Mensaje o Comentario</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..." required minlength="5"></textarea>
                            </div>
                            
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary fw-bold">Enviar Mensaje</button>
                            </div>
                            
                        </form>
                    </div>
                </div>

            </div>
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