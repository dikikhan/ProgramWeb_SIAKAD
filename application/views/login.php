<?php $base_url = base_url() . 'assets/'; ?>
<!-- http://nama-domain/assets/ -->
<!-- $base_url -> nama variabel untuk menampung home dir assets -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= $base_url ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <link href="<?= $base_url ?>css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .bg-image {
            background-image: url('<?= $base_url ?>img/background.jpg');
            background-repeat: no-repeat;
            background-size: 1500px 900px;
        }
    </style>

</head>


<!--body class="bg-gradient-primary"-->

<body class="bg-image">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center" style="padding-top: 25pt;">

            <div class="col-xl-7 col-lg-12 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <div style="display: flex; flex-direction: column; justify-content: flex-end; align-items: center; height: 100%; background-color: #F39C12;">
                                    <img src="assets/img/POLKAM.png" alt="POLKAM" style="max-width: 90%; max-height: 90%; width: auto; height: auto;">
                                    <span style="font-size: 25px; font-weight: bold; color: black; margin-top: 35px; font-family: 'Times New Roman', Times, serif;" class="mb-5">POLITEKNIK
                                        KAMPAR</span>
                                </div>
                            </div>
                            <!--div class="col-lg-6 d-none d-lg-block bg-login-image"></div-->
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" style="font-size: 40px; font-family: 'Times New Roman', Times, serif; font-weight: bold;">
                                            Login</h1>
                                        <?php if ($this->session->flashdata('error')) : ?>
                                            <div class="alert alert-danger" role="alert" style="font-size: 16px; font-family: times new roman, sans-serif;">
                                                <?= $this->session->flashdata('error') ?>
                                            </div>
                                        <?php endif ?>
                                    </div>

                                    <br>
                                    <form class="user" action="<?= base_url('auth/checklogin') ?>" method="POST">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <br>
                                        <hr>
                                        <button class="btn btn-user btn-block text-dark" style="background: #FFA500; font-family: 'Times New Roman', Times, serif;">Login</button>
                                        <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= $base_url ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= $base_url ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= $base_url ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= $base_url ?>js/sb-admin-2.min.js"></script>

</body>

</html>