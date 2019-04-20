<div id="main-wrapper">
<?=$sidebar?>
<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">

    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <div class="col-md-7 col-4 align-self-center">
                <div class="d-flex m-t-10 justify-content-end">
                    <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                        <div class="chart-text m-r-10">
                            <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                            <h4 class="m-t-0 text-info">$58,356</h4></div>
                        <div class="spark-chart">
                            <div id="monthchart"></div>
                        </div>
                    </div>
                    <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                        <div class="chart-text m-r-10">
                            <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                            <h4 class="m-t-0 text-primary">$48,356</h4></div>
                        <div class="spark-chart">
                            <div id="lastmonthchart"></div>
                        </div>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-body">
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col p-r-0 align-self-center">
                    <h2 class="font-light m-b-0">324</h2>
                    <h6 class="text-muted">New Clients</h6></div>
                <!-- Column -->
                <div class="col text-right align-self-center">
                    <div data-label="20%" class="css-bar m-b-0 css-bar-info css-bar-20"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-body">
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col p-r-0 align-self-center">
                    <h2 class="font-light m-b-0">2376</h2>
                    <h6 class="text-muted">Total Visits</h6></div>
                <!-- Column -->
                <div class="col text-right align-self-center">
                    <div data-label="30%" class="css-bar m-b-0 css-bar-success css-bar-20"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-body">
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col p-r-0 align-self-center">
                    <h2 class="font-light m-b-0">1795</h2>
                    <h6 class="text-muted">New Leads</h6></div>
                <!-- Column -->
                <div class="col text-right ">
                    <div data-label="40%" class="css-bar m-b-0 css-bar-primary css-bar-40"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-body">
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col p-r-0 align-self-center">
                    <h2 class="font-light m-b-0">36870</h2>
                    <h6 class="text-muted">Page Views</h6></div>
                <!-- Column -->
                <div class="col text-right align-self-center">
                    <div data-label="60%" class="css-bar m-b-0 css-bar-danger css-bar-60"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sales Overview</h4>
                <h6 class="card-subtitle">Ample Admin Vs Pixel Admin</h6>
                <div class="amp-pxl" style="height: 300px;"></div>
                <div class="text-center">
                    <ul class="list-inline">
                        <li>
                            <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Ample</h6> </li>
                        <li>
                            <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Pixel</h6> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Newsletter Campaign</h4>
                <h6 class="card-subtitle">Overview of Newsletter Campaign</h6>
                <div class="campaign2 ct-charts" style="height: 300px;"></div>
                <div class="text-center">
                    <ul class="list-inline">
                        <li>
                            <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Open Rate</h6> </li>
                        <li>
                            <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Recurring</h6> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Current Visitors</h4>
                <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                <div id="usa" style="height: 300px"></div>
                <div class="text-center">
                    <ul class="list-inline">
                        <li>
                            <h6 class="text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Valley</h6> </li>
                        <li>
                            <h6 class="text-info"><i class="fa fa-circle font-10 m-r-10"></i>Newyork</h6> </li>
                        <li>
                            <h6 class="text-danger"><i class="fa fa-circle font-10 m-r-10"></i>Kansas</h6> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
<!-- Row -->
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex no-block">
                    <h4 class="card-title">Projects of the Month</h4>
                    <div class="ml-auto">
                        <select class="custom-select">
                            <option selected>January</option>
                            <option value="1">February</option>
                            <option value="2">March</option>
                            <option value="3">April</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive m-t-20">
                    <table class="table stylish-table">
                        <thead>
                            <tr>
                                <th colspan="2">Assigned</th>
                                <th>Name</th>
                                <th>Priority</th>
                                <th>Budget</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width:50px;"><span class="round">S</span></td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small></td>
                                <td>Elite Admin</td>
                                <td><span class="label label-success">Low</span></td>
                                <td>$3.9K</td>
                            </tr>
                            <tr class="active">
                                <td><span class="round"><img src="../assets/images/users/2.jpg" alt="user" width="50" /></span></td>
                                <td>
                                    <h6>Andrew</h6><small class="text-muted">Project Manager</small></td>
                                <td>Real Homes</td>
                                <td><span class="label label-info">Medium</span></td>
                                <td>$23.9K</td>
                            </tr>
                            <tr>
                                <td><span class="round round-success">B</span></td>
                                <td>
                                    <h6>Bhavesh patel</h6><small class="text-muted">Developer</small></td>
                                <td>MedicalPro Theme</td>
                                <td><span class="label label-primary">High</span></td>
                                <td>$12.9K</td>
                            </tr>
                            <tr>
                                <td><span class="round round-primary">N</span></td>
                                <td>
                                    <h6>Nirav Joshi</h6><small class="text-muted">Frontend Eng</small></td>
                                <td>Elite Admin</td>
                                <td><span class="label label-danger">Low</span></td>
                                <td>$10.9K</td>
                            </tr>
                            <tr>
                                <td><span class="round round-warning">M</span></td>
                                <td>
                                    <h6>Micheal Doe</h6><small class="text-muted">Content Writer</small></td>
                                <td>Helping Hands</td>
                                <td><span class="label label-warning">High</span></td>
                                <td>$12.9K</td>
                            </tr>
                            <tr>
                                <td><span class="round round-danger">N</span></td>
                                <td>
                                    <h6>Johnathan</h6><small class="text-muted">Graphic</small></td>
                                <td>Digital Agency</td>
                                <td><span class="label label-info">High</span></td>
                                <td>$2.6K</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <!-- Column -->
        <div class="card"> <img class="" src="<?=base_url()?>assets/images/background/profile-bg.jpg" alt="Card image cap">
            <div class="card-body little-profile text-center">
                <div class="pro-img"><img src="<?=base_url()?>assets/images/users/4.jpg" alt="user" /></div>
                <h3 class="m-b-0">Angela Dominic</h3>
                <p>Web Designer &amp; Developer</p>
                <p><small>Lorem ipsum dolor sit amet, this is a consectetur adipisicing elit</small></p> <a href="javascript:void(0)" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Follow</a>
                <div class="row text-center m-t-20">
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h3 class="m-b-0 font-light">1099</h3><small>Articles</small></div>
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h3 class="m-b-0 font-light">23,469</h3><small>Followers</small></div>
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h3 class="m-b-0 font-light">6035</h3><small>Following</small></div>
                    <div class="col-md-12 m-b-10"></div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
</div>
<!-- Row -->
<div class="row">
    <div class="col-lg-4 col-md-12">
        <!-- card -->
        <div class="card card-inverse card-primary">
            <div class="card-body">
                <div class="d-flex">
                    <div class="m-r-20 align-self-center">
                        <h1 class="text-white"><i class="ti-pie-chart"></i></h1></div>
                    <div>
                        <h3 class="card-title">Bandwidth usage</h3>
                        <h6 class="card-subtitle">March  2017</h6> </div>
                </div>
                <div class="row">
                    <div class="col-4 align-self-center">
                        <h2 class="font-light text-white">50 GB</h2> </div>
                    <div class="col-8 p-t-10 p-b-20 align-self-center">
                        <div class="usage chartist-chart" style="height:60px"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- card -->
        <div class="card card-inverse card-success">
            <div class="card-body">
                <div class="d-flex">
                    <div class="m-r-20 align-self-center">
                        <h1 class="text-white"><i class="icon-cloud-download"></i></h1></div>
                    <div>
                        <h3 class="card-title">Download count</h3>
                        <h6 class="card-subtitle">March  2017</h6> </div>
                </div>
                <div class="row">
                    <div class="col-4 align-self-center">
                        <h2 class="font-light text-white">35487</h2> </div>
                    <div class="col-8 p-t-10 p-b-20 text-right">
                        <div class="spark-count" style="height:60px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Feeds</h4>
                <ul class="feeds">
                    <li>
                        <div class="bg-info"><i class="far fa-bell text-white"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                    <li>
                        <div class="bg-success"><i class="ti-server text-white"></i></div> Server #1 overloaded.<span class="text-muted">2 Hours ago</span></li>
                    <li>
                        <div class="bg-warning"><i class="ti-shopping-cart text-white"></i></div> New order received.<span class="text-muted">31 May</span></li>
                    <li>
                        <div class="bg-danger"><i class="ti-user text-white"></i></div> New user registered.<span class="text-muted">30 May</span></li>
                    <li>
                        <div class="bg-inverse"><i class="far fa-bell text-white"></i></div> New Version just arrived. <span class="text-muted">27 May</span></li>
                    <li>
                        <div class="bg-info"><i class="far fa-bell text-white"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-body bg-info">
                <h4 class="text-white card-title">My Contacts</h4>
                <h6 class="card-subtitle text-white m-b-0 op-5">Checkout my contacts here</h6> </div>
            <div class="card-body">
                <div class="message-box contact-box">
                    <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
                    <div class="message-widget contact-widget">
                        <!-- Message -->
                        <a href="#">
                            <div class="user-img"> <img src="<?=base_url()?>assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Pavan kumar</h5> <span class="mail-desc"><span class="__cf_email__" data-cfemail="f0999e969fb087829180809988959cde939f9d">[email&#160;protected]</span></span></div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                            <div class="user-img"> <img src="<?=base_url()?>assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Sonu Nigam</h5> <span class="mail-desc"><span class="__cf_email__" data-cfemail="fe8e9f939b929fcfc7c6c9be99939f9792d09d9193">[email&#160;protected]</span></span></div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                            <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Arijit Sinh</h5> <span class="mail-desc"><span class="__cf_email__" data-cfemail="e88b9a9d819b8dd9dad1d0c68e8198848198a88f85898184c68b8785">[email&#160;protected]</span></span></div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                            <div class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Pavan kumar</h5> <span class="mail-desc"><span class="__cf_email__" data-cfemail="fb909a8fbb9c969a9297d5989496">[email&#160;protected]</span></span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Recent Comments</h4>
                <h6 class="card-subtitle">Latest Comments on users from Material</h6> </div>
            <!-- ============================================================== -->
            <!-- Comment widgets -->
            <!-- ============================================================== -->
            <div class="comment-widgets">
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row">
                    <div class="p-2"><span class="round"><img src="<?=base_url()?>assets/images/users/1.jpg" alt="user" width="50"></span></div>
                    <div class="comment-text w-100">
                        <h5>James Anderson</h5>
                        <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                        <div class="comment-footer"> <span class="text-muted pull-right">April 14, 2016</span> <span class="label label-info">Pending</span> <span class="action-icons">
                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                    <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                    <a href="javascript:void(0)"><i class="ti-heart"></i></a>    
                                </span> </div>
                    </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row active">
                    <div class="p-2"><span class="round"><img src="<?=base_url()?>assets/images/users/2.jpg" alt="user" width="50"></span></div>
                    <div class="comment-text active w-100">
                        <h5>Michael Jorden</h5>
                        <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                        <div class="comment-footer "> <span class="text-muted pull-right">April 14, 2016</span> <span class="label label-light-success">Approved</span> <span class="action-icons active">
                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                    <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                    <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>    
                                </span> </div>
                    </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row">
                    <div class="p-2"><span class="round"><img src="<?=base_url()?>assets/images/users/3.jpg" alt="user" width="50"></span></div>
                    <div class="comment-text w-100">
                        <h5>Johnathan Doeting</h5>
                        <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                        <div class="comment-footer"> <span class="text-muted pull-right">April 14, 2016</span> <span class="label label-danger">Rejected</span> <span class="action-icons">
                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                    <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                    <a href="javascript:void(0)"><i class="ti-heart"></i></a>    
                                </span> </div>
                    </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row">
                    <div class="p-2"><span class="round"><img src="<?=base_url()?>assets/images/users/4.jpg" alt="user" width="50"></span></div>
                    <div class="comment-text w-100">
                        <h5>James Anderson</h5>
                        <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                        <div class="comment-footer"> <span class="text-muted pull-right">April 14, 2016</span> <span class="label label-info">Pending</span> <span class="action-icons">
                                        <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                        <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                        <a href="javascript:void(0)"><i class="ti-heart"></i></a>    
                                    </span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <button class="float-right btn btn-sm btn-rounded btn-success" data-toggle="modal" data-target="#myModal">Add Task</button>
                <h4 class="card-title">To Do list</h4>
                <h6 class="card-subtitle">List of your next task to complete</h6>
                <!-- ============================================================== -->
                <!-- To do list widgets -->
                <!-- ============================================================== -->
                <div class="to-do-widget m-t-20">
                    <!-- .modal for add task -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Task</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label>Task name</label>
                                            <input type="text" class="form-control" placeholder="Enter Task Name"> </div>
                                        <div class="form-group">
                                            <label>Assign to</label>
                                            <select class="custom-select form-control pull-right">
                                                <option selected="">Sachin</option>
                                                <option value="1">Sehwag</option>
                                                <option value="2">Pritam</option>
                                                <option value="3">Alia</option>
                                                <option value="4">Varun</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                        <li class="list-group-item" data-role="task">
                            <div class="checkbox checkbox-info">
                                <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                <label for="inputSchedule" class=""> <span>Schedule meeting with</span> </label>
                            </div>
                            <ul class="assignedto">
                                <li><img src="<?=base_url()?>assets/images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                <li><img src="<?=base_url()?>assets/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                <li><img src="<?=base_url()?>assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                <li><img src="<?=base_url()?>assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                            </ul>
                        </li>
                        <li class="list-group-item" data-role="task">
                            <div class="checkbox checkbox-info">
                                <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                <label for="inputCall" class=""> <span>Give Purchase report to</span> <span class="label label-danger">Today</span> </label>
                            </div>
                            <ul class="assignedto">
                                <li><img src="<?=base_url()?>assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                <li><img src="<?=base_url()?>assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                            </ul>
                        </li>
                        <li class="list-group-item" data-role="task">
                            <div class="checkbox checkbox-info">
                                <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                <label for="inputBook" class=""> <span>Book flight for holiday</span> </label>
                            </div>
                            <div class="item-date"> 26 jun 2017</div>
                        </li>
                        <li class="list-group-item" data-role="task">
                            <div class="checkbox checkbox-info">
                                <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                                <label for="inputForward" class=""> <span>Forward all tasks</span> <span class="label label-warning">2 weeks</span> </label>
                            </div>
                            <div class="item-date"> 26 jun 2017</div>
                        </li>
                        <li class="list-group-item" data-role="task">
                            <div class="checkbox checkbox-info">
                                <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                                <label for="inputRecieve" class=""> <span>Recieve shipment</span> </label>
                            </div>
                            <div class="item-date"> 26 jun 2017</div>
                        </li>
                        <li class="list-group-item" data-role="task">
                            <div class="checkbox checkbox-info">
                                <input type="checkbox" id="inputpayment" name="inputCheckboxespayment">
                                <label for="inputpayment" class=""> <span>Send payment today</span> </label>
                            </div>
                            <div class="item-date"> 26 jun 2017</div>
                        </li>
                        <li class="list-group-item" data-role="task">
                            <div class="checkbox checkbox-info">
                                <input type="checkbox" id="inputForward2" name="inputCheckboxesd">
                                <label for="inputForward2" class=""> <span>Important tasks</span> <span class="label label-success">2 weeks</span> </label>
                            </div>
                            <ul class="assignedto">
                                <li><img src="<?=base_url()?>assets/images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Assign to Steave"></li>
                                <li><img src="<?=base_url()?>assets/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Assign to Jessica"></li>
                                <li><img src="<?=base_url()?>assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Assign to Selina"></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
</div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<?php $this->load->view('Footer') ?>