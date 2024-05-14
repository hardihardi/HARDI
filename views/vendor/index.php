
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
                        <?php include "modals/NewModal.php"; ?>
                        
                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
    
                                            
                                        <div class="mt-0 header-title">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit" name="simpan" data-toggle="modal" data-target=".bs-example-modal-new"><i class="ion-plus"></i> Add Data</button>
                                            </div> 
                                            <br/>
    
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Transaction</th>
                                                    <th>No DO</th>
                                                    <th>No Faktur</th>
                                                    <th>Vendor</th>
                                                    <th>Status</th>
                                                    <th>Created Date</th>
                                                    <th>Updated By</th>
                                                    <th>Action</th>
                                                </tr> 
                                                </thead>
    
    
                                                <tbody>
                                                <?php
                                                        $no = 1;

                                                        $company = $_SESSION['idcompany'];

                                                        if ( $_SESSION['role'] === "Administrator") {
                                                            $data = mysqli_query($con,"SELECT x.Id, x.NoTransaksi,x.NoDO,x.NoFaktur,x.Status,x.Tgl,c.Id as IdCompany,c.Name as CompanyName, y.Id IdUser, y.FullName,y.UserCode FROM `transaksi` x
                                                            INNER JOIN Company c on x.Company = c.Id
                                                            INNER JOIN User y on x.User = y.Id");
                                                        } else {
                                                            $data = mysqli_query($con,"SELECT x.Id, x.NoTransaksi,x.NoDO,x.NoFaktur,x.Status,x.Tgl,c.Id as IdCompany,c.Name as CompanyName, y.Id IdUser, y.FullName,y.UserCode FROM `transaksi` x
                                                            INNER JOIN Company c on x.Company = c.Id
                                                            INNER JOIN User y on x.User = y.Id WHERE x.Company = $company");
                                                        }

                                                        
                                                        while($d = mysqli_fetch_array($data)){
                                                    ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><a class="open-modal-button" href="#" data-id="<?php echo $d['Id'];?>" ><?php echo $d['NoTransaksi']; ?></a> </td>
                                                    <td><?php echo $d['NoDO']; ?></td>
                                                    <td><?php echo $d['NoFaktur']; ?></td>
                                                    <td><?php echo $d['CompanyName']; ?></td>
                                                    <td><b><?php echo $d['Status']; ?></b></td>
                                                    <td><?php echo $d['Tgl']; ?></td>
                                                    <td><?php echo $d['UserCode']; ?></td> 
                                                    <td>
                                                        <?php if($d['Status']=='Posting' || $d['Status']=='Completed') { ?> 
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Action
                                                                </button> 
                                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                    <a class="dropdown-item" href="http://localhost:8080/ISAQ/views/vendor/detail.php?id=<?php echo $d['Id'];?>"><i class="ion-document-text"> Detail Product </i></a>
                                                                </div>
                                                            </div>
                                                        <?php } ?>

                                                        <?php if($d['Status']=='Ready To Posting') { ?> 
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Action
                                                                </button> 
                                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                    <a class="dropdown-item" href="http://localhost:8080/ISAQ/views/vendor/detail.php?id=<?php echo $d['Id'];?>"><i class="ion-document-text"> Detail Product </i></a>
                                                                    <a class="dropdown-item" href="http://localhost:8080/ISAQ/wwwroot/vendor/download.php?id=<?php echo $d['Id'];?>"><i class="ion-document"> Download BC 4.0</i></a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target=".bs-example-modal-post<?php echo $d['Id'];?>"><i class="far fa-paper-plane"> Posting</i></a>
                                                                </div>
                                                            </div>
                                                        <?php } ?>

                                                        <?php if($d['Status']=='Draft') { ?>  
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Action
                                                                </button> 
                                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                <a class="dropdown-item alert_notif" href="http://localhost:8080/ISAQ/wwwroot/vendor/delete.php?id=<?php echo $d['Id'];?>"><i class="ion-trash-a"> Delete</i></a>
                                                                <a class="dropdown-item" href="http://localhost:8080/ISAQ/views/vendor/detail.php?id=<?php echo $d['Id'];?>"><i class="ion-document-text"> Add Product </i></a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target=".bs-example-modal-detail-upload-file<?php echo $d['Id'];?>"><i class="ion-document"> Upload Doc</i></a>
                                                                <a class="dropdown-item" href="http://localhost:8080/ISAQ/wwwroot/vendor/download.php?id=<?php echo $d['Id'];?>"><i class="ion-document"> Download BC 4.0</i></a>
                                                                </div>
                                                            </div>
                                                        <?php } ?>

                                                        <?php if($d['Status']=='Ready To Process') { ?>  
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Action
                                                                </button> 
                                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                <a class="dropdown-item" href="http://localhost:8080/ISAQ/views/vendor/detail.php?id=<?php echo $d['Id'];?>"><i class="ion-document-text"> Edit Product </i></a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target=".bs-example-modal-detail-upload-file<?php echo $d['Id'];?>"><i class="ion-document"> Upload Doc</i></a>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <?php include "modals/UploadDocumentModal.php"; ?>
                                                <?php include "modals/PostingModal.php"?>
                                                <?php }?>
                                                </tbody>
                                            </table>
    
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                        <?php include "modals/HistoryModal.php"; ?>
                        
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
            title: "sure to post data?",            
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
    $('.open-modal-button').on('click', function (e){
        var id = $(this).attr("data-id");
        $('#modalHistory').modal('show');
        $.ajax({
            url: '../../wwwroot/vendor/history.php?id=' + id, // Ganti dengan URL PHP Anda
            type: 'GET',
            success: function(data) {
                var dataList = JSON.parse(data);
                console.log(dataList);
                var element="";

                element+='<div class="table-rep-plugin">';
                element+='<div class="table-responsive b-0" data-pattern="priority-columns">';
                element+='<table id="tech-companies-1" class="table  table-striped">';
                element+='<thead>';
                element+='<tr>';
                element+='<th>No</th>';
                element+='<th >Description</th>';
                element+='<th >Date</th>';
                element+='<th >Created By</th>';
                element+='</tr>';
                element+='</thead>';
                element+='<tbody>';
                var no = 1;
                var doc = '';
                for(var i=0; i < dataList.length; i++) {
                    doc = dataList[i].NoTransaksi
                    element+='<tr>';
                    element+='<th>'+no+'</th>';
                    element+='<th>'+dataList[i].Ket+'</th>';
                    element+='<th>'+dataList[i].Tgl+'</th>';
                    element+='<th>'+dataList[i].FullName+'</th>';
                    element+='</tr>';
                    no++
                }

                element+='</tbody>';
                element+='</table>';
                element+='</div>';
                element+='</div>';
                element+='';
                element+='';
                element+='';
                element+='';
                element+='';

                var title = '<p style="font-size:20px;" class="modal-title mt-0"><b>History Document '+doc+' </b> </p>';

                $('#titleHistory').html(title);
                $('#tableHistory').html(element);
            },
            error: function(error) {
                console.log("Gagal mengambil data: " + error);
            }
        });
    });
</script>