// Importamos el archivo principal de estilos.
import "../scss/inicio.scss";

import "./resources/_global.js";

import { nav02 } from "./resources/_nav02.js";
import { moduloCarrito01 } from "./resources/_moduloCarrito01.js";
import { moduloAnimar01 } from "./resources/_moduloAnimar01.js";

document.addEventListener("DOMContentLoaded", () => {
    nav02();
    moduloCarrito01();
    moduloAnimar01({
        selector: ".header01-bis__content > *, .artCartel01, .sect02-bis__cabecera, .sect02-bis__rejilla > *, .sect02-bis__columna > *, .artRuta01",
    });
});
