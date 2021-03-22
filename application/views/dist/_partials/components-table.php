<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">

            <div class="section-header-breadcrumb">

                <div class="buttons">

                    <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#upload_excel"><i class="fa fa-upload"></i></button>
                    <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#category_modal" ><i class="fa fa-list-alt"></i></button>
                    <button type="button" class="btn btn-icon btn-primary"  id="stock_div"><i class="fa fa-plus"></i></button>

                </div>
            </div>
          </div>
            <div class="row" id="stock_section" style="display:none">
                <div class="col col-md-8 " style="float: none;margin: auto;">
                    <div class="card">





                        <form id="add_stock_form" name="add_stock_form"  enctype="multipart/form-data" method="post" novalidate="novalidate">

                            <input type="hidden" class="form-control" id="update_stock_id" name="update_stock_id" value="0">
                        <div class="card-header">
                            <h3><b>Add Product</b></h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Category</label>

                                <select class="form-control" id="Category" name="Category">
                                    <option>Sonata</option>
                                    <option>Titan</option>
                                    <option>Fastarck</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" class="form-control" id="p_name" name="p_name">
                            </div>
                            <div class="form-group">
                                <label>Model No</label>
                                <input type="text" class="form-control" id="model_no" name="model_no">
                            </div>

                            <div class="form-group">
                                <label>MRP</label>
                                <input type="number" min="0" class="form-control" id="p_mrp" name="p_mrp">
                            </div>

                            <div class="form-group">
                                <label>Total count</label>
                                <input type="number" min="0" class="form-control" id="total" name="total">
                            </div>

                            <div class="form-group">
                                <label>Serail no</label>
                                <input type="number" class="form-control" id="serial_no" name="serial_no">
                            </div>
                            <div class="form-group">
                                <label>Image Upload</label>
                                <input type="file" min="0" class="form-control" id="userfile" name="userfile"  accept=".png, .jpg, .jpeg">
                            </div>
                            <div class="form-group">
                                <img id="blah" src="#" alt="your image" style="display:none;width:27%;height: 100%" />
                            </div>




                                <button type="button" class="btn btn-secondary" id="close_stock_div">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>



                        </div>
                    </form>
                    </div>
                    


                </div>

            </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12 >
                <div class="card">
                  <div class="card-header">
                    <h4>Stock Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="stock_table"  class="table table-striped responsive display" cellspacing="0">
                        <tr>
                            <thead>

                          <th>Model No</th>
                          <th>category</th>
                          <th>MRP</th>
                         <!-- <th>Total</th>
                            <th>Order</th>
                            <th>Dispatched</th>
                            <th>Returns</th>
                            <th>Pending</th>
                            <th>Available</th>-->
                          <th data-priority="1">Action</th>
                            </thead>
                        </tr>
                      </table>
                    </div>
                  </div>

                </div>
              </div>






      </div>

</div>
</section>
</div>
<div class="modal fade " tabindex="-1" role="dialog" id="upload_excel" style="display: none;">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="upload_excel_file" name="upload_excel_file"  enctype="multipart/form-data" method="post" novalidate="novalidate">
                <div class="form-group">
                    <a href="<?php echo base_url('Stock_images/watch.xlsx');?>" download> Download file</a><br>
                    <label>File Upload</label>
                    <input type="file" class="form-control" id="file_data" name="file_data"  accept=".xlsx, .xls, .csv">
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " tabindex="-1" role="dialog" id="category_modal" style="display: none;">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="add_category" name="add_category"  >
                    <div class="form-group">

                        <label>Category name</label>
                        <input type="text"  class="form-control" id="category_name" name="category_name" >
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>

<script>

    function readURL(input) {
        console.log(input.files[0]);
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').show();
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#userfile").change(function() {
        readURL(this);
    });


    $("#serial_no").change(function() {
        if( $("#serial_no").val()!=null && $("#serial_no").val()!='' && $("#serial_no").val()!='undefined'){
            $("#total").val('1');
            $("#total").prop('readonly',true);

        } else {

            $("#total").prop('readonly',false);
        }
    });

    $("#close_stock_div").click(function() {
        var validator = $("#add_stock_form").validate();

        validator.resetForm();
        document.getElementById("add_stock_form").reset();
        $('#stock_section').slideToggle();

    });

    function fetch_stock_data(stock_id) {
        var validator = $("#add_stock_form").validate();

        validator.resetForm();
        document.getElementById("add_stock_form").reset();
       // $.LoadingOverlay("show");
        $.ajax({
            type: "POST",
            url: "<?= base_url("fetch_stock_data") ?>",
            data: {stock_id: stock_id},
            dataType: "json",
            success: function (result) {
               // $.LoadingOverlay("hide");
                var stock_data = result.body;
                if (result.status === true) {

                    var element=document.getElementById('Category');
                    element.scrollIntoView(false);
                    $('#stock_section').slideDown();
                    $('#Category').val(stock_data.category);
                    $('#model_no').val(stock_data.model_no);
                    $('#p_mrp').val(stock_data.mrp);
                    $('#update_stock_id').val(stock_data.stock_id);
                    $('#total').val(stock_data.total);
                    var image=stock_data.image.split('/');
                    console.log(image);
                    $('#blah').show();
                    document.getElementById("blah").src = "<?php echo base_url()?>"+stock_data.image;
                    var canvas = document.createElement("canvas");
                    var ctx = canvas.getContext("2d");
                    var img = new Image();
                    img.onload = function () {
                        canvas.width = img.width;
                        canvas.height = img.height;
                        ctx.drawImage(img, 0, 0);
                        var data = canvas.toDataURL("image/jpeg");
                        $('#userfile').val(data);
                    };
                    img.src = "<?php echo base_url()?>"+stock_data.image;
                } else {

                }

            }, error: function (error) {
                //$.LoadingOverlay("hide");
                toastr.error('Something went wrong please try again');
            }
        });


}
    $(document).ready(function () {
        load_stock_table();
        $('#stock_div').click(function (){
            var validator = $("#add_stock_form").validate();

            validator.resetForm();
            document.getElementById("add_stock_form").reset();
            $('#update_stock_id').val(0);
            $('#stock_section').slideToggle();
        });


        $.validator.addMethod("filesize", function (value, element) {
            var fi = element;
                // Check if any file is selected.
                if (fi.files.length > 0) {
                    for (var i = 0; i <= fi.files.length - 1; i++) {

                        const fsize = fi.files.item(i).size;
                        const file = Math.round((fsize / 1024));


                        if (file >= 1024) {
                            return false;
                        } else {
                            return true;
                        }
                    }
                }


        }, "File size must be less than 1 mb");

        $("#upload_excel_file").validate({
            rules: {
                file_data: {
                    required: true,
                }


            },
            messages: {

                file_data: {
                    required: "Please Select file",
                },

            },
            errorElement: 'span',
            submitHandler: function (form) {
                var form_data = document.getElementById('upload_excel_file');

                $.ajax({
                    url: '<?= base_url("add_stock_file") ?>',
                    type: "POST",
                    //                        data: $("#employeeWorkUpload").serialize(),
                    data: new FormData(form_data),
                    contentType: false,
                    cache: false,
                    processData: false,
                    async: false,
                    cache: false,
                    success: function (success) {
                        success = JSON.parse(success);
                        if (success.status === true) {
                            // toastr.success(success.body);

                            $("#upload_excel_file").trigger("reset");
                        } else {

                            //toastr.error(success.body);
                        }
                    },
                    error: function (error) {
                        //                    $('#item_modal').modal("toggle");
                        // toastr.error("something went to wrong");
                    }
                });

            }
        });

        $("#add_stock_form").validate({
            rules: {
                p_name: {
                    required: true,

                },
                model_no: {
                    required: true,
                },
                Category: {
                    required: true,

                },
                p_mrp: {
                    required: true,
                },
                userfile: {
                    required: true,
                    filesize:true,
                },

                total: {
                    required: true,
                },



            },
            messages: {

                p_name: {
                    required: "Please Enter Product name",
                },
                model_no: {
                    required: "Please Enter model_no",
                },
                Category: {
                    required: "Please Enter Category",
                },
                p_mrp: {
                    required: "Please Enter MRP",
                },
                userfile: {
                    required: "Please Select Image",
                },
                total: {
                    required: "Please Enter total count",
                },
            },
            errorElement: 'span',
            submitHandler: function (form) {
                var form_data = document.getElementById('add_stock_form');

                    $.ajax({
                        url: '<?= base_url("add_stock") ?>',
                        type: "POST",
                        //                        data: $("#employeeWorkUpload").serialize(),
                        data: new FormData(form_data),
                        contentType: false,
                        cache: false,
                        processData: false,
                        async: false,
                        cache: false,
                        success: function (success) {
                            success = JSON.parse(success);
                            if (success.status === true) {
                               // toastr.success(success.body);

                                $("#add_stock_form").trigger("reset");
                                $('#stock_section').slideToggle();
                                load_stock_table();
                            } else {

                                //toastr.error(success.body);
                            }
                        },
                        error: function (error) {
                            //                    $('#item_modal').modal("toggle");
                           // toastr.error("something went to wrong");
                        }
                    });

            }
        });


    });

function load_stock_table() {//done by vishu  to get stock data

    $("#stock_table").DataTable({
        destroy: true,
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?php echo base_url('load_stock_table'); ?>",
            "type": "POST"

        },
        columns: [
            {data: 0}, {data: 1}, {data: 2},

            {
                data: 3,
                render: (dataValue, type, row, meta) => {

                        return '<button type="button" class="btn btn-icon btn-primary"  onclick="fetch_stock_data(`'+row[3]+'`)"><i class="fa fa-edit"></i></button>';

                }
            },

        ]


    }).columns.adjust().responsive.recalc();;
}
/*
    $("#planningtable").DataTable({
        destroy: true,
        "processing": true,
        "serverSide": true,
        "order": [],
        'columnDefs': [
            {'width': '200px'}
        ],
        "ajax": {
            "url": "<?php echo base_url('get_all_plan'); ?>",
            "type": "POST",
            data: function (a_data) {
                a_data.firm_id = firm_id;
                a_data.customer_id = customer_id;
                a_data.year_id = year_id;
                a_data.status = '';
            }
        },
        columns: [
            {data: 0}, {data: 1}, {data: 2}, {data: 3}, {data: 4}, {data: 5}, {data: 6},
            {
                data: 7,
                render: (dataValue, type, row, meta) => {
                    return dataValue !== '0' ? dataValue : ''
                }
            },
            {
                data: 8,
                render: (dataValue, type, row, meta) => {
                    if (!row[11]) {
                        return '<a href="<?= base_url('add_scheduling_mobile/') ?>' + row[0] + '/0/0' + '" ' +
                            '<button="" type="button" data-toggle="tooltip" title="" data-placement="bottom"' +
                            ' class="btn-shadow  btn btn-info" data-original-title="Add Scheduling"><i class="fa fa-plus"></i></a>';
                    } else {
                        return '<a href="<?= base_url('scheduling_mobile_view/') ?>' + row[0] + '"<button="" type="button" ' +
                            ' data-placement="bottom" class="mb-2 mr-2 btn-icon btn-icon-only btn btn-link btn-info " ><i class="pe-7s-look"> </i></a>'
                    }
                }
            },

        ]
    }).columns.adjust().responsive.recalc();*/
</script>
