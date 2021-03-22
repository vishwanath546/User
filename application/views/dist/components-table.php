<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
              <input type="hidden" id="base_url" name="base_url" value="<?= base_url(); ?>">
            <div class="section-header-breadcrumb">


            </div>
          </div>
            <div class="row" id="user_section" style="display:none">
                <div class="col col-md-8 " style="float: none;margin: auto;">
                    <div class="card">
                        <form id="add_user_form" name="add_user_form"  enctype="multipart/form-data" method="post" novalidate="novalidate">

                            <input type="hidden" class="form-control" id="update_user_id" name="update_user_id" value="0">
                        <div class="card-header">
                            <h3><b>Add user</b></h3>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label>first Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name">
                            </div>
                            <div class="form-group">
                                <label>last_name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name">
                            </div>



                            <div class="form-group">
                                <label>Select Department</label>
                                <select class="js-example-basic-multiple-limit form-control-sm mb-2 form-control" multiple="true"  style="width:100%" id="department" name="department[]">

                                </select>


                            </div>

                            <div class="form-group">
                                <label>Select Sub Department</label>
                                <select class="js-example-basic-multiple-limit form-control-sm mb-2 form-control" multiple="true"  style="width:100%" id="sub_department" name="sub_department[]">

                                </select>


                            </div>




                            <div class="form-group">
                                <label>Email id</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>

                            <div class="form-group">
                                <label>Mobile No</label>
                                <input type="number" min="0" class="form-control" id="mobile_no" name="mobile_no">
                            </div>

                            <div class="form-group">
                                <label>Profile Pic </label>
                                <input type="hidden"  class="form-control" id="prev_userfile" name="prev_userfile">
                                <input type="file"  class="form-control" id="userfile" name="userfile">
                            </div>

                               <button type="button" class="btn btn-secondary" id="close_user_div">Cancel</button>
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
                    <h4>User Table</h4>
                  </div>
                  <div class="card-body">


                    <div class="table-responsive">
                      <table id="user_table"  class="table table-striped responsive display" cellspacing="0">
                        <tr>
                            <thead>

                          <th>User Nmae</th>
                          <th>Email id</th>
                          <th>Mobile NO</th>
                          <th>Created on </th>
                          <th>Image </th>
                          <th>Action</th>
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


<?php $this->load->view('dist/_partials/footer'); ?>

<script type="text/javascript" src="<?= base_url("assets/") ?>js/user_management.js"></script>


