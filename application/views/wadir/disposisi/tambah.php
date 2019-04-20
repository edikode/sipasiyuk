<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Disposisi</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Direktur</a></li>
                <li class="breadcrumb-item active">Tambah Data Disposisi</li>
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
                <form action="<?= site_url('direktur/disposisi/dispo_direktur/'.$data->id);?>" method="post" class="form-horizontal">
                <input type="hidden" name="id_suratmasuk" value="<?= $data->id;?>">
                    <div class="form-body">
                        <h3 class="card-title">Disposisi</h3>
                        <hr>
                        <div class="row p-t-1">                                                
                            <div class="col-md-5">
                                <div class=" row"> 
                                <label class="col-9 text-left control-label col-form-label">Tanggal terima :  <?= $data->tgl_terima; ?></label> 
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-7">
                                <div class="form-group row">
                                <label class="col-9 text-left control-label col-form-label">No agenda : <?= $data->id; ?></label> 
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">   
                            <div class="col-md-5">
                            <label class="control-label">Jenis Disposisi</label>

                            <div class="demo-radio-button">
                            <input name="group5" type="radio" id="radio_31" class="with-gap radio-col-blue"  />
                            <label for="radio_31">Rahasia</label>
                            <input name="group5" type="radio" id="radio_32" class="with-gap radio-col-blue" />
                            <label for="radio_32">Penting</label>
                            <input name="group5" type="radio" id="radio_33" class="with-gap radio-col-blue" />
                            <label for="radio_33">Segera</label>
                            <input name="group5" type="radio" id="radio_33" class="with-gap radio-col-blue" />
                            <label for="radio_33">Biasa</label>

                            <!-- <select class="form-control custom-select">
                            <option value="">Pilih Jenis Disposisi</option>
                            <?php foreach($jenis_dispo as $value) { ?>
                            <option <?= ($value->id == $data->jenis_id)? 'selected':''?> value="<?php echo $value->id;?>"><?php echo $value->nama_jenis ?></option>
                            <?php } ?>
                            </select> -->
                                </div> 
                            </div>   
                                    
                                    <!-- bawahe -->  
                                
                            <div class="col-md-7">
                                <div class="form-group row">
                                <label class="col-9 text-left control-label col-form-label">Pengirim : <?= $data->pengirim; ?></label> 

                                <label class="col-9 text-left control-label col-form-label">No Surat : <?= $data->no_surat; ?></label> 

                                <label class="col-9 text-left control-label col-form-label">Tanggal Surat : <?= $data->tgl_surat; ?></label> 

                                <label class="col-9 text-left control-label col-form-label">Lampiran : <?= $data->lampiran; ?></label> 

                                <label class="col-9 text-left control-label col-form-label">Perihal : <?= $data->perihal; ?></label> 

                                </div>   
                            </div> 
                                    
                            </div>                          
                           
                    <hr>

                    <!-- error jika belum ada isi nya -->
                    <!-- <div class="alert alert-danger">sada</div> -->

                    <form action="" method="post">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="600px">
                                    <thead>
                                        <tr>
                                            <th width="150px" >Dari</th>
                                            <th width="150px">Kepada</th>
                                            <th width="200px">Isi</th>
                                            <th width="100px">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $dispo_direktur = $this->db->get_where('dispo_direktur',['wadir_id' => $])
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                Direktur
                                                </div>
                                            </td>
                                            <td> 
                                            <div class="form-group">
                                                    <select name="tujuan" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="">Pilih Tujuan</option>
                                                    <?php foreach($jabatan as $j) { ?>
                                                        <option value="<?= $j->id?>"><?= $j->jabatan ?></option>
                                                    <?php } ?>
                                                    <option value="" selected>Wadir</option>

                                                    </select>
                                                </div>
                                            </td>
                                            <td> <textarea class="textarea_editor form-control" rows="9" placeholder="Isi ..." id="isi" name="isi"></textarea></td>
                                            <td><span class="label label-info m-r-1">Baru</span> </td>                                          
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </form>

                    <hr>

                    <form action="<?= site_url('direktur/disposisi/dispo_direktur/'.$data->id); ?>" method="post">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="600px">
                                    <thead>
                                        <tr>
                                            <th width="150px" >Dari</th>
                                            <th width="150px">Kepada</th>
                                            <th width="200px">Isi</th>
                                            <th width="100px">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                Direktur
                                                </div>
                                            </td>
                                            <td> 
                                            <div class="form-group">
                                                    <select name="tujuan" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="">Pilih Tujuan</option>
                                                    <?php foreach($jabatan as $j) { ?>
                                                    <option value="<?= $j->id?>"><?= $j->jabatan ?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </td>
                                            <td> <textarea class="textarea_editor form-control" rows="9" placeholder="Isi ..." id="isi" name="isi"></textarea></td>
                                            <td><span class="label label-info m-r-1">Baru</span> </td>                                          
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </form>

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
