<!doctype html>
<html lang="<?= e($lang ?? env("LANG_DEFAULT", "es")) ?>">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= url("/showroom") ?>" />
        <title>Showroom de resources</title>
        <meta name="description" content="Showroom interno con todos los resources y componentes del stack." />
        <meta name="robots" content="noindex, nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?= vite_tags($route["resources"] ?? null) ?>
        <?php require app_path("includes/cookielad.php"); ?>
    </head>
    <body>
        <?php require app_path("includes/es/nav.php"); ?>

        <header class="header01">
            <img class="header01__media" src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
            <div class="header01__content">
                <p class="header01__eyebrow">Header 01</p>
                <h1>Showroom de resources</h1>
                <p class="header01__text">
                    Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                    simulacrum.
                </p>
                <a href="#showroom-recursos" class="boton">Ver recursos</a>
            </div>
        </header>

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
            <section aria-labelledby="headers-title">
                <h2 id="headers-title">Recursos Header</h2>
            </section>

            <section aria-labelledby="showroom-nav02-title">
                <h2 id="showroom-nav02-title">Recurso nav02</h2>

                <?php
                // /showroom es una ruta global sin equivalente por idioma: ruta_homologa()
                // devolvería la 404. En el catálogo se toma el inicio como referencia; en una
                // página real se pasa $url.
                $nav02Ruta = "/es";
                ?>
                <?php foreach (["1" => "Navegación nav02 · ejemplo 1", "2" => "Navegación nav02 · ejemplo 2"] as $nav02Id => $nav02Label): ?>
                    <nav class="nav02" aria-label="<?= e($nav02Label) ?>">
                        <div class="nav02__inner">
                            <a class="nav02__brand" href="<?= url("/es") ?>">
                                <svg class="nav02__logo" viewBox="0 0 60 60" aria-hidden="true" focusable="false">
                                    <circle cx="30" cy="30" r="28" fill="none" stroke="currentColor" stroke-width="2.5" />
                                    <path
                                        fill="currentColor"
                                        d="M30 17l3.53 10.86h11.42l-9.24 6.71 3.53 10.86L30 38.72l-9.24 6.71 3.53-10.86-9.24-6.71h11.42z"
                                    />
                                </svg>
                                <span class="nav02__brandText">
                                    <span class="nav02__name">El Forajido</span>
                                    <span class="nav02__tagline">Burger wagon · Est. 2017</span>
                                </span>
                            </a>

                            <button
                                class="nav02__toggle"
                                type="button"
                                aria-controls="nav02-menu-<?= e($nav02Id) ?>"
                                aria-expanded="false"
                                aria-label="Abrir menú"
                                data-label-open="Abrir menú"
                                data-label-close="Cerrar menú"
                            >
                                <span class="nav02__toggleLine"></span>
                                <span class="nav02__toggleLine"></span>
                                <span class="nav02__toggleLine"></span>
                            </button>

                            <div class="nav02__panel" id="nav02-menu-<?= e($nav02Id) ?>">
                                <div class="nav02__panelInner">
                                    <ul class="nav02__list">
                                        <li><a class="nav02__link" href="<?= url("/es") ?>">Inicio</a></li>
                                        <li><a class="nav02__link" href="<?= url("/es/quienes-somos") ?>">Quiénes somos</a></li>
                                        <li><a class="nav02__link" href="<?= url("/es/nuestras-hamburguesas") ?>">Nuestras hamburguesas</a></li>
                                        <li><a class="nav02__link" href="<?= url("/es/contacto") ?>">Contacto</a></li>
                                        <li><a class="nav02__link" href="<?= url("/showroom") ?>" aria-current="page">Showroom</a></li>
                                    </ul>
                                    <div class="nav02__langs" role="group" aria-label="Idioma">
                                        <a
                                            class="nav02__lang"
                                            href="<?= url(ruta_homologa($nav02Ruta, "es")) ?>"
                                            lang="es"
                                            hreflang="es"
                                            aria-current="true"
                                            title="Castellano"
                                            >ES</a
                                        >
                                        <a
                                            class="nav02__lang"
                                            href="<?= url(ruta_homologa($nav02Ruta, "eu")) ?>"
                                            lang="eu"
                                            hreflang="eu"
                                            title="Euskara"
                                            >EU</a
                                        >
                                    </div>
                                    <a class="nav02__cta" href="<?= url("/es/contacto") ?>">Pide ahora</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                <?php endforeach; ?>
            </section>

            <section aria-labelledby="showroom-footer02-title">
                <h2 id="showroom-footer02-title">Recurso footer02</h2>

                <footer class="footer02">
                    <div class="footer02__inner">
                        <div class="footer02__grid">
                            <div class="footer02__brandCol">
                                <a class="footer02__brand" href="<?= url("/es") ?>">
                                    <svg class="footer02__logo" viewBox="0 0 60 60" aria-hidden="true" focusable="false">
                                        <circle cx="30" cy="30" r="28" fill="none" stroke="currentColor" stroke-width="2.5" />
                                        <path
                                            fill="currentColor"
                                            d="M30 17l3.53 10.86h11.42l-9.24 6.71 3.53 10.86L30 38.72l-9.24 6.71 3.53-10.86-9.24-6.71h11.42z"
                                        />
                                    </svg>
                                    <span class="footer02__brandText">
                                        <span class="footer02__name">El Forajido</span>
                                        <span class="footer02__tagline">Burger wagon · Est. 2017</span>
                                    </span>
                                </a>
                                <p class="footer02__text">
                                    Hamburguesas a la brasa servidas desde una vieja furgoneta roja. Donde aparcamos, se
                                    arma el saloon.
                                </p>
                            </div>

                            <div class="footer02__col">
                                <h3 class="footer02__title">Visítanos</h3>
                                <p class="footer02__line">Martes a domingo</p>
                                <p class="footer02__line">13:00 – 16:30 · 20:00 – 00:00</p>
                            </div>

                            <div class="footer02__col">
                                <h3 class="footer02__title">Contacto</h3>
                                <address class="footer02__address">
                                    <a class="footer02__link footer02__line" href="tel:+34612345678">+34 612 345 678</a>
                                    <a class="footer02__link footer02__line" href="mailto:hola@elforajido.es">hola@elforajido.es</a>
                                </address>
                            </div>

                            <div class="footer02__col">
                                <h3 class="footer02__title">Síguenos</h3>
                                <p class="footer02__line">
                                    <a class="footer02__link" href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">Instagram</a>
                                    ·
                                    <a class="footer02__link" href="https://www.tiktok.com/" target="_blank" rel="noopener noreferrer">TikTok</a>
                                </p>
                                <p class="footer02__line">@elforajidoburger</p>
                            </div>
                        </div>

                        <div class="footer02__bottom">
                            <p class="footer02__legal">© <?= e(date("Y")) ?> El Forajido Burger Wagon</p>
                            <p class="footer02__motto"><span aria-hidden="true">★ </span>Se busca: hambre<span aria-hidden="true"> ★</span></p>
                        </div>
                    </div>
                </footer>
            </section>

            <section id="showroom-recursos">
                <h2 class="moduloNikoH2">Módulo Niko H2</h2>
            </section>

            <section class="sect01">
                <div class="h2Especial">
                    <span></span>
                    <h2>Sección 01</h2>
                </div>

                <article>
                    <div>
                        <h3>Sección 01 · Matrix ipsum</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                            simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.
                        </p>
                        <span></span>
                        <div class="cards">
                            <div class="card">
                                <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                                <h4>Matrix ipsum 01</h4>
                                <p>
                                    Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis
                                    codicem et simulacrum.
                                </p>
                                <a href="" class="moduloBoton01">
                                    <span>Módulo Botón 01</span>
                                    <img src="<?= asset("assets/img/icons/arrow-forward-outline.svg") ?>" alt="" title="" />
                                </a>
                            </div>
                            <div class="card">
                                <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                                <h4>Matrix ipsum 02</h4>
                                <p>
                                    Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem
                                    et realitatem.
                                </p>
                                <a href="" class="moduloBoton01">
                                    <span>Módulo Botón 01</span>
                                    <img src="<?= asset("assets/img/icons/arrow-forward-outline.svg") ?>" alt="" title="" />
                                </a>
                            </div>
                        </div>
                        <a href="" class="moduloBoton02">
                            <span>Módulo Botón 02</span>
                            <img src="<?= asset("assets/img/icons/arrow-forward-outline.svg") ?>" alt="" title="" />
                        </a>
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                    </div>
                </article>
            </section>

            <section class="sect02">
                <div class="h2Especial">
                    <span></span>
                    <h2>Sección 02</h2>
                </div>
                <div class="sect02-content">
                    <ul>
                        <li>
                            <a href="tel:+34000000000" title="Lorem ipsum" target="_blank">
                                <img src="<?= asset("assets/img/icons/call.svg") ?>" alt="Matrix" title="Lorem ipsum" width="20" height="20" />
                                <span>000 000 000</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" title="Lorem ipsum" target="_blank">
                                <img src="<?= asset("assets/img/icons/logo-whatsapp.svg") ?>" alt="Matrix" title="Lorem ipsum" width="20" height="20" />
                                <span>600 123 123</span>
                            </a>
                        </li>

                        <li>
                            <a href="mailto:info@example.com" title="Lorem ipsum" target="_blank">
                                <img src="<?= asset("assets/img/icons/mail-solid.svg") ?>" alt="Matrix" title="Lorem ipsum" width="20" height="20" />
                                <span>correo@correo.com</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" title="Lorem ipsum" target="_blank">
                                <img src="<?= asset("assets/img/icons/location.svg") ?>" alt="Matrix" title="Lorem ipsum" width="20" height="20" />
                                <span>Lorem ipsum<br />Dolor sit amet</span>
                            </a>
                        </li>
                    </ul>

                    <iframe
                        src="about:blank"
                        title="Mapa de ejemplo"
                        width="100%"
                        height="300"
                        style="border: 0"
                        loading="lazy"
                    ></iframe>
                </div>
            </section>

            <section>
                <div class="h2Especial">
                    <span></span>
                    <h2>Artículos 01 a 13</h2>
                </div>

                <article class="art01">
                    <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
                    <div>
                        <h3>Artículo 01</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                            simulacrum.
                        </p>

                        <a href="" class="moduloBoton02">
                            <span>Módulo Botón 02</span>
                            <img src="<?= asset("assets/img/icons/arrow-forward-outline.svg") ?>" alt="" title="" />
                        </a>
                    </div>
                </article>

                <article class="art02">
                    <div class="textos">
                        <h3>Artículo 02</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem,
                            pillula rubra aperiam systema et realitatem.
                        </p>

                        <a href="" class="moduloBoton02">
                            <span>Módulo Botón 02</span>
                            <img src="<?= asset("assets/img/icons/arrow-forward-outline.svg") ?>" alt="" title="" />
                        </a>
                    </div>

                    <div class="imagenes">
                        <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" title="" />
                        <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" title="" />
                        <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" title="" />
                    </div>
                </article>

                <article class="art02-bis">
                    <div class="textos">
                        <h3>Artículo 02-bis</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                            simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.
                        </p>
                        <a href="<?= url("/es/nuestras-hamburguesas") ?>" class="moduloBoton02">
                            <span>Módulo Botón 02</span>
                            <img src="<?= asset("assets/img/icons/arrow-forward-outline.svg") ?>" alt="Matrix" title="Lorem ipsum" />
                        </a>
                    </div>

                    <div class="imagenes">
                        <a href="<?= url("/es/nuestras-hamburguesas") ?>" title="Lorem ipsum">
                            <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" title="Lorem ipsum" />
                            <h4>Matrix ipsum 01</h4>
                        </a>
                        <a href="<?= url("/es/nuestras-hamburguesas") ?>" title="Lorem ipsum">
                            <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" title="Lorem ipsum" />
                            <h4>Matrix ipsum 02</h4>
                        </a>
                        <a href="<?= url("/es/nuestras-hamburguesas") ?>" title="Lorem ipsum">
                            <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" title="Lorem ipsum" />
                            <h4>Matrix ipsum 03</h4>
                        </a>
                    </div>
                </article>

                <article class="art03">
                    <h3>Artículo 03</h3>

                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                        simulacrum. Agent Smith erroribus reiciendis, Zion libertatem defendit.
                    </p>

                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem et
                        realitatem.
                    </p>

                    <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" title="" />
                </article>

                <article class="art04">
                    <h3>Artículo 04</h3>
                    <span class="ralla"></span>
                    <div class="contenedor-fichas">
                        <div class="ficha">
                            <h4>Matrix ipsum 01</h4>
                            <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" title="" />
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis
                                codicem et simulacrum.
                            </p>
                            <span class="ralla"></span>
                        </div>

                        <div class="ficha">
                            <h4>Matrix ipsum 02</h4>
                            <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" title="" />
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem et
                                realitatem.
                            </p>
                            <span class="ralla"></span>
                        </div>

                        <div class="ficha">
                            <h4>Matrix ipsum 03</h4>
                            <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" title="" />
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus
                                reiciendis et systema.
                            </p>
                            <span class="ralla"></span>
                        </div>

                        <div class="ficha">
                            <h4>Matrix ipsum 04</h4>
                            <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" title="" />
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Zion libertatem defendit
                                contra machinas.
                            </p>
                            <span class="ralla"></span>
                        </div>
                    </div>
                </article>

                <article class="art05">
                    <h3>Artículo 05</h3>
                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                        simulacrum.
                    </p>
                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem, pillula
                        rubra aperiam systema et realitatem.
                    </p>
                    <a href="" class="boton">CTA</a>
                </article>

                <article class="art06">
                    <div>
                        <h3>Artículo 06</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus reiciendis,
                            Zion libertatem defendit dum machinae mundum regunt.
                        </p>
                        <a href="#" title="" class="boton">CTA</a>
                    </div>
                </article>

                <article class="art07">
                    <h3>Artículo 07</h3>

                    <img src="<?= asset("assets/img/test/dummy_900.avif") ?>" width="900" alt="" title="" />

                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                        simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.
                    </p>

                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus reiciendis et
                        Zion libertatem defendit.
                    </p>

                    <a href="" class="boton">CTA</a>
                </article>

                <article class="art08">
                    <h3>Artículo 08</h3>
                    <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                        simulacrum.
                    </p>
                    <a href="#" class="boton">CTA</a>
                </article>

                <article class="art09">
                    <h3>Artículo 09</h3>

                    <div class="art09-content">
                        <div class="contenedor-lista">
                            <h4>Matrix ipsum columna 01</h4>
                            <ul>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: pillula rubra.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: codex revelatus.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: Zion vigilat.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: Neo eligendi.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: machinae quaerunt.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="contenedor-lista">
                            <h4>Matrix ipsum columna 02</h4>
                            <ul>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: simulacrum cadit.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: Morpheus respondet.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: Trinity navigat.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: Agent Smith advenit.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: realitas aperitur.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>

                <article class="art10">
                    <h3>Artículo 10</h3>
                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                        simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.
                    </p>
                    <div class="matrix-items">
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/home-solid.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 01</h4>
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis
                                codicem.
                            </p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/garages.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 02</h4>
                            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem.</p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/furniture.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 03</h4>
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Pillula rubra aperiam
                                systema.
                            </p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/paint-tool.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 04</h4>
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus
                                reiciendis.
                            </p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/tools-power-drill-sharp.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 05</h4>
                            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Zion libertatem defendit.</p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/stairs-arch.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 06</h4>
                            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Machinae mundum regunt.</p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/business.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 07</h4>
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Simulacrum veritatem celat.
                            </p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/house-check-fill.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 08</h4>
                            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Codex realitatem mutat.</p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/thumbs-up-outline.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 09</h4>
                            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo systema transcendit.</p>
                        </div>
                    </div>
                </article>

                <article class="art11">
                    <h3>Artículo 11</h3>
                    <div>
                        <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                    </div>
                </article>

                <article class="art12">
                    <h3>Artículo 12</h3>
                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                        simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.
                    </p>
                    <div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" title="" />
                            <div>
                                <h4>Matrix ipsum 01</h4>
                                <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>Neo veritatem eligit.</p>
                            </div>
                        </div>

                        <div class="ficha">
                            <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" title="" />
                            <div>
                                <h4>Matrix ipsum 02</h4>
                                <p>
                                    Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat
                                    optionem.
                                </p>
                                <p>Pillula rubra aperit.</p>
                            </div>
                        </div>

                        <div class="ficha">
                            <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" title="" />
                            <div>
                                <h4>Matrix ipsum 03</h4>
                                <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>Zion libertatem defendit.</p>
                            </div>
                        </div>

                        <div class="ficha">
                            <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" title="" />
                            <div>
                                <h4>Matrix ipsum 04</h4>
                                <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>Systema simulacrum celat.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="art13">
                    <img alt="" title="" src="<?= asset("assets/img/test/dummy_1200.avif") ?>" />
                    <div>
                        <h3>Artículo 13 · Variante 01</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                            simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.
                        </p>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus reiciendis
                            et Zion libertatem defendit.
                        </p>
                        <a href="#" class="boton">CTA</a>
                    </div>
                </article>

                <article class="art13 upsidedown">
                    <img alt="" title="" src="<?= asset("assets/img/test/dummy_1200.avif") ?>" />
                    <div>
                        <h3>Artículo 13 · Variante invertida</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem,
                            pillula rubra aperiam systema et realitatem.
                        </p>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                            simulacrum.
                        </p>
                        <a href="#" class="boton">CTA</a>
                    </div>
                </article>

                <article class="artForm02">
                    <h3>artForm02</h3>
                    <div>
                        <div class="contenedor-form">
                            <img src="<?= asset("assets/img/icons/mail-solid.svg") ?>" alt="" />

                            <div id="modal_envio">
                                <h3 id="h3_modal_envio">Matrix ipsum modal</h3>
                                <p id="p_modal_envio">
                                    Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis
                                    codicem et simulacrum.
                                </p>
                                <div class="boton" id="boton_modal_envio">Escribir otra consulta</div>
                            </div>

                            <form id="idForAjax" action="<?= e(app_url("/app/artForm02")) ?>" method="post">
                                <p class="error" id="errorForm02"></p>

                                <label for="nombreAjax">Nombre *</label>
                                <input type="text" id="nombreAjax" name="nombre" placeholder="Lorem ipsum" />

                                <label for="telefonoAjax">Teléfono *</label>
                                <input type="tel" id="telefonoAjax" name="telefono" placeholder="Lorem ipsum" />

                                <label for="emailAjax">Correo Electrónico</label>
                                <input type="email" id="emailAjax" name="email" placeholder="Lorem ipsum" />

                                <label for="mensajeAjax">Escribe tu mensaje</label>
                                <textarea name="mensaje" id="mensajeAjax" placeholder="Lorem ipsum"></textarea>

                                <div class="horizontal">
                                    <label for="terminosAjax" id="consentimiento"
                                        >Acepto el envío de datos de prueba *</label
                                    >
                                    <input type="checkbox" name="terminos" id="terminosAjax" />
                                </div>

                                <label for="respuesta">Resuelve</label>
                                <div class="horizontal">
                                    <span id="num1ajax"></span>
                                    <span id="operadorajax"></span>
                                    <span id="num2ajax"></span>
                                    <input
                                        type="text"
                                        name="respUser"
                                        id="respuestaajax"
                                        placeholder="Lorem ipsum"
                                        autocomplete="off"
                                    />
                                    <input type="hidden" name="respSystem" id="respSystemajax" value="" />
                                </div>

                                <input type="hidden" name="url" value="<?= e($url) ?>" />
                                <input type="hidden" name="lang" value="<?= e($lang) ?>" />

                                <input type="submit" class="boton" value="Enviar" id="botonEnviarAjax" />
                            </form>

                            <div class="moduloLoader01" id="moduloLoader01">
                                <svg
                                    version="1.1"
                                    id="L7"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px"
                                    y="0px"
                                    viewBox="0 0 100 100"
                                    enable-background="new 0 0 100 100"
                                    xml:space="preserve"
                                >
                                    <path
                                        fill="#000000"
                                        d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3
                            c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z"
                                    >
                                        <animateTransform
                                            attributeName="transform"
                                            attributeType="XML"
                                            type="rotate"
                                            dur="2s"
                                            from="0 50 50"
                                            to="360 50 50"
                                            repeatCount="indefinite"
                                        />
                                    </path>
                                    <path
                                        fill="#000000"
                                        d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                            c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z"
                                    >
                                        <animateTransform
                                            attributeName="transform"
                                            attributeType="XML"
                                            type="rotate"
                                            dur="1s"
                                            from="0 50 50"
                                            to="-360 50 50"
                                            repeatCount="indefinite"
                                        />
                                    </path>
                                    <path
                                        fill="#000000"
                                        d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                            L82,35.7z"
                                    >
                                        <animateTransform
                                            attributeName="transform"
                                            attributeType="XML"
                                            type="rotate"
                                            dur="2s"
                                            from="0 50 50"
                                            to="360 50 50"
                                            repeatCount="indefinite"
                                        />
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="contenedor-info">
                            <ul>
                                <li>
                                    <a href="tel:+34000000000" target="_blank">
                                        <img src="<?= asset("assets/img/icons/tel.svg") ?>" alt="" title="" />
                                        <span>000 000 000</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@example.com" target="_blank">
                                        <img src="<?= asset("assets/img/icons/mail-solid.svg") ?>" alt="" title="" />
                                        <span>info@example.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <img src="<?= asset("assets/img/icons/wa.svg") ?>" alt="" title="" />
                                        <span>000 000 000</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <img src="<?= asset("assets/img/icons/map-pin-solid.svg") ?>" alt="" title="" />
                                        <span>Lorem ipsum dolor sit amet</span>
                                    </a>
                                </li>
                            </ul>
                            <iframe
                                src="about:blank"
                                title="Mapa de ejemplo"
                                width="100%"
                                height="300"
                                style="border: 0"
                                loading="lazy"
                            ></iframe>
                        </div>
                    </div>
                </article>
            </section>

            <section id="section2">
                <h2>Artículos 14 y 15</h2>

                <article class="art14">
                    <div class="content">
                        <h3>Artículo 14</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                            simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem. Agent
                            Smith recusandae Zion, dum machinae architecto mundum regunt et Trinity viam demonstrat.
                        </p>
                        <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
                    </div>
                </article>

                <article class="art15">
                    <div>
                        <h3>Artículo 15</h3>
                        <p>Matrix ipsum dolor sit amet. Neo eligendi veritatis codicem et simulacrum.</p>
                        <p>
                            Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem. Agent Smith custodit
                            Matrix, sed Trinity et Neo per codicem navigant. Zion resistit machinis dum oraculum
                            responsum revelat.
                        </p>
                    </div>

                    <div>
                        <a href="" class="item">
                            <h4>Matrix ipsum 01</h4>
                            <p>Neo eligendi veritatis codicem, dum pillula rubra realitatem aperit.</p>
                            <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" width="700" height="700" />
                        </a>

                        <a href="" class="item">
                            <h4>Matrix ipsum 02</h4>
                            <p>Morpheus quaerat optionem et Trinity per simulacrum navigat.</p>
                            <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                        </a>

                        <a href="" class="item">
                            <h4>Matrix ipsum 03</h4>
                            <p>Agent Smith codicem custodit, sed Zion machinis resistit.</p>
                            <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                        </a>
                    </div>

                    <div class="modulePersonal01">
                        <div>
                            <img src="<?= asset("assets/img/icons/truck.svg") ?>" alt="" />
                            <h4>modulePersonal01 · Item 01</h4>
                        </div>
                        <div>
                            <img src="<?= asset("assets/img/icons/tools.svg") ?>" alt="" />
                            <h4>modulePersonal01 · Item 02</h4>
                        </div>
                        <div>
                            <img src="<?= asset("assets/img/icons/clip.svg") ?>" alt="" />
                            <h4>modulePersonal01 · Item 03</h4>
                        </div>
                        <div>
                            <img src="<?= asset("assets/img/icons/bag.svg") ?>" alt="" />
                            <h4>modulePersonal01 · Item 04</h4>
                        </div>
                        <div>
                            <img src="<?= asset("assets/img/icons/money.svg") ?>" alt="" />
                            <h4>modulePersonal01 · Item 05</h4>
                        </div>
                    </div>
                </article>

                <article class="artAcordeon01">
                    <div class="cabecera">
                        <div>
                            <h3>artAcordeon01</h3>
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
                            <h4>Matrix quaestio 01</h4>
                            <p class="respuesta">
                                Matrix ipsum dolor sit amet. Neo eligendi pillulam rubram et veritatem post codicem
                                invenit.
                            </p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                        <div class="ficha">
                            <h4>Matrix quaestio 02</h4>
                            <p class="respuesta">
                                Morpheus quaerat optionem et simulacrum aperit. Machinae codicem regunt, sed Zion
                                resistit.
                            </p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                        <div class="ficha">
                            <h4>Matrix quaestio 03</h4>
                            <p class="respuesta">Trinity per systema navigat, dum Neo leges simulacri mutare discit.</p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                        <div class="ficha">
                            <h4>Matrix quaestio 04</h4>
                            <p class="respuesta">Agent Smith recusandae libertatem et multiplicat se intra Matrix.</p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                        <div class="ficha">
                            <h4>Matrix quaestio 05</h4>
                            <p class="respuesta">Oraculum responsum non imponit; electio viam ante Neo revelat.</p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                        <div class="ficha">
                            <h4>Matrix quaestio 06</h4>
                            <p class="respuesta">
                                Zion vigilat et homines contra machinas ultimam realitatem defendunt.
                            </p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                    </div>
                </article>
            </section>

            <section id="section3">
                <h2>Artículo 16</h2>

                <article class="art16">
                    <div>
                        <h3>Artículo 16 · Variante 01</h3>

                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                            simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem. Trinity
                            navigat per lineas codicis dum machinae architecto mundum regunt.
                        </p>

                        <p>Agent Smith recusandae libertatem, sed Zion veritatem defendit.</p>

                        <a href="#" class="boton">CTA</a>
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
                    </div>
                </article>

                <article class="art16 invert">
                    <div>
                        <h3>Artículo 16 · Variante invertida</h3>

                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem et Neo
                            codicem sequitur. Pillula rubra simulacrum frangit, dum Trinity ostium ad realitatem
                            invenit.
                        </p>

                        <p>Machinae systema custodiunt, sed electio cursum mutat.</p>

                        <a href="#" class="boton">CTA</a>
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
                    </div>
                </article>

                <article class="art16">
                    <div>
                        <h3>Artículo 16 · Variante 03</h3>

                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatem et leges
                            mundi virtualis superat. Oraculum quaestionem relinquit, Morpheus fidem servat et Zion
                            vigilat.
                        </p>

                        <p>Codex fluit et simulacrum novam viam demonstrat.</p>

                        <a href="#" class="boton">CTA</a>
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                    </div>
                </article>

                <article class="art16 invert">
                    <div>
                        <h3>Artículo 16 · Variante invertida 04</h3>

                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Trinity codicem legit et Agent
                            Smith intra systema multiplicatur. Neo autem realitatem eligit et machinarum ordinem
                            recusat.
                        </p>

                        <p>Pillula rubra viam aperit; nulla electio sine consequentia manet.</p>

                        <a href="#" class="boton">CTA</a>
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                    </div>
                </article>
            </section>

            <section id="section4">
                <h2>artSlider01</h2>

                <article class="artSlider01" aria-label="Carrusel de productos">
                    <div class="artSlider01__visor">
                        <div class="artSlider01__pista">
                            <div class="artSlider01__slide">
                                <h3>Matrix ipsum 01</h3>
                                <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
                            </div>
                            <div class="artSlider01__slide">
                                <h3>Matrix ipsum 02</h3>
                                <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                            </div>

                            <div class="artSlider01__slide">
                                <h3>Matrix ipsum 03</h3>
                                <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                            </div>
                        </div>
                    </div>

                    <button class="artSlider01__arrow artSlider01__arrow--prev">&lsaquo;</button>
                    <button class="artSlider01__arrow artSlider01__arrow--next">&rsaquo;</button>

                    <div class="artSlider01__track">
                        <div class="artSlider01__track__dot active"></div>
                        <div class="artSlider01__track__dot"></div>
                        <div class="artSlider01__track__dot"></div>
                    </div>
                </article>
            </section>

            <section id="section5">
                <h2 data-lang="encabezado">artGrid</h2>

                <article class="artGrid">
                    <div>
                        <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
                    </div>
                    <div>
                        <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
                    </div>
                    <div>
                        <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                    </div>
                    <div>
                        <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                    </div>
                    <div>
                        <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
                    </div>
                    <div>
                        <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
                    </div>
                </article>

                <div class="modulePersonal01">
                    <div>
                        <h4 data-lang>modulePersonal01 · Item 01</h4>
                        <img src="<?= asset("assets/img/icons/truck.svg") ?>" alt="" />
                    </div>
                    <div>
                        <h4>modulePersonal01 · Item 02</h4>
                        <img src="<?= asset("assets/img/icons/tools.svg") ?>" alt="" />
                    </div>
                    <div>
                        <h4>modulePersonal01 · Item 03</h4>
                        <img src="<?= asset("assets/img/icons/clip.svg") ?>" alt="" />
                    </div>
                    <div>
                        <h4>modulePersonal01 · Item 04</h4>
                        <img src="<?= asset("assets/img/icons/bag.svg") ?>" alt="" />
                    </div>
                    <div>
                        <h4>modulePersonal01 · Item 05</h4>
                        <img src="<?= asset("assets/img/icons/money.svg") ?>" alt="" />
                    </div>
                </div>
            </section>

            <section aria-labelledby="showroom-moduloBurger01-title">
                <h2 id="showroom-moduloBurger01-title">moduloBurger01</h2>

                <ul class="moduloBurger01-lista">
                    <li>
                        <figure class="moduloBurger01">
                            <div class="moduloBurger01__dibujo" role="img" aria-label="Hamburguesa con lechuga, carne y tomate">
                                <span class="moduloBurger01__sombra"></span>
                                <span class="moduloBurger01__panInferior"></span>
                                <span class="moduloBurger01__tomate"></span>
                                <span class="moduloBurger01__carne moduloBurger01__carne--cupula"></span>
                                <span class="moduloBurger01__hoja"></span>
                                <span class="moduloBurger01__lechuga"></span>
                                <span class="moduloBurger01__panSuperior"></span>
                            </div>
                            <figcaption class="moduloBurger01__nombre">Clásica</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="moduloBurger01">
                            <div class="moduloBurger01__dibujo" role="img" aria-label="Hamburguesa con lechuga, queso, tomate, carne y cebolla">
                                <span class="moduloBurger01__sombra"></span>
                                <span class="moduloBurger01__panInferior"></span>
                                <span class="moduloBurger01__cebolla"></span>
                                <span class="moduloBurger01__carne"></span>
                                <span class="moduloBurger01__tomate moduloBurger01__tomate--alto"></span>
                                <span class="moduloBurger01__queso"></span>
                                <span class="moduloBurger01__lechuga"></span>
                                <span class="moduloBurger01__panSuperior"></span>
                            </div>
                            <figcaption class="moduloBurger01__nombre">Queso y tomate</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="moduloBurger01">
                            <div class="moduloBurger01__dibujo" role="img" aria-label="Hamburguesa con huevo, queso, carne y mostaza">
                                <span class="moduloBurger01__sombra"></span>
                                <span class="moduloBurger01__panInferior"></span>
                                <span class="moduloBurger01__salsa"></span>
                                <span class="moduloBurger01__carne"></span>
                                <span class="moduloBurger01__huevo"></span>
                                <span class="moduloBurger01__queso"></span>
                                <span class="moduloBurger01__yema"></span>
                                <span class="moduloBurger01__panSuperior"></span>
                            </div>
                            <figcaption class="moduloBurger01__nombre">Huevo</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="moduloBurger01">
                            <div class="moduloBurger01__dibujo" role="img" aria-label="Hamburguesa con aros de cebolla, salsa barbacoa y carne">
                                <span class="moduloBurger01__sombra"></span>
                                <span class="moduloBurger01__panInferior"></span>
                                <span class="moduloBurger01__salsa moduloBurger01__salsa--oscura"></span>
                                <span class="moduloBurger01__carne"></span>
                                <span class="moduloBurger01__barbacoa"></span>
                                <span class="moduloBurger01__aros"></span>
                                <span class="moduloBurger01__panSuperior"></span>
                            </div>
                            <figcaption class="moduloBurger01__nombre">Barbacoa</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="moduloBurger01">
                            <div class="moduloBurger01__dibujo" role="img" aria-label="Hamburguesa con lechuga, queso, jalapeños, carne y salsa picante">
                                <span class="moduloBurger01__sombra"></span>
                                <span class="moduloBurger01__panInferior"></span>
                                <span class="moduloBurger01__salsa moduloBurger01__salsa--picante"></span>
                                <span class="moduloBurger01__carne"></span>
                                <span class="moduloBurger01__jalapenos"></span>
                                <span class="moduloBurger01__queso"></span>
                                <span class="moduloBurger01__lechuga"></span>
                                <span class="moduloBurger01__panSuperior"></span>
                            </div>
                            <figcaption class="moduloBurger01__nombre">Jalapeño</figcaption>
                        </figure>
                    </li>
                </ul>
            </section>

            <section aria-labelledby="showroom-moduloFoodtruck01-title">
                <h2 id="showroom-moduloFoodtruck01-title">moduloFoodtruck01</h2>

                <ul class="moduloFoodtruck01-lista">
                    <li>
                        <figure class="moduloFoodtruck01">
                            <div class="moduloFoodtruck01__dibujo" role="img" aria-label="Food truck abierto con un cocinero y un cliente en la ventana">
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
                            <figcaption class="moduloFoodtruck01__nombre">Abierto</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="moduloFoodtruck01">
                            <div class="moduloFoodtruck01__dibujo" role="img" aria-label="Food truck El Forajido cerrado">
                                <span class="moduloFoodtruck01__cartel">El Forajido</span>
                                <span class="moduloFoodtruck01__caja"></span>
                                <span class="moduloFoodtruck01__persiana"></span>
                                <span class="moduloFoodtruck01__cabina"></span>
                                <span class="moduloFoodtruck01__ventanilla"></span>
                                <span class="moduloFoodtruck01__parachoques"></span>
                                <span class="moduloFoodtruck01__rueda"></span>
                                <span class="moduloFoodtruck01__rueda moduloFoodtruck01__rueda--trasera"></span>
                            </div>
                            <figcaption class="moduloFoodtruck01__nombre">Cerrado</figcaption>
                        </figure>
                    </li>
                </ul>
            </section>

            <section aria-labelledby="showroom-moduloDesierto01-title">
                <h2 id="showroom-moduloDesierto01-title">moduloDesierto01</h2>

                <div class="moduloDesierto01" role="img" aria-label="Carretera en el desierto al atardecer, con mesetas y cactus">
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
            </section>

            <section aria-labelledby="showroom-moduloHoguera01-title">
                <h2 id="showroom-moduloHoguera01-title">moduloHoguera01</h2>

                <div class="moduloHoguera01" role="img" aria-label="Hoguera encendida">
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
            </section>

            <section aria-labelledby="showroom-moduloGrupo01-title">
                <h2 id="showroom-moduloGrupo01-title">moduloGrupo01</h2>

                <div class="moduloGrupo01" role="img" aria-label="Grupo de cinco personas, dos con sombrero de copa">
                    <span class="moduloGrupo01__persona moduloGrupo01__persona--1"></span>
                    <span class="moduloGrupo01__sombrero"></span>
                    <span class="moduloGrupo01__persona moduloGrupo01__persona--2"></span>
                    <span class="moduloGrupo01__persona moduloGrupo01__persona--3"></span>
                    <span class="moduloGrupo01__sombrero moduloGrupo01__sombrero--alto"></span>
                    <span class="moduloGrupo01__persona moduloGrupo01__persona--4"></span>
                    <span class="moduloGrupo01__persona moduloGrupo01__persona--5"></span>
                </div>
            </section>

            <section aria-labelledby="showroom-artCarta01-title">
                <h2 id="showroom-artCarta01-title">artCarta01</h2>

                <article class="artCarta01" aria-labelledby="artCarta01-diligencia-title">
                    <div class="artCarta01__imagen">
                        <div class="moduloBurger01 moduloBurger01--oscuro">
                            <div class="moduloBurger01__dibujo" role="img" aria-label="Hamburguesa con aros de cebolla, salsa barbacoa y carne">
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
                    <h3 id="artCarta01-diligencia-title" class="artCarta01__titulo">La Diligencia</h3>
                    <p class="artCarta01__lema">BBQ · Bourbon · Bacon</p>
                    <p class="artCarta01__precio"><data value="12.90">12,90 €</data></p>
                </article>
            </section>

            <section aria-labelledby="showroom-artProducto01-title">
                <h2 id="showroom-artProducto01-title">artProducto01</h2>

                <article class="artProducto01" aria-labelledby="artProducto01-forajido-title">
                    <div class="artProducto01__cabecera">
                        <p class="artProducto01__numero">Nº 01</p>
                        <p class="artProducto01__etiqueta">Picante</p>
                        <div class="artProducto01__imagen">
                            <div class="moduloBurger01 moduloBurger01--oscuro">
                                <div class="moduloBurger01__dibujo" role="img" aria-label="Hamburguesa con lechuga, queso, tomate, carne y cebolla">
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
                    </div>
                    <div class="artProducto01__cuerpo">
                        <h3 id="artProducto01-forajido-title" class="artProducto01__titulo">El Forajido</h3>
                        <p class="artProducto01__descripcion">Descripción</p>
                        <h4 class="artProducto01__subtitulo">Ingredientes</h4>
                        <ul class="artProducto01__ingredientes">
                            <li>Ingrediente</li>
                            <li>Ingrediente</li>
                            <li>Ingrediente</li>
                            <li>Ingrediente</li>
                            <li>Ingrediente</li>
                            <li>Ingrediente</li>
                            <li>Ingrediente</li>
                        </ul>
                        <div class="artProducto01__pie">
                            <div class="artProducto01__resumen">
                                <div class="artProducto01__fianza">
                                    <p class="artProducto01__fianzaTitulo">— Fianza —</p>
                                    <p class="artProducto01__fianzaTexto">Sácala de la cárcel en el foodtruck</p>
                                </div>
                                <p class="artProducto01__precio"><data value="10.50">10,50 €</data></p>
                            </div>
                            <button
                                class="artProducto01__boton"
                                type="button"
                                data-carrito-anadir
                                data-carrito-id="forajido"
                                data-carrito-nombre="El Forajido"
                                data-carrito-precio="10.50"
                                aria-label="Añadir El Forajido al carrito"
                            >
                                Añadir <span aria-hidden="true">★</span>
                            </button>
                        </div>
                    </div>
                </article>
            </section>

            <section aria-labelledby="showroom-artValor01-title">
                <h2 id="showroom-artValor01-title">artValor01</h2>

                <div class="artValor01-grupo">
                    <article class="artValor01" aria-labelledby="artValor01-lena-title">
                        <span class="artValor01__icono" aria-hidden="true">★</span>
                        <span class="artValor01__numeral" aria-hidden="true">I</span>
                        <h3 id="artValor01-lena-title" class="artValor01__titulo">Fuego de leña</h3>
                        <p class="artValor01__texto">Texto</p>
                    </article>
                    <article class="artValor01" aria-labelledby="artValor01-matrix-title">
                        <span class="artValor01__icono" aria-hidden="true">★</span>
                        <span class="artValor01__numeral" aria-hidden="true">II</span>
                        <h3 id="artValor01-matrix-title" class="artValor01__titulo">Matrix ipsum</h3>
                        <p class="artValor01__texto">Texto</p>
                    </article>
                </div>
            </section>

            <section aria-labelledby="showroom-moduloBoton03-title">
                <h2 id="showroom-moduloBoton03-title">moduloBoton03</h2>

                <div class="moduloBoton03-grupo">
                    <a class="moduloBoton03" href="<?= url("/es/nuestras-hamburguesas") ?>">Ver la carta</a>
                    <a class="moduloBoton03 moduloBoton03--contorno" href="<?= url("/es/nuestras-hamburguesas") ?>">Ver la carta</a>
                </div>
                <div class="moduloBoton03-grupo moduloBoton03-grupo--rojo">
                    <a class="moduloBoton03 moduloBoton03--oscuro" href="<?= url("/es/contacto") ?>">Reservar para un evento</a>
                </div>
            </section>

            <section aria-labelledby="showroom-header01-bis-title">
                <h2 id="showroom-header01-bis-title">header01-bis y artCartel01</h2>

                <!-- En el catálogo el título va en un <p>: la página real usa <header> y un H1. -->
                <div class="header01-bis">
                    <div class="header01-bis__inner">
                        <div class="header01-bis__content">
                            <p class="header01-bis__eyebrow">
                                <span aria-hidden="true">★ </span>Matrix ipsum<span aria-hidden="true"> ★</span>
                            </p>
                            <p class="header01-bis__titulo">Matrix ipsum <span class="header01-bis__resalte">dolor</span> sit amet</p>
                            <p class="header01-bis__text">
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                                simulacrum.
                            </p>
                            <div class="header01-bis__acciones">
                                <a class="moduloBoton03" href="<?= url("/es/nuestras-hamburguesas") ?>">Lorem ipsum</a>
                                <a class="moduloBoton03 moduloBoton03--contorno" href="<?= url("/es/contacto") ?>">Lorem ipsum</a>
                            </div>
                        </div>

                        <div class="header01-bis__media">
                            <div class="artCartel01">
                                <p class="artCartel01__titulo">Se busca</p>
                                <p class="artCartel01__lema">Matrix ipsum</p>
                                <div class="artCartel01__marco">
                                    <div class="moduloBurger01 moduloBurger01--oscuro">
                                        <div class="moduloBurger01__dibujo" role="img" aria-label="Hamburguesa con lechuga, queso, tomate, carne y cebolla">
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
                                <p class="artCartel01__nombre">“Matrix”</p>
                                <p class="artCartel01__recompensa">— Lorem ipsum —</p>
                                <p class="artCartel01__precio"><data value="10.50">10,50 €</data></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="sect02-bis sect02-bis--rojo sect02-bis--sesgoArriba sect02-bis--sesgoAbajo"
                aria-labelledby="showroom-sect02-bis-title"
            >
                <div class="sect02-bis__contenido">
                    <div class="sect02-bis__cabecera sect02-bis__cabecera--centrado">
                        <p class="h2Especial-bis h2Especial-bis--oscuro">
                            <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                            <span aria-hidden="true">★</span> h2Especial-bis --oscuro <span aria-hidden="true">★</span>
                            <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                        </p>
                        <h2 id="showroom-sect02-bis-title" class="sect02-bis__titulo">sect02-bis · rojo y rejilla</h2>
                    </div>

                    <div class="sect02-bis__rejilla">
                        <article class="artValor01" aria-labelledby="sect02-bis-valor-1-title">
                            <span class="artValor01__icono" aria-hidden="true">★</span>
                            <span class="artValor01__numeral" aria-hidden="true">I</span>
                            <h3 id="sect02-bis-valor-1-title" class="artValor01__titulo">Matrix ipsum</h3>
                            <p class="artValor01__texto">Matrix ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </article>
                        <article class="artValor01" aria-labelledby="sect02-bis-valor-2-title">
                            <span class="artValor01__icono" aria-hidden="true">✦</span>
                            <span class="artValor01__numeral" aria-hidden="true">II</span>
                            <h3 id="sect02-bis-valor-2-title" class="artValor01__titulo">Matrix ipsum</h3>
                            <p class="artValor01__texto">Matrix ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="sect02-bis" aria-labelledby="showroom-sect02-bis-dividido-title">
                <div class="sect02-bis__contenido">
                    <div class="sect02-bis__dividido">
                        <div class="sect02-bis__columna">
                            <p class="h2Especial-bis">
                                <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                                <span aria-hidden="true">★</span> h2Especial-bis
                            </p>
                            <h2 id="showroom-sect02-bis-dividido-title" class="sect02-bis__titulo">sect02-bis · dividido y artRuta01</h2>
                            <p class="sect02-bis__texto">Matrix ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a class="moduloBoton03" href="<?= url("/es/contacto") ?>">Lorem ipsum</a>
                        </div>

                        <article class="artRuta01" aria-labelledby="showroom-artRuta01-title">
                            <h3 id="showroom-artRuta01-title" class="artRuta01__titulo">artRuta01</h3>
                            <ul class="artRuta01__lista">
                                <li class="artRuta01__parada">
                                    <time class="artRuta01__dia" datetime="03-18">Mar 18</time>
                                    <span class="artRuta01__lugar">Matrix ipsum · Lorem</span>
                                    <span class="artRuta01__hora"><time datetime="13:00">13:00</time>–<time datetime="16:30">16:30</time></span>
                                </li>
                                <li class="artRuta01__parada">
                                    <time class="artRuta01__dia" datetime="03-20">Jue 20</time>
                                    <span class="artRuta01__lugar">Matrix ipsum dolor sit amet</span>
                                    <span class="artRuta01__hora"><time datetime="20:00">20:00</time>–<time datetime="00:00">00:00</time></span>
                                </li>
                            </ul>
                        </article>
                    </div>
                </div>
            </section>

            <section aria-labelledby="showroom-header01-bis-centrado-title">
                <h2 id="showroom-header01-bis-centrado-title">header01-bis --centrado</h2>

                <!-- En el catálogo el título va en un <p>: la página real usa <header> y un H1. -->
                <div class="header01-bis header01-bis--centrado">
                    <div class="header01-bis__inner">
                        <div class="header01-bis__content">
                            <p class="h2Especial-bis">
                                <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                                <span aria-hidden="true">★</span> Matrix ipsum <span aria-hidden="true">★</span>
                                <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                            </p>
                            <p class="header01-bis__titulo">Matrix ipsum dolor</p>
                            <p class="header01-bis__text">Matrix ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sect02-bis" aria-labelledby="showroom-sect02-bis-mosaico-title">
                <div class="sect02-bis__contenido">
                    <!-- __titulo--oculto: H2 sin título visible, leído por lectores de pantalla. -->
                    <h2 id="showroom-sect02-bis-mosaico-title" class="sect02-bis__titulo sect02-bis__titulo--oculto">
                        sect02-bis · mosaico
                    </h2>
                    <p class="h2Especial-bis">
                        <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                        sect02-bis__mosaico · H2 oculto (__titulo--oculto)
                    </p>

                    <div class="sect02-bis__mosaico">
                        <article class="artValor01" aria-labelledby="mosaico-valor-1-title">
                            <span class="artValor01__icono" aria-hidden="true">★</span>
                            <span class="artValor01__numeral" aria-hidden="true">I</span>
                            <h3 id="mosaico-valor-1-title" class="artValor01__titulo">Matrix ipsum</h3>
                            <p class="artValor01__texto">Matrix ipsum dolor sit amet.</p>
                        </article>
                        <article class="artValor01" aria-labelledby="mosaico-valor-2-title">
                            <span class="artValor01__icono" aria-hidden="true">★</span>
                            <span class="artValor01__numeral" aria-hidden="true">II</span>
                            <h3 id="mosaico-valor-2-title" class="artValor01__titulo">Matrix ipsum</h3>
                            <p class="artValor01__texto">Matrix ipsum dolor sit amet.</p>
                        </article>
                        <article class="artValor01" aria-labelledby="mosaico-valor-3-title">
                            <span class="artValor01__icono" aria-hidden="true">★</span>
                            <span class="artValor01__numeral" aria-hidden="true">III</span>
                            <h3 id="mosaico-valor-3-title" class="artValor01__titulo">Matrix ipsum</h3>
                            <p class="artValor01__texto">Matrix ipsum dolor sit amet.</p>
                        </article>
                        <article class="artValor01" aria-labelledby="mosaico-valor-4-title">
                            <span class="artValor01__icono" aria-hidden="true">★</span>
                            <span class="artValor01__numeral" aria-hidden="true">IV</span>
                            <h3 id="mosaico-valor-4-title" class="artValor01__titulo">Matrix ipsum</h3>
                            <p class="artValor01__texto">Matrix ipsum dolor sit amet.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="sect02-bis sect02-bis--rojo sect02-bis--sesgoArriba" aria-labelledby="showroom-sect02-bis-menor-title">
                <div class="sect02-bis__contenido">
                    <div class="sect02-bis__cabecera sect02-bis__cabecera--centrado">
                        <h2 id="showroom-sect02-bis-menor-title" class="sect02-bis__titulo sect02-bis__titulo--menor">
                            sect02-bis · __titulo--menor para títulos largos
                        </h2>
                        <p class="sect02-bis__texto">Matrix ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </section>

            <section class="sect02-bis" aria-labelledby="showroom-contacto-western-title">
                <div class="sect02-bis__contenido">
                    <h2 id="showroom-contacto-western-title" class="sect02-bis__titulo sect02-bis__titulo--menor">
                        artForm02-bis, artContacto01 y artEvento01
                    </h2>

                    <div class="sect02-bis__dividido sect02-bis__dividido--asimetrico">
                        <!--
                            Ejemplo visual sin envío: artForm02 ya usa en este catálogo los IDs que
                            necesita _artForm02.js (#idForAjax, #nombreAjax...). En una página real,
                            artForm02-bis lleva esos mismos IDs y nombres (ver App/views/es/contacto.php).
                        -->
                        <article class="artForm02-bis" aria-labelledby="showroom-telegrama-title">
                            <div class="artForm02-bis__cabecera">
                                <h3 id="showroom-telegrama-title" class="artForm02-bis__titulo">Telegrama</h3>
                                <p class="artForm02-bis__sello" aria-hidden="true">Urgente</p>
                            </div>
                            <form class="artForm02-bis__formulario" aria-labelledby="showroom-telegrama-title">
                                <div class="artForm02-bis__rejilla">
                                    <div class="artForm02-bis__campo">
                                        <label class="artForm02-bis__etiqueta" for="showroom-telegrama-nombre">Nombre</label>
                                        <input class="artForm02-bis__control" type="text" id="showroom-telegrama-nombre" placeholder="Matrix ipsum" />
                                    </div>
                                    <div class="artForm02-bis__campo">
                                        <label class="artForm02-bis__etiqueta" for="showroom-telegrama-fecha">Fecha</label>
                                        <input class="artForm02-bis__control" type="date" id="showroom-telegrama-fecha" />
                                    </div>
                                    <fieldset class="artForm02-bis__campo artForm02-bis__campo--ancho">
                                        <legend class="artForm02-bis__etiqueta">Motivo</legend>
                                        <div class="artForm02-bis__chips">
                                            <label class="artForm02-bis__chip">
                                                <input type="radio" name="showroom-telegrama-motivo" value="uno" checked />
                                                <span>Matrix ipsum</span>
                                            </label>
                                            <label class="artForm02-bis__chip">
                                                <input type="radio" name="showroom-telegrama-motivo" value="dos" />
                                                <span>Lorem</span>
                                            </label>
                                        </div>
                                    </fieldset>
                                    <div class="artForm02-bis__campo artForm02-bis__campo--ancho">
                                        <label class="artForm02-bis__etiqueta" for="showroom-telegrama-mensaje">Mensaje</label>
                                        <textarea
                                            class="artForm02-bis__control artForm02-bis__control--area"
                                            id="showroom-telegrama-mensaje"
                                            placeholder="Matrix ipsum dolor sit amet. STOP."
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="artForm02-bis__linea">
                                    <input type="checkbox" id="showroom-telegrama-terminos" />
                                    <label for="showroom-telegrama-terminos">Matrix ipsum dolor sit amet</label>
                                </div>
                                <button class="artForm02-bis__enviar" type="button">Lorem ipsum ★</button>
                            </form>
                        </article>

                        <div class="sect02-bis__columna sect02-bis__columna--estirada">
                            <article class="artContacto01" aria-labelledby="showroom-artContacto01-title">
                                <h3 id="showroom-artContacto01-title" class="artContacto01__titulo">artContacto01</h3>
                                <ul class="artContacto01__lista">
                                    <li class="artContacto01__item">
                                        <span class="artContacto01__icono" aria-hidden="true">☎</span>
                                        <p class="artContacto01__etiqueta">Teléfono</p>
                                        <p class="artContacto01__valor">
                                            <a class="artContacto01__enlace" href="tel:+34000000000">000 000 000</a>
                                        </p>
                                    </li>
                                    <li class="artContacto01__item">
                                        <span class="artContacto01__icono" aria-hidden="true">◷</span>
                                        <p class="artContacto01__etiqueta">Matrix ipsum</p>
                                        <p class="artContacto01__valor">Lorem ipsum dolor</p>
                                    </li>
                                </ul>
                            </article>

                            <article class="artEvento01" aria-labelledby="showroom-artEvento01-title">
                                <h3 id="showroom-artEvento01-title" class="artEvento01__titulo">artEvento01</h3>
                                <p class="artEvento01__texto">Matrix ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <ul class="artEvento01__lista">
                                    <li>Matrix ipsum</li>
                                    <li>Lorem ipsum</li>
                                </ul>
                                <a class="moduloBoton03 moduloBoton03--contorno" href="<?= url("/es/contacto") ?>">Lorem ipsum</a>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sect02-bis sect02-bis--pegada" aria-labelledby="showroom-moduloMapa01-title">
                <div class="sect02-bis__contenido">
                    <div class="moduloMapa01">
                        <div class="moduloMapa01__rotulo">
                            <h2 id="showroom-moduloMapa01-title" class="moduloMapa01__titulo">moduloMapa01</h2>
                            <p class="moduloMapa01__subtitulo">sect02-bis --pegada</p>
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
                                    <span class="moduloMapa01__lugar">Matrix ipsum</span>
                                    <span class="moduloMapa01__numero" aria-hidden="true">1</span>
                                </li>
                                <li class="moduloMapa01__parada moduloMapa01__parada--2">
                                    <span class="moduloMapa01__lugar">Lorem</span>
                                    <span class="moduloMapa01__numero" aria-hidden="true">2</span>
                                </li>
                                <li class="moduloMapa01__parada moduloMapa01__parada--3">
                                    <span class="moduloMapa01__lugar">Ipsum</span>
                                    <span class="moduloMapa01__numero" aria-hidden="true">3</span>
                                </li>
                                <li class="moduloMapa01__parada moduloMapa01__parada--4">
                                    <span class="moduloMapa01__lugar">Dolor</span>
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

            <!-- artHistoria01: en escritorio, el scroll vertical desplaza los capítulos y el camión. -->
            <section class="artHistoria01" aria-labelledby="showroom-artHistoria01-title">
                <h2 id="showroom-artHistoria01-title" class="artHistoria01__oculto">
                    artHistoria01 · scroll horizontal
                </h2>

                <div class="artHistoria01__fijo">
                    <div class="artHistoria01__visor">
                        <div class="artHistoria01__pista">
                            <article class="artHistoria01__capitulo" aria-labelledby="showroom-historia-capitulo-1">
                                <div class="artHistoria01__contenido">
                                    <div class="artHistoria01__barra" aria-hidden="true">
                                        <p class="artHistoria01__etiqueta">Scroll 1 · Origen</p>
                                        <p class="artHistoria01__indice">
                                            <span class="is-activo">★ 01 Origen</span>
                                            <span>02 El camino</span>
                                            <span>03 Eventos</span>
                                        </p>
                                    </div>
                                    <div class="artHistoria01__texto">
                                        <p class="artHistoria01__antetitulo">2017 · El origen</p>
                                        <h3 id="showroom-historia-capitulo-1" class="artHistoria01__titulo">Capítulo I</h3>
                                        <p class="artHistoria01__parrafo">
                                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.
                                        </p>
                                    </div>
                                    <div class="artHistoria01__lado">
                                        <p class="artHistoria01__parrafo">
                                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.
                                        </p>
                                    </div>
                                </div>
                            </article>

                            <article class="artHistoria01__capitulo" aria-labelledby="showroom-historia-capitulo-2">
                                <div class="artHistoria01__contenido">
                                    <div class="artHistoria01__barra" aria-hidden="true">
                                        <p class="artHistoria01__etiqueta">Scroll 2 · El camino →</p>
                                        <p class="artHistoria01__indice">
                                            <span>01 Origen</span>
                                            <span class="is-activo">★ 02 El camino</span>
                                            <span>03 Eventos</span>
                                        </p>
                                    </div>
                                    <div class="artHistoria01__texto">
                                        <p class="artHistoria01__antetitulo">2018 – 2023 · El camino</p>
                                        <h3 id="showroom-historia-capitulo-2" class="artHistoria01__titulo">Capítulo II</h3>
                                        <p class="artHistoria01__parrafo">
                                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.
                                        </p>
                                    </div>
                                    <div class="artHistoria01__lado">
                                        <p class="artHistoria01__parrafo">
                                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.
                                        </p>
                                    </div>
                                </div>
                            </article>

                            <article class="artHistoria01__capitulo" aria-labelledby="showroom-historia-capitulo-3">
                                <div class="artHistoria01__contenido">
                                    <div class="artHistoria01__barra" aria-hidden="true">
                                        <p class="artHistoria01__etiqueta">Scroll 3 · Eventos · Llegada</p>
                                        <p class="artHistoria01__indice">
                                            <span>01 Origen</span>
                                            <span>02 El camino</span>
                                            <span class="is-activo">★ 03 Eventos</span>
                                        </p>
                                    </div>
                                    <div class="artHistoria01__texto">
                                        <p class="artHistoria01__antetitulo">2024 – hoy · Los eventos</p>
                                        <h3 id="showroom-historia-capitulo-3" class="artHistoria01__titulo">Capítulo III</h3>
                                        <p class="artHistoria01__parrafo">
                                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.
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
            <section aria-labelledby="showroom-animar-carrito-title">
                <h2 id="showroom-animar-carrito-title">moduloAnimar01 y moduloCarrito01</h2>

                <!-- moduloAnimar01: los elementos con data-animar aparecen al entrar en pantalla, escalonados. -->
                <div class="artValor01-grupo">
                    <article class="artValor01" data-animar aria-labelledby="showroom-animar-1-title">
                        <span class="artValor01__icono" aria-hidden="true">★</span>
                        <span class="artValor01__numeral" aria-hidden="true">I</span>
                        <h3 id="showroom-animar-1-title" class="artValor01__titulo">Matrix ipsum</h3>
                        <p class="artValor01__texto">Aparece al hacer scroll (data-animar).</p>
                    </article>
                    <article class="artValor01" data-animar aria-labelledby="showroom-animar-2-title">
                        <span class="artValor01__icono" aria-hidden="true">✦</span>
                        <span class="artValor01__numeral" aria-hidden="true">II</span>
                        <h3 id="showroom-animar-2-title" class="artValor01__titulo">Lorem ipsum</h3>
                        <p class="artValor01__texto">Con un pequeño retraso respecto al anterior.</p>
                    </article>
                </div>

                <!-- moduloCarrito01: cualquier botón con data-carrito-anadir añade al carrito (botón flotante). -->
                <div class="moduloBoton03-grupo">
                    <button
                        class="artProducto01__boton"
                        type="button"
                        data-carrito-anadir
                        data-carrito-id="sheriff"
                        data-carrito-nombre="Sheriff Picante"
                        data-carrito-precio="11.90"
                        aria-label="Añadir Sheriff Picante al carrito"
                    >
                        Añadir Sheriff Picante <span aria-hidden="true">★</span>
                    </button>
                </div>
            </section>
        </main>

        <?php require app_path("includes/es/footer.php"); ?>
        <?php require app_path("includes/es/carrito.php"); ?>
    </body>
</html>
