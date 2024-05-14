
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
                                    <h4 class="page-title">Data Mahasiswa</h4>
                                    <!-- <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Agroxa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Data Table</li>
                                    </ol>-->
            
                                    <div class="state-information d-none d-sm-block">
                                        <div class="state-graph">
                                            <h4 class="page-title" style="color: white;">Welcome</h4>
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
    
                                            <div class="mt-1 header-title">
                                                <a href="new.php" class="btn btn-primary waves-effect waves-light" name="simpan"><i class="ion-plus"></i> Add Data</a>
                                            </div> 
                                            <br/> 

                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>NIM</th>
                                                    <th>NAMA</th>
                                                    <th>JURUSAN</th>
                                                    <th>TANGGAL LAHIR</th>
                                                    <th>TEMPAT LAHIR</th>
                                                    <th>ALAMAT</th>
                                                    <th>EMAIL</th>
                                                    <th>NO TELP</th>
                                                    <th>JENIS KELAMIN</th>
                                                    <th>AGAMA</th>
                                                    <th>FOTO</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                                <?php
                                                        $no = 1;
                                                        $data = mysqli_query($con,"SELECT * FROM hardi ORDER By nim ");
                                                        while($d = mysqli_fetch_array($data)){
                                                    ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $d['nim']; ?></td> 
                                                    <td><?php echo $d['nama']; ?></td>
                                                    <td><?php echo $d['jurusan']; ?></td>
                                                    <td><?php echo $d['tanggal_lahir']; ?></td>
                                                    <td><?php echo $d['tempat_lahir']; ?></td>
                                                    <td><?php echo $d['alamat']; ?></td>
                                                    <td><?php echo $d['email']; ?></td>
                                                    <td><?php echo $d['no_telepon']; ?></td>
                                                    <td><?php echo $d['jenis_kelamin']; ?></td>
                                                    <td><?php echo $d['agama']; ?></td>
                                                    <td>
                                                        <img src="../../wwwroot/upload/mahasiswa/<?php echo $d['foto']; ?>" alt="Foto Mahasiswa" style="width: 100px; height: 130px;">
                                                    </td>
                                                    <td>
                                                        <a type="button" href="http://localhost:8080/Hardi/wwwroot/mahasiswa/delete.php?id=<?php echo $d['id'];?>" class="btn btn-outline-danger waves-effect waves-light  alert_notif" ><i class="ion-trash-a"></i></a>
                                                        <a type="button" href="modals/EditModal.php" data-toggle="modal" data-target=".bs-example-modal-edit<?php echo $d['id'];?>" class="btn btn-outline-warning waves-effect waves-light" ><i class="far fa-edit"></i></a>
                                                        
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
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('currentPhoto');
            output.src = reader.result; // Update current photo src with new photo
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>