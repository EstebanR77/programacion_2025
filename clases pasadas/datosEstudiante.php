<?php
// include  'clases.php';
require 'clases.php';

$Estudiante= new Estudiante($_POST['nombre'], $_POST['apellido'], $_POST['Edad']);
$Estudiante->set('Edad', $_POST['Edad']);
$Estudiante->set('email', $_POST['correo']);
echo $_POST['nombre'];
if($Edad>=18){
    echo"Es mayor de edad"
}
else{
    echo "Es menor de Edad"
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Estudiante</title>
</head>
<body>
    <h1>Los Datos del Estudiante son:</h1>
    <div>
        <?php echo $Estudiante->nombrecompleto();
    </div>
</body>
</html>