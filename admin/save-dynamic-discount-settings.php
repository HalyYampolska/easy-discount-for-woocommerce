<?php

/**
 * Saving dynamic discount settings
 */

class Dynamic_Discount_Settings {
    public static function save_settings() {
        // Get value from database using POST 
        $enable_dynamic_discount = isset( $_POST['enable_dynamic_discount'] ) ? 'yes' : 'no';
        // Update value database
        update_option( 'enable_dynamic_discount', $enable_dynamic_discount );

        // Get, clean and update values     
        $discount_level_1_qty = isset( $_POST['discount_level_1_qty'] ) ? sanitize_text_field( $_POST['discount_level_1_qty'] ) : '';
        update_option( 'discount_level_1_qty', $discount_level_1_qty );

        $discount_level_1_discount = isset( $_POST['discount_level_1_discount'] ) ? sanitize_text_field( $_POST['discount_level_1_discount'] ) : '';
        update_option( 'discount_level_1_discount', $discount_level_1_discount );

        $discount_level_2_qty = isset( $_POST['discount_level_2_qty'] ) ? sanitize_text_field( $_POST['discount_level_2_qty'] ) : '';
        update_option( 'discount_level_2_qty', $discount_level_2_qty );

        $discount_level_2_discount = isset( $_POST['discount_level_2_discount'] ) ? sanitize_text_field( $_POST['discount_level_2_discount'] ) : '';
        update_option( 'discount_level_2_discount', $discount_level_2_discount );
    }
}

