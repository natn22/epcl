<?php
include('lock.php');
?>


<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>Report</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- PageGuide -->
	<link rel="stylesheet" href="css/plugins/pageguide/pageguide.css">
	<!-- Fullcalendar -->
	<link rel="stylesheet" href="css/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="css/plugins/fullcalendar/fullcalendar.print.css" media="print">
	<!-- chosen -->
	<link rel="stylesheet" href="css/plugins/chosen/chosen.css">
	<!-- select2 -->
	<link rel="stylesheet" href="css/plugins/select2/select2.css">
	<!-- icheck -->
	<link rel="stylesheet" href="css/plugins/icheck/all.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>


	<!-- Nice Scroll -->
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery-ui.js"></script>
	<!-- Touch enable for jquery UI -->
	<script src="js/plugins/touch-punch/jquery.touch-punch.min.js"></script>
	<!-- slimScroll -->
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- vmap -->
	<script src="js/plugins/vmap/jquery.vmap.min.js"></script>
	<script src="js/plugins/vmap/jquery.vmap.world.js"></script>
	<script src="js/plugins/vmap/jquery.vmap.sampledata.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Flot -->
	<script src="js/plugins/flot/jquery.flot.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.bar.order.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.resize.min.js"></script>
	<!-- imagesLoaded -->
	<script src="js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- PageGuide -->
	<script src="js/plugins/pageguide/jquery.pageguide.js"></script>
	<!-- FullCalendar -->
	<script src="js/plugins/fullcalendar/moment.min.js"></script>
	<script src="js/plugins/fullcalendar/fullcalendar.min.js"></script>
	<!-- Chosen -->
	<script src="js/plugins/chosen/chosen.jquery.min.js"></script>
	<!-- select2 -->
	<script src="js/plugins/select2/select2.min.js"></script>
	<!-- icheck -->
	<script src="js/plugins/icheck/jquery.icheck.min.js"></script>

	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="js/demonstration.min.js"></script>

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
		<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />
</head>

<body>
	<div id="new-task" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Add new task</h4>
				</div>
				
			</div>
		</div>
	</div>
	<div id="navigation">
		<div class="container-fluid">
			<img src="PSI.png" height="45" width="45" align="right" >
			<a href="#" id="brand">Deep Learning Laboratory - Dept. of Psychology</a>
			
			<div class="user">
				
					
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown">Administrator
						<img src="img/demo/user-avatar.jpg" alt="">
					</a>
					<ul class="dropdown-menu pull-right">
					
						<li>
							<a href="logout.php">Sign out</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="content">
		<div id="left">
			
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Menu</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="dashboard.php">Dashboard</a>
					</li>
					<li>
						<a href="create.php">Create New Experiment</a>
					</li>
					<li>
						<a href="modify.php">Modify Existing Experiment</a>
					</li>
					<li>
						<a href="report.php">Report</a>
					</li>
				</ul>
			</div>
			
		</div>
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Reports</h1>
					</div>
					<div class="pull-right">
						
						<ul class="stats">
							
							<li class='lightred'>
								<i class="fa fa-calendar"></i>
								<div class="details">
									<span class="big">
										<?php
$now = new DateTime();
echo $now->format('Y-m-d'); 
?>
									</span>
									
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="dashboard.php">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="report.php">Report</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>

				<div>
				<form name="change">
					<p></p>
					<?php
						function usergraph($userids)	{
							echo '<script type="text/javascript">alert("Selected userid" . $userids); </script>';
						}
					?>
				<div>
				<script>
				$(function() {
    $('#userbtns').hide(); 
    $('#grpbtns').hide(); 
    $('#options1').change(function(){
        if($('#options1').val() == "UserID") {
            $('#userbtns').show(); 
        } else {
            $('#userbtns').hide(); 
        }
        if($('#options1').val() == "UserGrp") {
            $('#grpbtns').show(); 
        } else {
            $('#grpbtns').hide(); 
        } 
    });
});
				</script>
				<p>Choose User ID / User Group</p>	

				<SELECT NAME="options1" id="options1">
				<option name="UserID" value="UserID">-- Select User ID / User Group --</option>	
				<option name="UserID" value="UserID">User ID</option>	
				<option name="UserGrp" value="UserGrp">User Group</option>
				</SELECT>
				
				<div id='userbtns' name='usertns' style="display: none;">
				<p>Click on the button below to view Learning Variable for Individual Users</p>
				<a href="../graphs/r1_user_learning_curve/report_user_lrng.php" target="search_iframe" class="btn btn-primary">Individial Participant Learning Curve</a> 
				<a href="../graphs/r3_user_heatmap/report_user_heat.php" target="search_iframe" class="btn btn-primary">Individual Participant Heat Map</a>
				</div>

				<div id='grpbtns' style="display: none;">
				<p>Click on the button below to view Learning Variable for User Group</p>
				<a href="../graphs/r2_group_learning_curve/report_grp_lrng.php" target="search_iframe" class="btn btn-primary">User Group Learning Curve</a>
				<a href="../graphs/r4_group_heatmap/report_grp_heat.php "target="search_iframe" class="btn btn-primary">User Group Heat Map</a>
				</div>

				<div>
					<iframe src="" width=960px height="960" frameborder=0 scrolling=no name="search_iframe"></iframe>
				</div>
				</div>
				
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>