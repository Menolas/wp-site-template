<?php
/**
 * The template for displaying the footer
 *
 */

?>

    <footer class="site-footer">
        <div class="container">
            <div class="site-footer__logo">
                <div class="logo">
                    <a href="/">
                        <svg>
                            <use xlink:href="/wp-content/themes/template-theme/dist/img/svg/sprite.svg#cat"></use>
                        </svg>
                    </a>
                </div><!-- .site-branding -->
            </div>

            <?php get_template_part('/template-parts/content', 'social');?>

        </div><!-- .site-info -->
        <button id="to-top" class="to-top">
            <span class="sr-only">Наверх</span>
        </button>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
