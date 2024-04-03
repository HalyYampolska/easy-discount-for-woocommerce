<?php

// if uninstall.php is not called by WordPress, die
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

// Delete options from DB
delete_option( 'enable_dynamic_discount' );
delete_option( 'discount_level_1_qty' );
delete_option( 'discount_level_1_discount' );
delete_option( 'discount_level_2_qty' );
delete_option( 'discount_level_2_discount' );