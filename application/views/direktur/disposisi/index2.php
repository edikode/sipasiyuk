<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Disposisi</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Direktur</a></li>
                <li class="breadcrumb-item active">Mengelola Data Disposisi</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Disposisi</h4>      
            <div class="body">
            <!-- <a href="<?= base_url('direktur/disposisi/tambah') ?>" >
            <button type="button" class="btn btn-success" onclick="#" ><span class="fa fa-plus-circle ">
            Tambah Data
            </button> </a>        -->
            </div>
            <div class="table-responsive m-t-0">
                <table id="myTable" class="table table-bordered table-striped">
                <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Surat</th>
                            <th>Tanggal Terima</th>
                            <th>Pengirim</th>
                            <th>Tanggal Surat</th>
                            <th>Tujuan</th>                            
                            <th>Status</th>                            
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no += 1;
                    foreach($suratmasuk as $sm) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $sm->no_surat; ?></td>
                            <td><?= $sm->tgl_terima; ?></td>  
                            <td><?= $sm->pengirim; ?></td>    
                            <td><?= $sm->tgl_surat; ?></td>

                            <td><?php 
                                if(($sm->dispo_direktur_id) != "0") :

                                    $query = "SELECT `dispo_direktur`.*, `jabatan`.`jabatan` from                      `dispo_direktur` join `jabatan` where `dispo_direktur`.`wadir_id` = `jabatan`.`id` and `dispo_direktur`.`id` = $sm->dispo_direktur_id";

                                    $dataJabatan = $this->db->query($query)->row();
                                    echo $dataJabatan->jabatan;
                                
                                else : ?>
                                        Belum ada  
                                <?php endif; ?>

                            </td>
                           
                            <td class="max-texts"> 
                                <a href="#" /><span class="label label-info m-r-10"><?= $sm->status; ?></span> 
                               
                            </td>
                                
                            <td> 
                            <a  class="btn btn-success" href="<?= site_url('direktur/disposisi/tambah/'.$sm->id); ?>" title="Disposisikan"><i class="fas fa-plus"></i></a>
                            <a  class="btn btn-warning" href="<?= site_url('admin/suratmasuk/edit/'.$sm->id); ?>" title="Ubah"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="" title="Hapus"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>            
            </div>
        </div>
        </div>
     </div>
</div>
        