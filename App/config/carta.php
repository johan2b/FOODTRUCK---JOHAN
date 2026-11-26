<?php

// Catálogo de la carta: fuente única de nombres y precios.
// - Las vistas de la carta (es/eu) muestran estos precios.
// - App/app/artForm02.php recalcula con ellos los pedidos para llevar: el
//   precio que envía el navegador nunca se usa.
// - "capas" dibuja la miniatura del carrito con moduloBurger01 (App/includes/*/carrito.php).
// Precios en céntimos para evitar errores de redondeo.
return [
    "forajido" => [
        "nombre" => "El Forajido",
        "centimos" => 1050,
        "capas" => ["sombra", "panInferior", "cebolla", "carne", "tomate moduloBurger01__tomate--alto", "queso", "lechuga", "panSuperior"],
    ],
    "sheriff" => [
        "nombre" => "Sheriff Picante",
        "centimos" => 1190,
        "capas" => ["sombra", "panInferior", "salsa moduloBurger01__salsa--picante", "carne", "jalapenos", "queso", "lechuga", "panSuperior"],
    ],
    "diligencia" => [
        "nombre" => "La Diligencia",
        "centimos" => 1290,
        "capas" => ["sombra", "panInferior", "salsa moduloBurger01__salsa--oscura", "carne", "barbacoa", "aros", "panSuperior"],
    ],
    "fiebre" => [
        "nombre" => "Fiebre del Oro",
        "centimos" => 1250,
        "capas" => ["sombra", "panInferior", "salsa", "carne", "huevo", "queso", "yema", "panSuperior"],
    ],
    "coyote" => [
        "nombre" => "Coyote Verde",
        "centimos" => 1090,
        "capas" => ["sombra", "panInferior", "tomate", "carne moduloBurger01__carne--cupula", "hoja", "lechuga", "panSuperior"],
    ],
];
