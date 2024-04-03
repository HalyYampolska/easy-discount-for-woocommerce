<h2><?php _e( 'Dynamic Discount Settings', 'woocommerce_dynamic_discount' ); ?></h2>
<table class="form-table">
    <tr valign="top">
        <th scope="row"><?php _e( 'Enable Dynamic Discounts', 'woocommerce_dynamic_discount' ); ?></th>
        <td>
            <?php $enable_dynamic_discount = get_option( 'enable_dynamic_discount', 'no' ); ?>
            <input type="checkbox" name="enable_dynamic_discount" <?php echo $enable_dynamic_discount == 'yes' ? 'checked' : ''; ?> />
        </td>
    </tr>
    <tr valign="top">
        <th scope="row"><?php _e( 'Discount Levels', 'woocommerce_dynamic_discount' ); ?></th>
        <td>
            <p><?php _e( 'Enter discount levels and corresponding discounts below:', 'woocommerce_dynamic_discount' ); ?></p>
            <table>
                <tr>
                    <th><?php _e( 'Minimum Quantity', 'woocommerce_dynamic_discount' ); ?></th>
                    <th><?php _e( 'Discount (%)', 'woocommerce_dynamic_discount' ); ?></th>
                </tr>
                <tr>
                    <td><input type="number" min="1" name="discount_level_1_qty" value="<?php echo get_option( 'discount_level_1_qty' ); ?>" /></td>
                    <td><input type="number" min="1" max="100" name="discount_level_1_discount" value="<?php echo get_option( 'discount_level_1_discount' ); ?>" /></td>
                </tr>
                <tr>
                    <td><input type="number" min="1" name="discount_level_2_qty" value="<?php echo get_option( 'discount_level_2_qty' ); ?>" /></td>
                    <td><input type="number" min="1" max="100" name="discount_level_2_discount" value="<?php echo get_option( 'discount_level_2_discount' ); ?>" /></td>
                </tr>
            </table>
        </td>
    </tr>
</table>