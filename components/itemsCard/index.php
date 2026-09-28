<link rel="stylesheet" href="/parcial1/components/itemsCard/styles.css">
<section class="curiosidades">

    <h1><?php echo $item['titulo']; ?></h1>

    <?php foreach ($item['items'] as $subitem): ?>
    <div class="sub_curiosidades">
    <h2><?php echo $subitem['subtitulo']; ?></h2>

    <article><p><?php echo $subitem['descripcion']; ?></p></article>
    </div>
    <?php endforeach; ?>
</section>
