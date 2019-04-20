<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Surat Masuk</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Admin</a></li>
                <li class="breadcrumb-item active">Mengelola Surat Masuk</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->

<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="">
<?php if($this->session->flashdata('flash')) : ?>
<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Surat Disposisi <strong>berhasil</strong> <?= $this->session->flashdata('flash') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Surat Masuk</h4>      
            <div class="body">
            <a href="<?= base_url('admin/suratmasuk/tambah') ?>" >
            <button type="button" class="btn btn-success" onclick="#" ><span class="fa fa-plus-circle ">
            Tambah Data
            </button></a> 
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
                            <?php
                            if($sm->status == "") {
                                $status = "Baru masuk";

                            }else if($sm->status == "1") {
                                $status = "Disposisikan";
                            }

                            ?>
                            <td class="max-texts"> 
                                <a href="#" /><span class="label label-info m-r-10"><?= $sm->status; ?></span> 
                               
                            </td>
                                                     
                            <td> 
                            <a  class="btn btn-warning" href="<?= site_url('admin/suratmasuk/edit/'.$sm->id); ?>" title="Ubah"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="<?= site_url('admin/suratmasuk/delete/'.$sm->id); ?>" title="Hapus"><i class="fas fa-trash"></i></a>
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
        