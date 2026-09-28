<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El efecto mariposa</title>
</head>
<link rel="stylesheet" href="/parcial1/styles.css">

<body>
    
<header>
    <?php include './components/navbar/navbar.php'; ?>
</header>

    <main>
        <img class="imagen-promocional" src="./assets/img/imagen_promocional.jpg" alt="Imagen promocional de la película El efecto mariposa">



    <article class="informacion-index">
        <section class="video-promocional">
            <p>Evan descubre que puede volver a momentos clave de su pasado… pero cada intento de corregirlos desencadena consecuencias impredecibles.
            Lo que parece una segunda oportunidad se convierte en un juego peligroso donde nada sale como se espera.</p>
            <iframe src="https://www.youtube.com/embed/Dm85GVKK_KM" frameborder="0"></iframe>
    
    </section>
    

    <?php 
    $informacion = [
        "Director" => "Eric Bress y J. Mackye Gruber",
        "Año de estreno" => "2004",
        "Duración" => "113 minutos (versión original de cine)",
        "Género" => "Ciencia ficción, thriller psicológico, drama",
        "Clasificación" => "R (contenido violento, sexual y perturbador)",
        "Recaudación mundial" => "~96 millones de USD"
    ];
    ?>
    <aside><ul>
        <?php foreach ($informacion as $clave => $valor): ?>
            <li><strong><?php echo $clave; ?></strong>: <?php echo $valor; ?></li>
        <?php endforeach; ?>
    </ul></aside>
</article>
    </main>
</body>

<?php include './components/footer/footer.php'; ?>

</html>