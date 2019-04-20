 <div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Mengelola Data User</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Admin</a>
                </li>
                <li class="breadcrumb-item active">Data User</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb and right sidebar toggle -->
    
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data User</h4>      
            <div class="body">
            <a href="<?= base_url('admin/user/add') ?>" >
            <button type="button" class="btn btn-success" onclick="#" ><span class="fa fa-plus-circle ">
            Tambah Data
            </button></a> 
            </div>
            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive m-t-0">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Nip / Nik</th>
                            <th>Nama</th>
                            <th>Date Created</th>
                            <th>Role</th>         
                            <th>Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no += 1;
                    foreach($user as $u) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $u->username; ?></td> 
                            <td><?= $u->nip; ?></td>
                            <td><?= $u->nama; ?></td>
                            <td><?= $u->date_created; ?></td>
                            <td><?= $u->role; ?></td>
                            <td><?= $u->jabatan; ?></td>                           
                                                     
                            <td> 
                            <a  class="btn btn-warning" href="<?= site_url('admin/user/edit/'.$u->id); ?>" title="Ubah"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="<?= site_url('admin/user/delete/'.$u->id); ?>" title="Hapus"><i class="fas fa-trash"></i></a>
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
        