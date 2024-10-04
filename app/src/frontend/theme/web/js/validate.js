$('#btnSend').on('click', function(event) {
    // Prevent the form from submitting
    event.preventDefault();
    console.log("clicked");

    // Get form field values
    const name = $('#name').val().trim(),
        email = $('#email').val().trim(),
        message = $('#message').val().trim(),
        validateName = $('.validate.name'),
        validateEmail = $('.validate.email'),
        validateMessage = $('.validate.message');

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (name === '') {
        validateName.html("Please enter name.");
        validateName.show();
        return false;
    } else {
        validateName.hide();
    }

    
    if (email === '') {
        validateEmail.html("Please enter email").show();
        return false;
    } else if (!emailPattern.test(email)) {
        validateEmail.html("Please enter a valid email address.").show();
        return false;
    } else {
        validateEmail.hide();
    }

    
    if (message === '') {
        validateMessage.html("Please enter your message.").show();
        return false;
    } else {
        validateMessage.hide();
    }


    // Submit form via AJAX
    $.ajax({
        url: '../../../../backend/contact_me/contact-form.php',
        type: 'POST',
        data: {
            name: name,
            email: email,
            message: message
        },
        dataType: 'json',
        success: function(response) {
            if (response.status === 'success') {
                alert(response.message); 
                $('form')[0].reset();
            } else {
                alert(response.message); 
            }
        },
        error: function(xhr, status, error) {
            alert('An error occurred: ' + error);
        }
    });

    
    $(this).closest('form').submit();
});

