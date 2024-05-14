
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
                                    <h4 class="page-title">Document</h4>
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
    
                                            <!-- <h4 class="mt-0 header-title">Default Datatable</h4> -->
    
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>No AJU</th>
                                                    <th>No Transaksi</th>
                                                    <th>No DO</th>
                                                    <th>No Faktur</th>
                                                    <th>Vendor</th>
                                                    <th>Status</th>
                                                    <th>Created Date</th>
                                                    <th>Created By</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                                
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $d['aju']; ?></td> 
                                                    <td><?php echo $d['NoTransaksi']; ?></td>
                                                    <td><?php echo $d['NoDO']; ?></td>
                                                    <td><?php echo $d['NoFaktur']; ?></td>
                                                    <td><?php echo $d['Name']; ?></td>
                                                    <td><b><?php echo $d['Status']; ?></b></td>
                                                    <td><?php echo $d['Tgl']; ?></td>
                                                    <td><?php echo $d['FullName']; ?></td>
                                                    <td>

                                                        <?php if($d['Status']=='Ready To Posting'  || $d['Status']=='Completed' ) { ?>  
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Action
                                                                </button> 
                                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                <a class="dropdown-item" href="http://localhost:8080/ISAQ/views/exim/detail.php?id=<?php echo $d['Id'];?>"><i class="ion-document-text"> View</i></a>
                                                                <a class="dropdown-item" href="http://localhost:8080/ISAQ/wwwroot/exim/export.php?id=<?php echo $d['Id'];?>"><i class="a fa-file-excel"> Export Excel </i></a>
                                                                <a class="dropdown-item" href="http://localhost:8080/ISAQ/wwwroot/exim/downloadpdf.php?id=<?php echo $d['Id'];?>"><i class="ion-document"> Download PDF </i></a>
                                                                </div>
                                                            </div>
                                                        <?php } ?>

                                                        <?php if($d['Status']=='Posting') { ?>  
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Action
                                                                </button> 
                                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                <a class="dropdown-item" href="http://localhost:8080/ISAQ/views/exim/detail.php?id=<?php echo $d['Id'];?>"><i class="ion-document-text"> View</i></a>
                                                                <a class="dropdown-item" href="http://localhost:8080/ISAQ/wwwroot/exim/export.php?id=<?php echo $d['Id'];?>"><i class="a fa-file-excel"> Export Excel </i></a>
                                                                <a class="dropdown-item" href="http://localhost:8080/ISAQ/wwwroot/exim/downloadpdf.php?id=<?php echo $d['Id'];?>"><i class="ion-document"> Download PDF </i></a>
                                                                <a class="dropdown-item alert_notif_post" href="http://localhost:8080/ISAQ/wwwroot/exim/receipt.php?id=<?php echo $d['Id'];?>"><i class="fas fa-check-circle"> Receipt</i></a>
                                                                </div>
                                                            </div>
                                                        <?php } ?>


                                                        <?php if($d['Status']=='Processing') { ?>  
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Action
                                                                </button> 
                                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                <a class="dropdown-item" href="http://localhost:8080/ISAQ/views/exim/detail.php?id=<?php echo $d['Id'];?>"><i class="ion-document-text"> View</i></a>
                                                                <a class="dropdown-item" href="http://localhost:8080/ISAQ/wwwroot/exim/export.php?id=<?php echo $d['Id'];?>"><i class="a fa-file-excel"> Export Excel </i></a>
                                                                <a class="dropdown-item" href="http://localhost:8080/ISAQ/wwwroot/exim/downloadpdf.php?id=<?php echo $d['Id'];?>"><i class="ion-document"> Download PDF </i></a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target=".bs-example-modal-bc<?php echo $d['Id'];?>"><i class="far fa-edit">Upload BC 4.0</i></a>
                                                                </div>
                                                            </div>
                                                        <?php } ?>

                                                        <?php if($d['Status']=='Ready To Process') { ?>  
                                                            <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target=".bs-example-modal-aju<?php echo $d['Id'];?>"><i class="far fa-edit">Add AJU</i></a>
                                                                <a class="dropdown-item" href="http://localhost:8080/ISAQ/views/exim/detail.php?id=<?php echo $d['Id'];?>"><i class="ion-document-text"> View</i></a>
                                                                <a class="dropdown-item" href="http://localhost:8080/ISAQ/wwwroot/exim/export.php?id=<?php echo $d['Id'];?>"><i class="a fa-file-excel"> Export Excel </i></a>
                                                                <a class="dropdown-item" href="http://localhost:8080/ISAQ/wwwroot/exim/downloadpdf.php?id=<?php echo $d['Id'];?>"><i class="ion-document"> Download PDF </i></a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target=".bs-example-modal-bc<?php echo $d['Id'];?>"><i class="far fa-edit">Upload BC 4.0</i></a>
                                                            </div>
                                                        </div>
                                                        <?php } ?>

                                                        
                                                        
                                                    </td>
                                                    <!-- <td>
                                                        <a type="button" href="#" data-toggle="modal" data-target=".bs-example-modal-aju<?php echo $d['Id'];?>" class="btn btn-outline-warning waves-effect waves-light" ><i class="far fa-edit"></i></a>
                                                        <a type="button" href="http://localhost:8080/ISAQ/views/exim/detail.php?id=<?php echo $d['Id'];?>" class="btn btn-outline-success waves-effect waves-light" ><i class="ion-document-text"></i></a>
                                                        <a type="button" href="http://localhost:8080/ISAQ/wwwroot/exim/export.php?id=<?php echo $d['Id'];?>" class="btn btn-outline-dark waves-effect waves-light" ><i class="fa fa-file-excel"></i></a>
                                                        <a type="button" href="http://localhost:8080/ISAQ/wwwroot/exim/downloadpdf.php?id=<?php echo $d['Id'];?>" class="btn btn-outline-danger waves-effect waves-light"><i class="ion-document"></i></a>
                                                    </td> -->
                                                </tr>
                                                <?php include "modals/InpuAJUlModal.php"?>
                                                <?php include "modals/InpuBClModal.php"?>
                                                </tbody>
                                            </table>
    
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
<?php if(@$_SESSION['sukses']){ ?>
    <script>
        Swal.fire({            
            icon: 'success',    
            text: 'Success!',                         
            timer: 1000,                                
            showConfirmButton: false
        })
    </script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses']); } ?>
<script>
    $('.alert_notif').on('click',function(){
        var getLink = $(this).attr('href');
        Swal.fire({
            title: "sure to delete data?",            
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Yes',
            cancelButtonColor: '#3085d6',
            cancelButtonText: "No"
        
        }).then(result => {
            //jika klik ya maka arahkan ke proses.php
            if(result.isConfirmed){
                window.location.href = getLink
            }
        })
        return false;
    });
</script>

<script>
    $('.alert_notif_post').on('click',function(){
        var getLink = $(this).attr('href');
        Swal.fire({
            title: "sure to receipt data?",            
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Yes',
            cancelButtonColor: '#3085d6',
            cancelButtonText: "No"
        
        }).then(result => {
            //jika klik ya maka arahkan ke proses.php
            if(result.isConfirmed){
                window.location.href = getLink
            }
        })
        return false;
    });
</script> 