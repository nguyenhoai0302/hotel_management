<!-- Include Parsley.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
<script>
    $(document).ready(function () {
        $('#your-form-id').parsley();

        // Handle form submission
        $('#your-form-id').submit(function (e) {
            e.preventDefault();

            // If form is valid, proceed with submission
            if ($('#your-form-id').parsley().isValid()) {
            }
        });
    });
    
    $(document).ready(function () {
        $('#togglePassword1').click(function (e) {
            e.preventDefault();

            var passwordField = $('#pass1');
            var fieldType = passwordField.attr('type');

            if (fieldType === 'password') {
                passwordField.attr('type', 'text');
            } else {
                passwordField.attr('type', 'password');
            }
        });

        $('#togglePassword2').click(function (e) {
            e.preventDefault();

            var confirmPasswordField = $('#passWord2');
            var fieldType = confirmPasswordField.attr('type');

            if (fieldType === 'password') {
                confirmPasswordField.attr('type', 'text');
            } else {
                confirmPasswordField.attr('type', 'password');
            }
        });

        $('#passWord2').on('input', function () {
            validateConfirmPassword();
        });
    });

    $(document).ready(function () {
        $('#phone').on('input', function () {
            validatePhoneNumber();
        });

        function validatePhoneNumber() {
            var phoneInput = $('#phone');
            var phoneNumber = phoneInput.val();
            var phonePattern = /^[0-9]{10,15}$/;

            if (!phonePattern.test(phoneNumber)) {
                phoneInput.setCustomValidity('Enter a valid phone number (10 to 15 digits).');
            } else {
                phoneInput.setCustomValidity('');
            }
        } 
    });
</script>