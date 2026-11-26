<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es/aviso-legal")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/aviso-legal")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/lege-oharra")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/aviso-legal")) ?>" />
        <title>Aviso legal | El Forajido Burger Wagon</title>
        <meta name="description" content="Datos del titular de la web de El Forajido Burger Wagon y condiciones de uso del sitio." />
        <meta name="robots" content="noindex, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:site_name" content="El Forajido Burger Wagon" />
        <meta property="og:title" content="Aviso legal | El Forajido Burger Wagon" />
        <meta property="og:description" content="Datos del titular de la web de El Forajido Burger Wagon y condiciones de uso del sitio." />
        <meta property="og:url" content="<?= e(app_url("/es/aviso-legal")) ?>" />
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
                        <span aria-hidden="true">★</span> Información legal <span aria-hidden="true">★</span>
                        <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                    </p>
                    <h1 class="header01-bis__titulo">Aviso legal</h1>
                    <p class="header01-bis__text">Quién está detrás de esta web y en qué condiciones puedes usarla.</p>
                </div>
            </div>
        </header>

        <main>
            <div class="sect02-bis">
                <div class="sect02-bis__contenido">
                    <div class="artLegal01">
                        <p class="artLegal01__fecha">Última actualización: 26 de noviembre de 2026</p>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-1-es">
                            <h2 id="aviso-legal-1-es" class="artLegal01__titulo">1. Datos del titular</h2>
                            <p>En cumplimiento del artículo 10 de la Ley 34/2002, de servicios de la sociedad de la información y de comercio electrónico (LSSI-CE), estos son los datos del titular de la web:</p>
                            <ul>
                                <li><strong>Titular:</strong> <span class="artLegal01__pendiente">[Razón social o nombre del titular]</span></li>
                                <li><strong>Nombre comercial:</strong> El Forajido Burger Wagon</li>
                                <li><strong>NIF:</strong> <span class="artLegal01__pendiente">[NIF]</span></li>
                                <li><strong>Domicilio:</strong> <span class="artLegal01__pendiente">[Domicilio social]</span></li>
                                <li><strong>Datos registrales:</strong> <span class="artLegal01__pendiente">[Registro Mercantil, tomo, folio y hoja, si procede]</span></li>
                                <li><strong>Correo electrónico:</strong> <a href="mailto:hola@elforajido.es">hola@elforajido.es</a></li>
                                <li><strong>Teléfono:</strong> <a href="tel:+34600000000">+34 600 000 000</a></li>
                            </ul>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-2-es">
                            <h2 id="aviso-legal-2-es" class="artLegal01__titulo">2. Objeto de la web</h2>
                            <p>Esta web informa sobre el foodtruck El Forajido Burger Wagon: su carta, su ruta semanal, la contratación del carro para eventos y los pedidos de hamburguesas para llevar.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-3-es">
                            <h2 id="aviso-legal-3-es" class="artLegal01__titulo">3. Condiciones de uso</h2>
                            <p>Al navegar por la web aceptas usarla de forma lícita y de acuerdo con este aviso legal. En particular, te comprometes a:</p>
                            <ul>
                                <li>No introducir datos falsos o de terceros en los formularios.</li>
                                <li>No dañar, sobrecargar ni impedir el funcionamiento normal de la web.</li>
                                <li>No usar los formularios para enviar publicidad ni contenidos ilícitos.</li>
                            </ul>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-4-es">
                            <h2 id="aviso-legal-4-es" class="artLegal01__titulo">4. Precios y pedidos</h2>
                            <p>Los precios de la carta están en euros e incluyen el IVA. La web no cobra pagos en línea: los pedidos para llevar y las reservas para eventos se confirman después por teléfono o correo electrónico, y el pago se realiza en el foodtruck o según lo que se acuerde.</p>
                            <p>Puedes hacer un pedido en la página de <a href="<?= url("/es/pedidos") ?>">pedidos</a> y pedir presupuesto para un evento en la página de <a href="<?= url("/es/eventos") ?>">eventos</a>.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-5-es">
                            <h2 id="aviso-legal-5-es" class="artLegal01__titulo">5. Propiedad intelectual e industrial</h2>
                            <p>Los textos, el logotipo, el nombre comercial y el diseño de esta web pertenecen a su titular o se usan con licencia. No está permitida su reproducción, distribución o transformación sin autorización.</p>
                            <p>Las fotografías de las hamburguesas proceden de Unsplash y se usan conforme a la <a href="https://unsplash.com/license" target="_blank" rel="noopener noreferrer">Unsplash License<span class="artLegal01__oculto"> (se abre en una pestaña nueva)</span></a>. Sus autores se indican en el archivo de fuentes del proyecto.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-6-es">
                            <h2 id="aviso-legal-6-es" class="artLegal01__titulo">6. Responsabilidad</h2>
                            <p>El titular procura que la información de la web sea correcta y esté actualizada, pero no garantiza la ausencia de errores ni de interrupciones del servicio. La ruta y los horarios pueden cambiar por causas ajenas, como el tiempo o los permisos municipales.</p>
                            <p>La web enlaza con sitios de terceros, como Instagram o TikTok. El titular no es responsable de sus contenidos ni de sus políticas.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-7-es">
                            <h2 id="aviso-legal-7-es" class="artLegal01__titulo">7. Protección de datos y cookies</h2>
                            <p>El tratamiento de los datos que nos envías se explica en la <a href="<?= url("/es/politica-de-privacidad") ?>">política de privacidad</a>. El uso de cookies y del almacenamiento del navegador se explica en la página de <a href="<?= url("/es/gestion-de-cookies") ?>">gestión de cookies</a>.</p>
                        </section>

                        <section class="artLegal01__apartado" aria-labelledby="aviso-legal-8-es">
                            <h2 id="aviso-legal-8-es" class="artLegal01__titulo">8. Legislación aplicable</h2>
                            <p>Este aviso legal se rige por la legislación española. Si eres consumidor, para cualquier controversia serán competentes los juzgados de tu domicilio.</p>
                        </section>
                    </div>
                </div>
            </div>
        </main>

        <?php require app_path("includes/es/footer02.php"); ?>
        <?php require app_path("includes/es/carrito.php"); ?>
    </body>
</html>
