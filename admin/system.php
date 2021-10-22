<?
session_start();
if(!isset($_SESSION[a_id]))
{
	die("Only authorized users can enter here");
}
//////////
include("../db.php");
//////////
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
 <script src="ckeditor/ckeditor.js"></script>



	<meta charset="utf-8" />
    <title><?

		echo 'სისტემა';

	?></title>
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
				<img src="../img/logo.jpg" width="100px" height="100px" alt="">
                    
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
                                                               <span class="username">
                                    <? echo $_SESSION['a_login'] ?>                                </span>
							</a>
						</li>
							<li class="">

							
								

                               
							
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
            container.find('a[href="/users.php"]').parent().parent().toggle('open');
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
                                       <span class="divider">&nbsp;</span>
                </li>
                                                <li>
                                      <span class="divider-last">&nbsp;</span>
                </li>
                        </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard">		
<?

	
	
	if(isset($_GET['edit']) and !empty($_GET['edit']))
	{
		$id = mysql_real_escape_string($_GET['edit']);
		
	$Product3 = mysql_query("SELECT * FROM system WHERE id='".$id."'");
	$ProductRow3 = mysql_fetch_array($Product3);	
		echo '<div class="row-fluid ">
				<div class="span12">
					<!-- BEGIN INLINE TABS PORTLET-->
					<div class="widget">
					<div class="widget-body">
							<div class="row-fluid">
								<div class="span12">
									<!--BEGIN TABS-->
									<div class="table table-custom">
									 <h3>რედაქტირება <b>'.$ProductRow3[name].'</b></h3> 
									 <br />';
									 echo '<form action="system.php?edit='.$ProductRow3[id].'" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
									 <div class="input text"><label for="UserEmail">მობილური</label><input name="mobile" type="text" value="'.$ProductRow3['mobile'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">E-mail</label><input name="email" type="text" value="'.$ProductRow3['email'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">copyright</label><input name="copyright" type="text" value="'.$ProductRow3['copyright'].'" id="UserEmail"/></div>

									 <div class="input text"><label for="UserEmail">ფასი დიზელი</label><input name="fuel_price_diesel" type="text" value="'.$ProductRow3['fuel_price_diesel'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">ფასი გაზი</label><input name="fuel_price_gas" type="text" value="'.$ProductRow3['fuel_price_gas'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">ფასი ბენზინი</label><input name="fuel_price_benz" type="text" value="'.$ProductRow3['fuel_price_benz'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">კურსი დოლარი</label><input name="cur_dollar" type="text" value="'.$ProductRow3['cur_dollar'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">კურსი ევრო</label><input name="cur_euro" type="text" value="'.$ProductRow3['cur_euro'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">Google API</label><input name="google_api" type="text" value="'.$ProductRow3['google_api_key'].'" id="UserEmail"/></div>
									 
									 
									
									 ';
									
									 
									/*
									
									<div class="input text"><label for="UserFirstName">ჩვენს შესახებ(GEO)</label><textarea name="about" id="editor3" rows="10" cols="80" type="text">'.$ProductRow3[about_us_eng_l].'</textarea>
									<script>
										// Replace the <textarea id="editor1"> with a CKEditor
										// instance, using default configuration.
										CKEDITOR.replace( "editor3" );
									</script>
									</div>
									<div class="input text"><label for="UserFirstName">ჩვენს შესახებ(RUS)</label><textarea name="about_rus" id="editor4" rows="10" cols="80" type="text">'.$ProductRow3[about_us_rus_l].'</textarea>
									<script>
										// Replace the <textarea id="editor1"> with a CKEditor
										// instance, using default configuration.
										CKEDITOR.replace( "editor4" );
									</script>
									</div>
									<div class="input text"><label for="UserFirstName">ჩვენ შესახებ(ENG)</label><textarea name="text1_eng" id="editor3" rows="10" cols="80" type="text">'.$ProductRow3[text1_eng].'</textarea>
									<script>
					// Replace the <textarea id="editor1"> with a CKEditor
					// instance, using default configuration.
					CKEDITOR.replace( "editor3" );
				</script>
									</div>
									<div class="input text"><label for="UserFirstName">ჩვენ შესახებ(RUS)</label><textarea name="text1_rus" id="editor4" rows="10" cols="80" type="text">'.$ProductRow3[text1_rus].'</textarea>
									<script>
					// Replace the <textarea id="editor1"> with a CKEditor
					// instance, using default configuration.
					CKEDITOR.replace( "editor4" );
				</script>
									</div>*/
									
									
									
									
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
									
									echo '
									
									
									
	<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
									 echo '                                 </div>
									</div></div></div></div></div></div>';

									if(isset($_POST['mobile']))
									{
										//echo "hello";
										$mobile2 = $_POST['mobile2'];
										$mobile = $_POST['mobile'];
										$email = $_POST['email'];
										$email2 = $_POST['email2'];
										$copy = $_POST['copyright'];

										$fuel_price_diesel = $_POST['fuel_price_diesel'];
										$fuel_price_gas = $_POST['fuel_price_gas'];
										$fuel_price_benz = $_POST['fuel_price_benz'];
										$cur_dollar = $_POST['cur_dollar'];
										$cur_euro = $_POST['cur_euro'];
										$google_api = $_POST['google_api'];

										
										$about = $_POST[about];
										$about_rus = $_POST[about_rus];
										
										if(empty($mobile))
										{
											echo '<h2 style="color:red;"><b>თქვენ გამოტოვეთ საჭირო ველები!!!</b></h2>';
										}
										else
										{
												
												$UpdateProduct = mysql_query("UPDATE system SET mobile='$mobile', 
																								email='$email',   
																								copyright='$copy',
																								fuel_price_diesel='$fuel_price_diesel',
																								fuel_price_gas='$fuel_price_gas',
																								fuel_price_benz='$fuel_price_benz',
																								cur_dollar='$cur_dollar',
																								cur_euro='$cur_euro',
																								google_api_key='$google_api'
																								WHERE id='$id'") or die(mysql_error());
												if($UpdateProduct == true)
												{
													echo '<h2 style="color:green;"><b> შესწორებულია!!!</b></h2>';
												}
												else
												{
													echo 'შეცდომაა';
												}
												
												echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=system.php?edit=1">';
												
										}
									}
	}
	
		?>
    </div>
    <!-- END PAGE CONTENT-->
</div>			<!-- END PAGE CONTAINER-->
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
<?
if(isset($_GET['exit']))
{
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=http://geosky.ge/admin" />';
}
?>
</body>
<!-- END BODY -->
</html>
