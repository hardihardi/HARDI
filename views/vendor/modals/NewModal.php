<div class="modal fade bs-example-modal-new" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Add Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div> 
            <div class="modal-body">
                
                <form   form class="form-horizontal m-t-30" action="../../wwwroot/vendor/save.php" method="post" enctype="multipart/form-data">
                    <?php
                        $today = date("Ymd");
                        $company = $_SESSION['codecompany'];
                        $data = mysqli_query($con,"select max(Id) as kode from transaksi");
                        while($d = mysqli_fetch_array($data)){

                        $kode = $d['kode'];
                        $urutan = intval($kode);
                        $urutan++;
                        $kode = $company . '-' . $today . sprintf("-%05s", $urutan);
                    ?>
                    <div class="form-group row" style="display: none;">
                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="id" value="<?php echo $urutan;?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-5 col-form-label">No Transaction</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" name="transaksi" value="<?php echo $kode ?>" readonly>
                        </div>
                    </div>    
                    <?php } ?>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Vendor</label>
                        <div class="col-sm-7">
                            <select class="form-control" name="company" >
                                <option name="kat" value="<?php echo $_SESSION['idcompany']; ?>"><?php echo $_SESSION['companyname']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-5 col-form-label">No DO</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" name="nodo" >
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-5 col-form-label">DO Date</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="date" name="datedo" >
                        </div>
                    </div>    
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-5 col-form-label">No Faktur</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" name="nofaktur" >
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-5 col-form-label">Faktur Date</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="date" name="datefaktur" >
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