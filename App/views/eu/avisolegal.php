<!doctype html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/eu/lege-oharra")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/aviso-legal")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/lege-oharra")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/aviso-legal")) ?>" />
        <title>Lege-oharra | El Forajido Burger Wagon</title>
        <meta name="description" content="El Forajido Burger Wagon webgunearen titularraren datuak eta gunearen erabilera-baldintzak." />
        <meta name="robots" content="noindex, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="eu_ES" />
        <meta property="og:site_name" content="El Forajido Burger Wagon" />
        <meta property="og:title" content="Lege-oharra | El Forajido Burger Wagon" />
        <meta property="og:description" content="El Forajido Burger Wagon webgunearen titularraren datuak eta gunearen erabilera-baldintzak." />
        <meta property="og:url" content="<?= e(app_url("/eu/lege-oharra")) ?>" />
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
                        <span aria-hidden="true">★</span> Lege-informazioa <span aria-hidden="true">★</span>
                        <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                    </p>
                    <h1 class="header01-bis__titulo">Lege-oharra</h1>
                    <p class="header01-bis__text">Nor dagoen webgune honen atzean eta zein baldintzatan erabil dezakezun.</p>
                </div>
            </div>
        </header>

        <main>
            <div class="sect02-bis">
                <div class="sect02-bis__contenido">
                    <div class="artLegal01">
                        <p class="artLegal01__fecha">Azken eguneratzea: 2026ko azaroaren 26a</p>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-1-eu">
                            <h2 id="aviso-legal-1-eu" class="artLegal01__titulo">1. Titularraren datuak</h2>
                            <p>Informazioaren gizarteko zerbitzuei eta merkataritza elektronikoari buruzko 34/2002 Legearen (LSSI-CE) 10. artikulua betez, hauek dira webgunearen titularraren datuak:</p>
                            <ul>
                                <li><strong>Titularra:</strong> <span class="artLegal01__pendiente">[Titularraren sozietate-izena edo izena]</span></li>
                                <li><strong>Izen komertziala:</strong> El Forajido Burger Wagon</li>
                                <li><strong>IFZ:</strong> <span class="artLegal01__pendiente">[IFZ]</span></li>
                                <li><strong>Helbidea:</strong> <span class="artLegal01__pendiente">[Helbide soziala]</span></li>
                                <li><strong>Erregistroko datuak:</strong> <span class="artLegal01__pendiente">[Merkataritza Erregistroa, liburukia, folioa eta orria, hala badagokio]</span></li>
                                <li><strong>Posta elektronikoa:</strong> <a href="mailto:hola@elforajido.es">hola@elforajido.es</a></li>
                                <li><strong>Telefonoa:</strong> <a href="tel:+34600000000">+34 600 000 000</a></li>
                            </ul>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-2-eu">
                            <h2 id="aviso-legal-2-eu" class="artLegal01__titulo">2. Webgunearen xedea</h2>
                            <p>Webgune honek El Forajido Burger Wagon foodtruckari buruzko informazioa ematen du: karta, asteko ibilbidea, gurdia ekitaldietarako kontratatzea eta eramateko hanburgesa-eskaerak.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-3-eu">
                            <h2 id="aviso-legal-3-eu" class="artLegal01__titulo">3. Erabilera-baldintzak</h2>
                            <p>Webgunean nabigatzean, legez eta lege-ohar honen arabera erabiltzea onartzen duzu. Bereziki, konpromiso hauek hartzen dituzu:</p>
                            <ul>
                                <li>Formularioetan datu faltsurik edo beste pertsona batzuen daturik ez sartzea.</li>
                                <li>Webgunea ez kaltetzea, ez gainkargatzea eta haren funtzionamendu normala ez oztopatzea.</li>
                                <li>Formularioak publizitatea edo legez kanpoko edukiak bidaltzeko ez erabiltzea.</li>
                            </ul>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-4-eu">
                            <h2 id="aviso-legal-4-eu" class="artLegal01__titulo">4. Prezioak eta eskaerak</h2>
                            <p>Kartako prezioak eurotan daude eta BEZa barne dute. Webguneak ez du ordainketarik kobratzen sarean: eramateko eskaerak eta ekitaldietarako erreserbak telefonoz edo posta elektronikoz berresten dira gero, eta foodtruckean ordaintzen da edo adosten den moduan.</p>
                            <p><a href="<?= url("/eu/eskaerak") ?>">Eskaeren orrian</a> egin dezakezu eskaera, eta <a href="<?= url("/eu/ekitaldiak") ?>">ekitaldien orrian</a> aurrekontua eska dezakezu.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-5-eu">
                            <h2 id="aviso-legal-5-eu" class="artLegal01__titulo">5. Jabetza intelektuala eta industriala</h2>
                            <p>Webgune honetako testuak, logotipoa, izen komertziala eta diseinua titularrarenak dira edo lizentziaz erabiltzen dira. Ezin dira erreproduzitu, banatu edo eraldatu baimenik gabe.</p>
                            <p>Hanburgesen argazkiak Unsplash-ekoak dira, eta <a href="https://unsplash.com/license" target="_blank" rel="noopener noreferrer">Unsplash License<span class="artLegal01__oculto"> (fitxa berri batean irekitzen da)</span></a> lizentziaren arabera erabiltzen dira. Egileak proiektuaren iturrien fitxategian adierazten dira.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-6-eu">
                            <h2 id="aviso-legal-6-eu" class="artLegal01__titulo">6. Erantzukizuna</h2>
                            <p>Titularrak ahalegina egiten du webguneko informazioa zuzena eta eguneratua izan dadin, baina ezin du bermatu akatsik edo zerbitzu-etenik ez dagoenik. Ibilbidea eta ordutegiak alda daitezke kanpoko arrazoiengatik, hala nola eguraldiagatik edo udal-baimenengatik.</p>
                            <p>Webguneak hirugarrenen guneetarako estekak ditu, Instagram eta TikTok, adibidez. Titularra ez da haien edukien edo politiken erantzule.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-7-eu">
                            <h2 id="aviso-legal-7-eu" class="artLegal01__titulo">7. Datuen babesa eta cookieak</h2>
                            <p>Bidaltzen dizkiguzun datuen tratamendua <a href="<?= url("/eu/pribatutasun-politika") ?>">pribatutasun-politikan</a> azaltzen da. Cookieen eta nabigatzailearen biltegiratzearen erabilera <a href="<?= url("/eu/cookieen-kudeaketa") ?>">cookieen kudeaketaren orrian</a> azaltzen da.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-8-eu">
                            <h2 id="aviso-legal-8-eu" class="artLegal01__titulo">8. Lege aplikagarria</h2>
                            <p>Lege-ohar hau Espainiako legeriaren arabera arautzen da. Kontsumitzailea bazara, edozein gatazkatarako zure bizilekuko epaitegiak izango dira eskudunak.</p>
                        </section>
                    </div>
                </div>
            </div>
        </main>

        <?php require app_path("includes/eu/footer02.php"); ?>
        <?php require app_path("includes/eu/carrito.php"); ?>
    </body>
</html>
