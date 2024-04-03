<?php

class Dynamic_Discount_Settings {
    public static function save_settings() {
        $enable_dynamic_discount = isset( $_POST['enable_dynamic_discount'] ) ? 'yes' : 'no';
        update_option( 'enable_dynamic_discount', $enable_dynamic_discount );

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

