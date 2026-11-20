import "../scss/showroom.scss";
import "./resources/_global.js";

import "./resources/_artForm02.js";

import artSlider from "./resources/_artSlider.js";

import { artAcordeon01 } from "./resources/_artAcordeon01.js";
import { nav02 } from "./resources/_nav02.js";
import { artHistoria01 } from "./resources/_artHistoria01.js";
import { moduloCarrito01 } from "./resources/_moduloCarrito01.js";
import { moduloAnimar01 } from "./resources/_moduloAnimar01.js";

document.addEventListener("DOMContentLoaded", () => {
    artAcordeon01();
    artSlider();
    nav02();
    artHistoria01();
    moduloCarrito01();
    moduloAnimar01();
});
