<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Sobre la película</title>
</head>
<link rel="stylesheet" href="/parcial1/pages/sobre_la_pelicula/index.css">
<link rel="stylesheet" href="/parcial1/index.css">
<body>
<header>
        <?php include '../../components/navbar/navbar.php'; ?>
</header>
<main class="pagina-sobre">
<?php $array =[
    [
    'titulo' => "Sinopsis",
    'descripcion' => "Desde un punto de vista personal, 'El Efecto Mariposa' destaca por mostrar que cambiar el pasado no siempre resuelve el dolor, sino que muchas veces lo transforma en nuevas formas de sufrimiento. La película logra generar tensión no por grandes efectos especiales, sino por la angustia de ver cómo cada decisión modifica la vida de los personajes. Su impacto en el cine se nota en cómo ayudó a popularizar historias sobre líneas temporales, destinos alternativos y consecuencias imprevisibles, convirtiéndose con el tiempo en una película de culto para muchos espectadores.",
    ],
    [
        'titulo' => "Analisis e impacto",
        'descripcion' => "Desde un punto de vista personal, 'El Efecto Mariposa' destaca por mostrar que cambiar el pasado no siempre resuelve el dolor, sino que muchas veces lo transforma en nuevas formas de sufrimiento. La película logra generar tensión no por grandes efectos especiales, sino por la angustia de ver cómo cada decisión modifica la vida de los personajes. Su impacto en el cine se nota en cómo ayudó a popularizar historias sobre líneas temporales, destinos alternativos y consecuencias imprevisibles, convirtiéndose con el tiempo en una película de culto para muchos espectadores.",

    ]
];
$curiosidades = [
    [
        'h2' => "Linea Original",
        'p' => "Evan Treborn crece con episodios de pérdida de memoria durante su infancia, en momentos traumáticos que no logra recordar. A medida que crece, intenta llevar una vida normal sin entender completamente qué ocurrió en esos eventos.

Ya en su etapa universitaria, descubre que al leer sus diarios personales puede regresar mentalmente a esos momentos del pasado. En esta “línea original”, su vida es relativamente estable, aunque arrastra traumas emocionales y la sensación de que algo en su pasado no está resuelto.

Esta línea representa el punto de partida antes de intervenir en el tiempo.",
        'img' => "/parcial1/assets/img/sobre_la_pelicula/imagen1.jpg",
        'alt' => "Evan en su línea original, mostrando su vida antes de los cambios en el tiempo."
    ],
    [
        'h2' => "Primer cambio en el pasado",
        'p' => "Evan decide usar su habilidad para volver a uno de los momentos traumáticos de su infancia con la intención de corregirlo y mejorar la vida de las personas que ama, especialmente Kayleigh.

Sin embargo, al alterar ese evento, genera una nueva línea temporal completamente distinta. Aunque su intención era positiva, el cambio provoca efectos inesperados en su presente.

Este primer intento marca el inicio del conflicto central: modificar el pasado no produce resultados controlables.",
        'img' => "/parcial1/assets/img/sobre_la_pelicula/imagen2.jpg",
        'alt' => "Evan en su primer cambio en el pasado, mostrando las consecuencias de su intervención."
    ],
    [
        'h2' => "Consecuencias inesperadas",
        'p' => "Cada vez que Evan cambia un evento del pasado, su presente se transforma de maneras drásticas e impredecibles. En algunas líneas temporales, su vida mejora, pero la de otros empeora gravemente; en otras, él mismo sufre consecuencias extremas.

        Las relaciones cambian, los destinos de los personajes se alteran, e incluso su propia identidad se ve afectada. Esto refleja el concepto del “efecto mariposa”: pequeñas modificaciones generan grandes consecuencias.

        Evan comienza a entender que no puede controlar completamente los resultados de sus acciones, y que cada decisión tiene un costo.
        ",
        'img' => '/parcial1/assets/img/sobre_la_pelicula/imagen3.jpg',
        'alt' => 'Evan y sus amigos enfrentando las consecuencias de sus cambios en el pasado, mostrando la complejidad de las líneas temporales alteradas.'
    ],
    [
        'h2' => "Final alternativo",
        'p' => "La película presenta distintos finales (dependiendo de la versión), pero el más conocido muestra a Evan tomando una decisión radical: evitar completamente su relación con Kayleigh desde el inicio.

        Para lograrlo, vuelve a un momento clave de la infancia y actúa de manera que ambos se separen definitivamente. Este sacrificio evita muchos de los eventos traumáticos que ocurrían en las otras líneas temporales.

        El final plantea una reflexión fuerte: a veces, la única forma de evitar el daño es renunciar a lo que más se desea. También refuerza la idea de que no existe una solución perfecta, sino decisiones con diferentes consecuencias.",
        'img' => '/parcial1/assets/img/sobre_la_pelicula/imagen4.jpg',
        'alt' => 'Evan tomando la decisión final de separarse de Kayleigh',
    ]
]; ?>

<?php foreach ($array as $item): ?>
<?php include '../../components/card/index.php'; ?>
<?php endforeach; ?>

    <?php foreach ($curiosidades as $curiosidad) { ?>
 <div class="sub_curiosidades">
<?php include '../../components/imgCard/index.php'; ?>
</div>
<?php } ?>
</main>

<?php include '../../components/footer/footer.php'; ?>
</body>
</html>