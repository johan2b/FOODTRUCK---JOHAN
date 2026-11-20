// moduloCarrito01: carrito de hamburguesas para llevar.
// - Escucha los botones [data-carrito-anadir] (con data-carrito-id, -nombre y -precio).
// - Guarda las líneas en localStorage para conservarlas entre páginas y pestañas.
// - Panel <dialog> con cantidades (+, −, eliminar) y total.
// - En contacto (?pedido=llevar) marca el motivo "llevar", rellena el campo oculto
//   "pedido" y muestra el resumen. El servidor recalcula los precios con
//   App/config/carta.php: el precio del navegador solo sirve para mostrarlo.

const CLAVE = "elForajido.carrito";
const MAXIMO = 20;

function leer() {
    try {
        const datos = JSON.parse(window.localStorage.getItem(CLAVE) ?? "[]");
        return Array.isArray(datos)
            ? datos.filter(
                  (l) =>
                      l &&
                      typeof l.id === "string" &&
                      typeof l.nombre === "string" &&
                      Number.isFinite(l.precio) &&
                      Number.isInteger(l.cantidad) &&
                      l.cantidad > 0 &&
                      l.cantidad <= MAXIMO,
              )
            : [];
    } catch {
        return [];
    }
}

function guardar(lineas) {
    try {
        window.localStorage.setItem(CLAVE, JSON.stringify(lineas));
    } catch {
        // Sin almacenamiento (modo privado estricto): el carrito vive solo en esta página.
    }
}

const rellenar = (plantilla, valor) => plantilla.replace("%s", valor);

export function moduloCarrito01(root = document) {
    const carrito = root.querySelector("[data-carrito]");

    if (!carrito || carrito.dataset.carritoReady) {
        return;
    }

    carrito.dataset.carritoReady = "true";

    const textos = carrito.dataset;
    const panel = carrito.querySelector("dialog");
    const abrir = carrito.querySelector("[data-carrito-abrir]");
    const contador = carrito.querySelector("[data-carrito-contador]");
    const lista = carrito.querySelector("[data-carrito-lista]");
    const vacio = carrito.querySelector("[data-carrito-vacio]");
    const pie = carrito.querySelector("[data-carrito-pie]");
    const total = carrito.querySelector("[data-carrito-total]");
    const aviso = carrito.querySelector("[data-carrito-aviso]");
    const plantilla = carrito.querySelector("[data-carrito-plantilla]");
    const moneda = new Intl.NumberFormat(textos.idioma === "eu" ? "eu-ES" : "es-ES", {
        style: "currency",
        currency: "EUR",
    });

    let lineas = leer();
    let temporizadorAviso = null;

    const formato = (euros) => moneda.format(euros);
    const unidades = () => lineas.reduce((suma, l) => suma + l.cantidad, 0);
    const importe = () => lineas.reduce((suma, l) => suma + l.precio * l.cantidad, 0);

    // Formulario de contacto (solo existe en esa vista)
    const formulario = document.querySelector("#idForAjax");
    const campoPedido = formulario?.querySelector('[name="pedido"]');
    const resumen = formulario?.querySelector("[data-carrito-resumen]");
    const esPedido = new URLSearchParams(window.location.search).get("pedido") === "llevar";

    const pintarResumen = () => {
        if (!formulario || !campoPedido || !resumen) {
            return;
        }

        const activo = esPedido && lineas.length > 0;
        resumen.hidden = !activo;
        campoPedido.value = activo ? JSON.stringify(lineas.map(({ id, cantidad }) => ({ id, cantidad }))) : "";

        if (!activo) {
            return;
        }

        const listaResumen = resumen.querySelector("[data-carrito-resumen-lista]");
        listaResumen.replaceChildren(
            ...lineas.map((l) => {
                const item = document.createElement("li");
                item.textContent = `${l.cantidad} × ${l.nombre} · ${formato(l.precio * l.cantidad)}`;
                return item;
            }),
        );
        resumen.querySelector("[data-carrito-resumen-total]").textContent = formato(importe());
    };

    const pintar = () => {
        const cantidad = unidades();

        contador.textContent = String(cantidad);
        contador.hidden = cantidad === 0;
        abrir.setAttribute("aria-label", rellenar(textos.textoAbrir, cantidad));
        vacio.hidden = lineas.length > 0;
        pie.hidden = lineas.length === 0;
        total.textContent = formato(importe());

        lista.replaceChildren(
            ...lineas.map((linea) => {
                const item = plantilla.content.firstElementChild.cloneNode(true);
                item.dataset.id = linea.id;
                item.querySelector('[data-campo="nombre"]').textContent = linea.nombre;
                item.querySelector('[data-campo="unitario"]').textContent = formato(linea.precio);
                item.querySelector('[data-campo="cantidad"]').textContent = String(linea.cantidad);
                item.querySelector('[data-campo="cantidad"]').setAttribute(
                    "aria-label",
                    rellenar(textos.textoCantidad, linea.nombre),
                );
                item.querySelector('[data-campo="subtotal"]').textContent = formato(linea.precio * linea.cantidad);
                item.querySelector('[data-accion="mas"]').setAttribute("aria-label", rellenar(textos.textoAumentar, linea.nombre));
                item.querySelector('[data-accion="mas"]').disabled = linea.cantidad >= MAXIMO;
                item.querySelector('[data-accion="menos"]').setAttribute(
                    "aria-label",
                    rellenar(textos.textoDisminuir, linea.nombre),
                );
                item.querySelector('[data-accion="eliminar"]').setAttribute(
                    "aria-label",
                    rellenar(textos.textoEliminar, linea.nombre),
                );
                return item;
            }),
        );

        pintarResumen();
    };

    const actualizar = () => {
        guardar(lineas);
        pintar();
    };

    const avisar = (mensaje) => {
        aviso.textContent = mensaje;
        aviso.classList.add("is-visible");
        window.clearTimeout(temporizadorAviso);
        temporizadorAviso = window.setTimeout(() => aviso.classList.remove("is-visible"), 2200);
    };

    const anadir = ({ id, nombre, precio }) => {
        const linea = lineas.find((l) => l.id === id);

        if (linea) {
            linea.cantidad = Math.min(linea.cantidad + 1, MAXIMO);
        } else {
            lineas.push({ id, nombre, precio, cantidad: 1 });
        }

        actualizar();
        avisar(rellenar(textos.textoAnadido, nombre));
        // Reinicia la animación del contador
        abrir.classList.remove("is-bote");
        void abrir.offsetWidth;
        abrir.classList.add("is-bote");
    };

    // Botones "Añadir" de la página
    document.querySelectorAll("[data-carrito-anadir]").forEach((boton) => {
        boton.addEventListener("click", () => {
            const precio = Number.parseFloat(boton.dataset.carritoPrecio);

            if (!boton.dataset.carritoId || !Number.isFinite(precio)) {
                return;
            }

            anadir({ id: boton.dataset.carritoId, nombre: boton.dataset.carritoNombre ?? "", precio });
            boton.classList.add("is-anadido");
            window.setTimeout(() => boton.classList.remove("is-anadido"), 900);
        });
    });

    // Cantidades dentro del panel (delegación)
    lista.addEventListener("click", (evento) => {
        const boton = evento.target.closest("[data-accion]");
        const item = boton?.closest("[data-id]");
        const linea = item && lineas.find((l) => l.id === item.dataset.id);

        if (!linea) {
            return;
        }

        if (boton.dataset.accion === "mas") {
            linea.cantidad = Math.min(linea.cantidad + 1, MAXIMO);
        } else if (boton.dataset.accion === "menos") {
            linea.cantidad -= 1;
        } else if (boton.dataset.accion === "eliminar") {
            linea.cantidad = 0;
        }

        const indice = lineas.indexOf(linea);
        lineas = lineas.filter((l) => l.cantidad > 0);
        actualizar();

        // Mantiene el foco en la misma línea o en la siguiente tras eliminar
        const destino =
            lista.querySelector(`[data-id="${CSS.escape(linea.id)}"] [data-accion="${boton.dataset.accion}"]`) ??
            lista.children[Math.min(indice, lista.children.length - 1)]?.querySelector("[data-accion]") ??
            carrito.querySelector("[data-carrito-cerrar]");
        destino?.focus();
    });

    // Abrir y cerrar el panel
    abrir.addEventListener("click", () => {
        panel.showModal();
        abrir.setAttribute("aria-expanded", "true");
    });

    carrito.querySelector("[data-carrito-cerrar]").addEventListener("click", () => panel.close());

    // Clic en el fondo oscuro (fuera del contenido) cierra el panel
    panel.addEventListener("click", (evento) => {
        if (evento.target === panel) {
            panel.close();
        }
    });

    panel.addEventListener("close", () => {
        abrir.setAttribute("aria-expanded", "false");
        abrir.focus();
    });

    // Otra pestaña modificó el carrito
    window.addEventListener("storage", (evento) => {
        if (evento.key === CLAVE) {
            lineas = leer();
            pintar();
        }
    });

    // Contacto: preparar el formulario como pedido para llevar
    if (formulario && esPedido && lineas.length > 0) {
        const motivo = formulario.querySelector('[name="motivo"][value="llevar"]');
        const mensaje = formulario.querySelector('[name="mensaje"]');

        if (motivo) {
            motivo.checked = true;
        }

        if (mensaje && mensaje.value.trim() === "") {
            mensaje.value = textos.textoMensaje;
        }

        // _artForm02.js avisa del envío correcto: el pedido ya está hecho.
        formulario.addEventListener("artForm02:enviado", () => {
            if (campoPedido?.value) {
                lineas = [];
                actualizar();
            }
        });
    }

    pintar();
}
