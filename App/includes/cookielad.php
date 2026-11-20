<?php if (env("COOKIELAD_API_KEY", "") !== ""): ?>
    <script defer src="https://webda.eus/apis/cookielad/loader.js?key=<?= e(rawurlencode(env("COOKIELAD_API_KEY"))) ?>&amp;color=234b66&amp;v=1.799"></script>
<?php endif; ?>
