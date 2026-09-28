<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curiosidades y Premios</title>
    <link rel="stylesheet" href="/parcial1/styles.css">
</head>

<?php $curiosidades = [
    [
    'titulo' => "Curiosidades",
    'items' => [
        [
            'subtitulo' => "Finales alternativos",
            'descripcion' => "Esta es probablemente la curiosidad más famosa. Existen cuatro finales diferentes. El más impactante (y oscuro) se encuentra en la versión del director, donde el protagonista toma una decisión drástica desde el vientre materno para evitar que la tragedia ocurra, cortando el ciclo de raíz."
        ],
        [
            'subtitulo' => "Preparación extrema de Ashton Kutcher",
            'descripcion' => "Para alejarse de su imagen de comediante en That '70s Show, Kutcher se tomó el papel muy en serio. Investigó a fondo sobre psicología, trastornos mentales y la teoría del caos. Incluso estudió de cerca casos de pacientes reales para retratar las lagunas mentales de su personaje."
        ],
        [
            'subtitulo' => "EL origen del titulo",
            'descripcion' => 'El título hace referencia a la famosa frase de Edward Lorenz sobre la Teoría del Caos: "El aleteo de las alas de una mariposa puede provocar un tifón al otro lado del mundo". La película visualiza esto mostrando cómo un pequeño cambio en la infancia de Evan altera drásticamente su vida adulta.',
        ],
        [
            'subtitulo' => "Problemas de presupuesto",
            'descripcion' => "Debido a que muchas productoras no confiaban en el guion (lo consideraban demasiado oscuro o complejo), el presupuesto fue limitado. Sin embargo, la película fue un éxito comercial masivo, recaudando casi 100 millones de dólares frente a un presupuesto de solo 13 millones."
        ]
    ]
    ],
    [
    'titulo' => "Premios y Reconocimientos",
    'items' => [
        [
            'subtitulo' => 'Festival Internacional de Cine de Ciencia Ficción de Bruselas:',
            'descripcion' => 'Ganó el premio Pegasus Audience Award, lo que confirma que fue una favorita absoluta de la audiencia.'
        ],
        [
            'subtitulo' => 'Premios Saturn (Academy of Science Fiction, Fantasy & Horror Films):',
            'descripcion' => 'Fue nominada a Mejor Película de Ciencia Ficción, compitiendo con grandes producciones de ese año.'
        ],
        [
            'subtitulo' => 'Teen Choice Awards',
            'descripcion' => 'Ashton Kutcher recibió una nominación a Mejor Actor por su interpretación, destacando su transición exitosa al drama.'
        ]
    ]
    ]
]; ?>
<body>
<header>
    <?php include '../../components/navbar/navbar.php'; ?>
</header>
<main>
    <div>
    <?php foreach ($curiosidades as $item): ?>
        <?php include '../../components/itemsCard/index.php'; ?>
    <?php endforeach; ?>
    </div>
</main>


<?php include '../../components/footer/footer.php'; ?>
</body>
</html>