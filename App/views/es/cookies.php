<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es/gestion-de-cookies")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/gestion-de-cookies")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/cookieen-kudeaketa")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/gestion-de-cookies")) ?>" />
        <title>Gestión de cookies | El Forajido Burger Wagon</title>
        <meta name="description" content="Qué cookies y qué almacenamiento del navegador usa la web de El Forajido Burger Wagon y cómo cambiar tu consentimiento." />
        <meta name="robots" content="noindex, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:site_name" content="El Forajido Burger Wagon" />
        <meta property="og:title" content="Gestión de cookies | El Forajido Burger Wagon" />
        <meta property="og:description" content="Qué cookies y qué almacenamiento del navegador usa la web de El Forajido Burger Wagon y cómo cambiar tu consentimiento." />
        <meta property="og:url" content="<?= e(app_url("/es/gestion-de-cookies")) ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?= vite_tags($route["resources"] ?? null) ?>
        <?php require app_path("includes/cookielad.php"); ?>
    </head>
    <body>
        <?php require app_path("includes/es/nav02.php"); ?>

        <header class="header01-bis header01-bis--centrado">
            <div class="header01-bis__inner">
                <div class="header01-bis__content">
                    <p class="h2Especial-bis">
                        <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                        <span aria-hidden="true">★</span> Información legal <span aria-hidden="true">★</span>
                        <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                    </p>
                    <h1 class="header01-bis__titulo">Gestión de cookies</h1>
                    <p class="header01-bis__text">Qué guarda esta web en tu navegador y cómo puedes cambiarlo.</p>
                </div>
            </div>
        </header>

        <main>
            <div class="sect02-bis">
                <div class="sect02-bis__contenido">
                    <div class="artLegal01">
                        <p class="artLegal01__fecha">Última actualización: 26 de noviembre de 2026</p>

                        <section class="artLegal01__apartado" aria-labelledby="gestion-de-cookies-1-es">
                            <h2 id="gestion-de-cookies-1-es" class="artLegal01__titulo">1. Qué son las cookies</h2>
                            <p>Las cookies son pequeños archivos que una web guarda en tu navegador para recordar información entre visitas. Esta web también usa el almacenamiento local del navegador, que funciona de forma parecida.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="gestion-de-cookies-2-es">
                            <h2 id="gestion-de-cookies-2-es" class="artLegal01__titulo">2. Qué usamos en esta web</h2>
                            <div class="artLegal01__tabla">
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Para qué sirve</th>
                                            <th scope="col">Titular</th>
                                            <th scope="col">Duración</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Preferencias de cookies</td>
                                            <td>Técnica, necesaria</td>
                                            <td>Recordar lo que has elegido en el panel de cookies.</td>
                                            <td>cookieLAD (webda.eus)</td>
                                            <td>La indicada en el panel de cookies</td>
                                        </tr>
                                        <tr>
                                            <td><code>elForajido.carrito</code> (almacenamiento local)</td>
                                            <td>Técnica, necesaria</td>
                                            <td>Guardar las hamburguesas de tu carrito mientras navegas.</td>
                                            <td>Propia</td>
                                            <td>Hasta que vacíes el carrito o borres los datos del navegador</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>Las cookies técnicas son necesarias para que la web funcione y no requieren tu consentimiento.</p>
                            <p>El panel de cookies también incluye las categorías de personalización, analítica, marketing y redes sociales. Las cookies de esas categorías solo se activan si las aceptas. Los enlaces a Instagram y TikTok son enlaces normales: no cargan contenido de esas redes en esta web.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="gestion-de-cookies-3-es">
                            <h2 id="gestion-de-cookies-3-es" class="artLegal01__titulo">3. Cómo cambiar o retirar tu consentimiento</h2>
                            <p>La primera vez que entras en la web aparece el panel de cookies, donde puedes aceptar, rechazar o elegir cada categoría. Puedes cambiar tu elección en cualquier momento desde ese mismo panel.</p>
                            <p>También puedes borrar o bloquear las cookies desde la configuración de tu navegador:</p>
                            <ul>
                                <li><a href="https://support.google.com/chrome/answer/95647?hl=es" target="_blank" rel="noopener noreferrer">Google Chrome<span class="artLegal01__oculto"> (se abre en una pestaña nueva)</span></a></li>
                                <li><a href="https://support.mozilla.org/es/kb/Borrar%20cookies" target="_blank" rel="noopener noreferrer">Mozilla Firefox<span class="artLegal01__oculto"> (se abre en una pestaña nueva)</span></a></li>
                                <li><a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer">Safari<span class="artLegal01__oculto"> (se abre en una pestaña nueva)</span></a></li>
                                <li><a href="https://support.microsoft.com/es-es/microsoft-edge/eliminar-las-cookies-en-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge<span class="artLegal01__oculto"> (se abre en una pestaña nueva)</span></a></li>
                            </ul>
                            <p>Si bloqueas el almacenamiento local, el carrito no podrá guardar tu pedido entre páginas.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="gestion-de-cookies-4-es">
                            <h2 id="gestion-de-cookies-4-es" class="artLegal01__titulo">4. Más información</h2>
                            <p>Los datos personales que se obtengan a través de las cookies se tratan según la <a href="<?= url("/es/politica-de-privacidad") ?>">política de privacidad</a>. Para cualquier duda, escríbenos a <a href="mailto:hola@elforajido.es">hola@elforajido.es</a>.</p>
                        </section>
                    </div>
                </div>
            </div>
        </main>

        <?php require app_path("includes/es/footer02.php"); ?>
        <?php require app_path("includes/es/carrito.php"); ?>
    </body>
</html>
