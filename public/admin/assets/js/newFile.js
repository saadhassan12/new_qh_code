$(document).ready(function() {

    // Load product names into the dropdown on page load
    $.ajax({
        url: '/get-product-data', // The single backend route
        method: 'GET',
        success: function(response) {
            response.product_names.forEach(function(name) {
                $('#js-product-name-dropdown').append('<option value="' + name.id + '">' + name.product_name + '</option>');
            });
        },
        error: function(error) {
            console.log(error);
        }
    });

    $('#js-product-name-dropdown, #product-type-dropdown').on('change', function() {
        let productNameId = $('#product-name-dropdown').val();
        let productTypeId = $('#product-type-dropdown').val();

        if (productNameId) {
            $.ajax({
                url: '/get-product-data',
                method: 'GET',
                data: {
                    product_name_id: productNameId,
                    product_type_id: productTypeId // This may be empty on the first request
                },
                success: function(response) {
                    if (response.product_types) {
                        $('#product-type').empty().append('<option value="">Select Product Type</option>');
                        response.product_types.forEach(function(type) {
                            $('#product-type').append('<option value="' + type.id + '">' + type.type_name + '</option>');
                        });
                    }

                    if (response.product_models) {
                        $('#product-model').empty().append('<option value="">Select Product Model</option>');
                        response.product_models.forEach(function(model) {
                            $('#product-model').append('<option value="' + model.id + '">' + model.product_model + '</option>');
                        });
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    });
});