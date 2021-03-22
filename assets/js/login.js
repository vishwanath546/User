const base_url=$('#base_url').val();

$(document).ready(function () {

    $("#login_form").validate({

        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
            },

        },
        messages: {
            email: {
                required: "Please Enter Email",
            },
            password: {
                required: "Please Enter Password",
            },

        },
        errorElement: 'span',
        submitHandler: function (form) {

            $.ajax({
                url:base_url+'login_validation',
                type: "POST",
                dataType: "json",
                data: $("#login_form").serialize(),
                success: function (result) {

                    if (result.status == 200) {

                       window.location=base_url+'user_form';

                    } else {
                        toastr.info(result.body);
                    }

                }, error: function (error) {

                    toastr.error("Something went wrong please try again");
                }

            });
        }
    });



    $.validator.addMethod("uniqueUserEmail", function (value, element) {
        var isSuccess=true;
        $.ajax({url:base_url+'email_validation',
            data: {email: value},
            type: "post",
            dataType: "json",
            async: false,
            success: function (msg) {
                console.log(msg);
                isSuccess = msg === true ? true : false;
            }
        });
        console.log(isSuccess);
        return isSuccess;
    }, "Email Id already exists");

    $.validator.addMethod("mobile", function (value, element) {
        var isSuccess=true;
        $.ajax({url:base_url+'mobile_validation',
            data: {mobile_no: value},
            type: "post",
            dataType: "json",
            async: false,
            success: function (msg) {
                console.log(msg);
                isSuccess = msg === true ? true : false;
            }
        });
        console.log(isSuccess);
        return isSuccess;
    }, "Mobile no  already exists");

    $.validator.addMethod("validMobile", function (value, element) {
        return mobileValidation(value);
    }, "Enter valid Mobile");





    $("#register_form").validate({
        rules: {
            first_name: {
                required: true,

            },
            password: {
                required: true,

            },
            mobile_no: {
                required: true,
                mobile:true,
                validMobile: true,
                minlength: 10,
                maxlength: 10

            },
            email: {
                required: true,
                email:true,
                uniqueUserEmail:true
            },
            last_name: {
                required: true,
            },




        },
        messages: {

            first_name: {
                required: "Please Enter  frist name",
            },
            password: {
                required: "Please Enter password",
            },
            mobile_no: {
                required: "Please Enter mobile_no",
            },
            email: {
                required: "Please Enter Email id",
                email: "Please Enter valid Email id",
            },

            last_name: {
                required: "Please Enter last name",
            },



        },
        errorElement: 'span',
        submitHandler: function (form) {

            $.ajax({
                url:base_url+'add_user',
                type: "POST",
                dataType: "json",
                data: $("#register_form").serialize(),
                success: function (success) {

                    if (success.status === true) {
                        toastr.success(success.body);

                        $("#register_form").trigger("reset");
                        window.location.href=base_url;

                    } else {

                        toastr.error(success.body);
                    }
                },
                error: function (error) {
                    //                    $('#item_modal').modal("toggle");
                    toastr.error("something went to wrong");
                }
            });

        }
    });


});

function mobileValidation(value) {
    if (/^[0-9 ()+]+$/.test(value)) {
        return true;
    } else {
        return false;
    }
}