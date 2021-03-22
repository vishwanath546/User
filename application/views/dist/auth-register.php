<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<body style="background-color: #6777ef!important;">
  <div id="app">
      <input type="hidden" id="base_url" name="base_url" value="<?= base_url(); ?>">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">


            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" id="register_form"  class="needs-validation" novalidate="">
                  <div class="row">
                      <input type="hidden" id="update_user_id" name="update_user_id" value="0">
                    <div class="form-group col-6">
                      <label >First Name</label>
                      <input id="first_name" type="text" class="form-control" name="first_name" >
                    </div>
                    <div class="form-group col-6">
                      <label>Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div>

                      <div class="form-group col-6">
                          <label>Mobile No</label>
                          <input id="mobile_no" type="number" min="0" class="form-control" name="mobile_no">
                      </div>

                  <div class="form-group col-6">
                    <label >Email</label>
                    <input id="email" type="email" class="form-control" name="email">

                  </div>


                    <div class="form-group col-6">
                      <label  class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">

                    </div>

                  </div>



                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>

  <?php $this->load->view('dist/_partials/js'); ?>
  <script type="text/javascript" src="<?= base_url("assets/") ?>js/login.js"></script>
