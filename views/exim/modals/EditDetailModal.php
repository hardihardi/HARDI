<div id="editData" class="modal fade bs-example-modal-detail-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="width:1000px;">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit Product </h5>
                <button type="button" id="closeModal" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form   form class="form-horizontal m-t-30" action="../../wwwroot/vendor/editDetail.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group" style="display: none;">
                                <label></label>
                                <input type="text" id="idInput" class="form-control" name="id" readonly />
                            </div>
                            <div class="form-group" style="display: none;">
                                <label></label>
                                <input type="text" id="idTransaksiInput" class="form-control" name="idTransaksi" readonly />
                            </div>
                            <div class="form-group">
                                <label>Seri</label>
                                <input type="text" id="seriInput" class="form-control" name="seri" readonly/>
                            </div>
                            <div class="form-group">
                                <label>Hs</label>
                                <input type="number" id="hsInput" pattern="\d{8}" title="Harus delapan digit" class="form-control" name="hs"  readonly   />
                            </div>
                            <!-- <div class="form-group">
                                <label> Code </label>
                                <div >
                                    <select class="form-control" id="barangInput" name="barang" required>
                                    </select>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label> Code </label>
                                <div >
                                    <select  id="barangInput"  class="form-control"name="barang"  readonly >
                                        <?php
                                            $company = $_SESSION['idcompany'];

                                            $data = mysqli_query($con,"SELECT *,CONCAT(KodeBarang, '-', Nama) as FullName FROM `barang` where company = $company"); 
                                            while($d = mysqli_fetch_array($data)){ ?>
                                            <option name="barang" value="<?=$d['Id']?>"><?=$d['FullName']?></option>
                                        <?php } ?>
                                            
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Merk</label>
                                <input type="text" id="merkInput" class="form-control" name="merk"   readonly />
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <input type="text" id="tipeInput" class="form-control" name="tipe"   readonly />
                            </div>
                            <div class="form-group">
                                <label>Size</label>
                                <input type="number" id="sizeInput"  class="form-control" name="ukuran"  readonly />
                            </div>
                            <div class="form-group">
                                <label>Spesifikasi Lain</label>
                                <input type="text" id="spesifikasiInput" class="form-control" name="spesifikasi"  readonly  />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Total Unit</label>
                                        <input type="number" id="jumlahSatuanInput" class="form-control" name="jumlahsatuan"  readonly  />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Unit</label>
                                        <input type="text" id="kodeSatuanInput" class="form-control" name="kodesatuan"  readonly  />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Total Packaging</label>
                                        <input type="number" id="jumlahKemasanInput" class="form-control" name="jumlahkemasan" readonly  />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Packaging</label>
                                        <input type="text" id="kodeKemasanInput" class="form-control" name="kodekemasan"  readonly  />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Volume</label>
                                <input type="number" id="volumeInput" class="form-control" name="volume" readonly />
                            </div>
                            <div class="form-group">
                                <label>Net Weight (kg)</label>
                                <input type="number" id="beratInput" class="form-control" name="berat"  readonly />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Total Price (Rp)</label>
                                <input type="number" id="hargaInput" class="form-control" name="harga"  readonly  />
                            </div>
                            <div class="form-group">
                                <label>Jasa</label>
                                <input type="number" id="jasaInput" class="form-control" name="jasa"  readonly  />
                            </div>
                            <div class="form-group">
                                <label>Discount</label>
                                <input type="number" id="diskonInput" class="form-control" name="diskon"  readonly />
                            </div>
                            <div class="form-group">
                                <label>PPN (%)</label>
                                <input type="number" id="ppnInput"  class="form-control" name="ppn"  readonly />
                            </div>
                            <div class="form-group">
                                <label> Remarks</label>
                                <div >
                                    <select id="kodeFasilitasInput" class="form-control" name="remarks" readonly >
                                        <option value="3">3-DTG-DITANGGUHKAN</option>
                                        <option value="5">5-BBS-DIBEBASKAN</option>
                                        <option value="6">6-TIDAK DIPUNGUT</option>
                                        <option value="7">7-SUDAH DILUNASI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Facilities (%)</label>
                                <input type="text" id="fasilitasInput"  class="form-control" name="fasilitas" readonly />
                            </div>
                        </div>
                        <div class="col-12 text-right">
                        </div>
                    </div>    
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>