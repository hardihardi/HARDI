<div class="modal fade bs-example-modal-new" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Add Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body"> 
                <!-- <form   form class="form-horizontal m-t-30" action="../../../wwwroot/administrator/user/save.php" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">User Code</label>
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
                        <label class="col-sm-2 col-form-label">Company</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="company">
                            <option>Select Company</option>
                                <?php
                                    $data = mysqli_query($con,"select * from company"); 
                                    while($d = mysqli_fetch_array($data)){ ?>
                                    <option name="kat" value="<?=$d['Id']?>"><?=$d['Name']?></option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="username" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="role">
                            <option>Select Role</option>
                                <?php
                                    $data = mysqli_query($con,"select * from role"); 
                                    while($d = mysqli_fetch_array($data)){ ?>
                                    <option name="kat" value="<?=$d['Id']?>"><?=$d['Name']?></option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 text-right">
                    <button class="btn btn-success waves-effect waves-light" type="submit" name="simpan" href="save.php"><i class="mdi mdi-content-save"></i> Save</button>
                    </div>
                </form> -->
            
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->