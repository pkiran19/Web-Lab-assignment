$(document).ready(function () {
    $('#ticketForm').on('submit', function (e) {
        e.preventDefault();

        const formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'process.php',
            data: formData,
            success: function (response) {
                $('#successMessage').html(response);
                $('#ticketForm')[0].reset();
            },
            error: function () {
                alert('Error submitting form.');
            }
        });
    });
});
