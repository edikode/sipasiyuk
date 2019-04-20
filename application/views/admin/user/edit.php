<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">User</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Admin</a></li>
                <li class="breadcrumb-item active">Mengubah Data User</li>
            </ol>
        </div>
    </div>

<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="<?= site_url('admin/user/edit');?>" method="post">
                <input type="hidden" name="id" value="<?= $data->id;?>">

                    <div class="form-body">
                        <h3 class="card-title">Mengubah Data User</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="username">Username</label>
                                    <input value="<?= $data->username; ?>" type="text" id="username" name="username" class="form-control">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="password">Password</label>
                                    <input value="<?= $data->password; ?>" type="text" id="password" name="password"  class="form-control" >
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-success">
                                    <label class="control-label">Role</label>
                                    <select name="role_id" id="role_id" class="form-control">
                                    <option value="">Pilih Role</option>
                                        
                                    <?php foreach($roles as $value) { ?>
                                        <option <?= ($value->id == $data->role_id)? 'selected':''?> value="<?php echo $value->id;?>"><?php echo $value->role ?></option>
                                    <?php } ?>
                                </select>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <input type="checkbox" value="1" id="is_active" name="is_active"  class="form-check-input">
                                <label class="control-check-label" for="is_active">Active?</label>
                            </div>
                            </div>
                            <!-- /span -->
                            
                        </div>
                        <!-- /row -->
                    <hr>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success" name="simpan"> <i class="fa fa-check"></i> Save</button>
                        <a href="<?= base_url('admin/user') ?>">
                            <button type="button" class="btn btn-inverse">Cancel</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- Row -->