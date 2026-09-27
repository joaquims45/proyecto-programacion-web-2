<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Sobre la película</title>
</head>
<link rel="stylesheet" href="/parcial1/pages/sobre_la_pelicula/sobre_la_pelicula.css">
<link rel="stylesheet" href="/parcial1/index.css">
<body>
<header>
        <?php include '../../components/navbar/navbar.php'; ?>
</header>
    
<?php $curiosidades = [
    [
        'h2' => "Linea Original",
        'p' => "Evan Treborn crece con episodios de pérdida de memoria durante su infancia, en momentos traumáticos que no logra recordar. A medida que crece, intenta llevar una vida normal sin entender completamente qué ocurrió en esos eventos.

Ya en su etapa universitaria, descubre que al leer sus diarios personales puede regresar mentalmente a esos momentos del pasado. En esta “línea original”, su vida es relativamente estable, aunque arrastra traumas emocionales y la sensación de que algo en su pasado no está resuelto.

Esta línea representa el punto de partida antes de intervenir en el tiempo.",
        'img' => "/parcial1/assets/img/linea_original.jpg",
        'alt' => "Evan en su línea original, mostrando su vida antes de los cambios en el tiempo."
    ],
    [
        'h2' => "Primer cambio en el pasado",
        'p' => "Evan decide usar su habilidad para volver a uno de los momentos traumáticos de su infancia con la intención de corregirlo y mejorar la vida de las personas que ama, especialmente Kayleigh.

Sin embargo, al alterar ese evento, genera una nueva línea temporal completamente distinta. Aunque su intención era positiva, el cambio provoca efectos inesperados en su presente.

Este primer intento marca el inicio del conflicto central: modificar el pasado no produce resultados controlables.",
        'img' => "/parcial1/assets/img/primer_cambio.jpg",
        'alt' => "Evan en su primer cambio en el pasado, mostrando las consecuencias de su intervención."
    ]
]; ?>

<?php foreach ($curiosidades as $curiosidad) { ?>
    <section>
        <h2><?php echo $curiosidad['h2']; ?></h2>
        <p><?php echo $curiosidad['p']; ?></p>
        <img src="<?php echo $curiosidad['img']; ?>" alt="<?php echo $curiosidad['alt']; ?>">
    </section>
<?php } ?>

<?php include '../../components/footer/footer.php'; ?>
</body>
</html>