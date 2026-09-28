<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="/parcial1/pages/contacto/styles.css">
    <link rel="stylesheet" href="/parcial1/styles.css">
</head>
<body>
<header>
    <?php include '../../components/navbar/navbar.php'; ?>
</header>
<main>


<h1>Contacto</h1>

    <div class="contacto-contenedor">
        <img class="mariposa-fondo mariposa-derecha" src="/parcial1/assets/mariposa_fondo.svg" alt="">

        <section class="bloque-formulario">
            <h2>Envíanos tu mensaje</h2>
            <p class="texto-intro">Completa el formulario para compartir tu consulta o comentario sobre la película.</p>

            <form class="form-contacto" action="/parcial1/pages/confirmacion/index.php" method="POST">
                <div class="form-grupo">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required placeholder="Ingrese su nombre">
                </div>

                <div class="form-grupo">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" required placeholder="Ingrese su apellido">
                </div>

                <div class="form-grupo">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" required placeholder="Ingrese su correo">
                </div>

                <div class="form-grupo">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="5" required placeholder="Ingrese su mensaje"></textarea>
                </div>

                <div class =form-grupo>
                    <label for="motivo">Motivo</label>
                    <select id="motivo" name="motivo" required>
                        <option value='consulta'>Consulta</option>
                        <option value='comentario'>Comentario</option>
                        <option value='sugerencia'>Sugerencia</option>
                    </select>
                </div>

                <button type="submit">Enviar</button>
            </form>
        </section>

        <section class="bloque-redes">
            <h2>Redes Sociales</h2>
            <p>El contenido oficial y la gestión de comunidad de El Efecto Mariposa están centralizados en las plataformas globales de Warner Bros. Discovery. Puedes encontrar material adicional y noticias en sus canales oficiales.</p>

            <ul class="lista-redes">
                <li><a href="https://www.facebook.com/warnerbrospicturesargentina/?locale=es_LA" target="_blank" rel="noopener noreferrer" class="redes_sociales">Facebook</a></li>
                <li><a href="https://www.youtube.com/@WarnerBrosPicturesLA" target="_blank" rel="noopener noreferrer" class="redes_sociales">YouTube</a></li>
                <li><a href="https://www.instagram.com/warnerbros" target="_blank" rel="noopener noreferrer" class="redes_sociales">Instagram</a></li>
                <li><a href="https://twitter.com/warnerbros" target="_blank" rel="noopener noreferrer" class="redes_sociales">Twitter</a></li>
                <li><a href="https://www.hbomax.com/ar/es/movies/el-efecto-mariposa/db74e28a-02ba-4738-8356-7d758db351c1" target="_blank" rel="noopener noreferrer" class="redes_sociales">HBO Max</a></li>
            </ul>
        </section>
    </div>
</main>

<?php include '../../components/footer/footer.php'; ?>
</body>
</html>