function submitForm() {
    var name = $("#name").val();
    var email = $("#email").val();
    var msg_subject = $("#msg_subject").val();
    var phone_number = $("#phone_number").val();
    var message = $("#message").val();
    var gridCheck = $("#gridCheck").is(":checked") ? $("#gridCheck").val() : null;

    $.ajax({
        type: "POST",
        url: contactFormUrl, // Use the route passed from Blade
        data: {
            _token: $('input[name="_token"]').val(), // Include CSRF token
            name: name,
            email: email,
            msg_subject: msg_subject,
            phone_number: phone_number,
            message: message,
            gridCheck: gridCheck
        },
        success: function(response) {
            if (response == "success") {
                formSuccess();
            } else {
                formError();
                submitMSG(false, response);
            }
        }
    });
}
