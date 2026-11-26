<?php http_response_code(404); ?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <title>Página no encontrada | Stack</title>
        <meta
            name="description"
            content="La página solicitada no existe o ha cambiado de dirección. Vuelve al inicio o consulta los servicios de Stack."
        />
        <meta name="robots" content="noindex, nofollow" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?= vite_tags($route["resources"] ?? null) ?>
        <?php require app_path("includes/cookielad.php"); ?>
    </head>
    <body>
        <?php require app_path("includes/es/nav.php"); ?>

        <main>
            <section aria-labelledby="error404-es">
                <article class="art16">
                    <div>
                        <h1 id="error404-es">No encontramos esa página</h1>
                        <p>
                            Es posible que el enlace haya cambiado o que la dirección no esté escrita correctamente.
                            Puedes volver al inicio, revisar los servicios o enviar una consulta.
                        </p>
                        <a href="<?= url("/es") ?>" class="boton" title="Volver al inicio de Stack">Volver al inicio</a>
                        <a href="<?= url("/es/nuestras-hamburguesas") ?>" class="boton" title="Ver los servicios de ejemplo">Ver servicios</a>
                        <a href="<?= url("/es/eventos") ?>" class="boton" title="Contactar con Stack">Ir a contacto</a>
                    </div>
                    <div>
                        <img src="<?= asset("assets/img/views/matrix-1.webp") ?>" width="480" height="207" alt="Matrix" title="Matrix" decoding="async" />
                    </div>
                </article>
            </section>
        </main>

        <?php require app_path("includes/es/footer.php"); ?>
    </body>
</html>
