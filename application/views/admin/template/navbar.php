<?php 
  $active = $this->uri->segment(2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/Logo-hitam.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin | Kayu Online
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url(); ?>assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="<?php echo base_url('admin'); ?>" class="simple-text logo-normal">
         <img src="<?php echo base_url(); ?>assets/img/Logo-hitam.png" style="border-radius: 100px; width: 50px; height: 50px;" /> <?php echo $_SESSION['namaUser']; ?>
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if($active==''){ ?> active <?php } ?>  ">
            <a class="nav-link" href="<?php echo base_url('admin'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php if($active=='profil'){ ?> active <?php } ?> ">
            <a class="nav-link" href="<?php echo base_url('admin/profil'); ?>">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item <?php if($active=='tabel'){ ?> active <?php } ?>">
            <a class="nav-link" href="<?php echo base_url('admin/tabel'); ?>">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li> -->
          <li class="nav-item <?php if($active=='icon'){ ?> active <?php } ?> ">
            <a class="nav-link" href="<?php echo base_url('admin/icon'); ?>">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li> -->
          <li class="nav-item <?php if($active=='pemberitahuan'){ ?> active <?php } ?>">
            <a class="nav-link" href="pemberitahuan">
              <i class="material-icons">notifications</i>
              <p>Pemberitahuan</p>
            </a>
          </li>
         <!--  <li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li> -->
          <li class="nav-item <?php if($active=='status_transaksi'){ ?> active <?php } ?>">
            <a class="nav-link" href="status_transaksi">
              <i class="material-icons">unarchive</i>
              <p>Status Transaksi</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">

     