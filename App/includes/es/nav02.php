<?php
// Navegación nav02 (castellano). La vista debe importar _nav02.scss y ejecutar nav02() desde su entrada.
$nav02Enlaces = [
    "/es" => "Inicio",
    "/es/quienes-somos" => "Quiénes somos",
    "/es/nuestras-hamburguesas" => "Nuestras hamburguesas",
    "/es/contacto" => "Contacto",
];
?>
<nav class="nav02" aria-label="Navegación principal">
    <div class="nav02__inner">
        <a class="nav02__brand" href="<?= url("/es") ?>">
            <svg class="nav02__logo" viewBox="0 0 60 60" aria-hidden="true" focusable="false">
                <circle cx="30" cy="30" r="28" fill="none" stroke="currentColor" stroke-width="2.5" />
                <path
                    fill="currentColor"
                    d="M30 17l3.53 10.86h11.42l-9.24 6.71 3.53 10.86L30 38.72l-9.24 6.71 3.53-10.86-9.24-6.71h11.42z"
                />
            </svg>
            <span class="nav02__brandText">
                <span class="nav02__name">El Forajido</span>
                <span class="nav02__tagline">Burger wagon · Est. 2017</span>
            </span>
        </a>

        <button
            class="nav02__toggle"
            type="button"
            aria-controls="nav02-menu"
            aria-expanded="false"
            aria-label="Abrir menú"
            data-label-open="Abrir menú"
            data-label-close="Cerrar menú"
        >
            <span class="nav02__toggleLine"></span>
            <span class="nav02__toggleLine"></span>
            <span class="nav02__toggleLine"></span>
        </button>

        <div class="nav02__panel" id="nav02-menu">
            <div class="nav02__panelInner">
                <ul class="nav02__list">
                    <?php foreach ($nav02Enlaces as $nav02Ruta => $nav02Texto): ?>
                        <li>
                            <a
                                class="nav02__link"
                                href="<?= url($nav02Ruta) ?>"
                                <?= ($url ?? null) === $nav02Ruta ? 'aria-current="page"' : "" ?>
                                ><?= e($nav02Texto) ?></a
                            >
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="nav02__langs" role="group" aria-label="Idioma">
                    <a
                        class="nav02__lang"
                        href="<?= url(ruta_homologa($url ?? null, "es")) ?>"
                        lang="es"
                        hreflang="es"
                        aria-current="true"
                        title="Castellano"
                        >ES</a
                    >
                    <a
                        class="nav02__lang"
                        href="<?= url(ruta_homologa($url ?? null, "eu")) ?>"
                        lang="eu"
                        hreflang="eu"
                        title="Euskara"
                        >EU</a
                    >
                </div>
                <a class="nav02__cta" href="<?= url("/es/contacto") ?>">Pide ahora</a>
            </div>
        </div>
    </div>
</nav>
