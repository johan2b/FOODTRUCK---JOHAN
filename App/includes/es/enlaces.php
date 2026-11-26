<?php
// Listado compartido por el nav y el footer en castellano.
// Cada href coincide con una ruta definida en App/config/config.php.
?>
<ul class="enlaces01">
    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/es") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/home.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>Inicio</span>
        </a>
    </li>

    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/es/contacto") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/email.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>Contacto</span>
        </a>
    </li>

    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/es/quienes-somos") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/persons.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>Quiénes somos</span>
        </a>
    </li>

    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/es/preguntas-frecuentes") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/persons.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>FAQ</span>
        </a>
    </li>

    <li class="enlaces01__item enlaces01__item--hasSubmenu" data-nav01-submenu-item>
        <div class="enlaces01__submenuHeader">
            <a class="enlaces01__link enlaces01__link--parent" href="<?= url("/es/nuestras-hamburguesas") ?>" title="Lorem ipsum">
                <img class="enlaces01__icon" src="<?= asset("assets/img/icons/grid.svg") ?>" alt="" title="" aria-hidden="true" />
                <span>Servicios</span>
            </a>
            <button
                class="enlaces01__submenuToggle"
                type="button"
                aria-controls="<?= e($idSubmenu) ?>"
                aria-expanded="false"
                aria-label="Abrir submenú de servicios"
                title="Lorem ipsum"
                data-nav01-submenu-toggle
                data-nav01-label-open="Abrir submenú"
                data-nav01-label-close="Cerrar submenú"
                data-nav01-submenu-label="Servicios"
            >
                <img class="enlaces01__chevron" src="<?= asset("assets/img/icons/arrow-down.svg") ?>" alt="" title="" aria-hidden="true" />
            </button>
        </div>

        <ul class="enlaces01__submenu" id="<?= e($idSubmenu) ?>" data-nav01-submenu>
            <li class="enlaces01__item">
                <a class="enlaces01__link enlaces01__link--child" href="<?= url("/es/servicio1") ?>" title="Lorem ipsum">
                    <img class="enlaces01__icon" src="<?= asset("assets/img/icons/grid.svg") ?>" alt="" title="" aria-hidden="true" />
                    <span>Servicio 1</span>
                </a>
            </li>
            <li class="enlaces01__item">
                <a class="enlaces01__link enlaces01__link--child" href="<?= url("/es/servicio2") ?>" title="Lorem ipsum">
                    <img class="enlaces01__icon" src="<?= asset("assets/img/icons/boxes.svg") ?>" alt="" title="" aria-hidden="true" />
                    <span>Servicio 2</span>
                </a>
            </li>
        </ul>
    </li>

</ul>
