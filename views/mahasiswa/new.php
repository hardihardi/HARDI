<?php
    include '../../header.php';
?>

<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Tambah Data Mahasiswa</h4> 

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
                                <div class="col-lg-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <!-- <h4 class="mt-0 header-title">Default Tabs</h4>
                                            <p class="text-muted m-b-30">Use the tab JavaScript plugin—include
                                                it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
                                                file—to extend our navigational tabs and pills to create tabbable panes
                                                of local content, even via dropdown menus.</p> -->
            
                                            <!-- Nav tabs -->
            
                                            <!-- Tab panes -->
                                            <form   form class="form-horizontal m-t-30" action="../../wwwroot/mahasiswa/save.php" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group row" style="display: none;">
                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                       
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Nim</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="nim" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Jurusan</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="jurusan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="date" name="tgl" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="tempat" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="alamat" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">No Telp</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="telp" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <select id="jk" class="form-control" name="jk" >
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Agama</label>
                        <div class="col-sm-8">
                            <select id="agama" class="form-control" name="agama" >
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Foto</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="file" name="foto" id="fotoInput" accept="image/*" onchange="previewImage(event)" required>
                            <img id="preview" src="#" alt="Preview Foto" style="display: none; max-width: 200px; max-height: 200px; margin-top: 10px;">
                        </div>
                    </div>

                    <div class="col-12 text-right">
                    <button class="btn btn-success waves-effect waves-light" type="submit" name="simpan" href="edit.php"><i class="mdi mdi-content-save"></i> Save</button>
                    <a href="index.php" class="btn btn-primary waves-effect waves-light" name="simpan"><i class="ion-back"></i> Cancel</a>
                    </div>
                </form> 
            
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->
                
<?php
    include '../../footer.php';
?>

<script>
    function previewImage(event) {
        var input = event.target;
        var preview = document.getElementById('preview');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;  
                preview.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
