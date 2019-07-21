<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package customify
 */

?>              <?php do_action( 'customify/main/after' ); ?>
			</main><!-- #main -->
			<?php do_action( 'customify/sidebars' ); ?>
		</div><!-- #.customify-grid -->
	</div><!-- #.customify-container -->
</div><!-- #content -->
<?php
/**
 * Hook before site content
 *
 * @since 0.2.2
 */
do_action( 'customify/after-site-content' );

do_action( 'customify/site-end/before' );
if ( ! customify_is_e_theme_location( 'footer' ) ) {
	/**
	 * Site end
	 *
	 * @hooked customify_customize_render_footer - 10
	 *
	 * @see customify_customize_render_footer
	 */
	do_action( 'customify/site-end' );
}
do_action( 'customify/site-end/after' );

?>
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
    jQuery(document).ready(function($){

        var body = $( 'body' );

        $('.gfield ').append('<hr class="form_separator">');

        $('h3').each(function () {
           var elemH3 = $(this);
           elemH3.replaceWith('<h2 class="eael-contact-form-title eael-gravity-form-title h3">' + elemH3.text() + '</h2>');
        });

        var headings = $('.eael-gravity-form-title');

        headings.prepend('<span class="dashicons dashicons-megaphone ico-custom"></span>');

    });
</script>

</body>
</html>
