
<?php
    include '../../../header.php';
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
                                    <h4 class="page-title">Data User</h4>
                                    <!-- <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Agroxa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Data Table</li>
                                    </ol>-->
            
                                    <div class="state-information d-none d-sm-block">
                                        <div class="state-graph">
                                            <h4 class="page-title" style="color: white;">welcome</h4>
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
    
                                            
                                            <div class="mt-1 header-title">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="simpan" data-toggle="modal" data-target=".bs-example-modal-new"><i class="ion-plus"></i> Add Data</button>
                                            </div> 
                                            <br/>
    
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Id</th>
                                                    <th>NIK</th>
                                                    <th>Name</th>
                                                    <th>Company</th>
                                                    <th>Role</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
    
    
                                                <?php
                                                        $no = 1;
                                                        $data = mysqli_query($con,"SELECT x.Id,x.FullName, x.UserCode, x.Username, x.Password, c.Id as IdCompany, c.Name as Company,y.Name as Role ,y.Id as IdRole FROM `user` as X 
                                                        INNER JOIN role as y on x.Role = y.Id
                                                        INNER JOIN Company as c on x.Company = c.Id");
                                                        while($d = mysqli_fetch_array($data)){
                                                    ?>
                                                <tbody>
                                                <tr>
                                                <td><?php echo $no++ ?></td>
                                                    <td><?php echo $d['Id']; ?></td>
                                                    <td><?php echo $d['UserCode']; ?></td>
                                                    <td><?php echo $d['FullName']; ?></td>
                                                    <td><?php echo $d['Company']; ?></td>
                                                    <td><?php echo $d['Role']; ?></td>
                                                    <td>
                                                        <a type="button" href="http://localhost:8080/ISAQ/wwwroot/administrator/user/delete.php?id=<?php echo $d['Id'];?>" class="btn btn-outline-danger waves-effect waves-light  alert_notif" ><i class="ion-trash-a"></i></a>
                                                        <a type="button" href="modals/EditModal.php" data-toggle="modal" data-target=".bs-example-modal-edit<?php echo $d['Id'];?>" class="btn btn-outline-warning waves-effect waves-light" ><i class="far fa-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <?php include "modals/EditModal.php"; ?>
                                                    <?php }?>
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
include '../../../footer.php';
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