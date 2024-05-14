<div class="modal fade bs-example-modal-detail-new" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="width:1000px;">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form   form class="form-horizontal m-t-30" action="../../wwwroot/vendor/savedetail.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group" style="display: none;">
                                <label></label>
                                <input type="text" class="form-control" name="id" value="<?php echo $_GET['id'];?>" readonly />
                            </div>
                                <?php
                                    $company = $_GET['id'];

                                    $data = mysqli_query($con,"SELECT MAX(seri) as seri FROM detailtransaksi WHERE IdTransaksi = $id");
                                    while($d = mysqli_fetch_array($data)){ 
                                    $kode = $d['seri'];
                                    $urutan = intval($kode);
                                    $urutan++;
                                ?>
                            <div class="form-group">
                                <label>Seri</label>
                                <input type="text" class="form-control" name="seri" value="<?php echo $urutan ?>" />
                            </div>
                            <?php } ?>
                            <div class="form-group">
                                <label>Hs</label>
                                <input type="number" step="0.01" pattern="\d{8}" title="Harus delapan digit" class="form-control" name="hs" required  />
                            </div>
                            <div class="form-group">
                                <label> Code </label>
                                <div >
                                    <select class="form-control" name="barang" required>
                                        <option value=""></option>
                                        <?php
                                            $company = $_SESSION['idcompany'];

                                            $data = mysqli_query($con,"SELECT *,CONCAT(KodeBarangVendor, '-', Nama) as FullName FROM `barang` where company = $company"); 
                                            while($d = mysqli_fetch_array($data)){ ?>
                                            <option name="barang" value="<?=$d['Id']?>"><?=$d['FullName']?></option>
                                        <?php } ?>
                                            
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Merk</label>
                                <input type="text" class="form-control" name="merk"  />
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <input type="text" class="form-control" name="tipe"  />
                            </div>
                            <div class="form-group">
                                <label>Size</label>
                                <input type="number" step="0.01" class="form-control" name="ukuran" value="0"  />
                            </div>
                            <div class="form-group">
                                <label>Spesifikasi Lain</label>
                                <input type="text" class="form-control" name="spesifikasi"  />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Total Unit</label>
                                        <input type="number" step="0.01" class="form-control" name="jumlahsatuan" value="0" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Unit</label>
                                        <input type="text" class="form-control" name="kodesatuan" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Total Packaging</label>
                                        <input type="number" step="0.01" class="form-control" name="jumlahkemasan" value="0" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Packaging</label>
                                        <input type="text" class="form-control" name="kodekemasan" required />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Volume</label>
                                <input type="number" step="0.01" class="form-control" name="volume" value="0" />
                            </div>
                            <div class="form-group">
                                <label>Net Weight (kg)</label>
                                <input type="number" step="0.01" class="form-control" name="berat" value="0" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Total Price (Rp)</label>
                                <input type="text" class="form-control" name="harga" value="0" />
                            </div>
                            <div class="form-group">
                                <label>Jasa</label>
                                <input type="number" step="0.01" class="form-control" name="jasa" value="0" />
                            </div>
                            <div class="form-group">
                                <label>Discount</label>
                                <input type="number" step="0.01" class="form-control" name="diskon" value="0" />
                            </div>
                            <div class="form-group">
                                <label>PPN (%)</label>
                                <input type="number" step="0.01" class="form-control" name="ppn"value="11" />
                            </div>
                            <div class="form-group">
                                <label> Remarks</label>
                                <div >
                                    <select class="form-control" name="remarks">
                                        <option value=""></option>
                                        <option value="3">3-DTG-DITANGGUHKAN</option>
                                        <option value="5">5-BBS-DIBEBASKAN</option>
                                        <option value="6">6-TIDAK DIPUNGUT</option>
                                        <option value="7">7-SUDAH DILUNASI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Facilities (%)</label>
                                <input type="text" class="form-control" name="fasilitas" value="100"  />
                            </div>
                        </div>
                        <div class="col-12 text-right">
                            <button class="btn btn-success waves-effect waves-light" type="submit" name="simpan" href="save.php"><i class="mdi mdi-content-save"></i> Save</button>
                        </div>
                    </div>    
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>