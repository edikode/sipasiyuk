<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Disposisi</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Wakil Direktur</a></li>
                <li class="breadcrumb-item active">Ubah Data Disposisi</li>
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
                <form action="#" class="form-horizontal">
                    <div class="form-body">
                        <h3 class="card-title">Disposisi</h3>
                        <hr>

                        <div class="row p-t-20">                                                
                            <div class="col-md-6">
                                <div class=" row">                               
                                    <label class="col-3 text-left control-label col-form-label">No Surat :</label>   
                                    <div class="col-sm-8">                              
                                        <input type="text" id="no_surat" class="form-control form-control-sm" placeholder="Nomor Surat ">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-3 text-left control-label col-form-label">Pengirim :</label>
                                    <div class="col-sm-9">  
                                    <input type="text" id="asal_sm" class="form-control form-control-sm" placeholder="Pengirim">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>

                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class=" row">
                                    <label class="col-3 text-left control-label col-form-label">Tanggal Terima :</label>
                                    <div class="col-sm-9"> 
                                    <input type="date" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                                    </div>
                                    </div>
                                    
                                    <!-- bawahe -->                                   
                                    <div class=" row">
                                        <label class="col-3 text-left control-label col-form-label">Jenis Disposisi :</label>
                                        <div class="col-sm-9"> 
                                        <select class="form-control form-control-sm custom-select">
                                            <option value="">Male</option>
                                            <option value="">Female</option>
                                        </select>
                                        </div> 
                                    </div>   
                                    
                                     <!-- bawahe -->  
                                    <div class=" row">
                                    <label class="col-3 text-left control-label col-form-label">Tanggal Surat :</label>
                                        <div class="col-sm-9"> 
                                        <input type="date" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                                        </div>   
                                    </div> 
                                    
                            </div>                          
                            
                            <!--/span-->
                            <div class="col-md-6">
                            <div class="">
                            <label class="control-label">Perihal</label>
                                <textarea class="textarea_editor form-control" rows="5" placeholder="Perihal ..." name="perihal"></textarea>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class=" has-success">
                                    <h4><i class="ti-link"></i>Lampiran</h4>
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                </div>
                            </div> 
                        </div>
                        <!--/row-->
                    <hr>
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
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="Category 1">Category 1</option>
                                                        <option value="Category 2">Category 2</option>
                                                        <option value="Category 3">Category 5</option>
                                                        <option value="Category 4">Category 4</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                            <div class="form-group">
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="Category 1">Category 1</option>
                                                        <option value="Category 2">Category 2</option>
                                                        <option value="Category 3">Category 5</option>
                                                        <option value="Category 4">Category 4</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit illo eos magnam libero perferendis illum soluta explicabo fuga nemo, iste iure ad laudantium sit. Maxime a velit quis magni harum!</td>
                                            <td>$45.00</td>                                            
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)">Order #58746</a></td>
                                            <td>Mary Adams</td>
                                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus accusantium nesciunt quidem. Error architecto numquam tempore laboriosam, nostrum iusto omnis cumque sint? Soluta quo aut dolor non similique architecto excepturi?</td>
                                            <td>$245.30</td>
                                            
                                        </tr>
                                       
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

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
