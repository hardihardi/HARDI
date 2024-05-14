<?php 
require_once "auth/config/config.php";
// if(!isset($_SESSION['username'])) {
//     header("Location: auth/login/index.php");
//     exit();
//     }
//     $level = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Agroxa - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="http://localhost:8080/Hardi/assets/images/favicon.ico">

        <link rel="stylesheet" href="http://localhost:8080/Hardi/assets/plugins/morris/morris.css">

        <link href="http://localhost:8080/Hardi/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="http://localhost:8080/Hardi/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="http://localhost:8080/Hardi/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="http://localhost:8080/Hardi/assets/css/style.css" rel="stylesheet" type="text/css"><!-- Table css -->
        <link href="http://localhost:8080/Hardi/assets/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

        <!-- DataTables -->
        <link href="http://localhost:8080/Hardi/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost:8080/Hardi/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="http://localhost:8080/Hardi/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> 
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="http://localhost:8080/Hardi/" class="logo">
                        <span>
                            <img src="http://localhost:8080/Hardi/assets/images/patco.png" alt="" height="60">
                        </span>
                        <i>
                            <img src="http://localhost:8080/Hardi/assets/images/patco.png" alt="" height="22">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="navbar-right d-flex list-inline float-right mb-0">

                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="http://localhost:8080/Hardi/assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a> 
                                    <div class="dropdown-divider"></div>-->
                                    <a class="dropdown-item text-danger  alert_notif_logout" href="http://localhost:8080/Hardi/auth/logout/index.php"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                </div>                                                                     
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect waves-light">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>                        
                        <li class="d-none d-sm-block">
                           
                        </li>
                    </ul>

                </nav>

            </div> 
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- sidebar menu -->
                    <?php
                    
                    include "admin.php";

                    // if($level == 'Administrator') { include "admin.php"; }
                    // elseif($level == 'Vendor') { include "vendor.php"; }
                    // elseif($level == 'Exim') { include "exim.php"; }  
                    ?>
                    <!-- /sidebar menu -->

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
            