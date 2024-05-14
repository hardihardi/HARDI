
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
                                    <h4 class="page-title">Detail Document</h4>
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
                                <div class="col-lg-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <!-- <h4 class="mt-0 header-title">Default Tabs</h4>
                                            <p class="text-muted m-b-30">Use the tab JavaScript plugin—include
                                                it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
                                                file—to extend our navigational tabs and pills to create tabbable panes
                                                of local content, even via dropdown menus.</p> -->
            
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#header" role="tab">Header</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#product" role="tab">Detail Product</a>
                                                </li>
                                            </ul>
            
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active p-3" id="header" role="tabpanel">
                                                    
                                                    <div class="row">
                                                        <?php
                                                            $id = $_GET['id'];
                                                            $data = mysqli_query($con,"SELECT x.Id,x.aju,x.NoTransaksi,c.Code,c.Name,c.NPWP,c.alamat,c.Telpon,c.email FROM `transaksi` x
                                                            INNER JOIN Company c on x.Company = c.Id WHERE x.Id = $id");
                                                            while($d = mysqli_fetch_array($data)){
                                                        ?>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label>No Transaksi</label>
                                                                <input type="text" class="form-control" value="<?php echo $d['NoTransaksi'];?>" readonly />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Company</label>
                                                                <input type="text" class="form-control" value="<?php echo $d['Name'];?>" readonly  />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label>NPWP</label>
                                                                <input type="text" class="form-control" value="<?php echo $d['NPWP'];?>" readonly />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Alamat</label>
                                                                <div>
                                                                    <textarea required class="form-control" rows="5" readonly><?php echo $d['alamat'];?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label>No Telepon</label>
                                                                <input type="text" class="form-control" value="<?php echo $d['Telpon'];?>" readonly />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="text" class="form-control" value="<?php echo $d['email'];?>" readonly  />
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>  
                                                
                                                </div>
                                                <div class="tab-pane p-3" id="product" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card m-b-20">
                                                                <div class="card-body">
                                                                    
                                                                    <div class="mt-0 header-title">
                                                                        <!-- <button class="btn btn-primary waves-effect waves-light" type="submit" name="simpan" href="#" data-toggle="modal" data-target=".bs-example-modal-detail-new"><i class="ion-plus"></i> Add Data</button>
                                                                        <button class="btn btn-info waves-effect waves-light" type="submit" name="simpan" href="#" data-toggle="modal" data-target=".bs-example-modal-detail-upload"><i class="fa fa-upload"></i> Upload</button>
                                                                        <a class="btn btn-warning waves-effect waves-light" name="simpan" href="http://localhost:8080/ISAQ/wwwroot/vendor/export.php?id=<?php echo $_GET['id']; ?>"><i class="fa fa-download"></i>Download Excel</a> -->
                                                                        <!-- <form action="../../wwwroot/vendor/export.php" method="post">
                                                                            <button class="btn btn-warning waves-effect waves-light" type="submit" name="simpan" href="http://localhost:8080/ISAQ/wwwroot/vendor/export.php"><i class="fa fa-download"></i> Export Excel</button>
                                                                        </form> -->
                                                                        
                                                                    </div> 
                                                                    <br/>
                                                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Seri</th>
                                                                            <th>HS</th>
                                                                            <th>Code</th>
                                                                            <th>Uraian</th>
                                                                            <th>Qty</th>
                                                                            <th>Unit</th>
                                                                            <th>Price (Rp)</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                        </thead>
                            
                            
                                                                        <tbody>
                                                                        <?php
                                                                                $no = 1;
                                                                                $id = $_GET['id'];

                                                                                $data = mysqli_query($con,"SELECT x.Id,x.seri,x.hs,x.harga,x.kodesatuan,x.jumlahsatuan,y.KodeBarangVendor,y.Nama  
                                                                                FROM `detailtransaksi` x 
                                                                                INNER JOIN barang y on x.barang = y.Id 
                                                                                WHERE IdTransaksi = $id");
                                                                                while($d = mysqli_fetch_array($data)){
                                                                                $angka = $d['harga'];
                                                                                $harga = number_format($angka, 0, ',', '.');   
                                                                            ?>
                                                                        <tr>
                                                                            <td><?php echo $d['seri']; ?></td>
                                                                            <td><?php echo $d['hs']; ?></td>
                                                                            <td><?php echo $d['KodeBarangVendor']; ?></td>
                                                                            <td><?php echo $d['Nama']; ?></td>
                                                                            <td><?php echo $d['jumlahsatuan']; ?></td>
                                                                            <td><?php echo $d['kodesatuan']; ?></td>
                                                                            <td><?php echo $harga ?></td>
                                                                            <td>
                                                                                <button data-id="<?php echo $d['Id'];?>" class="btn btn-outline-secondary waves-effect waves-light edit" ><i class="fa fa-eye"></i></button>
                                                                                </td>
                                                                        </tr>
                                                                        <?php }?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                    <div class="row">
                                                        <?php
                                                            $id = $_GET['id'];
                                                            $data = mysqli_query($con,"SELECT SUM(jumlahsatuan) as TotalQty, SUM(harga) as TotalPrice FROM `detailtransaksi`
                                                            WHERE IdTransaksi = $id");
                                                            while($d = mysqli_fetch_array($data)){
                                                            $angkaTotal = $d['TotalPrice'];
                                                            $hargaTotal = number_format($angkaTotal, 0, ',', '.');   
                                                        ?>
                                                        <div class="col-lg-6">
                                                        </div>
                                                        <div class="col-lg-3" style="text-align:right;">
                                                            <p style="vertical-align: middle;" >Total Qty :</p>
                                                            </br>
                                                            <p style="vertical-align: middle;">Total Price (Rp) :</p>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value="<?php echo $d['TotalQty'];?>" readonly />
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value="<?php echo $hargaTotal;?>" readonly />
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>  
                                                </div>
                                                <?php include "modals/EditDetailModal.php"?>
                                            </div>
            
                                        </div>
                                    </div>
                                </div>
                            </div>
            
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
    $('#datatable tbody').on('click', '.edit', function (e){
        var id = $(this).attr("data-id");
        $.ajax({
            url: '../../wwwroot/vendor/updateDetail.php?id=' + id, // Ganti dengan URL PHP Anda
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                
                var item = data;

                $('#idInput').val(item.Id);
                $('#idTransaksiInput').val(item.IdTransaksi);
                $('#seriInput').val(item.seri);
                $('#hsInput').val(item.hs);
                $('#merkInput').val(item.merk);
                $('#tipeInput').val(item.tipe);
                $('#sizeInput').val(item.ukuran);
                $('#spesifikasiInput').val(item.spesifikasi);
                $('#jumlahSatuanInput').val(item.jumlahsatuan);
                $('#kodeSatuanInput').val(item.kodesatuan);
                $('#jumlahKemasanInput').val(item.jumlahkemasan);
                $('#kodeKemasanInput').val(item.kodekemasan);
                $('#volumeInput').val(item.volume);
                $('#beratInput').val(item.berat);
                $('#hargaInput').val(item.harga);
                $('#jasaInput').val(item.jasa);
                $('#diskonInput').val(item.diskon);
                $('#ppnInput').val(item.ppn);
                $('#fasilitasInput').val(item.fasilitas);
                $('#kodeFasilitasInput').val(item.ket);
                $('#barangInput').val(item.IdBarang);

                $('#editData').modal('show');
            },
            error: function(error) {
                console.log("Gagal mengambil data: " + error);
            }
        });
    });
</script>
