<footer class="footer">
    <div class="footer__social social">
        <h2 class="sro">Retrouver nous également sur ces réseaux sociaux</h2>
        <div class="social__media">

        </div>
        <div class="social__listen">

        </div>
        <div class="social__others">

        </div>
    </div>
    <div class="footer__menu">
        <h2 class="sro">Menu du pied de page</h2>
        <?php wp_nav_menu(['theme_location' => 'footer']); ?>
    <p class="end_copyright">© Panꓘart - 2021 - <?php the_date('Y')?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>