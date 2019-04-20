<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">User</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Admin</a></li>
                <li class="breadcrumb-item active">Mengubah Data Pegawai</li>
            </ol>
        </div>
    </div>

<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="<?php echo site_url('admin/pegawai/update');?>" method="post">
                    <div class="form-body">
                    <input type="hidden" name="id" value="<?= $data->id;?>">
                        <h3 class="card-title">Tambah Data Pegawai</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="nip">NIP / NIK</label>
                                    <input value="<?= $data->nip; ?>" type="text" id="nip" name="nip" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="nama">Nama Pegawai</label>
                                <input value="<?= $data->nama; ?>" type="text" id="nama" name="nama"  class="form-control">
                            </div>
                        </div>
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-success">
                                    <label class="control-label">Jabatan</label>
                                    <select name="jabatan_id" id="jabatan_id" class="form-control custom-select">
                                        <option value="">Pilih Jabatan</option>
                                        
                                        <?php foreach($jabatan as $value) { ?>
                                    <option <?= ($value->id == $data->jabatan_id)? 'selected':''?> value="<?php echo $value->id;?>"><?php echo $value->jabatan ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <hr>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success" name="simpan"> <i class="fa fa-check"></i> Save</button>
                        <a href="<?= base_url('admin/pegawai') ?>">
                            <button type="button" class="btn btn-inverse">Cancel</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- Row -->