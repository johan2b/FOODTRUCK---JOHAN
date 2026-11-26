<!doctype html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/eu/cookieen-kudeaketa")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/gestion-de-cookies")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/cookieen-kudeaketa")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/gestion-de-cookies")) ?>" />
        <title>Cookien kudeaketa | El Forajido Burger Wagon</title>
        <meta name="description" content="Zer cookie eta zer nabigatzaile-biltegiratze erabiltzen duen El Forajido Burger Wagon webguneak eta nola aldatu zure baimena." />
        <meta name="robots" content="noindex, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="eu_ES" />
        <meta property="og:site_name" content="El Forajido Burger Wagon" />
        <meta property="og:title" content="Cookien kudeaketa | El Forajido Burger Wagon" />
        <meta property="og:description" content="Zer cookie eta zer nabigatzaile-biltegiratze erabiltzen duen El Forajido Burger Wagon webguneak eta nola aldatu zure baimena." />
        <meta property="og:url" content="<?= e(app_url("/eu/cookieen-kudeaketa")) ?>" />
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
                    <h1 class="header01-bis__titulo">Cookien kudeaketa</h1>
                    <p class="header01-bis__text">Zer gordetzen duen webgune honek zure nabigatzailean eta nola alda dezakezun.</p>
                </div>
            </div>
        </header>

        <main>
            <div class="sect02-bis">
                <div class="sect02-bis__contenido">
                    <div class="artLegal01">
                        <p class="artLegal01__fecha">Azken eguneratzea: 2026ko azaroaren 26a</p>

                        <section class="artLegal01__apartado" aria-labelledby="gestion-de-cookies-1-eu">
                            <h2 id="gestion-de-cookies-1-eu" class="artLegal01__titulo">1. Zer dira cookieak</h2>
                            <p>Cookieak webgune batek zure nabigatzailean gordetzen dituen fitxategi txikiak dira, bisiten artean informazioa gogoratzeko. Webgune honek nabigatzailearen tokiko biltegiratzea ere erabiltzen du, antzeko moduan funtzionatzen duena.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="gestion-de-cookies-2-eu">
                            <h2 id="gestion-de-cookies-2-eu" class="artLegal01__titulo">2. Zer erabiltzen dugun webgune honetan</h2>
                            <div class="artLegal01__tabla">
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col">Izena</th>
                                            <th scope="col">Mota</th>
                                            <th scope="col">Zertarako balio duen</th>
                                            <th scope="col">Titularra</th>
                                            <th scope="col">Iraupena</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Cookieen hobespenak</td>
                                            <td>Teknikoa, beharrezkoa</td>
                                            <td>Cookieen panelean aukeratu duzuna gogoratzea.</td>
                                            <td>cookieLAD (webda.eus)</td>
                                            <td>Cookieen panelean adierazitakoa</td>
                                        </tr>
                                        <tr>
                                            <td><code>elForajido.carrito</code> (tokiko biltegiratzea)</td>
                                            <td>Teknikoa, beharrezkoa</td>
                                            <td>Zure saskiko hanburgesak gordetzea nabigatzen duzun bitartean.</td>
                                            <td>Berezkoa</td>
                                            <td>Saskia hustu edo nabigatzailearen datuak ezabatu arte</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>Cookie teknikoak beharrezkoak dira webguneak funtziona dezan, eta ez dute zure baimenik behar.</p>
                            <p>Cookieen panelak pertsonalizazio-, analitika-, marketin- eta sare sozialen kategoriak ere baditu. Kategoria horietako cookieak onartzen badituzu bakarrik aktibatzen dira. Instagram eta TikTok-erako estekak esteka arruntak dira: ez dute sare horietako edukirik kargatzen webgune honetan.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="gestion-de-cookies-3-eu">
                            <h2 id="gestion-de-cookies-3-eu" class="artLegal01__titulo">3. Nola aldatu edo erretiratu zure baimena</h2>
                            <p>Webgunean lehen aldiz sartzen zarenean, cookieen panela agertzen da; bertan, kategoria bakoitza onartu, baztertu edo aukeratu dezakezu. Zure aukera edozein unetan alda dezakezu panel horretatik bertatik.</p>
                            <p>Cookieak zure nabigatzailearen ezarpenetatik ere ezaba edo blokea ditzakezu:</p>
                            <ul>
                                <li><a href="https://support.google.com/chrome/answer/95647?hl=es" target="_blank" rel="noopener noreferrer">Google Chrome<span class="artLegal01__oculto"> (fitxa berri batean irekitzen da)</span></a></li>
                                <li><a href="https://support.mozilla.org/es/kb/Borrar%20cookies" target="_blank" rel="noopener noreferrer">Mozilla Firefox<span class="artLegal01__oculto"> (fitxa berri batean irekitzen da)</span></a></li>
                                <li><a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer">Safari<span class="artLegal01__oculto"> (fitxa berri batean irekitzen da)</span></a></li>
                                <li><a href="https://support.microsoft.com/es-es/microsoft-edge/eliminar-las-cookies-en-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge<span class="artLegal01__oculto"> (fitxa berri batean irekitzen da)</span></a></li>
                            </ul>
                            <p>Tokiko biltegiratzea blokeatzen baduzu, saskiak ezin izango du zure eskaera orrien artean gorde.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="gestion-de-cookies-4-eu">
                            <h2 id="gestion-de-cookies-4-eu" class="artLegal01__titulo">4. Informazio gehiago</h2>
                            <p>Cookieen bidez lortzen diren datu pertsonalak <a href="<?= url("/eu/pribatutasun-politika") ?>">pribatutasun-politikaren</a> arabera tratatzen dira. Edozein zalantza baduzu, idatzi iezaguzu <a href="mailto:hola@elforajido.es">hola@elforajido.es</a> helbidera.</p>
                        </section>
                    </div>
                </div>
            </div>
        </main>

        <?php require app_path("includes/eu/footer02.php"); ?>
        <?php require app_path("includes/eu/carrito.php"); ?>
    </body>
</html>
