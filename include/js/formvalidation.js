$('#contactform').bootstrapValidator({
message: 'This value is not valid', 
feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
fields: {
        cf_name: {
            validators: {
                notEmpty: {
                    message: "Your name is required."
                          }, // notEmpty
                regexp: {
                    regexp: /^[A-Za-z\s.'-]+$/,
                    message: "Alphabetical characters, hyphens and spaces"
                }
                        } // validators
                  },  // name
        cf_email: {
            validators: {
                notEmpty: {
                    message: "An email address is mandatory."
                          }, // notEmpty
                emailAddress: {
                    message: "This is not a valid email address"
                                } // emailAddress         
                        } // validators
                  }  // email
        } // fields
        });
$('#contactform').bootstrapValidator();