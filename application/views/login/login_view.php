<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CI Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
    </style>
</head>
<body>
    <div class="container" style='margin-top: 150px;'>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center"> Login </h1>
                        <hr class="featurette-divider">
                        <div class="card-body">
                        <!-- validation message for a successful login -->
                        <?php if ($this->session->flashdata('pesan')) :?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo $this->session->flashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>

                        <?php echo form_open('Login/index') ?>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= $this->form_validation->set_value('username'); ?>">
                                <small class="form-text text-danger">
					                <?= form_error('username') ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?= $this->form_validation->set_value('password'); ?>">
                                <small class="form-text text-danger">
					                <?= form_error('password') ?>
                                </small>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                            <a href="<?= base_url(); ?>/Program/Register" class="btn btn-link">Sign Up</a>

                        <?php echo form_close() ?>
                        </div>
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
