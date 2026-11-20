<footer class="footer01">
    <div class="footer01__inner">
        <section class="footer01__column">
            <h2 class="footer01__title">Navegación</h2>
            <?php
            $idSubmenu = "footer-servicios-es";
            require app_path("includes/es/enlaces.php");
            ?>
        </section>
        <section class="footer01__column">
            <h2 class="footer01__title">Lorem ipsum</h2>
            <p class="footer01__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </p>
        </section>
        <section class="footer01__column">
            <h2 class="footer01__title">Contacto</h2>
            <a class="footer01__link" href="<?= url("/es/contacto") ?>">Lorem ipsum</a>
        </section>
    </div>
    <div class="footer01__bottom">
        <p>
            Stack formación &copy;
            <?= date("Y") ?>
        </p>
    </div>
</footer>
