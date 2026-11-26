<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es")) ?>" />
        <title>El Forajido | Foodtruck de hamburguesas a la brasa de encina</title>
        <meta
            name="description"
            content="Hamburguesas a la brasa de encina con carne madurada, pan de masa madre y salsas propias. Consulta la ruta semanal del foodtruck y ven a probarlas."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:site_name" content="El Forajido Burger Wagon" />
        <meta property="og:title" content="El Forajido | Foodtruck de hamburguesas a la brasa de encina" />
        <meta
            property="og:description"
            content="Hamburguesas a la brasa de encina con carne madurada, pan de masa madre y salsas propias. Consulta la ruta semanal del foodtruck y ven a probarlas."
        />
        <meta property="og:url" content="<?= e(app_url("/es")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/views/matrix-1.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="El Forajido | Foodtruck de hamburguesas a la brasa de encina" />
        <meta
            name="twitter:description"
            content="Hamburguesas a la brasa de encina con carne madurada, pan de masa madre y salsas propias. Consulta la ruta semanal del foodtruck y ven a probarlas."
        />
        <meta name="twitter:image" content="<?= e(app_url("assets/img/views/matrix-1.webp")) ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?= vite_tags($route["resources"] ?? null) ?>
        <?php require app_path("includes/cookielad.php"); ?>
    </head>
    <body>
        <?php require app_path("includes/es/nav02.php"); ?>

        <header class="header01-bis">
            <div class="header01-bis__inner">
                <div class="header01-bis__content">
                    <p class="header01-bis__eyebrow">
                        <span aria-hidden="true">★ </span>Foodtruck de hamburguesas<span aria-hidden="true"> ★</span>
                    </p>
                    <h1 class="header01-bis__titulo">
                        Las burgers más <span class="header01-bis__resalte">buscadas</span> del oeste
                    </h1>
                    <p class="header01-bis__text">
                        Carne madurada a la brasa, pan de masa madre y salsas que guardamos bajo llave. Seguimos la ruta y
                        paramos donde haya hambre.
                    </p>
                    <div class="header01-bis__acciones">
                        <a class="moduloBoton03" href="<?= url("/es/nuestras-hamburguesas") ?>">Ver la carta</a>
                        <a class="moduloBoton03 moduloBoton03--contorno" href="#inicio-ruta-es">¿Dónde estamos hoy?</a>
                    </div>
                </div>

                <div class="header01-bis__media">
                    <div class="artCartel01">
                        <p class="artCartel01__titulo">Se busca</p>
                        <p class="artCartel01__lema">Viva y jugosa</p>
                        <div class="artCartel01__marco">
                            <div class="moduloBurger01 moduloBurger01--oscuro">
                                <div
                                    class="moduloBurger01__dibujo"
                                    role="img"
                                    aria-label="Hamburguesa El Forajido con lechuga, queso, tomate, carne y cebolla"
                                >
                                    <span class="moduloBurger01__sombra"></span>
                                    <span class="moduloBurger01__panInferior"></span>
                                    <span class="moduloBurger01__cebolla"></span>
                                    <span class="moduloBurger01__carne"></span>
                                    <span class="moduloBurger01__tomate moduloBurger01__tomate--alto"></span>
                                    <span class="moduloBurger01__queso"></span>
                                    <span class="moduloBurger01__lechuga"></span>
                                    <span class="moduloBurger01__panSuperior"></span>
                                </div>
                            </div>
                        </div>
                        <p class="artCartel01__nombre">“El Forajido”</p>
                        <p class="artCartel01__recompensa">— Recompensa —</p>
                        <p class="artCartel01__precio"><data value="10.50">10,50 €</data></p>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="sect02-bis sect02-bis--rojo sect02-bis--sesgoArriba sect02-bis--sesgoAbajo" aria-labelledby="inicio-reglas-es">
                <div class="sect02-bis__contenido">
                    <div class="sect02-bis__cabecera sect02-bis__cabecera--centrado">
                        <p class="h2Especial-bis h2Especial-bis--oscuro">
                            <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                            <span aria-hidden="true">★</span> La ley de la casa <span aria-hidden="true">★</span>
                            <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                        </p>
                        <h2 id="inicio-reglas-es" class="sect02-bis__titulo">Tres reglas que no se rompen</h2>
                    </div>

                    <div class="sect02-bis__rejilla">
                        <article class="artValor01" aria-labelledby="inicio-regla-lena-es">
                            <span class="artValor01__icono" aria-hidden="true">🔥</span>
                            <span class="artValor01__numeral" aria-hidden="true">I</span>
                            <h3 id="inicio-regla-lena-es" class="artValor01__titulo">Fuego de leña</h3>
                            <p class="artValor01__texto">
                                Cada carne pasa por la parrilla de encina. Sin planchas, sin atajos, solo brasa y paciencia.
                            </p>
                        </article>
                        <article class="artValor01" aria-labelledby="inicio-regla-carne-es">
                            <span class="artValor01__icono" aria-hidden="true">★</span>
                            <span class="artValor01__numeral" aria-hidden="true">II</span>
                            <h3 id="inicio-regla-carne-es" class="artValor01__titulo">Carne de aquí</h3>
                            <p class="artValor01__texto">
                                Vaca madurada 30 días de ganaderías de la sierra, picada cada mañana en el propio camión.
                            </p>
                        </article>
                        <article class="artValor01" aria-labelledby="inicio-regla-salsas-es">
                            <span class="artValor01__icono" aria-hidden="true">✦</span>
                            <span class="artValor01__numeral" aria-hidden="true">III</span>
                            <h3 id="inicio-regla-salsas-es" class="artValor01__titulo">Salsas de bandido</h3>
                            <p class="artValor01__texto">
                                Seis recetas propias, del chipotle ahumado a la miel con mostaza. La receta no se negocia.
                            </p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="sect02-bis" aria-labelledby="inicio-buscados-es">
                <div class="sect02-bis__contenido">
                    <div class="sect02-bis__cabecera sect02-bis__cabecera--accion">
                        <div class="sect02-bis__grupo">
                            <p class="h2Especial-bis">
                                <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                                <span aria-hidden="true">★</span> Las más pedidas
                            </p>
                            <h2 id="inicio-buscados-es" class="sect02-bis__titulo">Los más buscados</h2>
                        </div>
                        <a class="moduloBoton03" href="<?= url("/es/nuestras-hamburguesas") ?>">Ver las 5 burgers</a>
                    </div>

                    <div class="sect02-bis__rejilla">
                        <article class="artCarta01" aria-labelledby="inicio-burger-diligencia-es">
                            <div class="artCarta01__imagen">
                                <div class="moduloBurger01 moduloBurger01--oscuro">
                                    <div
                                        class="moduloBurger01__dibujo"
                                        role="img"
                                        aria-label="Hamburguesa La Diligencia con aros de cebolla, salsa barbacoa y carne"
                                    >
                                        <span class="moduloBurger01__sombra"></span>
                                        <span class="moduloBurger01__panInferior"></span>
                                        <span class="moduloBurger01__salsa moduloBurger01__salsa--oscura"></span>
                                        <span class="moduloBurger01__carne"></span>
                                        <span class="moduloBurger01__barbacoa"></span>
                                        <span class="moduloBurger01__aros"></span>
                                        <span class="moduloBurger01__panSuperior"></span>
                                    </div>
                                </div>
                            </div>
                            <h3 id="inicio-burger-diligencia-es" class="artCarta01__titulo">La Diligencia</h3>
                            <p class="artCarta01__lema">BBQ · Bourbon · Bacon</p>
                            <p class="artCarta01__precio"><data value="12.90">12,90 €</data></p>
                        </article>

                        <article class="artCarta01" aria-labelledby="inicio-burger-sheriff-es">
                            <div class="artCarta01__imagen">
                                <div class="moduloBurger01 moduloBurger01--oscuro">
                                    <div
                                        class="moduloBurger01__dibujo"
                                        role="img"
                                        aria-label="Hamburguesa Sheriff Picante con lechuga, queso, jalapeños, carne y salsa picante"
                                    >
                                        <span class="moduloBurger01__sombra"></span>
                                        <span class="moduloBurger01__panInferior"></span>
                                        <span class="moduloBurger01__salsa moduloBurger01__salsa--picante"></span>
                                        <span class="moduloBurger01__carne"></span>
                                        <span class="moduloBurger01__jalapenos"></span>
                                        <span class="moduloBurger01__queso"></span>
                                        <span class="moduloBurger01__lechuga"></span>
                                        <span class="moduloBurger01__panSuperior"></span>
                                    </div>
                                </div>
                            </div>
                            <h3 id="inicio-burger-sheriff-es" class="artCarta01__titulo">Sheriff Picante</h3>
                            <p class="artCarta01__lema">Jalapeño · Chipotle</p>
                            <p class="artCarta01__precio"><data value="11.90">11,90 €</data></p>
                        </article>

                        <article class="artCarta01" aria-labelledby="inicio-burger-fiebre-es">
                            <div class="artCarta01__imagen">
                                <div class="moduloBurger01 moduloBurger01--oscuro">
                                    <div
                                        class="moduloBurger01__dibujo"
                                        role="img"
                                        aria-label="Hamburguesa Fiebre del Oro con huevo, queso cheddar, carne y miel"
                                    >
                                        <span class="moduloBurger01__sombra"></span>
                                        <span class="moduloBurger01__panInferior"></span>
                                        <span class="moduloBurger01__salsa"></span>
                                        <span class="moduloBurger01__carne"></span>
                                        <span class="moduloBurger01__huevo"></span>
                                        <span class="moduloBurger01__queso"></span>
                                        <span class="moduloBurger01__yema"></span>
                                        <span class="moduloBurger01__panSuperior"></span>
                                    </div>
                                </div>
                            </div>
                            <h3 id="inicio-burger-fiebre-es" class="artCarta01__titulo">Fiebre del Oro</h3>
                            <p class="artCarta01__lema">Cheddar · Huevo · Miel</p>
                            <p class="artCarta01__precio"><data value="12.50">12,50 €</data></p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="sect02-bis sect02-bis--rojo sect02-bis--sesgoArriba" aria-labelledby="inicio-ruta-es">
                <div class="sect02-bis__contenido">
                    <div class="sect02-bis__dividido">
                        <div class="sect02-bis__columna">
                            <p class="h2Especial-bis h2Especial-bis--oscuro">
                                <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                                <span aria-hidden="true">★</span> En ruta
                            </p>
                            <h2 id="inicio-ruta-es" class="sect02-bis__titulo">¿Dónde aparca el carro esta semana?</h2>
                            <p class="sect02-bis__texto">
                                Cambiamos de plaza cada día. Consulta la ruta y ven antes de que se acabe el pan.
                            </p>
                            <a class="moduloBoton03 moduloBoton03--oscuro" href="<?= url("/es/eventos") ?>">Reservar para un evento</a>
                        </div>

                        <article class="artRuta01" aria-labelledby="inicio-ruta-semana-es">
                            <h3 id="inicio-ruta-semana-es" class="artRuta01__titulo">Ruta de la semana</h3>
                            <ul class="artRuta01__lista">
                                <li class="artRuta01__parada">
                                    <time class="artRuta01__dia" datetime="03-18">Mar 18</time>
                                    <span class="artRuta01__lugar">Mercado de Motores · Madrid</span>
                                    <span class="artRuta01__hora"><time datetime="13:00">13:00</time>–<time datetime="16:30">16:30</time></span>
                                </li>
                                <li class="artRuta01__parada">
                                    <time class="artRuta01__dia" datetime="03-20">Jue 20</time>
                                    <span class="artRuta01__lugar">Parque Tierno Galván</span>
                                    <span class="artRuta01__hora"><time datetime="20:00">20:00</time>–<time datetime="00:00">00:00</time></span>
                                </li>
                                <li class="artRuta01__parada">
                                    <time class="artRuta01__dia" datetime="03-21">Vie 21</time>
                                    <span class="artRuta01__lugar">Festival Rock &amp; Grill · Getafe</span>
                                    <span class="artRuta01__hora"><time datetime="19:00">19:00</time>–<time datetime="02:00">02:00</time></span>
                                </li>
                                <li class="artRuta01__parada">
                                    <time class="artRuta01__dia" datetime="03-22">Sáb 22</time>
                                    <span class="artRuta01__lugar">Matadero · Plaza Central</span>
                                    <span class="artRuta01__hora"><time datetime="12:00">12:00</time>–<time datetime="00:00">00:00</time></span>
                                </li>
                            </ul>
                        </article>
                    </div>
                </div>
            </section>
        </main>

        <?php require app_path("includes/es/footer02.php"); ?>
        <?php require app_path("includes/es/carrito.php"); ?>
    </body>
</html>
