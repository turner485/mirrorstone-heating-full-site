$(document).ready(function(){
    var validate = $('#form-contact').validate({
        rules: {

            name: {
                required: true,
                lettersonly: true

            },
            email: {
                required:true
            },
            contact: {
                required:true,
                max: 11,
                digits: true
            },
            message: {
                required:true
            }
        }
    });

});
