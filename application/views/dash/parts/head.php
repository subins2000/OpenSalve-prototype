<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Admin Panel</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=asset_url(); ?>admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=asset_url(); ?>admin/css/helper.css" rel="stylesheet">
    <link href="<?=asset_url(); ?>admin/css/style.css" rel="stylesheet">
    <script src="<?=asset_url(); ?>admin/js/lib/jquery/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index">
                        <!-- Logo icon -->
                        <b>Admin</b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>Home</span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>

                        <!-- Messages -->

                        <!-- End Messages -->
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li>
                            <a href="<?=base_url();?>user">
                                <i class="fa fa-tachometer"></i><span class="hide-menu"> Home</span>
                            </a>
                        </li>
                        <!-- <li><a href="index.html"><i class="fa fa-tachometer"></i> Ecommerce </a></li> -->
                      <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-paint-brush"></i><span class="hide-menu">Camps <span class="label label-rouded label-primary pull-right">2</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url();?>user/add_camp"><i class="fa fa-plus"></i> Create </a></li>
                                <li><a href="<?=base_url();?>user/manage_camp"><i class="fa fa-list"></i> Manage </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=base_url();?>admin/countries">
                                <i class="fa fa-globe"></i><span class="hide-menu"> Countries</span>
                            </a>
                        </li>
                         <li>
                            <a href="<?=base_url();?>admin/logout">
                                <i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
