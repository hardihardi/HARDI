<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Agroxa - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="http://localhost:8080/ISAQ/assets/images/favicon.ico">

        <link href="http://localhost:8080/ISAQ/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="http://localhost:8080/ISAQ/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="http://localhost:8080/ISAQ/assets/css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </head>

    <body>
    <?php
            session_start();

            if (isset($_SESSION['error_message'])) {
                // Menampilkan SweetAlert jika pesan kesalahan ada
                echo '<script>
                        Swal.fire({            
                            icon: "error",    
                            text: "Login Failed!",                         
                            timer: 1500,                                
                            showConfirmButton: false
                        });
                </script>';
                unset($_SESSION['error_message']); // Hapus pesan kesalahan setelah ditampilkan
            }
            ?>
        <!-- Background -->
        <div class="account-pages"></div>
        <!-- Begin page -->
        <div class="wrapper-page">

            <div class="card"> 
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="https://www.patcotech.com/" class="logo logo-admin"><img src="http://localhost:8080/ISAQ/assets/images/patco.png" height="80" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                        <!-- <p class="text-muted text-center">Sign in to continue</p> -->

                        <form class="form-horizontal m-t-30" action="../../wwwroot/login/get.php" method="post">

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" name="login" type="submit">Log In</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <!-- <p class="text-white-50">Don't have an account ? <a href="pages-register.html" class="text-white"> Signup Now </a> </p>
                <p class="text-muted">© 2018 Agroxa. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p> -->
            </div>

        </div>

        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="http://localhost:8080/ISAQ/assets/js/jquery.min.js"></script>
        <script src="http://localhost:8080/ISAQ/assets/js/bootstrap.bundle.min.js"></script>
        <script src="http://localhost:8080/ISAQ/assets/js/jquery.slimscroll.js"></script>
        <script src="http://localhost:8080/ISAQ/assets/js/waves.min.js"></script>

        <script src="http://localhost:8080/ISAQ/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- App js -->
        <script src="http://localhost:8080/ISAQ/assets/js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    </body>

</html>