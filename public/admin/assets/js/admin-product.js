$(document).on('click', '.js-add-product', function(el) {

    $('#js-add-product-modal').modal('show');


    $('#js-Form')[0].reset();

});



//add new department
$('#js-Form').validate({
    rules: {
        product_type: {
            required: true,
        },
    },
    messages: {
        product_type: {
            required: " product_type is required",
        },
    },

    submitHandler: function(form) {
        event.preventDefault();
        var formData = new FormData($('#js-Form')[0]);
        $.ajax({
            url: 'productss/store',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                // disableModalButton('submit-program-btn');
            },

            success: function(data) {

                console.log('success');
                $('#js-add-product-modal').modal('hide');
                $('#js-Form')[0].reset();
                $('#product-id').val("");
                toastr.success('products saved successfully');
                location.reload();
            },
            error: function(xhr, status, error) {
                handleAjaxError(xhr);
            },
            complete: function() {
                // disableModalButton('submit-program-btn', false);
            }
        });
    }
});



//edit product
$(document).on('click', '.js-edit-product', function(el) {
    console.log(el);
    var proId = $(this).data('id');
    $('.modal-title').text('edit New Product');



    $.ajax({
        url: 'productss/edit/' + proId,
        method: 'GET',
        beforeSend: function(xhr) {
            xhr.setRequestHeader('Accept', 'application/json');
            xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
        },
        success: function(data) {
            $('#js-add-product-modal').modal({ backdrop: 'static', keyboard: false }, 'show');
            $('#shape_id').val(data.shape);
            $('#product_model').val(data.product_model);
            $('#life').val(data.life_hours);
            $('#').val(data.shape);
            $('#lamp_size_d').val(data.lamp_size_d);
            $('#lamp_size_h2').val(data.lamp_size_h2);
            $('#lamp_size_h1').val(data.lamp_size_h1);
            $('#image').val(data.image_url);
            $('#stable_lumen').val(data.stable_lumen);
            $('#wattage').val(data.wattage);
            $('#initial_lumen').val(data.initial_lumen);

        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        },
        complete: function(data) {}
    });


});





//delete deepartment
$(document).on('click', '.js-delete-product', function(el) {
    let deptId = $(this).data('id');

    showDeleteAlert(function(isConfirmed) {
        console.log("juhdjfhnjr");
        if (isConfirmed) {
            $.ajax({
                url: 'productss/delete/' + deptId,
                method: 'GET',
                async: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Accept', 'application/json');
                    xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                },
                success: function(response) {
                    toastr.success("product deleted successfully!");
                    location.reload();
                },
                error: function(xhr, status, error) {
                    let errorMessage = "Error deleting the record.";
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }
                    toastr.error(errorMessage);
                    console.error(xhr.responseText);
                }
            });
        }
    });
});


function showDeleteAlert(callback, message = null, title = null) {
    Swal.fire({
        title: title || "Are you sure to delete?",
        text: message || "You will not be able to recover this!!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Confirm",
        cancelButtonText: "Cancel",
        allowOutsideClick: false,
        allowEscapeKey: false
    }).then(function(result) {
        if (result.isConfirmed) {
            callback(true);
        } else {
            callback(false);
        }
    });
}