<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CI Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>
    <div class='container' style='margin-top: 40px;'>
        <div class='row'>
            <div class='col-md-4'>
            </div>
            <div class='col-md-4'>
                <div class='card'>
                    <div class='card-body'>
                        <h1 class="text-center">Register Now</h1>    
                        <hr class="featurette-divider">
                        <div class="card-body">

                        <!-- validation message for a successful registration -->
                        <?php if ($this->session->flashdata('success')) : ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>   
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>

                        <!-- validation messages for taking inputs -->
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>','</div>');
                        ?>

                        <?php echo form_open('Register/registerUser') ?>

                            <div class="form-group">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                <small class="form-text text-danger">
					                <?= form_error('username') ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="Full Name">
                                <small class="form-text text-danger">
					                <?= form_error('username') ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                <small class="form-text text-danger">
					                <?= form_error('username') ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact Number">
                                <small class="form-text text-danger">
					                <?= form_error('username') ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS">
                                <small class="form-text text-danger">
					                <?= form_error('username') ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                <small class="form-text text-danger">
					                <?= form_error('username') ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="cpassword" id="password" placeholder="Password">
                                <small class="form-text text-danger">
					                <?= form_error('username') ?>
                                </small>
                            </div>
                            <button  class="btn btn-outline-primary">Register</button>                        <a href="<?php echo site_url('Welcome/login') ?>" class="btn btn-link">Sign In</a>

                        <?php echo form_close() ?>
                        
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
