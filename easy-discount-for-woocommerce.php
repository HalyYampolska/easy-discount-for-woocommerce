<?php

/**
 * Plugin Name: Easy Discount For Woocommerce
 * Description: It could help your create your own discount system
 * Version: 1.0.0
 * Developer: Halyna Yampolska
 */

defined( 'ABSPATH' ) || exit;


class Dynamic_Discount_Plugin {
    public function __construct() {
        add_filter( 'woocommerce_settings_tabs_array', array( $this, 'add_dynamic_discount_tab' ), 50 );
        add_action( 'woocommerce_settings_tabs_dynamic_discount', array( $this, 'dynamic_discount_settings_tab' ) );
        add_action( 'woocommerce_update_options_dynamic_discount', array( $this, 'save_dynamic_discount_settings' ) );
        add_action( 'woocommerce_cart_calculate_fees', array( $this, 'apply_dynamic_discount'));
    }

    public function add_dynamic_discount_tab( $tabs ) {
        $tabs['dynamic_discount'] = __( 'Dynamic Discount', 'woocommerce_dynamic_discount' );
        return $tabs;
    }

    public function dynamic_discount_settings_tab() {
        include plugin_dir_path( __FILE__ ) . 'admin/dynamic-discount-settings.php';
    }

    public function save_dynamic_discount_settings() {
        require_once( 'admin/save-dynamic-discount-settings.php' );
        Dynamic_Discount_Settings::save_settings();
    }

    public function apply_dynamic_discount() {
        include plugin_dir_path( __FILE__ ) . 'includes/apply-dynamic-discount.php';
    }
}

new Dynamic_Discount_Plugin();
