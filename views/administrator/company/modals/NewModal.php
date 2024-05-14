<div class="modal fade bs-example-modal-new" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Add Company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form   form class="form-horizontal m-t-30" action="../../../wwwroot/administrator/company/save.php" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Code</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="code" required>
                        </div>
                    </div>    
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" required>
                        </div>
                    </div>
                      
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">NPWP</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="npwp" required>
                        </div>
                    </div>
                      
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="email" required>
                        </div>
                    </div>
                      
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="telp" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10"> 
                            <textarea required class="form-control" rows="5" name="alamat"></textarea>
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