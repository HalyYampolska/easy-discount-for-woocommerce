<?php
// Check if it admin request & no AJAX
if ( is_admin() && !defined( 'DOING_AJAX' ) ) {
    return;
}

// Get value and check toggler off/on from database
$enable_dynamic_discount = get_option( 'enable_dynamic_discount', 'no' );

if ( $enable_dynamic_discount != 'yes' ) {
    return;
}

// Get count of products
$cart_total_qty = WC()->cart->get_cart_contents_count();

// Get discounts value
$discount_level_1_qty = get_option( 'discount_level_1_qty', '' );
$discount_level_1_discount = get_option( 'discount_level_1_discount', '' );
$discount_level_2_qty = get_option( 'discount_level_2_qty', '' );
$discount_level_2_discount = get_option( 'discount_level_2_discount', '' );

// Variables for discount and tag
$discount = 0;
$discount_label = '';

// Calculate discount depending on the number of items and the established discount levels
if ( $cart_total_qty >= $discount_level_1_qty && $cart_total_qty < $discount_level_2_qty ) {
    $discount = $discount_level_1_discount;
    $discount_label = $discount_level_1_discount . '%';
} elseif ( $cart_total_qty >= $discount_level_2_qty ) {
    $discount = $discount_level_2_discount;
    $discount_label = $discount_level_2_discount . '%';
}

// Logic for discount massage
if ( $discount > 0 ) {
    $discount_message = sprintf(__( '%s Discount', 'woocommerce' ), $discount_label);
    $discount_amount = WC()->cart->subtotal * ( $discount / 100 );
    WC()->cart->add_fee( $discount_message, -$discount_amount );
}