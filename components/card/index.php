
<link rel="stylesheet" href="/parcial1/components/imgCard/styles.css">
  <section class="curiosidades">
            <h1><?php echo $item['titulo']; ?></h1>

    <div class="sub_curiosidades">
    <article>        
    
    <p>"El Efecto Mariposa" (2004) trata sobre Evan Treborn (Ashton Kutcher), un joven que descubre que puede viajar al pasado a través de sus diarios infantiles para cambiar eventos traumáticos de su niñez. Al intentar modificar el pasado para mejorar su presente y salvar a sus amigos, cada cambio mínimo genera consecuencias drásticas e imprevistas, empeorando a menudo su situación actual</p>
    </article>
    </div>
    </section>

    
    <section class="curiosidades">
    
        <?php if (!empty($item['subtitulo'])): ?>
            <h1><?php echo $item['subtitulo']; ?></h1>
        <?php endif; ?>

    <div class="sub_curiosidades">    

    <article><p><?php echo $item['descripcion']; ?></p>
</article>
    </div>
</section> 
