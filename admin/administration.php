<?
session_start();
if(!isset($_SESSION[a_id]))
{
	die("Only authorized users can enter here");
}
//////////
include("../db.php");
//////////
if(isset($_GET['exit']))
{
    session_destroy();
}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
    <title>მართვა</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="Admin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="Admin/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="Admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />


	<link rel="stylesheet" type="text/css" href="Admin/css/style.css" />
	<link rel="stylesheet" type="text/css" href="Admin/css/style_responsive.css" />
	<link rel="stylesheet" type="text/css" href="Admin/css/style_gray.css" />

	<link href="Admin/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link href="Admin/assets/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
	<link href="Admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="Admin/assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="Admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
    <link href="Admin/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" rel="stylesheet" type="text/css" />


	<script type="text/javascript" src="Admin/js/jquery-1.8.3.min.js"></script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="administration.php">
                    <img src="../assets/images/logo.jpg" width="100px" height="100px" alt="">

                </a>
				<!-- END LOGO -->

				<div id="top_menu" class="nav notify-row">
                    <!-- BEGIN NOTIFICATION -->
                                    </div>
                <!-- END  NOTIFICATION -->

                <div class="top-nav ">
                    <ul class="nav pull-right top-menu">
                        						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="https://demo.betscheme.com/theme/Admin/img/user-avatar.png" alt="" />                                <span class="username">
                                    <?

									echo $_SESSION['a_login']
?>									</span>
							</a>
						</li>
							<li class="">



                                    <a href="?exit"><img src="https://demo.betscheme.com/theme/Admin/img/door-exit.png" alt="" />

                                    </a>


						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
					<!-- END TOP NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->

    <div id="container" class="row-fluid">

        <!-- BEGIN SIDEBAR -->

<div id="sidebar" class="nav-collapse collapse">
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
    <div class="navbar-inverse">
        <form class="navbar-search visible-phone">
            <input type="text" class="search-query" placeholder="Search" />
        </form>
    </div>
    <!-- END RESPONSIVE QUICK SEARCH FORM -->
    <!-- BEGIN SIDEBAR MENU -->

    <?
	include("assets/header.php");
	?>
    <script type="text/javascript">
        $(function() {
            var container = $('.sidebar-menu');
            container.find('a[href="/enghttps://demo.betscheme.com/theme/Admin/dashboard/administrator"]').parent().parent().toggle('open');
            $('.sidebar-menu ul').each(function() {
                if($(this).find('ul li').context.childElementCount == 0) {
                    $(this).parent().css({'display' : 'none'});
                }else{

                }
            });
            container.removeClass('loading');
            container.find('li').removeClass('hidden');
        }());
    </script>
    <!-- END SIDEBAR MENU -->
</div>		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->
		<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
                <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <ul class="breadcrumb">
                                    <li>
                    <a href="/eng"><i class="icon-home"></i></a>
                    <span class="divider">&nbsp;</span>
                </li>
                                                <li>
                    <a href="/eng/admin"></a>                    <span class="divider">&nbsp;</span>
                </li>
                                                <li>
                    <a href="/enghttps://demo.betscheme.com/theme/Admin/dashboard/administrator">Dashboard</a>                    <span class="divider-last">&nbsp;</span>
                </li>
                        </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div id="page" class="dashboard">
                                    <div class="alert alert-info">
                                        <button class="close" data-dismiss="info">�</button>
                                        <strong>Info!</strong> Dashboard interactive statistics and charts are not completed yet. Developement of this section is in progress. For more information please contact project manager.
                                    </div>

				<!-- BEGIN SQUARE STATISTIC BLOCKS
                    <div class="square-state">
                        <div class="row-fluid">
                            <a class="icon-btn span2" href="#">
                                <i class="icon-user"></i>
                                <div>Users</div>
                                <span class="badge badge-success">30</span>
                            </a>
                            <a class="icon-btn span2" href="#">
                                <i class="icon-file-alt"></i>
                                <div>Tickets</div>
                                <span class="badge badge-success">19</span>
                            </a>
                            <a class="icon-btn span2" href="#">
                                <i class="icon-money"></i>
                                <div>Deposits</div>
								<span class="badge badge-success">30</span>
                            </a>
                            <a class="icon-btn span2" href="#">
                                <i class="icon-money"></i>
                                <div>Withdraws</div>
								<span class="badge badge-success">25</span>
                            </a>

                        </div>
                    </div>
                END SQUARE STATISTIC BLOCKS-->




			<!-- START USERS-->
					<div class="row-fluid">
					<div class="span4">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-user"></i> TODAY's USER STATISTICS</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									</span>
                                </div>
								<?
								/*$time = time();
								$time = $time - 30;
								$onlain = mysql_query("SELECT * FROM online WHERE time>$time");
								$row = mysql_num_rows($onlain);
								$AllUsers = mysql_query("SELECT * FROM online");
								$AllUsersCount = mysql_num_rows($AllUsers);*/
								?>

                            </div>
                        </div>

                    </div>
			<!-- END USERS -->

			<!-- START BETTING-->
					<div class="row-fluid">
					<div class="span4">

                        </div>
						<div class="span8">

						</div>
                    </div>
			<!-- END BETTING -->

			<!-- START FINANCE-->
					<div class="row-fluid">
					<div class="span4">

                        </div>
						<div class="span8">

						</div>
                    </div>
			<!-- END FINANCE -->







<!-- BEGIN INLINE NOTIFICATIONS widget-->

                  </div>
                  <!-- END INLINE NOTIFICATIONS widget-->

  <!--- <img src="https://demo.betscheme.com/theme/Admin/img/events-chart.png" alt=""> ---!>



</div>
<!-- END PAGE CONTENT-->
</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->

	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
	<script src="Admin/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="Admin/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="Admin/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
	<script src="Admin/assets/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="Admin/js/jquery.blockui.js"></script>

	<script type="text/javascript" src="Admin/js/jquery.cookie.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>

	<script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/js/excanvas.js"></script>

	<script type="text/javascript" src="https://demo.betscheme.com/theme/Admin/js/respond.js"></script>
	<![endif]-->


    <!-- ie8 fixes -->
    <!--[if lt IE 9]>




    <![endif]-->
    <script src="Admin/assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <script type="text/javascript" src="Admin/assets/jquery-knob/js/jquery.knob.js"></script>
	<script type="text/javascript" src="Admin/js/jquery.peity.min.js"></script>
    <script type="text/javascript" src="Admin/assets/uniform/jquery.uniform.min.js" type="text/javascript"></script>

	<script type="text/javascript" src="Admin/js/scripts.js"></script>

    <script type="text/javascript" src="Admin/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="Admin/assets/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="Admin/assets/clockface/js/clockface.js"></script>
    <script type="text/javascript" src="Admin/assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="Admin/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>

    <script type="text/javascript" src="Admin/assets/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="Admin/assets/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="Admin/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
    <script type="text/javascript" src="Admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

    <!--[if lte IE 8]>
    <script language="javascript" type="text/javascript" src="https://demo.betscheme.com/theme/Admin/assets/flot/excanvas.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="Admin/assets/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="Admin/assets/flot/jquery.flot.pie.js"></script>
<!--Begin Comm100 Live Chat Code-->
	<script>
		jQuery(document).ready(function() {
			// initiate layout and plugins
			App.setMainPage(true);
			App.init();
		});
	</script>
</body>
<!-- END BODY -->
</html>
