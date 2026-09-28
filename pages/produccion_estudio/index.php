<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produccion y estudio de grabación</title>
</head>
<link rel="stylesheet" href="/parcial1/pages/produccion_estudio/styles.css">
<link rel="stylesheet" href="/parcial1/index.css">
<?php include '../../components/navbar/navbar.php'; ?>
<body>
<main>
<h1>Producción y estudio de grabación</h1>

<?php 
$produccion = [
    [
        "h2" => "Estudios y locaciones",
        "items" => [
            "La película fue dirigida por Eric Bress y J. Mackye Gruber.",
            "Se filmó principalmente en la ciudad de Vancouver, una locación muy utilizada en cine por su versatilidad para representar distintas ciudades de EE.UU.",
            "También se usaron estudios cerrados para escenas más controladas, especialmente las relacionadas con viajes en el tiempo y momentos psicológicos intensos."
        ],
        "img" => "../../assets/img/produccion_y_estudio/eric_bress.jpg",
        "alt" => "Eric Bress y J. Mackye Gruber, directores de la película, en una entrevista sobre el proceso de producción."
    ],
    [
        "h2" => "Proceso de filmación",
        "items" => [
            "El rodaje se enfocó mucho en cambios de atmósfera para representar las distintas líneas temporales.",
            "Se utilizaron variaciones de iluminación, color y encuadre para diferenciar cada realidad alternativa.",
            "Ashton Kutcher (Evan) tuvo un rol más dramático de lo habitual, alejándose de la comedia, lo cual fue un desafío actoral importante.",
            "Varias escenas se filmaron múltiples veces con pequeñas diferencias para mostrar cómo cambian los eventos según las decisiones del protagonista."
        ],
        "img" => "../../assets/img/produccion_y_estudio/rodaje.jpg",
        "alt" => "Escena del rodaje mostrando a Ashton Kutcher en el set, con el equipo de producción ajustando la iluminación y la cámara."
    ],
    [
        "h2" => "Efectos visuales y edición",
        "items" => [
            "Se emplearon efectos visuales para representar los viajes en el tiempo y las alteraciones de la memoria.",
            "La edición fue crucial para mantener la coherencia narrativa entre las distintas líneas temporales.",
            "Se trabajó con un equipo de postproducción especializado en efectos de transición y montaje no lineal."
        ],
        "img" => "../../assets/img/produccion_y_estudio/efectos.jpg",
        "alt" => "Pantalla de edición mostrando la línea de tiempo con múltiples capas de video y efectos visuales aplicados."
    ]
]
?>

<?php foreach ($produccion as $curiosidad):  ?>
    <section class="curiosidades">

  <div class="sub_curiosidades">
<?php include '../../components/imgCard/index.php'; ?>
</div>
</section>
<?php endforeach; ?>
</main>
</body>
<?php include '../../components/footer/footer.php'; ?>
</html>