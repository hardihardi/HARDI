
<?php
    include '../../header.php';
?>


<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Data Document</h4>
                                    <!-- <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Agroxa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Data Table</li>
                                    </ol>-->
            
                                    <div class="state-information d-none d-sm-block">
                                        <div class="state-graph">
                                            <h4 class="page-title" style="color: white;">Hi, <?php echo $_SESSION['fullname']; ?></h4>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <form   form class="form-horizontal m-t-30" action="../../wwwroot/report/export.php" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="form-group row" style="display: none;">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" name="company" value="<?php echo $_SESSION['idcompany']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row"  style="display: none;">
                                                        <label for="example-text-input" class="col-sm-5 col-form-label"></label>
                                                        <div class="col-sm-7">
                                                            <input class="form-control" type="text" name="role" value="<?php echo $_SESSION['role']; ?>">
                                                        </div>
                                                    </div>    
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label> Period </label>
                                                            <div >
                                                                <select class="form-control" name="month">
                                                                    <option value=""></option>
                                                                    <option value="1">January</option>
                                                                    <option value="2">February</option>
                                                                    <option value="3">March</option>
                                                                    <option value="4">April</option>
                                                                    <option value="5">May</option>
                                                                    <option value="6">June</option>
                                                                    <option value="7">July</option>
                                                                    <option value="8">August</option>
                                                                    <option value="9">September</option>
                                                                    <option value="10">October</option>
                                                                    <option value="11">November</option>
                                                                    <option value="12">December</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-left">
                                                            <button class="btn btn-success waves-effect waves-light" type="submit" name="simpan"><i class="mdi mdi-content-save"></i> Submit </button>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


<?php
include '../../footer.php';
?>