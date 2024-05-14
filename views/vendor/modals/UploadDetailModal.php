<div class="modal fade bs-example-modal-detail-upload" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Uplad Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div> 
            <div class="modal-body">
                
                <form   form class="form-horizontal m-t-30" action="../../wwwroot/vendor/upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group" style="display: none;">
                        <label></label>
                        <input type="number" class="form-control" name="id" value="<?php echo $_GET['id'];?>" readonly />
                    </div>
                    <div class="form-group">
                        <label>Upload</label>
                        <input type="file" class="form-control" name="excel_file" accept=".xlsx, .xls" />
                    </div>
                    <div class="col-12 text-right">
                        <button class="btn btn-success waves-effect waves-light" type="submit" name="upload" href="http://localhost:8080/ISAQ/wwwroot/vendor/upload.php?id=<?php echo $_GET['id']; ?>"><i class="mdi mdi-content-save"></i> Submit</button>
                        <!-- <a class="btn btn-success waves-effect waves-light" name="upload" href="http://localhost:8080/ISAQ/wwwroot/vendor/upload.php"><i class="mdi mdi-content-save"></i>Submit</a> -->
                    </div>
                </form>
            
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->