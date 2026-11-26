<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es/pedidos")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/pedidos")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/eskaerak")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/pedidos")) ?>" />
        <title>Pedidos para llevar | El Forajido Burger Wagon</title>
        <meta
            name="description"
            content="Haz tu pedido de hamburguesas para llevar: déjanos tu nombre y teléfono y te llamamos para confirmarlo."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:site_name" content="El Forajido Burger Wagon" />
        <meta property="og:title" content="Pedidos para llevar | El Forajido Burger Wagon" />
        <meta
            property="og:description"
            content="Haz tu pedido de hamburguesas para llevar: déjanos tu nombre y teléfono y te llamamos para confirmarlo."
        />
        <meta property="og:url" content="<?= e(app_url("/es/pedidos")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/views/matrix-1.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Pedidos para llevar | El Forajido Burger Wagon" />
        <meta
            name="twitter:description"
            content="Haz tu pedido de hamburguesas para llevar: déjanos tu nombre y teléfono y te llamamos para confirmarlo."
        />
        <meta name="twitter:image" content="<?= e(app_url("assets/img/views/matrix-1.webp")) ?>" />
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
                        <span aria-hidden="true">★</span> Pedidos <span aria-hidden="true">★</span>
                        <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                    </p>
                    <h1 class="header01-bis__titulo">Pide para llevar</h1>
                    <p class="header01-bis__text">Rellena el pedido y te llamamos para confirmarlo. Si ya has llenado el carrito, lo verás en el formulario.</p>
                </div>
            </div>
        </header>

        <main>
            <section class="sect02-bis" aria-labelledby="pedidos-seccion-es">
                <div class="sect02-bis__contenido">
                    <h2 id="pedidos-seccion-es" class="sect02-bis__titulo sect02-bis__titulo--oculto">Haz tu pedido</h2>

                    <div class="sect02-bis__dividido sect02-bis__dividido--asimetrico">
                        <article class="artForm02-bis" id="pedidos-formulario-es" aria-labelledby="pedidos-formulario-titulo-es">
                            <div class="artForm02-bis__cabecera">
                                <h3 id="pedidos-formulario-titulo-es" class="artForm02-bis__titulo">Pedido</h3>
                                <p class="artForm02-bis__sello" aria-hidden="true">Para llevar</p>
                            </div>

                            <form
                                id="idForAjax"
                                class="artForm02-bis__formulario"
                                action="<?= e(app_url("/app/artForm02")) ?>"
                                method="post"
                                aria-labelledby="pedidos-formulario-titulo-es"
                                data-carrito-pedido
                            >
                                <div class="artForm02-bis__rejilla">
                                    <div class="artForm02-bis__campo">
                                        <label class="artForm02-bis__etiqueta" for="nombreAjax">Nombre</label>
                                        <input
                                            class="artForm02-bis__control"
                                            type="text"
                                            id="nombreAjax"
                                            name="nombre"
                                            placeholder="Billy el Niño"
                                            minlength="3"
                                            maxlength="40"
                                            autocomplete="name"
                                            required
                                        />
                                    </div>

                                    <div class="artForm02-bis__campo">
                                        <label class="artForm02-bis__etiqueta" for="telefonoAjax">Teléfono</label>
                                        <input
                                            class="artForm02-bis__control"
                                            type="tel"
                                            id="telefonoAjax"
                                            name="telefono"
                                            placeholder="+34 600 000 000"
                                            autocomplete="tel"
                                            required
                                        />
                                    </div>

                                    <!-- Resumen del carrito: moduloCarrito01 lo muestra si hay hamburguesas en el carrito. -->
                                    <div class="artForm02-bis__pedido artForm02-bis__campo--ancho" data-carrito-resumen hidden>
                                        <p class="artForm02-bis__etiqueta">Tu carrito</p>
                                        <ul class="artForm02-bis__pedidoLista" data-carrito-resumen-lista></ul>
                                        <p class="artForm02-bis__pedidoTotal">
                                            Total: <strong data-carrito-resumen-total></strong>
                                        </p>
                                    </div>

                                    <div class="artForm02-bis__campo artForm02-bis__campo--ancho">
                                        <label class="artForm02-bis__etiqueta" for="mensajeAjax">Mensaje</label>
                                        <textarea
                                            class="artForm02-bis__control artForm02-bis__control--area"
                                            name="mensaje"
                                            id="mensajeAjax"
                                            placeholder="Dos Forajido sin cebolla y una Diligencia. STOP."
                                            minlength="4"
                                            maxlength="200"
                                            required
                                        ></textarea>
                                    </div>
                                </div>

                                <div class="artForm02-bis__linea">
                                    <input type="checkbox" name="terminos" id="terminosAjax" required />
                                    <label for="terminosAjax"
                                        >Acepto que se usen mis datos para preparar y confirmar este pedido, según la <a href="<?= url("/es/politica-de-privacidad") ?>" target="_blank" rel="noopener">política de privacidad<span class="artForm02-bis__oculto"> (se abre en una pestaña nueva)</span></a></label
                                    >
                                </div>

                                <div class="artForm02-bis__linea">
                                    <label for="respuestaajax">Resuelve esta operación:</label>
                                    <span class="artForm02-bis__operacion">
                                        <span id="num1ajax"></span>
                                        <span id="operadorajax"></span>
                                        <span id="num2ajax"></span>
                                        =
                                    </span>
                                    <input
                                        class="artForm02-bis__control artForm02-bis__control--corto"
                                        type="text"
                                        name="respUser"
                                        id="respuestaajax"
                                        inputmode="numeric"
                                        autocomplete="off"
                                        required
                                    />
                                    <input type="hidden" name="respSystem" id="respSystemajax" value="" />
                                </div>

                                <p class="artForm02-bis__error" id="errorForm02" aria-live="assertive"></p>

                                <input type="hidden" name="url" value="<?= e($url) ?>" />
                                <input type="hidden" name="lang" value="<?= e($lang) ?>" />
                                <input type="hidden" name="tipo" value="pedido" />
                                <input type="hidden" name="pedido" value="" />
                                <input class="artForm02-bis__enviar" type="submit" value="Enviar pedido ★" id="botonEnviarAjax" />
                            </form>

                            <div id="modal_envio" aria-live="polite">
                                <h4 id="h3_modal_envio" class="artForm02-bis__enviadoTitulo">Pedido enviado</h4>
                                <p id="p_modal_envio" class="artForm02-bis__enviadoTexto">Hemos recibido tu pedido.</p>
                                <button class="artForm02-bis__otro" id="boton_modal_envio" type="button">Hacer otro pedido</button>
                            </div>

                            <div class="moduloLoader01" id="moduloLoader01" role="status" aria-label="Enviando pedido">
                                <svg viewBox="0 0 50 50" aria-hidden="true">
                                    <circle
                                        cx="25"
                                        cy="25"
                                        r="20"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="5"
                                        stroke-linecap="round"
                                        stroke-dasharray="90 40"
                                    >
                                        <animateTransform
                                            attributeName="transform"
                                            type="rotate"
                                            from="0 25 25"
                                            to="360 25 25"
                                            dur="1s"
                                            repeatCount="indefinite"
                                        />
                                    </circle>
                                </svg>
                            </div>
                        </article>

                        <div class="sect02-bis__columna sect02-bis__columna--estirada">
                            <article class="artContacto01" aria-labelledby="pedidos-saloon-es">
                                <h3 id="pedidos-saloon-es" class="artContacto01__titulo">El Saloon</h3>
                                <ul class="artContacto01__lista">
                                    <li class="artContacto01__item">
                                        <span class="artContacto01__icono" aria-hidden="true">☎</span>
                                        <p class="artContacto01__etiqueta">Teléfono / WhatsApp</p>
                                        <p class="artContacto01__valor">
                                            <a class="artContacto01__enlace" href="tel:+34600000000">+34 600 000 000</a>
                                        </p>
                                    </li>
                                    <li class="artContacto01__item">
                                        <span class="artContacto01__icono" aria-hidden="true">✉</span>
                                        <p class="artContacto01__etiqueta">Correo</p>
                                        <p class="artContacto01__valor">
                                            <a class="artContacto01__enlace" href="mailto:hola@elforajido.es">hola@elforajido.es</a>
                                        </p>
                                    </li>
                                    <li class="artContacto01__item">
                                        <span class="artContacto01__icono" aria-hidden="true">◷</span>
                                        <p class="artContacto01__etiqueta">Horario</p>
                                        <p class="artContacto01__valor">Mar – Dom · 13:00 a 00:00</p>
                                    </li>
                                    <li class="artContacto01__item">
                                        <span class="artContacto01__icono" aria-hidden="true">★</span>
                                        <p class="artContacto01__etiqueta">Redes</p>
                                        <p class="artContacto01__valor">@elforajidoburger</p>
                                    </li>
                                </ul>
                            </article>

                            <article class="artEvento01" aria-labelledby="pedidos-carta-es">
                                <h3 id="pedidos-carta-es" class="artEvento01__titulo">¿Aún no has elegido?</h3>
                                <p class="artEvento01__texto">Añade tus hamburguesas al carrito desde la carta y vuelve aquí para enviar el pedido.</p>
                                <a class="moduloBoton03 moduloBoton03--contorno" href="<?= url("/es/nuestras-hamburguesas") ?>">Ver la carta</a>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <?php require app_path("includes/es/footer02.php"); ?>
        <?php require app_path("includes/es/carrito.php"); ?>
    </body>
</html>
