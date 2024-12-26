$(document).on('click', '.js-delete-query', function(el) {
    let deptId = $(this).data('id');
    showDeleteAlert(function(isConfirmed) {
        if (isConfirmed) {
            $.ajax({
                url: '/contact-us/delete/' + deptId,
                method: 'GET',
                async: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Accept', 'application/json');
                    xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                },
                success: function(response) {
                    toastr.success("query deleted successfully!");
                    $('#js-add-warranty-table').html(response);
                    $('#js-warranty-Form')[0].reset();

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