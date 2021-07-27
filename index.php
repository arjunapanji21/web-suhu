<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>STIKOM DB JAMBI</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="template/bootstrap/css/bootstrap.min.css">
		<!-- Datepicker  -->
        <link rel="stylesheet" href="template/bootstrap/css/datepicker.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="template/font-awesome-4.7/css/font-awesome.min.css">
       <!-- DataTables -->
        <link rel="stylesheet" href="template/plugins/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="template/dist/css/AdminLTE.min.css">
       
        <link rel="stylesheet" href="template/dist/css/skins/_all-skins.min.css">

		<!-- CKEditor -->
		<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="assets/ckfinder/ckfinder.js"></script>
      
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="index.php" class="logo">
                   <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>STIKOM DB JAMBI</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" >
                                    <img src="template/dist/img/primary-logout.png" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/stikom.png" class="img-square" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>SEKOLAH TINGGI <br>ILMU KOMPUTER<br>DINAMIKA BANGSA</p>
                        </div>
                    </div>
               
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <span>DASHBOARD</span>
                            </a>
                        </li>
						
						<li>
                            <a href="index.php?m=mahasiswa">
                                <i class="fa fa-user"></i> <span>DATA MAHASISWA</span>
                            </a>
                        </li>
						
						<li>
                            <a href="index.php?m=jadwal-kuliah">
                                <i class="fa fa-calendar"></i> <span>JADWAL KULIAH</span>
                            </a>
                        </li>

						
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       SISTEM INFORMASI AKADEMIK
                        <small>STIKOM DB JAMBI</small>
                    </h1>
                    <ol class="breadcrumb">
                    </ol>
                </section>
				
                <?php
                include("konten.php");
                ?>



            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; 2017 STIKOM DB JAMBI</strong> All rights reserved.
            </footer>
            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <script src="template/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="template/bootstrap/js/bootstrap.min.js"></script>
		 <!-- Datepicker -->
        <script src="template/bootstrap/js/bootstrap-datepicker.js"></script>
        <!-- DataTables -->
        <script src="template/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="template/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="template/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="template/plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="template/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="template/dist/js/demo.js"></script>

        <script src="template/plugins/chartjs/Chart.js"></script>


		
        <!-- page script -->
        <script>

            $(function () {
				$('.tanggal').datepicker({
					format:'yyyy-mm-dd'
				});
				
				$('.tanggal').on('changeDate', function(ev){
					$(this).datepicker('hide');
				});
            });
        </script>

        <script>
            
            //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : 700,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Chrome'
      },
      {
        value    : 500,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'IE'
      },
      {
        value    : 400,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'FireFox'
      },
      {
        value    : 600,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Safari'
      },
      {
        value    : 300,
        color    : '#3c8dbc',
        highlight: '#3c8dbc',
        label    : 'Opera'
      },
      {
        value    : 100,
        color    : '#d2d6de',
        highlight: '#d2d6de',
        label    : 'Navigator'
      }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

        </script>
		
    </body>
</html>
