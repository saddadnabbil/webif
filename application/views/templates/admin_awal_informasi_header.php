<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/informasi/awal/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css">

    <!-- Title -->
    <title><?php echo $judul; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/untirta.png">
    
    
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script class="u-script" type="text/javascript" src="<?= base_url(); ?>assets/js/informasi/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="<?= base_url(); ?>assets/js/informasi/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.0.10, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

  </head>
  <body style="font-family: Poppins">

  <!-- Start Navigation -->
  <div class="container my-5">
        <nav class="navbar navbar-expand-lg navbar-light  costume-nav bg-transparent ">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Logo WEBIF"></a> -->
                <a class="navbar-brand" href="<?= base_url(); ?>admin">WEB<span>IF</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">

                            <!-- Queri Menu -->
                            <?php
                            $role_id = $this->session->userdata('role_id');
                            $queryMenu = "SELECT `user_menu`.`id`, `menu`
                                            FROM `user_menu` 
                                            JOIN `user_access_menu` ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                                            WHERE `user_access_menu`.`role_id` = $role_id
                                        ORDER BY `user_access_menu`.`menu_id`  ASC
                                        ";
                            $menu = $this->db->query($queryMenu)->result_array();                            
                            ?>


                        <!-- Looping Menu -->

                        <?php foreach ($menu as $m) : ?>
                            <?php
                            $menuId = $m['id'];
                            $querySubMenu = "SELECT *
                                            FROM `user_sub_menu` 
                                            JOIN `user_menu` ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                            WHERE `user_sub_menu`.`menu_id` = $menuId
                                            AND `user_sub_menu`.`is_active` = 1
                                        ";
                            $subMenu = $this->db->query($querySubMenu)->result_array();                            
                            ?>

                                <?php foreach ($subMenu as $sm) : ?>
                                    <li class="nav-item md--3"> 
                                        <a class="nav-link active" aria-current="page" href="<?= base_url($sm['url']); ?>"><?= $sm['title']; ?></a>
                                    </li>
                                <?php endforeach; ?> 


                        <?php endforeach; ?> 

                        <div class="dropdown border-0 mx-2">
                            <button class="btn border-0 dropdown-toggle md-1"  style="color: #F6B459;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $user['name']; ?>
                            </button>
                                <ul class="dropdown-menu bg-transparent border-0" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="<?= base_url(); ?>admin_profile">My Profile</a></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>admin/edit">Edit Profile</a></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>admin/changepassword">Change Password</a></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>auth/logout">Logout</a></li>
                            </ul>
                        </div>                   
                    </ul>
                </div>
            </div>
        </nav>
    </div> 
    <!-- End Navigation -->