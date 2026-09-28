<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco</title>
    <link rel="stylesheet" href="/parcial1/pages/elenco/styles.css">
    <link rel="stylesheet" href="/parcial1/index.css">
</head>
<body>
<header>
 <?php include '../../components/navbar/navbar.php'; ?>
</header>
<main>
<h1>Reparto de la pelicula </h1>

<?php $elenco = [
    [
        'nombre' => "Ashton Kutcher", 
        'descripcion' => 'Ashton Kutcher interpreta a Evan Treborn, el protagonista de la película. Su personaje carga con traumas de la infancia y descubre que puede regresar a momentos clave de su pasado para intentar cambiarlos. A lo largo de la historia, Evan sostiene el peso dramático del relato y muestra cómo cada decisión altera por completo su vida y la de quienes lo rodean.', 
        'img' => '/parcial1/assets/img/reparto/ashton.jpg'
    ],
    [
        'nombre' => "Amy Smart", 
        'descripcion' => "Amy Smart da vida a Kayleigh Miller, el gran amor de la infancia de Evan y una de las personas más afectadas por los cambios en las líneas temporales. Su personaje representa el costado emocional de la historia, ya que muchas de las decisiones de Evan buscan protegerla o darle una vida mejor, aunque casi siempre con consecuencias inesperadas.",
        'img' => '/parcial1/assets/img/reparto/amy_smart.jpg' 
    ],
    [
       'nombre' => "Eric Stoltz",
       'descripcion' => "Eric Stoltz interpreta a Lenny Kagan, uno de los amigos más cercanos de Evan durante la niñez. Lenny es un personaje sensible y vulnerable, profundamente marcado por los hechos traumáticos que vive junto al grupo. Su evolución en las distintas realidades muestra con claridad cómo pequeños cambios del pasado pueden transformar por completo el destino de una persona.",
       'img' => '/parcial1/assets/img/reparto/eric_stoltz.jpg' 
    ],
    [
        'nombre' => "Logan Lerman",
        'descripcion' => "Logan Lerman encarna a Evan Treborn en su etapa infantil. Su participación es fundamental porque en esos recuerdos y momentos de la niñez se originan los conflictos que luego el protagonista adulto intentará corregir. Gracias a su interpretación se entiende mejor la fragilidad emocional del personaje desde sus primeros años.",
        'img' => '/parcial1/assets/img/reparto/logan_lerman.jpg'
    ],
    [
        'nombre' => "Elden Henson",
        'descripcion' => "Elden Henson interpreta a Lenny Kagan en su versión adulta. Su personaje permite ver el impacto que los sucesos del pasado tienen a largo plazo y cómo cada línea temporal modifica su personalidad, su estabilidad emocional y su vínculo con Evan. Es una pieza importante para evidenciar las consecuencias del llamado efecto mariposa.",
        'img' => '/parcial1/assets/img/reparto/elden_henson.jpg'
    ],
    [
        'nombre' => "Melora Walters",
        'descripcion' => "Melora Walters interpreta a Andrea Treborn, la madre de Evan. Ella cumple un rol clave en la dimensión más humana de la película, ya que acompaña a su hijo mientras intenta comprender sus pérdidas de memoria, sus cambios de conducta y el peso de su pasado. Su presencia aporta contención emocional en medio del tono oscuro del film.",
        'img' => '/parcial1/assets/img/reparto/melora_walters.jpg'
    ],
    [ 
        'nombre' => "Willian Lee Scott",
        'descripcion' => "William Lee Scott interpreta a Tommy Miller, el hermano de Kayleigh. Tommy es uno de los personajes más violentos y perturbadores de la trama, y su conducta influye directamente en varios de los traumas que marcan a los protagonistas. En cada realidad alternativa, su destino y su comportamiento ayudan a mostrar el lado más crudo de la historia.",
        'img' => '/parcial1/assets/img/reparto/william_lee_scott.jpg'
    ],
    [
        'nombre' => "Ethan Suplee",
        'descripcion' => "Ethan Suplee interpreta a Thumper, amigo de Tommy y presencia amenazante en varios momentos de la película. Aunque no es el personaje central, su participación refuerza el clima de violencia y tensión que rodea a Evan y a su grupo desde la infancia. Su figura ayuda a construir el entorno hostil del que surgen muchos de los conflictos.",
        'img' => '/parcial1/assets/img/reparto/ethan_suplee.jpg'
    ],
    [
        'nombre' => "Irene Gorovaia",
        'descripcion' => "Irene Gorovaia interpreta a Kayleigh Miller en su etapa infantil. Su personaje es esencial para comprender el vínculo que une a Kayleigh con Evan desde pequeños y por qué él intenta cambiar tantas veces el pasado para protegerla. Su presencia en las escenas de infancia refuerza el tono sensible y trágico de la película.",
        'img' => '/parcial1/assets/img/reparto/irene_gorovaia.jpg'
    ]
]?>

<section class="elenco">
<?php foreach ($elenco as $actor): ?>
    <article class="reparto">
        <h1><?php echo $actor['nombre']; ?></h1>
        <p><?php echo $actor['descripcion']; ?></p>
        <img src="<?php echo $actor['img']; ?>" alt="<?php echo $actor['nombre']; ?>">
    </article>
<?php endforeach; ?>
</section>
</main>
    


<?php include '../../components/footer/footer.php'; ?>
</body>
</html>