<!doctype html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/eu")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es")) ?>" />
        <title>El Forajido | Arte-egurraren txingarretako hanburgesen foodtrucka</title>
        <meta
            name="description"
            content="Arte-egurraren txingarretan erretako hanburgesak: okela ondua, ama-oreko ogia eta etxeko saltsak. Begiratu foodtruckaren asteko ibilbidea eta etorri dastatzera."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="eu_ES" />
        <meta property="og:site_name" content="El Forajido Burger Wagon" />
        <meta property="og:title" content="El Forajido | Arte-egurraren txingarretako hanburgesen foodtrucka" />
        <meta
            property="og:description"
            content="Arte-egurraren txingarretan erretako hanburgesak: okela ondua, ama-oreko ogia eta etxeko saltsak. Begiratu foodtruckaren asteko ibilbidea eta etorri dastatzera."
        />
        <meta property="og:url" content="<?= e(app_url("/eu")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/views/matrix-1.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="El Forajido | Arte-egurraren txingarretako hanburgesen foodtrucka" />
        <meta
            name="twitter:description"
            content="Arte-egurraren txingarretan erretako hanburgesak: okela ondua, ama-oreko ogia eta etxeko saltsak. Begiratu foodtruckaren asteko ibilbidea eta etorri dastatzera."
        />
        <meta name="twitter:image" content="<?= e(app_url("assets/img/views/matrix-1.webp")) ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?= vite_tags($route["resources"] ?? null) ?>
        <?php require app_path("includes/cookielad.php"); ?>
    </head>
    <body>
        <?php require app_path("includes/eu/nav02.php"); ?>

        <header class="header01-bis">
            <div class="header01-bis__inner">
                <div class="header01-bis__content">
                    <p class="header01-bis__eyebrow">
                        <span aria-hidden="true">★ </span>Hanburgesen foodtrucka<span aria-hidden="true"> ★</span>
                    </p>
                    <h1 class="header01-bis__titulo">
                        Mendebaldeko burger <span class="header01-bis__resalte">bilatuenak</span>
                    </h1>
                    <p class="header01-bis__text">
                        Txingarretan erretako okela ondua, ama-oreko ogia eta giltzapean gordetzen ditugun saltsak. Bideari
                        jarraitzen diogu eta gosea dagoen lekuan gelditzen gara.
                    </p>
                    <div class="header01-bis__acciones">
                        <a class="moduloBoton03" href="<?= url("/eu/gure-hanburgesak") ?>">Ikusi karta</a>
                        <a class="moduloBoton03 moduloBoton03--contorno" href="#inicio-ruta-eu">Non gaude gaur?</a>
                    </div>
                </div>

                <div class="header01-bis__media">
                    <div class="artCartel01">
                        <p class="artCartel01__titulo">Bilatzen da</p>
                        <p class="artCartel01__lema">Bizirik eta mamitsu</p>
                        <div class="artCartel01__marco">
                            <div class="moduloBurger01 moduloBurger01--oscuro">
                                <div
                                    class="moduloBurger01__dibujo"
                                    role="img"
                                    aria-label="El Forajido hanburgesa: letxuga, gazta, tomatea, okela eta tipula"
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
                        <p class="artCartel01__recompensa">— Saria —</p>
                        <p class="artCartel01__precio"><data value="10.50">10,50 €</data></p>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="sect02-bis sect02-bis--rojo sect02-bis--sesgoArriba sect02-bis--sesgoAbajo" aria-labelledby="inicio-reglas-eu">
                <div class="sect02-bis__contenido">
                    <div class="sect02-bis__cabecera sect02-bis__cabecera--centrado">
                        <p class="h2Especial-bis h2Especial-bis--oscuro">
                            <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                            <span aria-hidden="true">★</span> Etxeko legea <span aria-hidden="true">★</span>
                            <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                        </p>
                        <h2 id="inicio-reglas-eu" class="sect02-bis__titulo">Inoiz hausten ez diren hiru arau</h2>
                    </div>

                    <div class="sect02-bis__rejilla">
                        <article class="artValor01" aria-labelledby="inicio-regla-lena-eu">
                            <span class="artValor01__icono" aria-hidden="true">🔥</span>
                            <span class="artValor01__numeral" aria-hidden="true">I</span>
                            <h3 id="inicio-regla-lena-eu" class="artValor01__titulo">Egur-sua</h3>
                            <p class="artValor01__texto">
                                Okela guztiak arte-egurrezko parrillatik pasatzen dira. Plantxarik eta lasterbiderik gabe: txingarra eta pazientzia besterik ez.
                            </p>
                        </article>
                        <article class="artValor01" aria-labelledby="inicio-regla-carne-eu">
                            <span class="artValor01__icono" aria-hidden="true">★</span>
                            <span class="artValor01__numeral" aria-hidden="true">II</span>
                            <h3 id="inicio-regla-carne-eu" class="artValor01__titulo">Hemengo okela</h3>
                            <p class="artValor01__texto">
                                Mendiko abeltzaintzetako behi-okela, 30 egunez ondua eta goizero kamioian bertan txikitua.
                            </p>
                        </article>
                        <article class="artValor01" aria-labelledby="inicio-regla-salsas-eu">
                            <span class="artValor01__icono" aria-hidden="true">✦</span>
                            <span class="artValor01__numeral" aria-hidden="true">III</span>
                            <h3 id="inicio-regla-salsas-eu" class="artValor01__titulo">Bandido-saltsak</h3>
                            <p class="artValor01__texto">
                                Sei errezeta propio, chipotle ketutik hasi eta ezti-ziape saltsaraino. Errezeta ez da negoziatzen.
                            </p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="sect02-bis" aria-labelledby="inicio-buscados-eu">
                <div class="sect02-bis__contenido">
                    <div class="sect02-bis__cabecera sect02-bis__cabecera--accion">
                        <div class="sect02-bis__grupo">
                            <p class="h2Especial-bis">
                                <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                                <span aria-hidden="true">★</span> Eskatuenak
                            </p>
                            <h2 id="inicio-buscados-eu" class="sect02-bis__titulo">Bilatuenak</h2>
                        </div>
                        <a class="moduloBoton03" href="<?= url("/eu/gure-hanburgesak") ?>">Ikusi 5 burgerrak</a>
                    </div>

                    <div class="sect02-bis__rejilla">
                        <article class="artCarta01" aria-labelledby="inicio-burger-diligencia-eu">
                            <div class="artCarta01__imagen">
                                <div class="moduloBurger01 moduloBurger01--oscuro">
                                    <div
                                        class="moduloBurger01__dibujo"
                                        role="img"
                                        aria-label="La Diligencia hanburgesa: tipula-eraztunak, barbakoa saltsa eta okela"
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
                            <h3 id="inicio-burger-diligencia-eu" class="artCarta01__titulo">La Diligencia</h3>
                            <p class="artCarta01__lema">BBQ · Bourbon · Bacon</p>
                            <p class="artCarta01__precio"><data value="12.90">12,90 €</data></p>
                        </article>

                        <article class="artCarta01" aria-labelledby="inicio-burger-sheriff-eu">
                            <div class="artCarta01__imagen">
                                <div class="moduloBurger01 moduloBurger01--oscuro">
                                    <div
                                        class="moduloBurger01__dibujo"
                                        role="img"
                                        aria-label="Sheriff Picante hanburgesa: letxuga, gazta, jalapeñoak, okela eta saltsa pikantea"
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
                            <h3 id="inicio-burger-sheriff-eu" class="artCarta01__titulo">Sheriff Picante</h3>
                            <p class="artCarta01__lema">Jalapeñoa · Chipotlea</p>
                            <p class="artCarta01__precio"><data value="11.90">11,90 €</data></p>
                        </article>

                        <article class="artCarta01" aria-labelledby="inicio-burger-fiebre-eu">
                            <div class="artCarta01__imagen">
                                <div class="moduloBurger01 moduloBurger01--oscuro">
                                    <div
                                        class="moduloBurger01__dibujo"
                                        role="img"
                                        aria-label="Fiebre del Oro hanburgesa: arrautza, cheddar gazta, okela eta eztia"
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
                            <h3 id="inicio-burger-fiebre-eu" class="artCarta01__titulo">Fiebre del Oro</h3>
                            <p class="artCarta01__lema">Cheddarra · Arrautza · Eztia</p>
                            <p class="artCarta01__precio"><data value="12.50">12,50 €</data></p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="sect02-bis sect02-bis--rojo sect02-bis--sesgoArriba" aria-labelledby="inicio-ruta-eu">
                <div class="sect02-bis__contenido">
                    <div class="sect02-bis__dividido">
                        <div class="sect02-bis__columna">
                            <p class="h2Especial-bis h2Especial-bis--oscuro">
                                <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                                <span aria-hidden="true">★</span> Bidean
                            </p>
                            <h2 id="inicio-ruta-eu" class="sect02-bis__titulo">Non aparkatuko du gurdiak aste honetan?</h2>
                            <p class="sect02-bis__texto">
                                Egunero aldatzen dugu plaza. Begiratu ibilbidea eta etorri ogia amaitu baino lehen.
                            </p>
                            <a class="moduloBoton03 moduloBoton03--oscuro" href="<?= url("/eu/ekitaldiak") ?>">Erreserbatu ekitaldi baterako</a>
                        </div>

                        <article class="artRuta01" aria-labelledby="inicio-ruta-semana-eu">
                            <h3 id="inicio-ruta-semana-eu" class="artRuta01__titulo">Asteko ibilbidea</h3>
                            <ul class="artRuta01__lista">
                                <li class="artRuta01__parada">
                                    <time class="artRuta01__dia" datetime="03-18">Ar. 18</time>
                                    <span class="artRuta01__lugar">Mercado de Motores · Madrid</span>
                                    <span class="artRuta01__hora"><time datetime="13:00">13:00</time>–<time datetime="16:30">16:30</time></span>
                                </li>
                                <li class="artRuta01__parada">
                                    <time class="artRuta01__dia" datetime="03-20">Og. 20</time>
                                    <span class="artRuta01__lugar">Parque Tierno Galván</span>
                                    <span class="artRuta01__hora"><time datetime="20:00">20:00</time>–<time datetime="00:00">00:00</time></span>
                                </li>
                                <li class="artRuta01__parada">
                                    <time class="artRuta01__dia" datetime="03-21">Or. 21</time>
                                    <span class="artRuta01__lugar">Festival Rock &amp; Grill · Getafe</span>
                                    <span class="artRuta01__hora"><time datetime="19:00">19:00</time>–<time datetime="02:00">02:00</time></span>
                                </li>
                                <li class="artRuta01__parada">
                                    <time class="artRuta01__dia" datetime="03-22">Lr. 22</time>
                                    <span class="artRuta01__lugar">Matadero · Plaza Central</span>
                                    <span class="artRuta01__hora"><time datetime="12:00">12:00</time>–<time datetime="00:00">00:00</time></span>
                                </li>
                            </ul>
                        </article>
                    </div>
                </div>
            </section>
        </main>

        <?php require app_path("includes/eu/footer02.php"); ?>
        <?php require app_path("includes/eu/carrito.php"); ?>
    </body>
</html>
