<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es")) ?>" />
        <title>Inicio | Stack formación</title>
        <meta name="description" content="Lorem ipsum dolor sit amet" />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:site_name" content="Lorem ipsum dolor sit amet" />
        <meta property="og:title" content="Lorem ipsum dolor sit amet" />
        <meta property="og:description" content="Lorem ipsum dolor sit amet" />
        <meta property="og:url" content="<?= e(app_url("/es")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/views/matrix-1.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Lorem ipsum dolor sit amet" />
        <meta name="twitter:description" content="Lorem ipsum dolor sit amet" />
        <meta name="twitter:image" content="<?= e(app_url("assets/img/views/matrix-1.webp")) ?>" />
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

        <header class="header01">
            <img
                class="header01__media"
                src="<?= asset("assets/img/views/matrix-1.webp") ?>"
                width="480"
                height="207"
                alt="Matrix"
                title="Lorem ipsum"
                fetchpriority="high"
                decoding="async"
            />
            <div class="header01__content">
                <p class="header01__eyebrow">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
                <h1>Inicio</h1>
                <p class="header01__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
                <a href="<?= url("/es/contacto") ?>" class="boton" title="Lorem ipsum">Lorem ipsum dolor sit amet</a>
            </div>
        </header>

        <main>
            <section aria-labelledby="inicio-presentacion-es">
                <article class="art14">
                    <div class="content">
                        <div class="h2Especial">
                            <span aria-hidden="true"></span>
                            <h2 id="inicio-presentacion-es">Lorem ipsum dolor sit amet</h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.<strong>Lorem ipsum dolor sit amet</strong> Lorem ipsum dolor
                            sit amet <strong>Lorem ipsum dolor sit amet</strong> Lorem ipsum dolor sit amet
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                        <img
                            src="<?= asset("assets/img/views/matrix-2.webp") ?>"
                            width="480"
                            height="207"
                            alt="Matrix"
                            title="Lorem ipsum"
                            loading="lazy"
                            decoding="async"
                        />
                    </div>
                </article>
            </section>

            <section aria-labelledby="inicio-servicios-es">
                <div class="h2Especial">
                    <span aria-hidden="true"></span>
                    <h2 id="inicio-servicios-es">Lorem ipsum dolor sit amet</h2>
                </div>

                <article class="art13">
                    <img
                        src="<?= asset("assets/img/views/matrix-3.webp") ?>"
                        width="480"
                        height="207"
                        alt="Matrix"
                        title="Lorem ipsum"
                        loading="lazy"
                        decoding="async"
                    />
                    <div>
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                        <a href="<?= url("/es/servicio1") ?>" class="boton" title="Lorem ipsum">Lorem ipsum dolor sit amet</a>
                    </div>
                </article>

                <article class="art13 upsidedown">
                    <img
                        src="<?= asset("assets/img/views/matrix-4.webp") ?>"
                        width="480"
                        height="207"
                        alt="Matrix"
                        title="Lorem ipsum"
                        loading="lazy"
                        decoding="async"
                    />
                    <div>
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                        <a href="<?= url("/es/servicio2") ?>" class="boton" title="Lorem ipsum">Lorem ipsum dolor sit amet</a>
                    </div>
                </article>
            </section>

            <section aria-labelledby="inicio-forma-trabajo-es">
                <article class="art14">
                    <div class="content">
                        <div class="h2Especial">
                            <span aria-hidden="true"></span>
                            <h2 id="inicio-forma-trabajo-es">Lorem ipsum dolor sit amet</h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                        <img
                            src="<?= asset("assets/img/views/matrix-5.webp") ?>"
                            width="480"
                            height="207"
                            alt="Matrix"
                            title="Lorem ipsum"
                            loading="lazy"
                            decoding="async"
                        />
                    </div>
                </article>
            </section>

            <section aria-labelledby="inicio-contacto-es">
                <article class="artForm02">
                    <h2 id="inicio-contacto-es">Lorem ipsum dolor sit amet</h2>
                    <div>
                        <div class="contenedor-form">
                            <img src="<?= asset("assets/img/icons/mail-solid.svg") ?>" alt="" title="" aria-hidden="true" />

                            <div id="modal_envio" aria-live="polite">
                                <h3 id="h3_modal_envio">Consulta enviada</h3>
                                <p id="p_modal_envio">Tu mensaje se ha recibido correctamente.</p>
                                <div class="boton" id="boton_modal_envio" role="button" tabindex="0">
                                    Escribir otra consulta
                                </div>
                            </div>

                            <form
                                id="idForAjax"
                                action="<?= e(app_url("/app/artForm02")) ?>"
                                method="post"
                                aria-label="Formulario de contacto"
                            >
                                <p class="error" id="errorForm02" aria-live="assertive"></p>

                                <label for="nombreAjax">Nombre *</label>
                                <input
                                    type="text"
                                    id="nombreAjax"
                                    name="nombre"
                                    placeholder="Lorem ipsum"
                                    minlength="3"
                                    maxlength="40"
                                    autocomplete="name"
                                    required
                                />

                                <label for="telefonoAjax">Teléfono *</label>
                                <input
                                    type="tel"
                                    id="telefonoAjax"
                                    name="telefono"
                                    placeholder="Lorem ipsum"
                                    autocomplete="tel"
                                    required
                                />

                                <label for="emailAjax">Correo electrónico *</label>
                                <input
                                    type="email"
                                    id="emailAjax"
                                    name="email"
                                    placeholder="Lorem ipsum"
                                    autocomplete="email"
                                    required
                                />

                                <label for="mensajeAjax">¿Qué trabajo necesitas? *</label>
                                <textarea
                                    name="mensaje"
                                    id="mensajeAjax"
                                    placeholder="Lorem ipsum"
                                    minlength="4"
                                    maxlength="200"
                                    required
                                ></textarea>

                                <div class="horizontal">
                                    <label for="terminosAjax" id="consentimiento"
                                        >Proba-datuak bidaltzea onartzen dut *</label
                                    >
                                    <input type="checkbox" name="terminos" id="terminosAjax" required />
                                </div>

                                <label for="respuestaajax">Resuelve esta operación *</label>
                                <div class="horizontal">
                                    <span id="num1ajax"></span>
                                    <span id="operadorajax"></span>
                                    <span id="num2ajax"></span>
                                    <input
                                        type="text"
                                        name="respUser"
                                        id="respuestaajax"
                                        placeholder="Lorem ipsum"
                                        inputmode="numeric"
                                        autocomplete="off"
                                        required
                                    />
                                    <input type="hidden" name="respSystem" id="respSystemajax" value="" />
                                </div>

                                <input type="hidden" name="url" value="<?= e($url) ?>" />
                                <input type="hidden" name="lang" value="<?= e($lang) ?>" />
                                <input
                                    type="submit"
                                    class="boton"
                                    value="Enviar consulta"
                                    id="botonEnviarAjax"
                                    title="Lorem ipsum"
                                />
                            </form>

                            <div
                                class="moduloLoader01"
                                id="moduloLoader01"
                                role="status"
                                aria-label="Enviando consulta"
                            >
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
                        </div>

                        <div class="contenedor-info">
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.
                            </p>
                            <ul>
                                <li>
                                    <a href="<?= url("/es/servicio1") ?>" title="Lorem ipsum">
                                        <img src="<?= asset("assets/img/icons/grid.svg") ?>" alt="" title="" aria-hidden="true" />
                                        <span>Lorem ipsum dolor sit amet</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= url("/es/servicio2") ?>" title="Lorem ipsum">
                                        <img src="<?= asset("assets/img/icons/boxes.svg") ?>" alt="" title="" aria-hidden="true" />
                                        <span>Lorem ipsum dolor sit amet</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= url("/es/contacto") ?>" title="Lorem ipsum">
                                        <img src="<?= asset("assets/img/icons/location.svg") ?>" alt="" title="" aria-hidden="true" />
                                        <span>Lorem ipsum dolor sit amet</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </section>
        </main>

        <?php require app_path("includes/es/footer.php"); ?>
    </body>
</html>
