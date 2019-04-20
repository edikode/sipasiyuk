<!DOCTYPE html>
<html lang="en">

<head>
<title><?=$judul?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/images/favicon.png">

<!-- Bootstrap Core CSS -->
<link href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/plugins/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">
<!-- chartist CSS -->
<link href="<?=base_url()?>assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
<link href="<?=base_url()?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
<link href="<?=base_url()?>assets/plugins/css-chart/css-chart.css" rel="stylesheet">
<!-- Vector CSS -->
<link href="<?=base_url()?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
<!-- Custom CSS -->
<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
<!-- You can change the theme colors from here -->
<link href="<?=base_url()?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body >

    <?php $this->load->view('templates/sidebar'); ?>

    <div class="page-wrapper">

        <?php
            if(isset($_view)){
                $this->load->view($_view);
            } else {
                redirect('admin/dashboard');
            }
        ?>

        <footer class="footer">
            © 2019 || Proyek Akhir  || Teknik Informatika
        </footer>
    </div>

</body>

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script data-cfasync="false" src="<?=base_url()?>assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?=base_url()?>assets/plugins/popper/popper.min.js"></script>
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?=base_url()?>assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?=base_url()?>assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?=base_url()?>assets/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="<?=base_url()?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="<?=base_url()?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--stickey kit -->
<script src="<?=base_url()?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="<?=base_url()?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?=base_url()?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="<?=base_url()?>assets/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- chartist chart -->
<script src="<?=base_url()?>assets/plugins/chartist-js/dist/chartist.min.js"></script>
<script src="<?=base_url()?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<!-- Vector map JavaScript -->
<script src="<?=base_url()?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?=base_url()?>assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="<?=base_url()?>assets/js/dashboard3.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="<?=base_url()?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

<!-- This is data table -->
<script src="<?=base_url()?>assets/plugins/datatables/datatables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="<?=base_url()?>assets/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url()?>assets/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="<?=base_url()?>assets/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="<?=base_url()?>assets/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="<?=base_url()?>assets/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="<?=base_url()?>assets/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="<?=base_url()?>assets/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>
<script src="<?=base_url()?>assets/plugins/dropify/dist/js/dropify.min.js"></script>
<!-- end - This is for export functionality only -->

<!-- This is data table -->
<script>
     $(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
<!-- This is data table -->

</html>