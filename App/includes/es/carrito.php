<?php
// moduloCarrito01 (castellano): botón flotante y panel del carrito.
// La vista debe importar _moduloCarrito01.scss y ejecutar moduloCarrito01() desde su entrada.
// Los textos con %s los completa el JS con el nombre de la hamburguesa.
// Cada línea del carrito muestra el dibujo moduloBurger01 de su hamburguesa: las
// capas salen de App/config/carta.php y el JS clona la plantilla data-carrito-dibujo.
$cartaCarrito = require app_path("config/carta.php");
?>
<div
    class="moduloCarrito01"
    data-carrito
    data-idioma="es"
    data-texto-anadido="%s, añadida al carrito"
    data-texto-aumentar="Añadir otra %s"
    data-texto-disminuir="Quitar una %s"
    data-texto-eliminar="Eliminar %s del carrito"
    data-texto-cantidad="Cantidad de %s"
    data-texto-abrir="Abrir carrito, %s hamburguesas"
    data-texto-mensaje="Hola, quiero este pedido para llevar."
>
    <button class="moduloCarrito01__abrir" type="button" aria-haspopup="dialog" aria-controls="carrito-panel" data-carrito-abrir>
        <svg class="moduloCarrito01__icono" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path
                fill="currentColor"
                d="M7 18a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm10 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM5.2 4l.6 3H21l-2 8H7.4L4.6 2H1v2h3.6l.6 2z"
            />
        </svg>
        <span class="moduloCarrito01__abrirTexto">Carrito</span>
        <span class="moduloCarrito01__contador" data-carrito-contador>0</span>
    </button>

    <dialog class="moduloCarrito01__panel" id="carrito-panel" aria-labelledby="carrito-titulo">
        <div class="moduloCarrito01__cabecera">
            <h2 id="carrito-titulo" class="moduloCarrito01__titulo">Tu pedido</h2>
            <button class="moduloCarrito01__cerrar" type="button" data-carrito-cerrar aria-label="Cerrar carrito">×</button>
        </div>

        <p class="moduloCarrito01__vacio" data-carrito-vacio>Tu carrito está vacío. Elige tus forajidos en la carta.</p>
        <ul class="moduloCarrito01__lista" data-carrito-lista></ul>

        <div class="moduloCarrito01__pie" data-carrito-pie hidden>
            <p class="moduloCarrito01__total">
                <span>Total</span>
                <strong data-carrito-total>0,00 €</strong>
            </p>
            <a
                class="moduloBoton03 moduloCarrito01__pedir"
                href="<?= url("/es/pedidos") ?>#pedidos-formulario-es"
                data-carrito-pedir
                >Hacer pedido para llevar</a
            >
            <p class="moduloCarrito01__nota">Terminarás el pedido en la página de pedidos.</p>
        </div>
    </dialog>

    <template data-carrito-plantilla>
        <li class="moduloCarrito01__item">
            <div class="moduloCarrito01__miniatura" data-campo="miniatura" aria-hidden="true"></div>
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
            <button class="moduloCarrito01__eliminar" type="button" data-accion="eliminar">Eliminar</button>
        </li>
    </template>

    <?php foreach ($cartaCarrito as $idCarrito => $platoCarrito): ?>
        <template data-carrito-dibujo="<?= e($idCarrito) ?>">
            <div class="moduloBurger01 moduloBurger01--oscuro">
                <div class="moduloBurger01__dibujo">
                    <?php foreach ($platoCarrito["capas"] as $capaCarrito): ?>
                        <span class="moduloBurger01__<?= e($capaCarrito) ?>"></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </template>
    <?php endforeach; ?>

    <p class="moduloCarrito01__aviso" data-carrito-aviso role="status" aria-live="polite"></p>
</div>
