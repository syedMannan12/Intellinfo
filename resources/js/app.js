require('./bootstrap');
$(document).ready(function () {
    $(document).on('click', '.how_model', function () {
        var rec_id = $(this).val();
        $('#apply_job_model').modal('show');

        $.ajax({
            type: "GET",
            url: "get-jobs-details/" + rec_id,
            success: function (response) {
                // console.log(response)
                $('#job_designation').text(response.get_jobs_details[0].job_designation);
                $('#posted_on').text(response.get_jobs_details[0].posted_on);
                $('#experience').text(response.get_jobs_details[0].experience);
                $('#job_id').text(response.get_jobs_details[0].job_id);
                $('#location').text(response.get_jobs_details[0].location);
                $('#job_description').text(response.get_jobs_details[0].job_description);
                $('#app_job_id').val(response.get_jobs_details[0].job_id);
            }
        })
    });
});






$("#apply_now_form").validate({
    ignore: [],
    rules: {
        first_name: {
            required: true,
        },
        last_name: {
            required: true,
        },
        email: {
            required: true,
        },

        mobile_number: {
            required: true,
        },
        file_upload: {
            required: true,
        },
    },
    errorPlacement: function (error, element) {
        if (element.attr("name") == "first_name") {
            error.insertAfter('#first_name_error_div');
        }
        if (element.attr("name") == "last_name") {
            error.insertAfter('#last_name_error_div');
        }
        if (element.attr("name") == "email") {
            error.insertAfter('#email_error_div');
        }
        if (element.attr("name") == "mobile_number") {
            error.insertAfter('#mobile_number_error_div');
        }
        if (element.attr("name") == "file_upload") {
            error.insertAfter('#file_upload_error_div');
        }


    },
    messages: {
        first_name: {
            required: "Please enter the first name",
        },
        last_name: {
            required: "Please Enter the last name",
        },
        email: {
            required: "Please Enter the email",
        },

        mobile_number: {
            required: "Please Enter mobile number",
        },
        file_upload: {
            required: "please select the resume",
        },
    },
    submitHandler: function (form) {
        var data = new FormData($('#apply_now_form')[0]);
        console.log($(form).serialize());
        $.ajax({
            type: "POST",
            url: "/apply-jobs",
            data: data,
            contentType: false,
            processData: false,
            success: function (result) {
                if (result == 1) {
                    $('.success_msg').css({ 'display': 'block' });
                    $('.success_msg').text("You have applied for job successfully, we will contact you shortly");
                    $('.contact_us_btn').prop('disabled', true);
                    setTimeout(() => {
                        $('.success_msg').css({ 'display': 'none' });
                        window.location.href = document.location.origin + '/careers';
                    }, 3000);
                } else {
                    $('.error_msg').css({ 'display': 'block' });
                    $('.error_msg').text('Something went wrong');
                    setTimeout(() => {
                        $('.error_msg').css({ 'display': 'none' });
                    }, 2000);
                    return false;
                }
            }
        });
        return false;
    }
});


$("#contact_us_form").validate({
    ignore: [],
    rules: {
        first_name: {
            required: true,
        },
        second_name: {
            required: true,
        },
        mobile_number: {
            required: true,
            minlength: 10,
            maxlength: 12
        },

        email: {
            required: true,
        },
        message: {
            required: true,
        },
    },
    messages: {
        first_name: {
            required: "Please enter the first name",
        },
        second_name: {
            required: "Please Enter the Second name",
        },
        mobile_number: {
            required: "Please Enter the mobile number",
            minlength: 'Please enter a valid 10 digit mobile number',
            maxlength: 'Please enter a valid 12 digit mobile number'
        },

        email: {
            required: "Please Enter the email address",
        },
        message: {
            required: "Please enter your message ",
        },
    },
    submitHandler: function (form) {
        $.ajax({
            type: "POST",
            url: "/contactus",
            data: $(form).serialize(),
            success: function (result) {
                if (result == 1) {
                    $('.contact_success_msg').css({ 'display': 'block' });
                    $('.contact_success_msg').text("We'll contact you as soon as possible.");
                    $('.contact_us_btn').prop('disabled', true);
                    setTimeout(() => {
                        $('.contact_success_msg').css({ 'display': 'none' });
                        window.location.reload();
                    }, 2000);
                } else {
                    $('.contact_error_msg').css({ 'display': 'block' });
                    $('.contact_error_msg').text('Something went wrong');
                    setTimeout(() => {
                        $('.contact_error_msg').css({ 'display': 'none' });
                    }, 2000);
                    return false;
                }
            }
        });
        return false;
    }
});
$("#add_jobs").validate({
    ignore: [],
    rules: {
        // job_id: {
        //     required: true,
        // },
        job_designation: {
            required: true,
        },
        experience: {
            required: true,
        },
        published_date: {
            required: true,
        },
        location: {
            required: true,
        },
        job_description: {
            required: true,
        },
    },
    messages: {
        // job_id: {
        //     required: "Please enter the job id",
        // },
        job_designation: {
            required: "Please Enter the job desgination",
        },
        experience: {
            required: "Please Enter the job experience",
        },
        published_date: {
            required: "Select the published date",
        },
        location: {
            required: "Please Enter Location",
        },
        job_description: {
            required: "Please Enter the job description",
        },
    },
    submitHandler: function (form) {
        $.ajax({
            type: "POST",
            url: "/save-jobs",
            data: $(form).serialize(),
            success: function (result) {
                if (result == 1) {
                    $('.success_msg').css({ 'display': 'block' });
                    $('.success_msg').text("New Job Have been saved");
                    $('.contact_us_btn').prop('disabled', true);
                    setTimeout(() => {
                        $('.success_msg').css({ 'display': 'none' });
                        window.location.href = document.location.origin + '/jobs';
                    }, 2000);
                } else if (result == 2) {
                    $('.error_msg').css({ 'display': 'block' });
                    $('.error_msg').text('JOB ID ALREADY EXIXTS');
                    setTimeout(() => {
                        $('.error_msg').css({ 'display': 'none' });
                    }, 2000);
                    return false;
                }else {
                    $('.error_msg').css({ 'display': 'block' });
                    $('.error_msg').text('Something went wrong');
                    setTimeout(() => {
                        $('.error_msg').css({ 'display': 'none' });
                    }, 2000);
                    return false;
                }
            }
        });
        return false;
    }
});
$("#update_jobs").validate({
    ignore: [],
    rules: {
        // job_id: {
        //     required: true,
        // },
        job_designation: {
            required: true,
        },
        experience: {
            required: true,
        },
       
        location: {
            required: true,
        },
        job_description: {
            required: true,
        },
    },
    messages: {
        // job_id: {
        //     required: "Please enter the job id",
        // },
        job_designation: {
            required: "Please Enter the job desgination",
        },
        experience: {
            required: "Please Enter the job experience",
        },
        
        location: {
            required: "Please Enter Location",
        },
        job_description: {
            required: "Please Enter the job description",
        },
    },
    submitHandler: function (form) {
        $.ajax({
            type: "POST",
            url: "/update-jobs",
            data: $(form).serialize(),
            success: function (result) {
                if (result == 1) {
                    $('.success_msg').css({ 'display': 'block' });
                    $('.success_msg').text("Job Have been Updated Successfully");
                    $('.contact_us_btn').prop('disabled', true);
                    setTimeout(() => {
                        $('.success_msg').css({ 'display': 'none' });
                        window.location.href = document.location.origin + '/jobs';
                    }, 2000);
                } else {
                    $('.error_msg').css({ 'display': 'block' });
                    $('.error_msg').text('Something went wrong');
                    setTimeout(() => {
                        $('.error_msg').css({ 'display': 'none' });
                    }, 2000);
                    return false;
                }
            }
        });
        return false;
    }
});