<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Surat Disposisi Direktur</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Direktur</a></li>
                <li class="breadcrumb-item active">Disposisi</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="row">
                    <!-- <div class="col-xlg-2 col-lg-4 col-md-4">
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
                    </div> -->
                    <div class="col-xlg-10 col-lg-8 col-md-8">
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

                        <div class="card-body">
                            <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" class="btn btn-secondary font-18"><i class="mdi mdi-inbox-arrow-down"></i></button>
                                <button type="button" class="btn btn-secondary font-18"><i class="mdi mdi-alert-octagon"></i></button>
                                <button type="button" class="btn btn-secondary font-18"><i class="mdi mdi-delete"></i></button>
                            </div>
                            <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-folder font-18 "></i> </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                                </div>
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-label font-18"></i> </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                                </div>
                            </div>
                            <button type="button " class="btn btn-secondary m-r-10 m-b-10"><i class="mdi mdi-reload font-18"></i></button>
                            <div class="btn-group m-b-10" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary p-10 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> More </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Mark as all read</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                            </div>
                        </div>
                        <div class="card-body p-t-0">
                            <div class="card b-all shadow-none">
                                <div class="inbox-center table-responsive">
                                    <table class="table table-hover no-wrap">
                                        <tbody>
                                            <?php foreach($disposisi as $d) : ?>
                                                <tr class="unread">
                                                    <td style="width:40px">
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="checkbox0" value="check">
                                                            <label for="checkbox0"></label>
                                                        </div>
                                                    </td>
                                                    <td style="width:40px" class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                    <td class="hidden-xs-down"><?= $d->tanggal ?></td>
                                                    
                                                    <?php
                                                    if($d->status == "") {
                                                        $status = "Baru masuk";

                                                    }else if($d->status == "1") {
                                                        $status = "Sukses DiKonfirmasi";
                                                    }

                                                    ?>

                                                    <td class="max-texts"> 
                                                        <a href="#" /><span class="label label-info m-r-10"><?= $status ?></span> <?= $d->perihal ?>
                                                    </td>

                                                    <td class="hidden-xs-down"><a href="<?= base_url('direktur/disposisi/detail/'.$d->id) ?>" /><i class="fa fa-paperclip"></i></a></td>
                                                    <td class="text-right"> 12:30 PM </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>