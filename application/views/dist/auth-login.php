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
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4" style="margin-top: -43px;">
                    <div class="login-brand">
                      <!--  <img src="<?php echo base_url(); ?>assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">-->
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4>Login</h4></div>

                        <div class="card-body">
                            <form method="POST" id="login_form"  class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>

                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required autofocus>

                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                            <div class="mt-5 text-muted text-center">
                                Don't have an account? <a href="<?php echo base_url('auth_register'); ?>">Create One</a>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('dist/_partials/js'); ?>
<script type="text/javascript" src="<?= base_url("assets/") ?>js/login.js"></script>
