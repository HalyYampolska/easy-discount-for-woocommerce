
// JavaScript for toggler switch

document.addEventListener("DOMContentLoaded", function() {
        var toggleSwitch = document.getElementById('enable_dynamic_discount_toggle');

        toggleSwitch.addEventListener('change', function() {
            if (this.checked) {
                // Discount on  
            } else {
                // Discount off
            }
        });
    });
