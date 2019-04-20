<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Surat Masuk</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Admin</a></li>
                <li class="breadcrumb-item active">Mengubah Data Surat Masuk</li>
            </ol>
        </div>
    </div>
<!-- ============================================================== -->
<!-- Start Page Content -->    
<!-- Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">            
            <div class="card-body">
                <form action="<?= site_url('admin/suratmasuk/edit');?>" method="post">
                <input type="hidden" name="id" value="<?= $data->id;?>">
                    <div class="form-body">
                        <h3 class="card-title">Mengubah Data Surat Masuk</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nomor Surat</label>
                                    <input value="<?= $data->no_surat; ?>"  type="text" id="no_surat" class="form-control">
                                 </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Pengirim</label>
                                    <input type="text" id="asal_sm" class="form-control" value="<?= $data->pengirim; ?>" >
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Tanggal Terima</label>
                                    <input type="date" class="form-control" value="<?= $data->tgl_terima; ?>" >
                                    </div>
                                    
                                    <!-- -->                                   
                                <div class="form-group">
                                    <label class="control-label">Jenis Disposisi</label>
                                    <select class="form-control custom-select">
                                    
                                    <option value="">Pilih Jenis Disposisi</option>
                                    <?php foreach($jenis_dispo as $value) { ?>
                                <option <?= ($value->id == $data->jenis_id)? 'selected':''?> value="<?php echo $value->id;?>"><?php echo $value->nama_jenis ?></option>
                            <?php } ?>
                                    </select>
                                </div>   
                                
                                <div class="form-group">
                                <label class="control-label">Tanggal Surat</label>
                                <input type="date" class="form-control" value="<?= $data->tgl_surat; ?>" >
                                </div>   

                        </div>
                        
                        <!--/span-->
                        <div class="col-md-6">
                        <div class="form-group">
                        <label class="control-label">Perihal</label>
                            <textarea class="textarea_editor form-control" rows="10" value="<?= $data->perihal; ?>"  name="perihal"></textarea>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-success">
                                <h4><i class="ti-link"></i>Lampiran</h4>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                            </div>
                        </div> 
                    </div>
                    <!--/row-->
                    
                        
                    <hr>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-success" name="edit">Submit</button>
                                        <a href="<?= base_url('admin/suratmasuk') ?>"><button type="button" class="btn btn-inverse">Cancel</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
