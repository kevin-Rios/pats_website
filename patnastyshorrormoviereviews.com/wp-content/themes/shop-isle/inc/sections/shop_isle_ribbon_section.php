<?php
/**
 * Front page Ribbon Section
 *
 * @package WordPress
 * @subpackage Shop Isle
 */

$shop_isle_ribbon_hide = get_theme_mod( 'shop_isle_ribbon_hide', true );
if ( ! empty( $shop_isle_ribbon_hide )&& (bool) $shop_isle_ribbon_hide === true ) {
	return;
}
$shop_isle_ribbon_text = get_theme_mod( 'shop_isle_ribbon_text', esc_html__( 'Find out more','shop-isle' ) );
$shop_isle_ribbon_button_text = get_theme_mod( 'shop_isle_ribbon_button_text' , esc_html__( 'Click to subscribe','shop-isle' ) );
$shop_isle_ribbon_button_link = get_theme_mod( 'shop_isle_ribbon_button_link', esc_url( '#', 'shop-isle-pro' ) );
$shop_isle_ribbon_background = get_theme_mod( 'shop_isle_ribbon_background', get_template_directory_uri() . '/assets/images/ribbon-bg.jpg' );

if ( ( ! empty( $shop_isle_ribbon_background ) ) || ( ! empty( $shop_isle_ribbon_text ) || ( ! empty( $shop_isle_ribbon_button_text ) && ! empty( $shop_isle_ribbon_button_link ) ) ) ) {
?>
	<section class="ribbon" id="ribbon" role="region" aria-label="Ribbon" <?php if ( ! empty( $shop_isle_ribbon_background ) ) {  echo "style='background-image: url(" . $shop_isle_ribbon_background . ");'"; } ?> >
		<div class="section-overlay-layer">
			<div class="container">
				<div class="row">
				
				<?php
					/* text */
				if ( ! empty( $shop_isle_ribbon_text ) ) {
					echo '<div class="col-sm-12 col-md-8">';
					echo '<h2 class="module-title ">' . $shop_isle_ribbon_text . '</h2>';
					echo '</div>';
				} elseif ( is_customize_preview() ) {
					echo '<div class="col-sm-12 col-md-8">';
					echo '<h2 class="shop_isle_only_customizer"></h2>';
					echo '</div>';
				}

					/* button */
				if ( ! empty( $shop_isle_ribbon_button_text ) && ! empty( $shop_isle_ribbon_button_link ) ) {
					echo '<div class="col-sm-12 col-md-4">';
					echo '<a href="' . esc_url( $shop_isle_ribbon_button_link ) . '" class="btn btn-ribbon">' . $shop_isle_ribbon_button_text . '</a>';
					echo '</div>';
				} elseif ( is_customize_preview() ) {
					echo '<div class="col-sm-12 col-md-4">';
					echo '<a href="" class="btn btn-ribbon shop_isle_only_customizer"></a>';
					echo '</div>';
				}
				?>
				
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- section-overlay-layer -->
	</section><!-- ribbon -->
<?php }// End if().
	?>
