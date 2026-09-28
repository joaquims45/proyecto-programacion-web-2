<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmacion</title>
    <link rel="stylesheet" href="/parcial1/styles.css">
    <link rel="stylesheet" href="/parcial1/pages/confirmacion/styles.css">
</head>
<body>
<?php include '../../components/header/header.php'; ?>
<?php
$confirmacionErrores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $apellido = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $mensaje = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';
    $motivo = isset($_POST['motivo']) ? trim($_POST['motivo']) : '';

    if (empty($nombre)) {
        $confirmacionErrores[] = "El nombre es obligatorio.";
    } elseif (strlen($nombre) < 3) {
        $confirmacionErrores[] = "El nombre debe tener al menos 3 caracteres.";
    }

    if (empty($apellido)) {
        $confirmacionErrores[] = "El apellido es obligatorio.";
    }

    if (empty($email)) {
        $confirmacionErrores[] = "El correo electrónico es obligatorio.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $confirmacionErrores[] = "El correo electrónico no es válido.";
    }

    if (empty($mensaje)) {
        $confirmacionErrores[] = "El mensaje es obligatorio.";
    }
} else {
    $confirmacionErrores[] = "No se recibieron datos del formulario.";
}
?>
<main>

<div class="confirmacion">
<?php if (!empty($confirmacionErrores)) {
    foreach ($confirmacionErrores as $error) {
        echo "<h1 class='error'>$error</h1>";
    }
    echo "<img src='/parcial1/assets/contacto-error.png' alt='Error' class='mariposa-fondo'>";
    echo "<a class='boton-volver' href='/parcial1/pages/contacto/index.php'>Volver a intentarlo</a>";
} else {
    if($motivo ==='consulta') {
        echo "<h1>¡Gracias por contactarnos " . htmlspecialchars($nombre) . " " . htmlspecialchars($apellido) . "!</h1>";
    }
    elseif($motivo ==='comentario') {
        echo "<h1>¡Gracias por tu comentario " . htmlspecialchars($nombre) . " " . htmlspecialchars($apellido) . "!</h1>";
    }
    elseif($motivo ==='sugerencia') {
        echo "<h1>¡Gracias por tu sugerencia " . htmlspecialchars($nombre) . " " . htmlspecialchars($apellido) . "!</h1>";
    }
    echo "<img src='/parcial1/assets/contacto.png' alt='Mariposa' class='mariposa-fondo'>";
    echo "<p>Estos son los datos que recibimos de tu mensaje:</p>";
    echo "<ul>";
    echo "<li><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</li>";
    echo "<li><strong>Apellido:</strong> " . htmlspecialchars($apellido) . "</li>";
    echo "<li><strong>Correo electrónico:</strong> " . htmlspecialchars($email) . "</li>";
    echo "<li><strong>Mensaje:</strong> " . htmlspecialchars($mensaje) . "</li>";
    echo "<li><strong>Motivo:</strong> " . htmlspecialchars($motivo) . "</li>";
    echo "</ul>";
    echo "<a class='boton-volver' href='/parcial1/index.php'>Volver al Inicio</a>";
} ?>
</div>
</main>


<?php include '../../components/footer/footer.php'; ?>
</body>
</html>
