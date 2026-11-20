<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es")) ?>" />
        <title>Preguntas frecuentes</title>
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

        <header class="header02">
            <img class="header02__media" src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
            <div class="header02__content">
                <p class="header02__eyebrow">Header 02</p>
                <h1 class="header02__title">Header 02</h1>
                <p class="header02__text">
                    Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem et realitatem.
                </p>
                <a href="#showroom-recursos" class="boton">Continuar</a>
            </div>
        </header>

        <main>
            <!-- sección de presentación de preguntas frecuentes art14-->
            <section>
                
                <article class="art14">
                    <div class="content">
                        <h2>Respondemos todas tus preguntas</h2>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                            simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem. Agent
                            Smith recusandae Zion, dum machinae architecto mundum regunt et Trinity viam demonstrat.
                        </p>
                        <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
                    </div>
                </article>
                
            </section>

            <!-- sección con las preguntas frecuentes? artaccordeon01-->
             <section>
                <article class="artAcordeon01">
                    <div class="cabecera">
                        <div>
                            <h2>artAcordeon01</h2>
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis
                                codicem et simulacrum.
                            </p>
                            <p>
                                Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem. Trinity navigat
                                dum Agent Smith codicem custodit.
                            </p>
                        </div>
                        <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
                    </div>
                    <div class="contenedor">
                        <div class="ficha">
                            <h3>Matrix quaestio 01</h3>
                            <p class="respuesta">
                                Matrix ipsum dolor sit amet. Neo eligendi pillulam rubram et veritatem post codicem
                                invenit.
                            </p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                        <div class="ficha">
                            <h3>Matrix quaestio 02</h3>
                            <p class="respuesta">
                                Morpheus quaerat optionem et simulacrum aperit. Machinae codicem regunt, sed Zion
                                resistit.
                            </p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                        <div class="ficha">
                            <h3>Matrix quaestio 03</h3>
                            <p class="respuesta">Trinity per systema navigat, dum Neo leges simulacri mutare discit.</p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                        <div class="ficha">
                            <h3>Matrix quaestio 04</h3>
                            <p class="respuesta">Agent Smith recusandae libertatem et multiplicat se intra Matrix.</p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                        <div class="ficha">
                            <h3>Matrix quaestio 05</h3>
                            <p class="respuesta">Oraculum responsum non imponit; electio viam ante Neo revelat.</p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                        <div class="ficha">
                            <h3>Matrix quaestio 06</h3>
                            <p class="respuesta">
                                Zion vigilat et homines contra machinas ultimam realitatem defendunt.
                            </p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                    </div>
                </article>
             </section>

        </main>

        <?php require app_path("includes/es/footer.php"); ?>
    </body>
</html>
