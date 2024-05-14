<div class="modal fade bs-example-modal-new" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form   form class="form-horizontal m-t-30" action="../../../wwwroot/administrator/product/save.php" method="post" enctype="multipart/form-data">
                    <?php
                        $today = date("Ymd");
                        $data = mysqli_query($con,"select max(KodeBarang) as kode from barang");
                        while($d = mysqli_fetch_array($data)){

                        $kode = $d['kode'];
                        $urutan = intval($kode);
                        $urutan++;
                        $kode = sprintf("%04s", $urutan);
                    ?>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Code</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="code" value="<?php echo $kode ?>" readonly>
                        </div>
                    </div>  
                    <?php } ?>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Code Vendor</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="codevendor" required>
                        </div>
                    </div>   
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Company</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="company" >
                                <option name="kat" value="<?php echo $_SESSION['idcompany']; ?>"><?php echo $_SESSION['companyname']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 text-right">
                    <button class="btn btn-success waves-effect waves-light" type="submit" name="simpan" href="save.php"><i class="mdi mdi-content-save"></i> Save</button>
                    </div>
                </form>
            
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->