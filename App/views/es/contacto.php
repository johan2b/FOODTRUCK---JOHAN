<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es/contacto")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/contacto")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/kontaktua")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/contacto")) ?>" />
        <title>Contacto y reservas para eventos | El Forajido Burger Wagon</title>
        <meta
            name="description"
            content="Escríbenos para reservar el foodtruck en bodas, festivales o eventos de empresa, con menú cerrado desde 40 personas. Consulta también la ruta de la semana."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:site_name" content="El Forajido Burger Wagon" />
        <meta property="og:title" content="Contacto y reservas para eventos | El Forajido Burger Wagon" />
        <meta
            property="og:description"
            content="Escríbenos para reservar el foodtruck en bodas, festivales o eventos de empresa, con menú cerrado desde 40 personas. Consulta también la ruta de la semana."
        />
        <meta property="og:url" content="<?= e(app_url("/es/contacto")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/views/matrix-1.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Contacto y reservas para eventos | El Forajido Burger Wagon" />
        <meta
            name="twitter:description"
            content="Escríbenos para reservar el foodtruck en bodas, festivales o eventos de empresa, con menú cerrado desde 40 personas. Consulta también la ruta de la semana."
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
                        <span aria-hidden="true">★</span> Contacto <span aria-hidden="true">★</span>
                        <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                    </p>
                    <h1 class="header01-bis__titulo">Manda un telegrama</h1>
                    <p class="header01-bis__text">
                        Reservas para eventos, bodas, festivales o simplemente para decirnos qué burger te ha robado el
                        corazón.
                    </p>
                </div>
            </div>
        </header>

        <main>
            <section class="sect02-bis" aria-labelledby="contacto-escribenos-es">
                <div class="sect02-bis__contenido">
                    <h2 id="contacto-escribenos-es" class="sect02-bis__titulo sect02-bis__titulo--oculto">
                        Escríbenos o contrata el carro
                    </h2>

                    <div class="sect02-bis__dividido sect02-bis__dividido--asimetrico">
                        <article class="artForm02-bis" id="contacto-telegrama-es" aria-labelledby="contacto-telegrama-titulo-es">
                            <div class="artForm02-bis__cabecera">
                                <h3 id="contacto-telegrama-titulo-es" class="artForm02-bis__titulo">Telegrama</h3>
                                <p class="artForm02-bis__sello" aria-hidden="true">Urgente</p>
                            </div>

                            <form
                                id="idForAjax"
                                class="artForm02-bis__formulario"
                                action="<?= e(app_url("/app/artForm02")) ?>"
                                method="post"
                                aria-labelledby="contacto-telegrama-titulo-es"
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
                                        <label class="artForm02-bis__etiqueta" for="emailAjax">Correo</label>
                                        <input
                                            class="artForm02-bis__control"
                                            type="email"
                                            id="emailAjax"
                                            name="email"
                                            placeholder="billy@correo.com"
                                            autocomplete="email"
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

                                    <div class="artForm02-bis__campo">
                                        <label class="artForm02-bis__etiqueta" for="fechaEventoAjax">Fecha del evento</label>
                                        <input class="artForm02-bis__control" type="date" id="fechaEventoAjax" name="fecha_evento" />
                                    </div>

                                    <fieldset class="artForm02-bis__campo artForm02-bis__campo--ancho">
                                        <legend class="artForm02-bis__etiqueta">Motivo</legend>
                                        <div class="artForm02-bis__chips">
                                            <label class="artForm02-bis__chip">
                                                <input type="radio" name="motivo" value="privado" checked />
                                                <span>Evento privado</span>
                                            </label>
                                            <label class="artForm02-bis__chip">
                                                <input type="radio" name="motivo" value="festival" />
                                                <span>Festival</span>
                                            </label>
                                            <label class="artForm02-bis__chip">
                                                <input type="radio" name="motivo" value="empresa" />
                                                <span>Empresa</span>
                                            </label>
                                            <label class="artForm02-bis__chip">
                                                <input type="radio" name="motivo" value="otro" />
                                                <span>Otro</span>
                                            </label>
                                            <label class="artForm02-bis__chip">
                                                <input type="radio" name="motivo" value="llevar" />
                                                <span>Para llevar</span>
                                            </label>
                                        </div>
                                    </fieldset>

                                    <!-- Resumen del carrito: moduloCarrito01 lo muestra al llegar con ?pedido=llevar. -->
                                    <div class="artForm02-bis__pedido artForm02-bis__campo--ancho" data-carrito-resumen hidden>
                                        <p class="artForm02-bis__etiqueta">Pedido para llevar</p>
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
                                            placeholder="Necesitamos el carro para 120 forajidos hambrientos. STOP."
                                            minlength="4"
                                            maxlength="200"
                                            required
                                        ></textarea>
                                    </div>
                                </div>

                                <div class="artForm02-bis__linea">
                                    <input type="checkbox" name="terminos" id="terminosAjax" required />
                                    <label for="terminosAjax">Acepto que se usen mis datos para responder a este telegrama</label>
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
                                <input type="hidden" name="pedido" value="" />
                                <input class="artForm02-bis__enviar" type="submit" value="Enviar telegrama ★" id="botonEnviarAjax" />
                            </form>

                            <div id="modal_envio" aria-live="polite">
                                <h4 id="h3_modal_envio" class="artForm02-bis__enviadoTitulo">Telegrama enviado</h4>
                                <p id="p_modal_envio" class="artForm02-bis__enviadoTexto">Tu mensaje se ha recibido correctamente.</p>
                                <button class="artForm02-bis__otro" id="boton_modal_envio" type="button">Escribir otro telegrama</button>
                            </div>

                            <div class="moduloLoader01" id="moduloLoader01" role="status" aria-label="Enviando telegrama">
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
                            <article class="artContacto01" aria-labelledby="contacto-saloon-es">
                                <h3 id="contacto-saloon-es" class="artContacto01__titulo">El Saloon</h3>
                                <ul class="artContacto01__lista">
                                    <li class="artContacto01__item">
                                        <span class="artContacto01__icono" aria-hidden="true">☎</span>
                                        <p class="artContacto01__etiqueta">Teléfono / WhatsApp</p>
                                        <p class="artContacto01__valor">
                                            <a class="artContacto01__enlace" href="tel:+34612345678">+34 612 345 678</a>
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

                            <article class="artEvento01" aria-labelledby="contacto-carro-es">
                                <h3 id="contacto-carro-es" class="artEvento01__titulo">Contrata el carro</h3>
                                <p class="artEvento01__texto">Llevamos la parrilla a tu evento con menú cerrado desde 40 personas.</p>
                                <ul class="artEvento01__lista">
                                    <li>Bodas y fiestas privadas</li>
                                    <li>Festivales y conciertos</li>
                                    <li>Eventos de empresa</li>
                                </ul>
                                <a class="moduloBoton03 moduloBoton03--contorno" href="#contacto-telegrama-es">Pedir presupuesto</a>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sect02-bis sect02-bis--pegada" aria-labelledby="contacto-mapa-es">
                <div class="sect02-bis__contenido">
                    <div class="moduloMapa01">
                        <div class="moduloMapa01__rotulo">
                            <h2 id="contacto-mapa-es" class="moduloMapa01__titulo">Mapa de la ruta</h2>
                            <p class="moduloMapa01__subtitulo">Semana 47 · Madrid</p>
                        </div>

                        <div class="moduloMapa01__lienzo">
                            <svg class="moduloMapa01__camino" viewBox="0 0 1230 318" preserveAspectRatio="none" aria-hidden="true" focusable="false">
                                <path
                                    d="M0 228 C 60 218, 120 210, 168 211 S 300 240, 380 234 S 460 216, 487 205 S 650 140, 778 130 S 900 150, 1000 178 S 1120 150, 1230 105"
                                    fill="none"
                                    stroke="#1a1210"
                                    stroke-width="4"
                                    stroke-dasharray="16 11"
                                    vector-effect="non-scaling-stroke"
                                />
                            </svg>

                            <ol class="moduloMapa01__paradas">
                                <li class="moduloMapa01__parada moduloMapa01__parada--1">
                                    <span class="moduloMapa01__lugar">Mercado de Motores</span>
                                    <span class="moduloMapa01__numero" aria-hidden="true">1</span>
                                </li>
                                <li class="moduloMapa01__parada moduloMapa01__parada--2">
                                    <span class="moduloMapa01__lugar">Tierno Galván</span>
                                    <span class="moduloMapa01__numero" aria-hidden="true">2</span>
                                </li>
                                <li class="moduloMapa01__parada moduloMapa01__parada--3">
                                    <span class="moduloMapa01__lugar">Getafe</span>
                                    <span class="moduloMapa01__numero" aria-hidden="true">3</span>
                                </li>
                                <li class="moduloMapa01__parada moduloMapa01__parada--4">
                                    <span class="moduloMapa01__lugar">Matadero</span>
                                    <span class="moduloMapa01__numero" aria-hidden="true">4</span>
                                </li>
                            </ol>

                            <svg class="moduloMapa01__brujula" viewBox="0 0 80 100" aria-hidden="true" focusable="false">
                                <text x="40" y="12" text-anchor="middle" font-family="Ultra, Georgia, serif" font-size="12" fill="#1a1210">N</text>
                                <circle cx="40" cy="60" r="30" fill="none" stroke="#1a1210" stroke-width="2.5" />
                                <polygon points="40,20 46,60 34,60" fill="#b5241c" stroke="#1a1210" stroke-width="1.5" />
                                <polygon points="34,60 46,60 40,98" fill="#1a1210" />
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php require app_path("includes/es/footer02.php"); ?>
        <?php require app_path("includes/es/carrito.php"); ?>
    </body>
</html>
