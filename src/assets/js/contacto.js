import "../scss/contacto.scss";
import "./resources/_global.js";

// Mismo comportamiento que artForm02: artForm02-bis conserva sus IDs.
import "./resources/_artForm02.js";

import { nav02 } from "./resources/_nav02.js";
import { moduloCarrito01 } from "./resources/_moduloCarrito01.js";
import { moduloAnimar01 } from "./resources/_moduloAnimar01.js";

document.addEventListener("DOMContentLoaded", () => {
    nav02();
    moduloCarrito01();
    moduloAnimar01({
        selector: ".header01-bis__content > *, .artForm02-bis, .sect02-bis__columna > *, .moduloMapa01",
    });
});
