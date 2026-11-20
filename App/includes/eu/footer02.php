<?php
// Pie footer02 (euskera). La vista debe importar _footer02.scss desde su entrada.
?>
<footer class="footer02">
    <div class="footer02__inner">
        <div class="footer02__grid">
            <div class="footer02__brandCol">
                <a class="footer02__brand" href="<?= url("/eu") ?>">
                    <svg class="footer02__logo" viewBox="0 0 60 60" aria-hidden="true" focusable="false">
                        <circle cx="30" cy="30" r="28" fill="none" stroke="currentColor" stroke-width="2.5" />
                        <path
                            fill="currentColor"
                            d="M30 17l3.53 10.86h11.42l-9.24 6.71 3.53 10.86L30 38.72l-9.24 6.71 3.53-10.86-9.24-6.71h11.42z"
                        />
                    </svg>
                    <span class="footer02__brandText">
                        <span class="footer02__name">El Forajido</span>
                        <span class="footer02__tagline">Burger wagon · Est. 2017</span>
                    </span>
                </a>
                <p class="footer02__text">
                    Txingarretan erretako hanburgesak, furgoneta gorri zahar batetik zerbitzatuak. Aparkatzen dugun lekuan,
                    saloona sortzen da.
                </p>
            </div>

            <div class="footer02__col">
                <h2 class="footer02__title">Bisita gaitzazu</h2>
                <p class="footer02__line">Asteartetik igandera</p>
                <p class="footer02__line">13:00 – 16:30 · 20:00 – 00:00</p>
            </div>

            <div class="footer02__col">
                <h2 class="footer02__title">Kontaktua</h2>
                <address class="footer02__address">
                    <a class="footer02__link footer02__line" href="tel:+34612345678">+34 612 345 678</a>
                    <a class="footer02__link footer02__line" href="mailto:hola@elforajido.es">hola@elforajido.es</a>
                </address>
            </div>

            <div class="footer02__col">
                <h2 class="footer02__title">Jarrai gaitzazu</h2>
                <p class="footer02__line">
                    <a class="footer02__link" href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">Instagram</a>
                    ·
                    <a class="footer02__link" href="https://www.tiktok.com/" target="_blank" rel="noopener noreferrer">TikTok</a>
                </p>
                <p class="footer02__line">@elforajidoburger</p>
            </div>
        </div>

        <div class="footer02__bottom">
            <p class="footer02__legal">© <?= e(date("Y")) ?> El Forajido Burger Wagon</p>
            <p class="footer02__motto"><span aria-hidden="true">★ </span>Bilatzen da: gosea<span aria-hidden="true"> ★</span></p>
        </div>
    </div>
</footer>
