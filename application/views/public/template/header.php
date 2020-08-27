 <!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>KayuOnline.co - Supplier Kayu Terbaik</title>
    <meta name="description" content="">

    <!-- CSS FILES -->
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>


    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/layout/layout.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/fractionslider.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style-fraction.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>" media="screen" data-name="skins">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/layout/wide.css')?>" data-name="layout">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/switcher.css')?>" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--Start Header-->
<header id="header">
    <!-- Start info-bar -->
    <div id="info-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 top-info hidden-xs">
                    <div class="dropdown">
                          <span class="dropbtn"><i class="fa fa-user"></i>My Account</span>
                          <div class="dropdown-content">
                            <a href="<?php echo base_url('admin'); ?>">Halaman Admin</a>
                            <a href="#"><i class="fa fa-sign-out"></i>     Logout</a>
                        </div>
                    </div>
                    <div id="myOverlay" class="overlay">
                          <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                          <div class="overlay-content">
                            <form action="">
                              <input type="text" placeholder="Search.." name="search">
                              <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                      </div>
                  </div>
                </div>
                <div class="col-sm-4 top-info hidden-xs">
                    <ul>
                        <li><a class="my-pint" onclick="openSearch()" title="Search"><i class="fa fa-search"></i></a></li>
                        <li><a href="" class="my-rss" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                        <li><a href="" class="my-google" title="Compare"><i class="fa fa-refresh"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div style="border-bottom: 1px solid"></div>
    <!--/#info-bar -->

    <div id="logo-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div id="logo">
                        <h1 ><a href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/images/Logo-hitam.png')?>" style="width: 50px; height: 50px;" /></a></h1>
                    </div>
                </div>

               <div class="col-md-9 col-sm-9">
                <!-- Navigation
                ================================================== -->
                    <div class="navbar navbar-default navbar-static-top" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo base_url('tentang-kami')?>">Tentang Kami</a>
                                    
                                </li>

                                
                                <li><a href="<?php echo base_url('toko')?>">Toko</a>
                                </li>

                                <li><a href="<?php echo base_url('gudang-kami')?>">Gudang Kami</a>
                                </li>

                                <li><a href="Wishlist.html" title="Cart"><i class="fa fa-shopping-bag" ></i></a>
                                    
                                </li>
                                <li><a href="#" onclick="openSearch()" title="Search"><i class="fa fa-search" ></i></a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container -->
    </div>
    <!--/#logo-bar -->
</header>