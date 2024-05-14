<div class="modal fade bs-example-modal-edit<?php echo $d['id'];?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Edit Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form   form class="form-horizontal m-t-30" action="../../wwwroot/mahasiswa/edit.php" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group row" style="display: none;">
                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="id" value="<?php echo $d['id'];?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Nim</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="nim" value="<?php echo $d['nim'];?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="nama" value="<?php echo $d['nama'];?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Jurusan</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="jurusan" value="<?php echo $d['jurusan'];?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="date" name="tgl" value="<?php echo $d['tanggal_lahir'];?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="tempat" value="<?php echo $d['tempat_lahir'];?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="alamat" rows="4" required><?php echo $d['alamat'];?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="email" value="<?php echo $d['email'];?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">No Telp</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="telp" value="<?php echo $d['no_telepon'];?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <select id="jk" class="form-control" name="jk" >
                                <option value="<?php echo $d['jenis_kelamin'];?>"><?php echo ($d['jenis_kelamin'] == 'L') ? 'Laki-Laki' : (($d['jenis_kelamin'] == 'P') ? 'Perempuan' : $d['jenis_kelamin']); ?></option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Agama</label>
                        <div class="col-sm-8">
                            <select id="agama" class="form-control" name="agama" >
                            <option value="<?php echo $d['agama'];?>"><?php echo $d['agama'];?></option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Upload Foto</label>
                        <div class="col-sm-8">

                            <!-- Display current photo -->
                            <img id="currentPhoto" src="../../wwwroot/Upload/mahasiswa/<?php echo $d['foto']; ?>" alt="Foto Mahasiswa" style="max-width: 200px; max-height: 200px; margin-bottom: 10px;">
                            <!-- Input field for uploading photo -->
                            <input class="form-control" type="file" name="foto" accept="image/*" onchange="previewImage(event)">
                        </div>
                    </div>
                    <div class="col-12 text-right">
                    <button class="btn btn-success waves-effect waves-light" type="submit" name="simpan" href="edit.php"><i class="mdi mdi-content-save"></i> Save</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
