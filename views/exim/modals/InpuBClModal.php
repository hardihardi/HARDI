<div class="modal fade bs-example-modal-bc<?php echo $d['Id'];?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Upload Document BC 4.0</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div> 
            <div class="modal-body">
                
                <form   form class="form-horizontal m-t-30" action="../../wwwroot/exim/upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group row" style="display: none;">
                        <label for="example-text-input" class="col-sm-5 col-form-label"></label>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" name="id" value="<?php echo $d['Id']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-5 col-form-label">No Transaction</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" name="transaksi" value="<?php echo $d['NoTransaksi']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-5 col-form-label">Vendor</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" name="company" value="<?php echo $d['Name']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-5 col-form-label">File</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="file" name="pdfFile" accept=".pdf" required>
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