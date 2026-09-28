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
<header>
    <?php include '../../components/navbar/navbar.php'; ?>
</header>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $email = trim($_POST['email']);
    $mensaje = trim($_POST['mensaje']);
    $motivo = trim($_POST['motivo']);

    if (empty($nombre) || empty($apellido) || empty($email) || empty($mensaje)) {
        $error = "Error: Todos los campos son obligatorios.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Error: El correo electrónico no es válido.";
    }
    
}
else {
    $error= "Error: No se recibieron datos del formulario.";
}
?>
<main>

<div class="confirmacion">
<?php if (isset($error)) {
    echo "<h1 class='error'>$error</h1>";
    echo "<img src='/parcial1/assets/contacto-error.png' alt='Error' class='mariposa-fondo'>";
    echo "<a class='boton-volver' href='/parcial1/pages/contacto/index.php'>Volver a intentarlo</a>";
} else {
    echo "<h1>¡Gracias por contactarnos $nombre $apellido!</h1>";
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
