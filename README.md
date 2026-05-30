Portal Web Personal y Buzón de Contacto Dinámico de Daniel Murga

Descripción del Proyecto
Este proyecto consiste en un sitio web personal responsivo desarrollado como parte de las prácticas que se han realizado y aprendido en clases. El portal implementa una arquitectura web básica utilizando HTML5 semántico, estilos personalizados integrados con el framework Bootstrap 5 y un backend dinámico en PHP conectado a una base de datos MySQL.

El sitio cuenta con una sección biográfica y un sistema de buzón de mensajes en tiempo real, además de un formulario de contacto validado en múltiples capas.

Enlace del Proyecto Desplegado
El sitio web se encuentra completamente activo y funcional en el siguiente hosting gratuito:
"http://danielmurgautpl.great-site.net"

Tecnologías Utilizadas
Frontend:HTML5, CSS3 (Diseño en Modo Oscuro Minimalista), Bootstrap 5.
Backend:PHP 8 (Programación estructurada y manejo de variables globales).
Base de Datos: MySQL / MariaDB (Estructura relacional con mitigación de Inyección SQL).
Hosting:InfinityFree (Servidor de despliegue en la nube).

 Estructura de Archivos del Proyecto
index.php: Página principal que carga la biografía, hobbies y despliega el buzón de mensajes dinámicos consumidos desde MySQL.
contacto.php: Interfaz del formulario con validaciones nativas en el cliente (HTML5) y renderizado de alertas de estado (GET).
procesar_contacto.php: Lógica del lado del servidor encargada de limpiar los datos (trim), validar el formato del email, y ejecutar de forma segura las consultas preparadas (Prepared Statements) hacia la base de datos.
conexion.php: Script de conexión centralizado que inicializa el objeto mysqli y gestiona el juego de caracteres (utf8mb4).
estilos.css: Hoja de estilos personalizada para la interfaz y paletas del modo oscuro.
mi_foto.jpeg: Recurso multimedia (fotografía de perfil mia).

Instrucciones de Uso
1. Acceder al enlace público que puse el link arriba.
2. Navegue a la pestaña "Contacto".
3. Ingrese su Nombre, Correo Electrónico y Mensaje (el sistema cuenta con validaciones de longitud y formato).
4. Presione "Enviar Mensaje". Será redirigido con un banner de éxito.
5. Regrese a la pestaña "Inicio" y observe cómo su mensaje aparece listado de manera inmediata en el buzón de mensajes en tiempo real.

(Nota: la hora reflejada corresponde a la zona horaria del servidor de alojamiento de InfinityFree y no a la hora local de Ecuador, lo que evidencia la correcta sincronización automática del campo TIMESTAMP en la nube).
