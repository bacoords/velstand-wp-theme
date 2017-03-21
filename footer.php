<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer py-5" id="colophon">

					<div class="site-info text-center">
						<small>&copy; <?php echo date('Y'); ?> Velstand Commercial.
<!--
						<span class="sep"> | </span>
						Website Design by  <a href="https://briancoords.com">BrianCoords.com</a>.</small>
-->
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

<?php if( is_page( 'investor-questionnaire' ) ) : ?>
<script>

$.noConflict();
jQuery( document ).ready(function( $ ) {
  console.log('call sel2button');
  $('select[class=sel2button]').select2Buttons();
});

</script>
<?php endif; ?>
</body>

</html>
