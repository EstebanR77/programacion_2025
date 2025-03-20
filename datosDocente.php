<?php
// include  'clases.php';
require 'clases.php';

$docente = new Docente($_POST['nombre'], $_POST['apellido']);
$docente->set('email', $_POST['correo']);
echo $_POST['nombre'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos docente</title>
</head>
<body>
    <h1>Los Datos del Docente son:</h1>
    <div>
        <?php echo $docente->nombrecompleto()?>;
    </div>
</body>
</html>