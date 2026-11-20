<?php
// Precios y nombres de App/config/carta.php: el controlador del pedido usa el mismo catálogo.
$carta = require app_path("config/carta.php");
$euros = fn(int $centimos): string => number_format($centimos / 100, 2, ",", ".") . " €";
// Carta: cada hamburguesa se pinta con artProducto01. "capas" son las capas de
// moduloBurger01 en orden de pintado (la última queda encima).
$hamburguesas = [
    [
        "slug" => "forajido",
        "numero" => "01",
        "etiqueta" => null,
        "nombre" => "El Forajido",
        "descripcion" => "La clásica que empezó todo: humo de encina, queso que se derrite y el sabor de las noches junto al fuego.",
        "ingredientes" => ["Vaca madurada 180 g", "Cheddar ahumado", "Lechuga", "Tomate", "Cebolla morada", "Salsa de la casa", "Pan brioche"],
        "precio" => $euros($carta["forajido"]["centimos"]),
        "valor" => number_format($carta["forajido"]["centimos"] / 100, 2, ".", ""),
        "dibujo" => "Hamburguesa El Forajido con lechuga, queso, tomate, carne y cebolla",
        "capas" => ["sombra", "panInferior", "cebolla", "carne", "tomate moduloBurger01__tomate--alto", "queso", "lechuga", "panSuperior"],
    ],
    [
        "slug" => "sheriff",
        "numero" => "02",
        "etiqueta" => "Picante",
        "nombre" => "Sheriff Picante",
        "descripcion" => "Impone la ley a base de picante. Inspirada en la frontera con México: chipotle, jalapeño y ni un paso atrás.",
        "ingredientes" => ["Vaca 180 g", "Pepper jack", "Jalapeños asados", "Mayo de chipotle", "Lechuga", "Pan de maíz"],
        "precio" => $euros($carta["sheriff"]["centimos"]),
        "valor" => number_format($carta["sheriff"]["centimos"] / 100, 2, ".", ""),
        "dibujo" => "Hamburguesa Sheriff Picante con lechuga, queso, jalapeños, carne y salsa picante",
        "capas" => ["sombra", "panInferior", "salsa moduloBurger01__salsa--picante", "carne", "jalapenos", "queso", "lechuga", "panSuperior"],
    ],
    [
        "slug" => "diligencia",
        "numero" => "03",
        "etiqueta" => "La más pedida",
        "nombre" => "La Diligencia",
        "descripcion" => "Para el viaje largo. Barbacoa con bourbon, bacon crujiente y aros de cebolla, como en las cantinas de paso.",
        "ingredientes" => ["Doble vaca 2×120 g", "Bacon ahumado", "Aros de cebolla", "BBQ al bourbon", "Cheddar", "Pan brioche"],
        "precio" => $euros($carta["diligencia"]["centimos"]),
        "valor" => number_format($carta["diligencia"]["centimos"] / 100, 2, ".", ""),
        "dibujo" => "Hamburguesa La Diligencia con aros de cebolla, salsa barbacoa y carne",
        "capas" => ["sombra", "panInferior", "salsa moduloBurger01__salsa--oscura", "carne", "barbacoa", "aros", "panSuperior"],
    ],
    [
        "slug" => "fiebre",
        "numero" => "04",
        "etiqueta" => null,
        "nombre" => "Fiebre del Oro",
        "descripcion" => "Brillante como una pepita recién encontrada: cheddar fundido, huevo de yema dorada y un toque de miel y mostaza.",
        "ingredientes" => ["Vaca 180 g", "Doble cheddar", "Huevo frito", "Miel y mostaza", "Pepinillos", "Pan de patata"],
        "precio" => $euros($carta["fiebre"]["centimos"]),
        "valor" => number_format($carta["fiebre"]["centimos"] / 100, 2, ".", ""),
        "dibujo" => "Hamburguesa Fiebre del Oro con huevo, queso cheddar, carne y salsa de miel y mostaza",
        "capas" => ["sombra", "panInferior", "salsa", "carne", "huevo", "queso", "yema", "panSuperior"],
    ],
    [
        "slug" => "coyote",
        "numero" => "05",
        "etiqueta" => "Veggie",
        "nombre" => "Coyote Verde",
        "descripcion" => "La que corre libre por el desierto. Vegetal y salvaje: portobello a la brasa, guacamole y lima.",
        "ingredientes" => ["Portobello a la brasa", "Guacamole", "Tomate", "Brotes verdes", "Alioli de lima", "Pan integral"],
        "precio" => $euros($carta["coyote"]["centimos"]),
        "valor" => number_format($carta["coyote"]["centimos"] / 100, 2, ".", ""),
        "dibujo" => "Hamburguesa vegetal Coyote Verde con brotes verdes, guacamole, portobello y tomate",
        "capas" => ["sombra", "panInferior", "tomate", "carne moduloBurger01__carne--cupula", "hoja", "lechuga", "panSuperior"],
    ],
];
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es/nuestras-hamburguesas")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/nuestras-hamburguesas")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/gure-hanburgesak")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/nuestras-hamburguesas")) ?>" />
        <title>Nuestras hamburguesas a la brasa | Carta de El Forajido</title>
        <meta
            name="description"
            content="Cinco hamburguesas a la parrilla de encina, de la clásica El Forajido a la vegetal Coyote Verde. Todas con patatas rústicas y una salsa a elegir."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:site_name" content="El Forajido Burger Wagon" />
        <meta property="og:title" content="Nuestras hamburguesas a la brasa | Carta de El Forajido" />
        <meta
            property="og:description"
            content="Cinco hamburguesas a la parrilla de encina, de la clásica El Forajido a la vegetal Coyote Verde. Todas con patatas rústicas y una salsa a elegir."
        />
        <meta property="og:url" content="<?= e(app_url("/es/nuestras-hamburguesas")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/views/matrix-5.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Nuestras hamburguesas a la brasa | Carta de El Forajido" />
        <meta
            name="twitter:description"
            content="Cinco hamburguesas a la parrilla de encina, de la clásica El Forajido a la vegetal Coyote Verde. Todas con patatas rústicas y una salsa a elegir."
        />
        <meta name="twitter:image" content="<?= e(app_url("assets/img/views/matrix-5.webp")) ?>" />
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
                        <span aria-hidden="true">★</span> La carta <span aria-hidden="true">★</span>
                        <span class="h2Especial-bis__raya" aria-hidden="true"></span>
                    </p>
                    <h1 class="header01-bis__titulo">Nuestras hamburguesas</h1>
                    <p class="header01-bis__text">
                        Cinco forajidos a la parrilla. Todas se sirven con patatas rústicas y una salsa a elegir.
                    </p>
                </div>
            </div>
        </header>

        <main>
            <section class="sect02-bis" aria-labelledby="servicios-carta-es">
                <div class="sect02-bis__contenido">
                    <h2 id="servicios-carta-es" class="sect02-bis__titulo sect02-bis__titulo--oculto">Hamburguesas de la carta</h2>

                    <div class="sect02-bis__mosaico">
                        <?php foreach ($hamburguesas as $hamburguesa): ?>
                            <?php $tituloId = "servicios-burger-" . $hamburguesa["slug"] . "-es"; ?>
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
                                    <h4 class="artProducto01__subtitulo">Ingredientes</h4>
                                    <ul class="artProducto01__ingredientes">
                                        <?php foreach ($hamburguesa["ingredientes"] as $ingrediente): ?>
                                            <li><?= e($ingrediente) ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="artProducto01__pie">
                                        <div class="artProducto01__resumen">
                                            <div class="artProducto01__fianza">
                                                <p class="artProducto01__fianzaTitulo">— Fianza —</p>
                                                <p class="artProducto01__fianzaTexto">Sácala de la cárcel en el foodtruck</p>
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
                                            aria-label="<?= e(sprintf("Añadir %s al carrito", $hamburguesa["nombre"])) ?>"
                                        >
                                            Añadir <span aria-hidden="true">★</span>
                                        </button>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section class="sect02-bis sect02-bis--rojo sect02-bis--sesgoArriba" aria-labelledby="servicios-alergenos-es">
                <div class="sect02-bis__contenido">
                    <div class="sect02-bis__cabecera sect02-bis__cabecera--centrado">
                        <h2 id="servicios-alergenos-es" class="sect02-bis__titulo sect02-bis__titulo--menor">¿Alérgenos o dudas? Pregunta al cocinero</h2>
                        <p class="sect02-bis__texto">Pan sin gluten disponible para todas las burgers (+1 €)</p>
                    </div>
                </div>
            </section>
        </main>

        <?php require app_path("includes/es/footer02.php"); ?>
        <?php require app_path("includes/es/carrito.php"); ?>
    </body>
</html>
