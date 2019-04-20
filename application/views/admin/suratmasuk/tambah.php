<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Surat Masuk</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Admin</a></li>
                <li class="breadcrumb-item active">Tambah Data Surat Masuk</li>
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
                <form action="<?= site_url('admin/suratmasuk/tambah'); ?>" method="post">
                    <div class="form-body">
                        <h3 class="card-title">Surat Masuk</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="no_surat">Nomor Surat</label>
                                    <input type="text" id="no_surat" name="no_surat" class="form-control" placeholder="Nomor Surat ">
                                 </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label " for="pengirim">Pengirim</label>
                                    <input type="text" id="pengirim" name="pengirim" class="form-control" placeholder="Pengirim">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="tgl_terima">Tanggal Terima</label>
                                    <input id="tgl_terima" name="tgl_terima" type="date" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                    
                                    <!-- -->                                   
                                    <div class="form-group">
                                        <label for="" class="control-label">Jenis Disposisi</label>
                                        <select  name="jenis_id" id="jenis_id" class="form-control custom-select">
                                            <option value="">Pilih Jenis Disposisi</option>
                                            <?php foreach($jenis_dispo as $rol) { ?>
                                        <option value="<?= $rol->id?>"><?= $rol->nama_jenis ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>   
                                    
                                    <div class="form-group">
                                    <label for="tgl_surat" class="control-label">Tanggal Surat</label>
                                    <input id="tgl_surat" name="tgl_surat" type="date" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>   

                            </div>
                            
                            <!--/span-->
                            <div class="col-md-6">
                            <div class="form-group">
                            <label class="control-label" for="perihal">Perihal</label>
                                <textarea class="textarea_editor form-control" rows="9" placeholder="Perihal ..." id="perihal" name="perihal"></textarea>
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
                                            <input name="lampiran" id="lampiran" type="file" multiple />
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
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
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
