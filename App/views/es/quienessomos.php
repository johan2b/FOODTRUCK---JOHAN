<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es/quienes-somos")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/quienes-somos")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/nortzuk-gara")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/quienes-somos")) ?>" />
        <title>Quiénes somos | La historia del foodtruck El Forajido</title>
        <meta
            name="description"
            content="De una furgoneta Citroën HY de 1972 a más de 60.000 km de carretera y festivales: la historia de El Forajido, el foodtruck de hamburguesas a la brasa."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:site_name" content="El Forajido Burger Wagon" />
        <meta property="og:title" content="Quiénes somos | La historia del foodtruck El Forajido" />
        <meta
            property="og:description"
            content="De una furgoneta Citroën HY de 1972 a más de 60.000 km de carretera y festivales: la historia de El Forajido, el foodtruck de hamburguesas a la brasa."
        />
        <meta property="og:url" content="<?= e(app_url("/es/quienes-somos")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/views/matrix-1.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Quiénes somos | La historia del foodtruck El Forajido" />
        <meta
            name="twitter:description"
            content="De una furgoneta Citroën HY de 1972 a más de 60.000 km de carretera y festivales: la historia de El Forajido, el foodtruck de hamburguesas a la brasa."
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
                        <span aria-hidden="true">★</span> Nuestra historia <span aria-hidden="true">★</span>
                        <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                    </p>
                    <h1 class="header01-bis__titulo">Quiénes somos</h1>
                </div>
            </div>
        </header>

        <main>
            <section class="artHistoria01" aria-labelledby="quienes-historia-es">
                <h2 id="quienes-historia-es" class="artHistoria01__oculto">
                    La historia de El Forajido en tres capítulos
                </h2>

                <div class="artHistoria01__fijo">
                    <div class="artHistoria01__visor">
                        <div class="artHistoria01__pista">
                            <article class="artHistoria01__capitulo" aria-labelledby="quienes-capitulo-1-es">
                                <div class="artHistoria01__contenido">
                                    <div class="artHistoria01__barra" aria-hidden="true">
                                        <p class="artHistoria01__etiqueta">Origen</p>
                                        <p class="artHistoria01__indice">
                                            <span class="is-activo">★ 01 Origen</span>
                                            <span>02 El camino</span>
                                            <span>03 Eventos</span>
                                        </p>
                                    </div>
                                    <div class="artHistoria01__texto">
                                        <p class="artHistoria01__antetitulo">2017 · El origen</p>
                                        <h3 id="quienes-capitulo-1-es" class="artHistoria01__titulo">Capítulo I</h3>
                                        <p class="artHistoria01__parrafo">
                                            Todo empezó con una furgoneta Citroën HY de 1972 abandonada en un rancho de
                                            Albacete y dos hermanos, Lucía y Marcos, que juraron devolverla al camino.
                                        </p>
                                    </div>
                                    <div class="artHistoria01__lado">
                                        <p class="artHistoria01__parrafo">
                                            La pintaron de rojo, le montaron una parrilla de leña y la llamaron El Forajido:
                                            porque en la cocina de verdad, las reglas se las salta uno mismo. Primer día: 40
                                            burgers y ni una de sobra.
                                        </p>
                                    </div>
                                </div>
                            </article>

                            <article class="artHistoria01__capitulo" aria-labelledby="quienes-capitulo-2-es">
                                <div class="artHistoria01__contenido">
                                    <div class="artHistoria01__barra" aria-hidden="true">
                                        <p class="artHistoria01__etiqueta">El camino →</p>
                                        <p class="artHistoria01__indice">
                                            <span>01 Origen</span>
                                            <span class="is-activo">★ 02 El camino</span>
                                            <span>03 Eventos</span>
                                        </p>
                                    </div>
                                    <div class="artHistoria01__texto">
                                        <p class="artHistoria01__antetitulo">2018 – 2023 · El camino</p>
                                        <h3 id="quienes-capitulo-2-es" class="artHistoria01__titulo">Capítulo II</h3>
                                        <p class="artHistoria01__parrafo">
                                            Más de 60.000 kilómetros por carreteras secundarias, de la Mancha al Cabo de
                                            Gata. Cada parada nos dejó una receta, un amigo y alguna rueda pinchada.
                                        </p>
                                    </div>
                                    <div class="artHistoria01__lado">
                                        <p class="artHistoria01__parrafo">
                                            Aprendimos el chipotle en Almería, la barbacoa al bourbon en un festival de
                                            country y que el mejor sitio para aparcar es siempre donde la gente se queda a
                                            charlar.
                                        </p>
                                    </div>
                                </div>
                            </article>

                            <article class="artHistoria01__capitulo" aria-labelledby="quienes-capitulo-3-es">
                                <div class="artHistoria01__contenido">
                                    <div class="artHistoria01__barra" aria-hidden="true">
                                        <p class="artHistoria01__etiqueta">Eventos · Llegada</p>
                                        <p class="artHistoria01__indice">
                                            <span>01 Origen</span>
                                            <span>02 El camino</span>
                                            <span class="is-activo">★ 03 Eventos</span>
                                        </p>
                                    </div>
                                    <div class="artHistoria01__texto">
                                        <p class="artHistoria01__antetitulo">2024 – hoy · Los eventos</p>
                                        <h3 id="quienes-capitulo-3-es" class="artHistoria01__titulo">Capítulo III</h3>
                                        <p class="artHistoria01__parrafo">
                                            Hoy el carro se deja ver allí donde hay música, fuego y gente con hambre.
                                            Algunas de las paradas que no olvidamos:
                                        </p>
                                    </div>
                                    <div class="artHistoria01__lado">
                                        <ul class="artHistoria01__eventos">
                                            <li>
                                                <span class="artHistoria01__evento">Mad Cool Festival</span>
                                                <span class="artHistoria01__detalle">Madrid · 2024 y 2025</span>
                                            </li>
                                            <li>
                                                <span class="artHistoria01__evento">Rock &amp; Grill</span>
                                                <span class="artHistoria01__detalle">Getafe · 3 ediciones</span>
                                            </li>
                                            <li>
                                                <span class="artHistoria01__evento">Feria del Caballo</span>
                                                <span class="artHistoria01__detalle">Jerez · 2025</span>
                                            </li>
                                            <li>
                                                <span class="artHistoria01__evento">Street Food Fest</span>
                                                <span class="artHistoria01__detalle">Valencia · 2026</span>
                                            </li>
                                            <li>
                                                <span class="artHistoria01__evento">+120 bodas</span>
                                                <span class="artHistoria01__detalle">Por toda la península</span>
                                            </li>
                                            <li>
                                                <span class="artHistoria01__evento">Premio Mejor Burger</span>
                                                <span class="artHistoria01__detalle">Food Truck Awards 2025</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div
                        class="artHistoria01__escena"
                        role="img"
                        aria-label="El food truck El Forajido recorre la carretera del desierto hasta una hoguera, donde abre su ventana a un grupo de personas"
                    >
                        <div class="moduloDesierto01">
                            <span class="moduloDesierto01__sol"></span>
                            <span class="moduloDesierto01__mesa"></span>
                            <span class="moduloDesierto01__mesa moduloDesierto01__mesa--baja"></span>
                            <span class="moduloDesierto01__mesa moduloDesierto01__mesa--alta"></span>
                            <span class="moduloDesierto01__cactus"></span>
                            <span class="moduloDesierto01__cactus moduloDesierto01__cactus--alto"></span>
                            <span class="moduloDesierto01__cactus moduloDesierto01__cactus--pequeno"></span>
                            <span class="moduloDesierto01__cactus moduloDesierto01__cactus--sol"></span>
                            <span class="moduloDesierto01__carretera"></span>
                            <span class="moduloDesierto01__linea"></span>
                        </div>

                        <div class="artHistoria01__hoguera">
                            <div class="moduloHoguera01">
                                <span class="moduloHoguera01__resplandor"></span>
                                <span class="moduloHoguera01__chispa"></span>
                                <span class="moduloHoguera01__chispa moduloHoguera01__chispa--derecha"></span>
                                <span class="moduloHoguera01__llama"></span>
                                <span class="moduloHoguera01__llama moduloHoguera01__llama--lateral"></span>
                                <span class="moduloHoguera01__llama moduloHoguera01__llama--interior"></span>
                                <span class="moduloHoguera01__tronco"></span>
                                <span class="moduloHoguera01__tronco moduloHoguera01__tronco--cruzado"></span>
                                <span class="moduloHoguera01__piedra"></span>
                                <span class="moduloHoguera01__piedra moduloHoguera01__piedra--derecha"></span>
                            </div>
                        </div>

                        <div class="artHistoria01__grupo">
                            <div class="moduloGrupo01">
                                <span class="moduloGrupo01__persona moduloGrupo01__persona--1"></span>
                                <span class="moduloGrupo01__sombrero"></span>
                                <span class="moduloGrupo01__persona moduloGrupo01__persona--2"></span>
                                <span class="moduloGrupo01__persona moduloGrupo01__persona--3"></span>
                                <span class="moduloGrupo01__sombrero moduloGrupo01__sombrero--alto"></span>
                                <span class="moduloGrupo01__persona moduloGrupo01__persona--4"></span>
                                <span class="moduloGrupo01__persona moduloGrupo01__persona--5"></span>
                            </div>
                        </div>

                        <div class="artHistoria01__camion">
                            <div class="artHistoria01__variante artHistoria01__variante--cerrado">
                                <div class="moduloFoodtruck01__dibujo">
                                    <span class="moduloFoodtruck01__cartel">El Forajido</span>
                                    <span class="moduloFoodtruck01__caja"></span>
                                    <span class="moduloFoodtruck01__persiana"></span>
                                    <span class="moduloFoodtruck01__cabina"></span>
                                    <span class="moduloFoodtruck01__ventanilla"></span>
                                    <span class="moduloFoodtruck01__parachoques"></span>
                                    <span class="moduloFoodtruck01__rueda"></span>
                                    <span class="moduloFoodtruck01__rueda moduloFoodtruck01__rueda--trasera"></span>
                                </div>
                            </div>
                            <div class="artHistoria01__variante artHistoria01__variante--abierto">
                                <div class="moduloFoodtruck01__dibujo">
                                    <span class="moduloFoodtruck01__toldo"></span>
                                    <span class="moduloFoodtruck01__caja"></span>
                                    <span class="moduloFoodtruck01__ventana"></span>
                                    <span class="moduloFoodtruck01__persona"></span>
                                    <span class="moduloFoodtruck01__gorro"></span>
                                    <span class="moduloFoodtruck01__persona moduloFoodtruck01__persona--cliente"></span>
                                    <span class="moduloFoodtruck01__cabina"></span>
                                    <span class="moduloFoodtruck01__ventanilla"></span>
                                    <span class="moduloFoodtruck01__parachoques"></span>
                                    <span class="moduloFoodtruck01__rueda"></span>
                                    <span class="moduloFoodtruck01__rueda moduloFoodtruck01__rueda--trasera"></span>
                                </div>
                            </div>
                        </div>

                        <p class="artHistoria01__aviso" aria-hidden="true">→ Avanza con el scroll</p>
                    </div>
                </div>
            </section>
        </main>

        <?php require app_path("includes/es/footer02.php"); ?>
        <?php require app_path("includes/es/carrito.php"); ?>
    </body>
</html>
