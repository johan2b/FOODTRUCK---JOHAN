// artHistoria01: convierte el scroll vertical en el avance de la historia.
// Solo calcula el progreso (0 a 1) y lo publica en --progreso; el movimiento lo
// resuelve el CSS. Sin JS, en móvil o con movimiento reducido, la historia se
// muestra apilada. Cada instancia se gestiona desde su raíz y no se inicializa
// dos veces.

// Debe coincidir con $tablet de _config.scss.
const MODO_HORIZONTAL = "(min-width: 800px) and (prefers-reduced-motion: no-preference)";

// A partir de este progreso el camión ha llegado: se abre y aparece el grupo.
const LLEGADA = 0.96;

export function artHistoria01(root = document) {
    root.querySelectorAll(".artHistoria01").forEach((historia) => {
        if (historia.dataset.artHistoria01Ready) {
            return;
        }

        historia.dataset.artHistoria01Ready = "true";

        const media = window.matchMedia(MODO_HORIZONTAL);
        let frame = null;

        const actualizar = () => {
            frame = null;

            const recorrido = historia.offsetHeight - window.innerHeight;
            const avance = -historia.getBoundingClientRect().top;
            const progreso = recorrido > 0 ? Math.min(Math.max(avance / recorrido, 0), 1) : 1;

            historia.style.setProperty("--progreso", progreso.toFixed(4));
            historia.classList.toggle("is-llegada", progreso >= LLEGADA);
        };

        const pedirActualizacion = () => {
            if (frame === null) {
                frame = window.requestAnimationFrame(actualizar);
            }
        };

        const aplicarModo = () => {
            const horizontal = media.matches;

            historia.classList.toggle("is-horizontal", horizontal);

            if (horizontal) {
                window.addEventListener("scroll", pedirActualizacion, { passive: true });
                window.addEventListener("resize", pedirActualizacion);
                actualizar();
                return;
            }

            window.removeEventListener("scroll", pedirActualizacion);
            window.removeEventListener("resize", pedirActualizacion);
            historia.style.removeProperty("--progreso");
            historia.classList.remove("is-llegada");
        };

        media.addEventListener("change", aplicarModo);
        aplicarModo();
    });
}
