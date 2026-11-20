<?php

return [
    "langs" => ["es", "eu", "en"],
    "lang_default" => env("LANG_DEFAULT", "es"),
    "global_routes" => [
        "/showroom" => ["view" => "showroom.php", "resources" => "src/assets/js/showroom.js"],
    ],
    "post_routes" => ["/app/artForm02" => "app/artForm02.php"],
    "routes" => [
        "es" => [
            "/es" => ["view" => "inicio.php", "resources" => "src/assets/js/inicio.js"],
            "/es/quienes-somos" => ["view" => "quienessomos.php", "resources" => "src/assets/js/quienessomos.js"],
            "/es/contacto" => ["view" => "contacto.php", "resources" => "src/assets/js/contacto.js"],
            "/es/nuestras-hamburguesas" => ["view" => "servicios.php", "resources" => "src/assets/js/servicios.js"],
            "/es/servicios/servicio1" => ["view" => "servicio1.php", "resources" => "src/assets/js/servicio1.js"],
            "/es/servicios/servicio2" => ["view" => "servicio2.php", "resources" => "src/assets/js/servicio2.js"],
            "/es/404" => ["view" => "404.php", "resources" => "src/assets/js/404.js"],
            "/es/preguntas-frecuentes" => ["view" => "faq.php", "resources" => "src/assets/js/faq.js"]
        ],
        "eu" => [
            "/eu" => ["view" => "inicio.php", "resources" => "src/assets/js/inicio.js"],
            "/eu/quienessomos" => ["view" => "quienessomos.php", "resources" => "src/assets/js/quienessomos.js"],
            "/eu/contacto" => ["view" => "contacto.php", "resources" => "src/assets/js/contacto.js"],
            "/eu/gure-hanburgesak" => ["view" => "servicios.php", "resources" => "src/assets/js/servicios.js"],
            "/eu/servicios/servicio1" => ["view" => "servicio1.php", "resources" => "src/assets/js/servicio1.js"],
            "/eu/servicios/servicio2" => ["view" => "servicio2.php", "resources" => "src/assets/js/servicio2.js"],
            "/eu/404" => ["view" => "404.php", "resources" => "src/assets/js/404.js"],
            "/eu/preguntas-frecuentes" => ["view" => "faq.php", "resources" => "src/assets/js/faq.js"]
        ],
    ],
];
