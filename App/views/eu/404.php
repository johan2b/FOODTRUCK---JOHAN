<?php http_response_code(404); ?>
<!doctype html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <title>Ez da orrialdea aurkitu | Stack</title>
        <meta
            name="description"
            content="Eskatutako orrialdea ez da existitzen edo helbidea aldatu da. Itzuli hasierara edo kontsultatu Stack zerbitzuak."
        />
        <meta name="robots" content="noindex, nofollow" />
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
        <?php require app_path("includes/eu/nav.php"); ?>

        <main>
            <section aria-labelledby="error404-eu">
                <article class="art16">
                    <div>
                        <h1 id="error404-eu">Ez dugu orrialde hori aurkitu</h1>
                        <p>
                            Baliteke esteka aldatu izana edo helbidea behar bezala idatzita ez egotea. Hasierara itzul
                            zaitezke, zerbitzuak berrikusi edo kontsulta bat bidali.
                        </p>
                        <a href="<?= url("/eu") ?>" class="boton" title="Stack hasierako orrira itzuli">Hasierara itzuli</a>
                        <a href="<?= url("/eu/gure-hanburgesak") ?>" class="boton" title="Zerbitzuak ikusi">Zerbitzuak ikusi</a>
                        <a href="<?= url("/eu/kontaktua") ?>" class="boton" title="Stack harremanetan jarri">Kontaktura joan</a>
                    </div>
                    <div>
                        <img src="<?= asset("assets/img/views/matrix-1.webp") ?>" width="480" height="207" alt="Matrix" title="Matrix" decoding="async" />
                    </div>
                </article>
            </section>
        </main>

        <?php require app_path("includes/eu/footer.php"); ?>
    </body>
</html>
