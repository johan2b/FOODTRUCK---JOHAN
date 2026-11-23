<?php
// Nabigazioan eta footerrean berrerabiltzen den euskarazko esteka-zerrenda.
// Href bakoitza App/config/config.php fitxategiko bide batekin bat dator.
?>
<ul class="enlaces01">
    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/eu") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/home.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>Hasiera</span>
        </a>
    </li>

    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/eu/kontaktua") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/email.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>Kontaktua</span>
        </a>
    </li>

    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/eu/nortzuk-gara") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/persons.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>Nortzuk gara</span>
        </a>
    </li>

    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/eu/ohiko-galderak") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/persons.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>FAQ</span>
        </a>
    </li>

    <li class="enlaces01__item enlaces01__item--hasSubmenu" data-nav01-submenu-item>
        <div class="enlaces01__submenuHeader">
            <a class="enlaces01__link enlaces01__link--parent" href="<?= url("/eu/gure-hanburgesak") ?>" title="Lorem ipsum">
                <img class="enlaces01__icon" src="<?= asset("assets/img/icons/grid.svg") ?>" alt="" title="" aria-hidden="true" />
                <span>Zerbitzuak</span>
            </a>
            <button
                class="enlaces01__submenuToggle"
                type="button"
                aria-controls="<?= e($idSubmenu) ?>"
                aria-expanded="false"
                aria-label="Zerbitzuen azpimenua ireki"
                title="Lorem ipsum"
                data-nav01-submenu-toggle
                data-nav01-label-open="Azpimenua ireki"
                data-nav01-label-close="Azpimenua itxi"
                data-nav01-submenu-label="Zerbitzuak"
            >
                <img class="enlaces01__chevron" src="<?= asset("assets/img/icons/arrow-down.svg") ?>" alt="" title="" aria-hidden="true" />
            </button>
        </div>

        <ul class="enlaces01__submenu" id="<?= e($idSubmenu) ?>" data-nav01-submenu>
            <li class="enlaces01__item">
                <a class="enlaces01__link enlaces01__link--child" href="<?= url("/eu/zerbitzuak/zerbitzua1") ?>" title="Lorem ipsum">
                    <img class="enlaces01__icon" src="<?= asset("assets/img/icons/grid.svg") ?>" alt="" title="" aria-hidden="true" />
                    <span>1. zerbitzua</span>
                </a>
            </li>
            <li class="enlaces01__item">
                <a class="enlaces01__link enlaces01__link--child" href="<?= url("/eu/zerbitzuak/zerbitzua2") ?>" title="Lorem ipsum">
                    <img class="enlaces01__icon" src="<?= asset("assets/img/icons/boxes.svg") ?>" alt="" title="" aria-hidden="true" />
                    <span>2. zerbitzua</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/showroom") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/grid.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>Showroom</span>
        </a>
    </li>
</ul>
