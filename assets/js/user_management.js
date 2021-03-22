const base_url=$('#base_url').val();




$("#close_user_div").click(function() {
    var validator = $("#add_user_form").validate();

    validator.resetForm();
    document.getElementById("add_user_form").reset();
    $('#user_section').slideToggle();
    $("#email_id").prop("readonly", false);
    $("#mobile_no").prop("readonly", false);
});

function fetch_user_data(user_id) {
    var validator = $("#add_user_form").validate();

    validator.resetForm();
    document.getElementById("add_user_form").reset();
    // $.LoadingOverlay("show");
    var data={}

    $.ajax({
        type: "POST",
        url:base_url+'fetch_user_data',

        data: {user_id: user_id},
        dataType: "json",
        success: function (result) {
            // $.LoadingOverlay("hide");
            var user_data = result.body;
            if (result.status === true) {


                $('#user_section').slideDown();
                $('#first_name').val(user_data.first_name);
                $('#last_name').val(user_data.last_name);
$('#prev_userfile').val(user_data.image);
                $("#userfile").rules("remove", "required");
                $('#mobile_no').val(user_data.mobile_no);
                $('#update_user_id').val(user_data.user_id);
                $('#email').val(user_data.email);
                $('#email').attr('readonly',true);
                 $('#mobile_no').attr('readonly',true);
if(user_data.department_id!=null){
    var department_id=user_data.department_id.split(',');
}



                get_data('get_department',data).then((result) => {


                    var department_data = result.body;

                    $('#department').empty();

                        $('#department').append(department_data);

                    if(user_data.department_id!=null){
                        $('#department').val(department_id);
                    }

                }).catch(e => {
                    console.log('Conver ', e);
                    toastr.error('Something went wrong please try again');
                });
                if(user_data.sub_department_id!=null){
                    var sub_department_id=user_data.sub_department_id.split(',');
                }
                var data2={}
                if(user_data.department_id!=null) {
                    var data2 = {department_id}
                }
                get_data('get_sub_department',data2).then((result) => {


                    var sub_department_data = result.body;

                    $('#sub_department').empty();

                    $('#sub_department').append(sub_department_data);
                    if(user_data.sub_department_id!=null){
                        $('#sub_department').val(sub_department_id);
                    }

                }).catch(e => {
                    console.log('Conver ', e);
                    toastr.error('Something went wrong please try again');
                });




            } else {

            }

        }, error: function (error) {
            //$.LoadingOverlay("hide");
            toastr.error('Something went wrong please try again');
        }
    });


}









$(document).ready(function () {

    load_user_table();
    $(".js-example-tokenizer").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    });
    $(".js-example-basic-multiple-limit").select2({
    });

    $('#department').change(function (){
     let department_id=$('#department').val();
        var data={department_id}
        get_data('get_sub_department',data).then((result) => {
            var sub_department_data = result.body;

            $('#sub_department').empty();
            if (result.status === true) {


                $('#sub_department').append(sub_department_data);

            } else {

                $('#sub_department').append(sub_department_data);
            }
        }).catch(e => {
            console.log('Conver ', e);
            toastr.error('Something went wrong please try again');
        });

    });





    $.validator.addMethod("validMobile", function (value, element) {
        return mobileValidation(value);
    }, "Enter valid Mobile");






    $("#add_user_form").validate({
        rules: {
            first_name: {
                required: true,

            },

            last_name: {
                required: true,

            },

            mobile_no: {
                required: true,
                validMobile: true,
                minlength: 10,
                maxlength: 10

            },
            email: {
                required: true,
                email:true,

            },
            userfile:{
                required: true,
            },




        },
        messages: {

            first_name: {
                required: "Please Enter  first name",
            },
            last_name: {
                required: "Please Enter last name",
            },
            mobile_no: {
                required: "Please Enter mobile_no",
            },
            email: {
                required: "Please Enter Email id",
                email: "Please Enter valid Email id",
            },
            userfile:{
                required: "Please Select Profile",
            },



        },
        errorElement: 'span',
        submitHandler: function (form) {


                $.LoadingOverlay("show");
                var form_data = document.getElementById('add_user_form');

                $.ajax({
                    url:base_url+'add_user',
                    type: "POST",
                    data: new FormData(form_data),
                    contentType: false,
                    cache: false,
                    processData: false,
                    async: false,
                    cache: false,

                success: function (success) {
                    $.LoadingOverlay("hide");
                    success = JSON.parse(success);
                    if (success.status === true) {
                        toastr.success(success.body);

                        $("#add_user_form").trigger("reset");
                        $('#user_section').slideToggle();
                        load_user_table();
                    } else {

                        toastr.error(success.body);
                    }
                },
                error: function (error) {
                    $.LoadingOverlay("hide");
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

function load_user_table() {//done by vishu  to get user data

    $("#user_table").DataTable({
        destroy: true,
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url":base_url+'load_user_table',
            "type": "POST",

        },


        columns: [
            {data: 0}, {data: 1},{data: 2},{data: 3},
            {
                data: 4,
                render: (dataValue, type, row, meta) => {

                    return "<img src="+base_url+row[4]+" height='50px' width='50px' >";

                }
            },
            {
                data: 5,
                render: (dataValue, type, row, meta) => {

                    return '<div class="buttons"><button type="button" class="btn btn-icon btn-primary"  onclick="fetch_user_data(`'+row[5]+'`)"><i class="fa fa-edit"></i></button></div>';

                }
            },

        ]


    }).columns.adjust().responsive.recalc();;
}

function get_data(route,data_parameter) {

    return new Promise((resolve, reject) => {
        $.LoadingOverlay("show");
        $.ajax({
            url: base_url+route,
            type: "POST",
            dataType: "json",
            data: data_parameter,
            success: function (result) {
                $.LoadingOverlay("hide");

                resolve(result);
            }, error: function (error) {
                $.LoadingOverlay("hide");
                toastr.error("Something went wrong please try again");
                reject(error);
            }
        });
    });
}
