<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Surat Disposisi</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                <li class="breadcrumb-item active">Disposisi</li>
            </ol>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="row">
                    <div class="col-xlg-2 col-lg-4 col-md-4">
                        <div class="card-body inbox-panel"><a href="<?= base_url('admin/disposisi/tambah') ?>" class="btn btn-danger m-b-20 p-10 btn-block waves-effect waves-light">Tulis Disposisi</a>
                            <ul class="list-group list-group-full">
                                <li class="list-group-item">
                                    <a href="<?= base_url('admin/disposisi') ?>"> <i class="mdi mdi-star"></i> Kontak Masuk </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javascript:void(0)"> <i class="mdi mdi-send"></i> Draft </a><span class="badge badge-danger ml-auto">3</span></li>
                                <li class="list-group-item ">
                                    <a href="javascript:void(0)"> <i class="mdi mdi-file-document-box"></i> Sent Mail </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javascript:void(0)"> <i class="mdi mdi-delete"></i> Trash </a>
                                </li>
                            </ul>
                            <h3 class="card-title m-t-40">Labels</h3>
                            <div class="list-group b-0 mail-list"> <a href="#" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Work</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-warning m-r-10"></span>Family</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-purple m-r-10"></span>Private</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-danger m-r-10"></span>Friends</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-success m-r-10"></span>Corporate</a> </div>
                        </div>
                    </div>
                    <div class="col-xlg-10 col-lg-8 col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">Tulis Pesan</h3>
                            <form action="<?= base_url('admin/disposisi/tambah') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nomor Surat:" name="nomor_surat" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Asal:" name="asal" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Tanggal Surat:" name="tanggal" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" rows="15" placeholder="Perihal ..." name="perihal"></textarea>
                                </div>
                                <h4><i class="ti-link"></i> File Surat</h4>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                                <button type="submit" class="btn btn-success m-t-20" name="simpan"><i class="fa fa-envelope-o"></i> Kirim</button>
                                <a href="<?= base_url('admin/disposisi') ?>" class="btn btn-inverse m-t-20"><i class="fa fa-times"></i> Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>