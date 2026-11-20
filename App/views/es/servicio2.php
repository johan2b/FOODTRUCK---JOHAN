<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es/servicio2")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/servicio2")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/servicio2")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/servicio2")) ?>" />
        <title>Servicio 2 | Stack formación</title>
        <meta name="description" content="Lorem ipsum dolor sit amet" />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:site_name" content="Lorem ipsum dolor sit amet" />
        <meta property="og:title" content="Lorem ipsum dolor sit amet" />
        <meta property="og:description" content="Lorem ipsum dolor sit amet" />
        <meta property="og:url" content="<?= e(app_url("/es/servicio2")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/views/matrix-4.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Lorem ipsum dolor sit amet" />
        <meta name="twitter:description" content="Lorem ipsum dolor sit amet" />
        <meta name="twitter:image" content="<?= e(app_url("assets/img/views/matrix-4.webp")) ?>" />
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

        <header class="header02">
            <img
                class="header02__media"
                src="<?= asset("assets/img/views/matrix-4.webp") ?>"
                width="480"
                height="207"
                alt="Matrix"
                title="Lorem ipsum"
                fetchpriority="high"
                decoding="async"
            />
            <div class="header02__content">
                <p class="header02__eyebrow">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
                <h1 class="header02__title">Servicio 2</h1>
                <p class="header02__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
                <a href="<?= url("/es/contacto") ?>" class="boton" title="Lorem ipsum">Lorem ipsum dolor sit amet</a>
            </div>
        </header>

        <main>
            <section aria-labelledby="servicio2-intro-es">
                <article class="art14">
                    <div class="content">
                        <div class="h2Especial">
                            <span aria-hidden="true"></span>
                            <h2 id="servicio2-intro-es">Lorem ipsum dolor sit amet</h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.<strong>Lorem ipsum dolor sit amet</strong> Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                        <img
                            src="<?= asset("assets/img/views/matrix-3.webp") ?>"
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

            <section aria-labelledby="servicio2-piezas-es">
                <div class="h2Especial">
                    <span aria-hidden="true"></span>
                    <h2 id="servicio2-piezas-es">Lorem ipsum dolor sit amet</h2>
                </div>
                <article class="art09">
                    <h3>Lorem ipsum dolor sit amet</h3>
                    <div class="art09-content">
                        <div class="contenedor-lista">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <ul>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="contenedor-lista">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <ul>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </section>

            <section aria-labelledby="servicio2-proceso-es">
                <div class="h2Especial">
                    <span aria-hidden="true"></span>
                    <h2 id="servicio2-proceso-es">Lorem ipsum dolor sit amet</h2>
                </div>

                <article class="art16">
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
                    </div>
                    <div>
                        <img
                            src="<?= asset("assets/img/views/matrix-4.webp") ?>"
                            width="480"
                            height="207"
                            alt="Matrix"
                            title="Lorem ipsum"
                            loading="lazy"
                            decoding="async"
                        />
                    </div>
                </article>

                <article class="art16 invert">
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
                    </div>
                    <div>
                        <img
                            src="<?= asset("assets/img/views/matrix-1.webp") ?>"
                            width="480"
                            height="207"
                            alt="Matrix"
                            title="Lorem ipsum"
                            loading="lazy"
                            decoding="async"
                        />
                    </div>
                </article>

                <article class="art16">
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
                        <a href="<?= url("/es/contacto") ?>" class="boton" title="Lorem ipsum">Lorem ipsum dolor sit amet</a>
                    </div>
                    <div>
                        <img
                            src="<?= asset("assets/img/views/matrix-6.webp") ?>"
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

            <section aria-labelledby="servicio2-decision-es">
                <div class="h2Especial">
                    <span aria-hidden="true"></span>
                    <h2 id="servicio2-decision-es">Lorem ipsum dolor sit amet</h2>
                </div>
                <article class="art09">
                    <h3>Lorem ipsum dolor sit amet</h3>
                    <div class="art09-content">
                        <div class="contenedor-lista">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <ul>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="contenedor-lista">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <ul>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" aria-hidden="true" /><span
                                        >Lorem ipsum dolor sit amet</span
                                    >
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
