<?php 



remove_action('woocommerce_before_cart', 'woocommerce_output_all_notices', 10);
remove_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display', 10);

add_action('woocommerce_before_cart', 'womazing_before_cart', 20);
function womazing_before_cart() {
	?>
<section class="cart-header">
	<div class="container">		
			<?php woocommerce_template_single_title() ?>		
		<div class="cart-breadcrumb breadcrumb">
			<?php woocommerce_breadcrumb() ?>
		</div>		
	</div>
</section>
	<?php
}
add_action('woocommerce_after_cart_table', '', 10);

















 ?>