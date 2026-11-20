<?php

// Catálogo de la carta: fuente única de nombres y precios.
// - Las vistas de la carta (es/eu) muestran estos precios.
// - App/app/artForm02.php recalcula con ellos los pedidos para llevar: el
//   precio que envía el navegador nunca se usa.
// Precios en céntimos para evitar errores de redondeo.
return [
    "forajido" => ["nombre" => "El Forajido", "centimos" => 1050],
    "sheriff" => ["nombre" => "Sheriff Picante", "centimos" => 1190],
    "diligencia" => ["nombre" => "La Diligencia", "centimos" => 1290],
    "fiebre" => ["nombre" => "Fiebre del Oro", "centimos" => 1250],
    "coyote" => ["nombre" => "Coyote Verde", "centimos" => 1090],
];
