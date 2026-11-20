// moduloAnimar01: los elementos aparecen (fundido y subida) al entrar en
// pantalla, escalonados entre hermanos. Sin JS, sin IntersectionObserver o con
// movimiento reducido no se oculta nada: el contenido se ve tal cual.
//
// Uso: moduloAnimar01({ selector: ".mi-clase, [data-animar]" })
// Cada elemento se anima una sola vez; al terminar se retiran las clases para
// no interferir con sus propias transiciones (hover, etc.).

const SELECTOR = "[data-animar]";
const PASO_MS = 90;
const MAX_ESCALON = 5;

export function moduloAnimar01({ root = document, selector = SELECTOR } = {}) {
    const movimiento = window.matchMedia("(prefers-reduced-motion: no-preference)");

    if (!movimiento.matches || !("IntersectionObserver" in window)) {
        return;
    }

    const elementos = [...root.querySelectorAll(selector)].filter((el) => !el.dataset.animarListo);

    if (elementos.length === 0) {
        return;
    }

    const terminar = (el) => {
        el.classList.remove("moduloAnimar01", "moduloAnimar01--visible");
        el.style.removeProperty("--animar-retraso");
    };

    const observador = new IntersectionObserver(
        (entradas) => {
            entradas.forEach((entrada) => {
                if (!entrada.isIntersecting) {
                    return;
                }

                const el = entrada.target;
                observador.unobserve(el);
                el.classList.add("moduloAnimar01--visible");

                const alTerminar = (evento) => {
                    if (evento.target === el) {
                        el.removeEventListener("transitionend", alTerminar);
                        terminar(el);
                    }
                };

                el.addEventListener("transitionend", alTerminar);
            });
        },
        { threshold: 0.12, rootMargin: "0px 0px -5% 0px" },
    );

    elementos.forEach((el) => {
        el.dataset.animarListo = "true";

        // Retraso escalonado entre hermanos que también se animan
        const hermanos = [...(el.parentElement?.children ?? [])].filter((h) => elementos.includes(h));
        const escalon = Math.min(Math.max(hermanos.indexOf(el), 0), MAX_ESCALON);

        el.style.setProperty("--animar-retraso", `${escalon * PASO_MS}ms`);
        el.classList.add("moduloAnimar01");
        observador.observe(el);
    });
}
