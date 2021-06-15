<footer class="footer">
    <div class="footer__social social">
        <div class="social__media">
            <h2 class="social__title">Nos réseaux sociaux</h2>
            <div class="social__icons">
                <a href="#" title="Retrouvez Pankart sur Facebook">
                    <img class="social__icon" width="50"
                         src="<?php echo get_template_directory_uri() . '/resources/img/footer/img.png' ?>"
                         alt="Facebook">
                </a>
                <a href="#" title="Retrouvez Pankart sur Instagram">
                    <img class="social__icon" width="50"
                         src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_1.png' ?>"
                         alt="Instagram">
                </a>
            </div>
        </div>
        <div class="social__listen">
            <h2 class="social__title">Écoutez-nous sur</h2>
            <div class="social__icons">
                <a href="#" title="Retrouvez Pankart sur Facebook">
                    <img class="social__icon" width="50"
                         src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_2.png' ?>"
                         alt="spotify">
                </a>
                <a href="#" title="Retrouvez Pankart sur X">
                    <img class="social__icon" width="50"
                         src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_3.png' ?>"
                         alt="x">
                </a>
                <a href="#" title="Retrouvez Pankart sur Apple Music">
                    <img class="social__icon" width="50"
                         src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_4.png' ?>"
                         alt="Apple Music">
                </a>
                <a href="https://www.amazon.fr/PanKart-Pankart/dp/B08797KN6B/ref=sr_1_1?dchild=1&keywords=Pankart&qid=1587653912&s=dmusic&search-type=ss&sr=1-1"
                   title="Retrouvez Pankart sur Amazon Play">
                    <img class="social__icon" width="50"
                         src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_5.png' ?>"
                         alt="Amazon PLay">
                </a>
                <a href="https://play.google.com/store/apps/theme/promotion_gpm_shutdown_ctp"
                   title="Retrouvez Pankart sur Google Play">
                    <img class="social__icon" width="50"
                         src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_6.png' ?>"
                         alt="Google PLay">
                </a>
                <a href="https://soundcloud.com/pankartband" title="Retrouvez Pankart sur Soundcloud">
                    <img class="social__icon" width="50"
                         src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_7.png' ?>"
                         alt="Soundcloud">
                </a>
            </div>
        </div>
        <div class="social__others">
            <h2 class="social__title">Retrouvez-nous aussi sur</h2>
            <div class="social__icons">
                <a href="#" title="Retrouvez Pankart sur Gigstarter">
                    <img class="social__icon" width="50"
                         src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_8.png' ?>"
                         alt="Gigstarter">
                </a>
                <a href="#" title="Retrouvez Pankart sur Lampli BE">
                    <img class="social__icon" width="50"
                         src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_9.png' ?>"
                         alt="Lampli BE">
                </a>
                <a href="https://www.youtube.com/channel/UC7XhVCykTsQEJp6P0eTVfmQ"
                   title="Retrouvez Pankart sur Youtube">
                    <img class="social__icon" width="50"
                         src="<?php echo get_template_directory_uri() . '/resources/img/footer/img_10.png' ?>"
                         alt="youTube">
                </a>
            </div>
        </div>
    </div>
    <div class="footer__menu">
        <h2 class="sro">Menu du pied de page</h2>
        <?php wp_nav_menu(['theme_location' => 'footer']); ?>
        <p class="end_copyright">© Panꓘart - 2021 - <?php the_date('Y') ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
<script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "PanKart",
        "url": "<?= site_url(); ?>",
        "sameAs": [
            "https://www.instagram.com/pankartmusicband/",
            "https://www.gigstarter.be/fr-BE/artistes/pankart",
            "https://www.youtube.com/channel/UC7XhVCykTsQEJp6P0eTVfmQ",
            "https://www.facebook.com/PanKart/",
            "https://open.spotify.com/album/15EDw1ExEbLvtPYgWngsFk",
            "https://www.deezer.com/fr/track/934885562?utm_source=deezer&utm_content=track-934885562&utm_term=108514421_1587654068&utm_medium=web",
            "https://music.apple.com/be/album/pankart-ep/1509177982?l=fr",
            "https://www.amazon.fr/PanKart-Pankart/dp/B08797KN6B/ref=sr_1_1?dchild=1&keywords=Pankart&qid=1587653912&s=dmusic&search-type=ss&sr=1-1",
            "https://play.google.com/store/apps/theme/promotion_gpm_shutdown_ctp",
            "https://soundcloud.com/pankartband"
        ]
    }

</script>
</body>
</html>