<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Pegawai</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Admin</a></li>
                <li class="breadcrumb-item active">Mengelola Data Pegawai</li>
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
            <h4 class="card-title">Data User Pegawai</h4>      
            <div class="body">            
            <a href="<?= base_url('admin/pegawai/tambah') ?>" >
            <button type="button" class="btn btn-success" onclick="#" ><span class="fa fa-plus-circle ">
            Tambah Data
            </button></a>
            </div>
            <div class="table-responsive m-t-0">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nip</th>
                            <th>Nama Pegawai</th>
                            <th>Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no += 1;
                    foreach($pegawai as $p) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p->nip; ?></td>
                            <td><?= $p->nama; ?></td>
                            <td><?= $p->jabatan; ?></td>
                            <td> 
                            <a  class="btn btn-warning" href="<?= site_url('admin/pegawai/edit/'.$p->id); ?>" title="Ubah"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="<?= site_url('admin/pegawai/delete/'.$p->id); ?>" title="Hapus"><i class="fas fa-trash"></i></a>
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
        
