<footer class="footer">
    <div class="footer__social social">
        <div class="social__media">
            <h2 class="social__title">Nos réseaux sociaux</h2>
            <div class="social__icons">
                <a href="#" title="Retrouvez Pankart sur Facebook">
                    <img class="social__icon" width="50" src="<?php echo get_template_directory_uri() . '/resources/img/footer/img.png' ?>"
                         alt="Facebook">
                </a>
                <a href="#" title="Retrouvez Pankart sur Instagram">
                    <img class="social__icon" width="50" src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_1.png' ?>"
                         alt="Instagram">
                </a>
            </div>
        </div>
        <div class="social__listen">
            <h2 class="social__title">Écoutez-nous sur</h2>
            <div class="social__icons">
                <a href="#" title="Retrouvez Pankart sur Facebook">
                    <img class="social__icon" width="50" src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_2.png' ?>"
                         alt="spotify">
                </a>
                <a href="#" title="Retrouvez Pankart sur X">
                    <img class="social__icon" width="50" src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_3.png' ?>"
                         alt="x">
                </a>
                <a href="#" title="Retrouvez Pankart sur Apple Music">
                    <img class="social__icon" width="50" src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_4.png' ?>"
                         alt="Apple Music">
                </a>
                <a href="#" title="Retrouvez Pankart sur Amazon Play">
                    <img class="social__icon" width="50" src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_5.png' ?>"
                         alt="Amazon PLay">
                </a>
                <a href="#" title="Retrouvez Pankart sur Google Play">
                    <img class="social__icon" width="50" src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_6.png' ?>"
                         alt="Google PLay">
                </a>
                <a href="#" title="Retrouvez Pankart sur Soundcloud">
                    <img class="social__icon" width="50" src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_7.png' ?>"
                         alt="Soundcloud">
                </a>
            </div>
        </div>
        <div class="social__others">
            <h2 class="social__title">Retrouvez-nous aussi sur</h2>
            <div class="social__icons">
                <a href="#" title="Retrouvez Pankart sur Gigstarter">
                    <img class="social__icon" width="50" src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_8.png' ?>"
                         alt="Gigstarter">
                </a>
                <a href="#" title="Retrouvez Pankart sur Lampli BE">
                    <img class="social__icon" width="50" src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_9.png' ?>"
                         alt="Lampli BE">
                </a>
                <a href="#" title="Retrouvez Pankart sur Youtube">
                    <img class="social__icon" width="50" src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_10.png' ?>"
                         alt="youTube">
                </a>
            </div>
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