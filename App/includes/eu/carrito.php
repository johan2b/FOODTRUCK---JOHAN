<?php
// moduloCarrito01 (euskera): botón flotante y panel del carrito.
// La vista debe importar _moduloCarrito01.scss y ejecutar moduloCarrito01() desde su entrada.
// Los textos con %s los completa el JS con el nombre de la hamburguesa.
?>
<div
    class="moduloCarrito01"
    data-carrito
    data-idioma="eu"
    data-texto-anadido="%s, saskira gehituta"
    data-texto-aumentar="Gehitu beste %s bat"
    data-texto-disminuir="Kendu %s bat"
    data-texto-eliminar="Ezabatu %s saskitik"
    data-texto-cantidad="%s kopurua"
    data-texto-abrir="Ireki saskia, %s hanburgesa"
    data-texto-mensaje="Kaixo, eskaera hau eramateko nahi dut."
>
    <button class="moduloCarrito01__abrir" type="button" aria-haspopup="dialog" aria-controls="carrito-panel" data-carrito-abrir>
        <svg class="moduloCarrito01__icono" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path
                fill="currentColor"
                d="M7 18a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm10 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM5.2 4l.6 3H21l-2 8H7.4L4.6 2H1v2h3.6l.6 2z"
            />
        </svg>
        <span class="moduloCarrito01__abrirTexto">Saskia</span>
        <span class="moduloCarrito01__contador" data-carrito-contador>0</span>
    </button>

    <dialog class="moduloCarrito01__panel" id="carrito-panel" aria-labelledby="carrito-titulo">
        <div class="moduloCarrito01__cabecera">
            <h2 id="carrito-titulo" class="moduloCarrito01__titulo">Zure eskaera</h2>
            <button class="moduloCarrito01__cerrar" type="button" data-carrito-cerrar aria-label="Itxi saskia">×</button>
        </div>

        <p class="moduloCarrito01__vacio" data-carrito-vacio>Saskia hutsik dago. Aukeratu zure legez kanpokoak kartan.</p>
        <ul class="moduloCarrito01__lista" data-carrito-lista></ul>

        <div class="moduloCarrito01__pie" data-carrito-pie hidden>
            <p class="moduloCarrito01__total">
                <span>Guztira</span>
                <strong data-carrito-total>0,00 €</strong>
            </p>
            <a
                class="moduloBoton03 moduloCarrito01__pedir"
                href="<?= url("/eu/contacto") ?>?pedido=llevar#contacto-telegrama-eu"
                data-carrito-pedir
                >Egin eramateko eskaera</a
            >
            <p class="moduloCarrito01__nota">Eskaera kontaktu-formularioan amaituko duzu.</p>
        </div>
    </dialog>

    <template data-carrito-plantilla>
        <li class="moduloCarrito01__item">
            <div class="moduloCarrito01__info">
                <p class="moduloCarrito01__nombre" data-campo="nombre"></p>
                <p class="moduloCarrito01__unitario" data-campo="unitario"></p>
            </div>
            <div class="moduloCarrito01__cantidad">
                <button class="moduloCarrito01__control" type="button" data-accion="menos">−</button>
                <output class="moduloCarrito01__unidades" data-campo="cantidad"></output>
                <button class="moduloCarrito01__control" type="button" data-accion="mas">+</button>
            </div>
            <p class="moduloCarrito01__subtotal" data-campo="subtotal"></p>
            <button class="moduloCarrito01__eliminar" type="button" data-accion="eliminar">Ezabatu</button>
        </li>
    </template>

    <p class="moduloCarrito01__aviso" data-carrito-aviso role="status" aria-live="polite"></p>
</div>
