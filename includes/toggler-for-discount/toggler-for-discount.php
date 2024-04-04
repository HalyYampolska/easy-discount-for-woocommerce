<head>
    <!-- Include my scripts -->
    <script src="<?php echo plugin_dir_url( __FILE__ ) . 'toggler-for-discount.js'; ?>"></script>

    <!-- Include my CSS file -->
    <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) . 'toggler-for-discount.css'; ?>">
</head>

<?php $enable_dynamic_discount = get_option( 'enable_dynamic_discount', 'no' ); ?>
    <div class="toggle-switch">
        <input type="checkbox" id="enable_dynamic_discount_toggle" name="enable_dynamic_discount" <?php echo $enable_dynamic_discount == 'yes' ? 'checked' : ''; ?> />
        <label for="enable_dynamic_discount_toggle"></label>
    </div>