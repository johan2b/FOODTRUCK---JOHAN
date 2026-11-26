<!doctype html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/eu/eskaerak")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/pedidos")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/eskaerak")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/pedidos")) ?>" />
        <title>Eramateko eskaerak | El Forajido Burger Wagon</title>
        <meta
            name="description"
            content="Egin zure hanburgesa-eskaera eramateko: utzi zure izena eta telefonoa eta deituko dizugu berresteko."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="eu_ES" />
        <meta property="og:site_name" content="El Forajido Burger Wagon" />
        <meta property="og:title" content="Eramateko eskaerak | El Forajido Burger Wagon" />
        <meta
            property="og:description"
            content="Egin zure hanburgesa-eskaera eramateko: utzi zure izena eta telefonoa eta deituko dizugu berresteko."
        />
        <meta property="og:url" content="<?= e(app_url("/eu/eskaerak")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/views/matrix-1.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Eramateko eskaerak | El Forajido Burger Wagon" />
        <meta
            name="twitter:description"
            content="Egin zure hanburgesa-eskaera eramateko: utzi zure izena eta telefonoa eta deituko dizugu berresteko."
        />
        <meta name="twitter:image" content="<?= e(app_url("assets/img/views/matrix-1.webp")) ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?= vite_tags($route["resources"] ?? null) ?>
        <?php require app_path("includes/cookielad.php"); ?>
    </head>
    <body>
        <?php require app_path("includes/eu/nav02.php"); ?>

        <header class="header01-bis header01-bis--centrado">
            <div class="header01-bis__inner">
                <div class="header01-bis__content">
                    <p class="h2Especial-bis">
                        <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                        <span aria-hidden="true">★</span> Eskaerak <span aria-hidden="true">★</span>
                        <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                    </p>
                    <h1 class="header01-bis__titulo">Eskatu eramateko</h1>
                    <p class="header01-bis__text">Bete eskaera eta deituko dizugu berresteko. Saskia bete baduzu, formularioan ikusiko duzu.</p>
                </div>
            </div>
        </header>

        <main>
            <section class="sect02-bis" aria-labelledby="pedidos-seccion-eu">
                <div class="sect02-bis__contenido">
                    <h2 id="pedidos-seccion-eu" class="sect02-bis__titulo sect02-bis__titulo--oculto">Egin zure eskaera</h2>

                    <div class="sect02-bis__dividido sect02-bis__dividido--asimetrico">
                        <article class="artForm02-bis" id="pedidos-formulario-eu" aria-labelledby="pedidos-formulario-titulo-eu">
                            <div class="artForm02-bis__cabecera">
                                <h3 id="pedidos-formulario-titulo-eu" class="artForm02-bis__titulo">Eskaera</h3>
                                <p class="artForm02-bis__sello" aria-hidden="true">Eramateko</p>
                            </div>

                            <form
                                id="idForAjax"
                                class="artForm02-bis__formulario"
                                action="<?= e(app_url("/app/artForm02")) ?>"
                                method="post"
                                aria-labelledby="pedidos-formulario-titulo-eu"
                                data-carrito-pedido
                            >
                                <div class="artForm02-bis__rejilla">
                                    <div class="artForm02-bis__campo">
                                        <label class="artForm02-bis__etiqueta" for="nombreAjax">Izena</label>
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
                                        <label class="artForm02-bis__etiqueta" for="telefonoAjax">Telefonoa</label>
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
                                        <p class="artForm02-bis__etiqueta">Zure saskia</p>
                                        <ul class="artForm02-bis__pedidoLista" data-carrito-resumen-lista></ul>
                                        <p class="artForm02-bis__pedidoTotal">
                                            Guztira: <strong data-carrito-resumen-total></strong>
                                        </p>
                                    </div>

                                    <div class="artForm02-bis__campo artForm02-bis__campo--ancho">
                                        <label class="artForm02-bis__etiqueta" for="mensajeAjax">Mezua</label>
                                        <textarea
                                            class="artForm02-bis__control artForm02-bis__control--area"
                                            name="mensaje"
                                            id="mensajeAjax"
                                            placeholder="Bi Forajido tipula gabe eta Diligencia bat. STOP."
                                            minlength="4"
                                            maxlength="200"
                                            required
                                        ></textarea>
                                    </div>
                                </div>

                                <div class="artForm02-bis__linea">
                                    <input type="checkbox" name="terminos" id="terminosAjax" required />
                                    <label for="terminosAjax"
                                        >Onartzen dut nire datuak eskaera hau prestatzeko eta berresteko erabiltzea, <a href="<?= url("/eu/pribatutasun-politika") ?>" target="_blank" rel="noopener">pribatutasun-politikaren<span class="artForm02-bis__oculto"> (fitxa berri batean irekitzen da)</span></a> arabera</label
                                    >
                                </div>

                                <div class="artForm02-bis__linea">
                                    <label for="respuestaajax">Ebatzi eragiketa hau:</label>
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
                                <input class="artForm02-bis__enviar" type="submit" value="Bidali eskaera ★" id="botonEnviarAjax" />
                            </form>

                            <div id="modal_envio" aria-live="polite">
                                <h4 id="h3_modal_envio" class="artForm02-bis__enviadoTitulo">Eskaera bidalita</h4>
                                <p id="p_modal_envio" class="artForm02-bis__enviadoTexto">Zure eskaera jaso dugu.</p>
                                <button class="artForm02-bis__otro" id="boton_modal_envio" type="button">Egin beste eskaera bat</button>
                            </div>

                            <div class="moduloLoader01" id="moduloLoader01" role="status" aria-label="Eskaera bidaltzen">
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
                            <article class="artContacto01" aria-labelledby="pedidos-saloon-eu">
                                <h3 id="pedidos-saloon-eu" class="artContacto01__titulo">El Saloon</h3>
                                <ul class="artContacto01__lista">
                                    <li class="artContacto01__item">
                                        <span class="artContacto01__icono" aria-hidden="true">☎</span>
                                        <p class="artContacto01__etiqueta">Telefonoa / WhatsApp</p>
                                        <p class="artContacto01__valor">
                                            <a class="artContacto01__enlace" href="tel:+34600000000">+34 600 000 000</a>
                                        </p>
                                    </li>
                                    <li class="artContacto01__item">
                                        <span class="artContacto01__icono" aria-hidden="true">✉</span>
                                        <p class="artContacto01__etiqueta">Posta elektronikoa</p>
                                        <p class="artContacto01__valor">
                                            <a class="artContacto01__enlace" href="mailto:hola@elforajido.es">hola@elforajido.es</a>
                                        </p>
                                    </li>
                                    <li class="artContacto01__item">
                                        <span class="artContacto01__icono" aria-hidden="true">◷</span>
                                        <p class="artContacto01__etiqueta">Ordutegia</p>
                                        <p class="artContacto01__valor">Ar. – Ig. · 13:00etatik 00:00etara</p>
                                    </li>
                                    <li class="artContacto01__item">
                                        <span class="artContacto01__icono" aria-hidden="true">★</span>
                                        <p class="artContacto01__etiqueta">Sare sozialak</p>
                                        <p class="artContacto01__valor">@elforajidoburger</p>
                                    </li>
                                </ul>
                            </article>

                            <article class="artEvento01" aria-labelledby="pedidos-carta-eu">
                                <h3 id="pedidos-carta-eu" class="artEvento01__titulo">Oraindik ez duzu aukeratu?</h3>
                                <p class="artEvento01__texto">Gehitu zure hanburgesak saskira kartatik eta itzuli hona eskaera bidaltzeko.</p>
                                <a class="moduloBoton03 moduloBoton03--contorno" href="<?= url("/eu/gure-hanburgesak") ?>">Ikusi karta</a>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <?php require app_path("includes/eu/footer02.php"); ?>
        <?php require app_path("includes/eu/carrito.php"); ?>
    </body>
</html>
