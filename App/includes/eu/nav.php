<nav class="nav01" aria-label="Nabigazio nagusia" data-nav01>
    <div class="nav01__inner">
        <a class="nav01__brand" href="<?= url("/eu") ?>" title="Lorem ipsum">
            <span class="nav01__logo" aria-hidden="true">S</span>
            <span class="nav01__brandText">Stack formación</span>
        </a>

        <button
            class="nav01__toggle"
            type="button"
            aria-controls="nav01-menu-eu"
            aria-expanded="false"
            aria-label="Menua ireki"
            title="Lorem ipsum"
            data-nav01-toggle
            data-nav01-label-open="Menua ireki"
            data-nav01-label-close="Menua itxi"
        >
            <span class="nav01__toggleLine"></span>
            <span class="nav01__toggleLine"></span>
            <span class="nav01__toggleLine"></span>
        </button>

        <div class="nav01__panel" id="nav01-menu-eu" data-nav01-menu>
            <div class="nav01__panelInner">
                <?php
                $idSubmenu = "nav-zerbitzuak-eu";
                require app_path("includes/eu/enlaces.php");
                ?>

                <div class="nav01__langs" aria-label="Hizkuntzak">
                    <a class="nav01__lang" href="<?= url(ruta_homologa($url ?? null, "es")) ?>" lang="es" hreflang="es" title="Lorem ipsum">ES</a>

                    <a
                        class="nav01__lang is-active"
                        href="<?= url(ruta_homologa($url ?? null, "eu")) ?>"
                        lang="eu"
                        hreflang="eu"
                        aria-current="true"
                        title="Lorem ipsum"
                        >EU</a
                    >
                </div>
            </div>
        </div>
    </div>
</nav>
