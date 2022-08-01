require("./bootstrap");

// Visualizzo la select "type" solo quando l'altra è impostata su "sushi"

$(document).ready(function() {
    $('select[name="category_id"]').change(function() {
        let categoryId = $(this).val();
        if (categoryId != 4) {
            $('select[name="type_id"]').hide();
        } else {
            $('select[name="type_id"]').show();
        }
    });
});