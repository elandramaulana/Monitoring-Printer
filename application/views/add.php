<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/images/logo1.png');?>" type="image/x-icon">

    <title>Form Add Printer</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="<?php echo base_url();?>assets/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>assets/css/sb-admin-2.min.css" rel="stylesheet">



</head>

<body style="background-color:#FEC868">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class=" main-card card o-hidden border-0 shadow-lg my-5">
                    <div style="background-color: #fcf1d5;" class="card-body p-0 ">
                        <!-- Nested Row within Card Body -->

                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 style="font-weight:bold;" class="h4 text-gray-900 mb-4">Form Add Printer</h1>
                                    </div>

                                    <?php if(validation_errors()) :?>
                                        <div style="font-size: 10px;" class="alert alert-danger" role="alert">
                                            <?php echo validation_errors();?>
                                        </div>
                                    <?php endif;?>
                                    <form class="" method="post">
                                        <div class="form-group">
                                            <input name="loc" type="text" class="form-control form-control-user"
                                                id="location" placeholder="Printer Location">
                                        </div>
                                        <div class="form-group">
                                            <input name="unit" type="text" class="form-control form-control-user"
                                                id="unitName" placeholder="Unit Name">
                                        </div>
                                        <div class="form-group">
                                            <input name="serial_number" type="text" class="form-control form-control-user"
                                                id="serialNumber" placeholder="Serial Number">
                                        </div>
                                        <div class="form-group">
                                            <input name="ip" type="text" class="form-control form-control-user"
                                                id="address" placeholder="Ip Address">
                                        </div>
                                        <button style="background-color: #fa7758; color: white;" type="submit" name="tambah" class="btn btn-user btn-block">
                                            Add
                                         </button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>