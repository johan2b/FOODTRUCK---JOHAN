<?php
// Precios y nombres de App/config/carta.php: el controlador del pedido usa el mismo catálogo.
$carta = require app_path("config/carta.php");
$euros = fn(int $centimos): string => number_format($centimos / 100, 2, ",", ".") . " €";
// Karta (euskera): cada hamburguesa se pinta con artProducto01. "capas" son las capas de
// moduloBurger01 en orden de pintado (la última queda encima).
$hamburguesas = [
    [
        "slug" => "forajido",
        "numero" => "01",
        "etiqueta" => null,
        "nombre" => "El Forajido",
        "descripcion" => "Dena hasi zuen klasikoa: arte-egurraren kea, urtzen den gazta eta suaren ondoko gauen zaporea.",
        "ingredientes" => ["Behi ondua 180 g", "Cheddar ketua", "Letxuga", "Tomatea", "Tipula morea", "Etxeko saltsa", "Brioche ogia"],
        "precio" => $euros($carta["forajido"]["centimos"]),
        "valor" => number_format($carta["forajido"]["centimos"] / 100, 2, ".", ""),
        "dibujo" => "El Forajido hanburgesa: letxuga, gazta, tomatea, okela eta tipula",
        "capas" => ["sombra", "panInferior", "cebolla", "carne", "tomate moduloBurger01__tomate--alto", "queso", "lechuga", "panSuperior"],
    ],
    [
        "slug" => "sheriff",
        "numero" => "02",
        "etiqueta" => "Pikantea",
        "nombre" => "Sheriff Picante",
        "descripcion" => "Legea pikantearen bidez ezartzen du. Mexikoko mugan inspiratua: chipotlea, jalapeñoa eta atzera pausorik ez.",
        "ingredientes" => ["Behia 180 g", "Pepper jack", "Jalapeño erreak", "Chipotle maionesa", "Letxuga", "Arto-ogia"],
        "precio" => $euros($carta["sheriff"]["centimos"]),
        "valor" => number_format($carta["sheriff"]["centimos"] / 100, 2, ".", ""),
        "dibujo" => "Sheriff Picante hanburgesa: letxuga, gazta, jalapeñoak, okela eta saltsa pikantea",
        "capas" => ["sombra", "panInferior", "salsa moduloBurger01__salsa--picante", "carne", "jalapenos", "queso", "lechuga", "panSuperior"],
    ],
    [
        "slug" => "diligencia",
        "numero" => "03",
        "etiqueta" => "Eskatuena",
        "nombre" => "La Diligencia",
        "descripcion" => "Bidaia luzerako. Bourbon-barbakoa, bacon kurruskaria eta tipula-eraztunak, bideko kantinetan bezala.",
        "ingredientes" => ["Behi bikoitza 2×120 g", "Bacon ketua", "Tipula-eraztunak", "Bourbon BBQ", "Cheddarra", "Brioche ogia"],
        "precio" => $euros($carta["diligencia"]["centimos"]),
        "valor" => number_format($carta["diligencia"]["centimos"] / 100, 2, ".", ""),
        "dibujo" => "La Diligencia hanburgesa: tipula-eraztunak, barbakoa saltsa eta okela",
        "capas" => ["sombra", "panInferior", "salsa moduloBurger01__salsa--oscura", "carne", "barbacoa", "aros", "panSuperior"],
    ],
    [
        "slug" => "fiebre",
        "numero" => "04",
        "etiqueta" => null,
        "nombre" => "Fiebre del Oro",
        "descripcion" => "Aurkitu berri den urre-pikor bat bezain distiratsua: cheddar urtua, gorringo urrekarako arrautza eta ezti-ziape ukitu bat.",
        "ingredientes" => ["Behia 180 g", "Cheddar bikoitza", "Arrautza frijitua", "Eztia eta ziapea", "Pepinilloak", "Patata-ogia"],
        "precio" => $euros($carta["fiebre"]["centimos"]),
        "valor" => number_format($carta["fiebre"]["centimos"] / 100, 2, ".", ""),
        "dibujo" => "Fiebre del Oro hanburgesa: arrautza, cheddar gazta, okela eta ezti-ziape saltsa",
        "capas" => ["sombra", "panInferior", "salsa", "carne", "huevo", "queso", "yema", "panSuperior"],
    ],
    [
        "slug" => "coyote",
        "numero" => "05",
        "etiqueta" => "Begetarianoa",
        "nombre" => "Coyote Verde",
        "descripcion" => "Basamortuan aske dabilena. Begetala eta basatia: txingarretan erretako portobelloa, guacamolea eta lima.",
        "ingredientes" => ["Txingarretako portobelloa", "Guacamolea", "Tomatea", "Kimu berdeak", "Lima-alioli", "Ogi integrala"],
        "precio" => $euros($carta["coyote"]["centimos"]),
        "valor" => number_format($carta["coyote"]["centimos"] / 100, 2, ".", ""),
        "dibujo" => "Coyote Verde hanburgesa begetarianoa: kimu berdeak, guacamolea, portobelloa eta tomatea",
        "capas" => ["sombra", "panInferior", "tomate", "carne moduloBurger01__carne--cupula", "hoja", "lechuga", "panSuperior"],
    ],
];
?>
<!doctype html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/eu/gure-hanburgesak")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/nuestras-hamburguesas")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/gure-hanburgesak")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/nuestras-hamburguesas")) ?>" />
        <title>Gure txingarretako hanburgesak | El Forajidoren karta</title>
        <meta
            name="description"
            content="Arte-egurrezko parrillan egindako bost hanburgesa, El Forajido klasikotik Coyote Verde begetarianora. Denak patata rustikoekin eta aukerako saltsa batekin."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="eu_ES" />
        <meta property="og:site_name" content="El Forajido Burger Wagon" />
        <meta property="og:title" content="Gure txingarretako hanburgesak | El Forajidoren karta" />
        <meta
            property="og:description"
            content="Arte-egurrezko parrillan egindako bost hanburgesa, El Forajido klasikotik Coyote Verde begetarianora. Denak patata rustikoekin eta aukerako saltsa batekin."
        />
        <meta property="og:url" content="<?= e(app_url("/eu/gure-hanburgesak")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/views/matrix-5.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Gure txingarretako hanburgesak | El Forajidoren karta" />
        <meta
            name="twitter:description"
            content="Arte-egurrezko parrillan egindako bost hanburgesa, El Forajido klasikotik Coyote Verde begetarianora. Denak patata rustikoekin eta aukerako saltsa batekin."
        />
        <meta name="twitter:image" content="<?= e(app_url("assets/img/views/matrix-5.webp")) ?>" />
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
                        <span aria-hidden="true">★</span> Karta <span aria-hidden="true">★</span>
                        <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                    </p>
                    <h1 class="header01-bis__titulo">Gure hanburgesak</h1>
                    <p class="header01-bis__text">
                        Bost legez kanpoko parrillan. Denak patata rustikoekin eta aukerako saltsa batekin zerbitzatzen dira.
                    </p>
                </div>
            </div>
        </header>

        <main>
            <section class="sect02-bis" aria-labelledby="servicios-carta-eu">
                <div class="sect02-bis__contenido">
                    <h2 id="servicios-carta-eu" class="sect02-bis__titulo sect02-bis__titulo--oculto">Kartako hanburgesak</h2>

                    <div class="sect02-bis__mosaico">
                        <?php foreach ($hamburguesas as $hamburguesa): ?>
                            <?php $tituloId = "servicios-burger-" . $hamburguesa["slug"] . "-eu"; ?>
                            <article class="artProducto01" aria-labelledby="<?= e($tituloId) ?>">
                                <div class="artProducto01__cabecera">
                                    <p class="artProducto01__numero">Nº <?= e($hamburguesa["numero"]) ?></p>
                                    <?php if ($hamburguesa["etiqueta"] !== null): ?>
                                        <p class="artProducto01__etiqueta"><?= e($hamburguesa["etiqueta"]) ?></p>
                                    <?php endif; ?>
                                    <div class="artProducto01__imagen">
                                        <div class="moduloBurger01 moduloBurger01--oscuro">
                                            <div class="moduloBurger01__dibujo" role="img" aria-label="<?= e($hamburguesa["dibujo"]) ?>">
                                                <?php foreach ($hamburguesa["capas"] as $capa): ?>
                                                    <span class="moduloBurger01__<?= e($capa) ?>"></span>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="artProducto01__cuerpo">
                                    <h3 id="<?= e($tituloId) ?>" class="artProducto01__titulo"><?= e($hamburguesa["nombre"]) ?></h3>
                                    <p class="artProducto01__descripcion"><?= e($hamburguesa["descripcion"]) ?></p>
                                    <h4 class="artProducto01__subtitulo">Osagaiak</h4>
                                    <ul class="artProducto01__ingredientes">
                                        <?php foreach ($hamburguesa["ingredientes"] as $ingrediente): ?>
                                            <li><?= e($ingrediente) ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="artProducto01__pie">
                                        <div class="artProducto01__resumen">
                                            <div class="artProducto01__fianza">
                                                <p class="artProducto01__fianzaTitulo">— Fidantza —</p>
                                                <p class="artProducto01__fianzaTexto">Atera ezazu kartzelatik foodtruckean</p>
                                            </div>
                                            <p class="artProducto01__precio">
                                                <data value="<?= e($hamburguesa["valor"]) ?>"><?= e($hamburguesa["precio"]) ?></data>
                                            </p>
                                        </div>
                                        <button
                                            class="artProducto01__boton"
                                            type="button"
                                            data-carrito-anadir
                                            data-carrito-id="<?= e($hamburguesa["slug"]) ?>"
                                            data-carrito-nombre="<?= e($hamburguesa["nombre"]) ?>"
                                            data-carrito-precio="<?= e($hamburguesa["valor"]) ?>"
                                            aria-label="<?= e(sprintf("Gehitu %s saskira", $hamburguesa["nombre"])) ?>"
                                        >
                                            Gehitu <span aria-hidden="true">★</span>
                                        </button>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section class="sect02-bis sect02-bis--rojo sect02-bis--sesgoArriba" aria-labelledby="servicios-alergenos-eu">
                <div class="sect02-bis__contenido">
                    <div class="sect02-bis__cabecera sect02-bis__cabecera--centrado">
                        <h2 id="servicios-alergenos-eu" class="sect02-bis__titulo sect02-bis__titulo--menor">Alergenoak edo zalantzak? Galdetu sukaldariari</h2>
                        <p class="sect02-bis__texto">Glutenik gabeko ogia eskuragarri burger guztietarako (+1 €)</p>
                    </div>
                </div>
            </section>
        </main>

        <?php require app_path("includes/eu/footer02.php"); ?>
        <?php require app_path("includes/eu/carrito.php"); ?>
    </body>
</html>
