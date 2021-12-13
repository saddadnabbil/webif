<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/menu/main.css">
 
    <!-- Title -->
    <title><?php echo $judul; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/untirta.png">

    <!-- Reference design -->
    <!-- http://www.freepik.com pikisuperstar / Freepik -->

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <!-- Custom styles for this template -->
    <!-- <link href="<?= base_url(''); ?>assets/css/login/sb-admin-2.min.css" rel="stylesheet"> -->
  </head>
  <body>

  <!-- Start Navigation -->
  <div class="container my-5">
        <nav class="navbar navbar-expand-lg navbar-light  costume-nav bg-transparent ">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Logo WEBIF"></a> -->
                <a class="navbar-brand" href="<?= base_url(); ?>">WEB<span>IF</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">About Us</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>informasi">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
                </li> -->
                
                </ul>
            </div>
            </div>
        </nav>
    </div> 
    <!-- End Navigation -->


