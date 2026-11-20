// nav02: abre y cierra el panel en móvil. Cada instancia se gestiona desde su
// propio elemento raíz y no se inicializa dos veces.
export function nav02(root = document) {
    root.querySelectorAll(".nav02").forEach((nav) => {
        const toggle = nav.querySelector(".nav02__toggle");
        const panel = nav.querySelector(".nav02__panel");

        if (!toggle || !panel || nav.dataset.nav02Ready) {
            return;
        }

        nav.dataset.nav02Ready = "true";

        const setOpen = (isOpen) => {
            const openLabel = toggle.dataset.labelOpen ?? "Abrir menú";
            const closeLabel = toggle.dataset.labelClose ?? "Cerrar menú";

            nav.classList.toggle("is-open", isOpen);
            toggle.setAttribute("aria-expanded", String(isOpen));
            toggle.setAttribute("aria-label", isOpen ? closeLabel : openLabel);
        };

        toggle.addEventListener("click", () => {
            setOpen(!nav.classList.contains("is-open"));
        });

        panel.querySelectorAll("a").forEach((link) => {
            link.addEventListener("click", () => setOpen(false));
        });

        nav.addEventListener("keydown", (event) => {
            if (event.key === "Escape" && nav.classList.contains("is-open")) {
                setOpen(false);
                toggle.focus();
            }
        });

        document.addEventListener("click", (event) => {
            if (nav.classList.contains("is-open") && !nav.contains(event.target)) {
                setOpen(false);
            }
        });

        // Debe coincidir con $desktop de _config.scss.
        window.matchMedia("(min-width: 1200px)").addEventListener("change", (event) => {
            if (event.matches) {
                setOpen(false);
            }
        });
    });
}
