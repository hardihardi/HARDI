<div class="modal fade bs-example-modal-edit<?php echo $d['Id'];?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form   form class="form-horizontal m-t-30" action="../../../wwwroot/administrator/product/edit.php" method="post" enctype="multipart/form-data">
                    <div class="form-group row" style="display: none;">
                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="id" value="<?php echo $d['Id'];?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Code</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="code" value="<?php echo $d['KodeBarang'];?>" readonly>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Code Vendor</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="codevendor" value="<?php echo $d['KodeBarangVendor'];?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="nama" value="<?php echo $d['Nama'];?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Company</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="company" >
                                <option name="kat" value="<?php echo $d['IdCompany'];?>"><?php echo $d['CompanyName'];?></option>
                            </select>
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