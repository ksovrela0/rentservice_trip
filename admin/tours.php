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

		echo 'ტურები';

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

	<link href="assets/css/kendoUI/kendo.common.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/kendoUI/kendo.default.min.css" rel="stylesheet" type="text/css"/>

	<link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/jquery-ui/chosen.css" rel="stylesheet" type="text/css"/>

    
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
                    <img src="../images/logo2.png" width="100px" height="100px" alt="">
                    
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

	if(isset($_GET['add']))
	{
		//$id = mysql_real_escape_string($_GET['add']);
		//$Collection4 = mysql_query("SELECT * FROM collections WHERE id='".$id."'");
		//$CollectionRow4 = mysql_fetch_array($Collection4);	
		echo '<div class="row-fluid ">
				<div class="span12">
					<!-- BEGIN INLINE TABS PORTLET-->
					<div class="widget">
					<div class="widget-body">
							<div class="row-fluid">
								<div class="span12">
									<!--BEGIN TABS-->
									<div class="table table-custom">
									 <h3>დამატება <b>'.$ProductRow3[name_eng].'</b></h3> 
									 <br />';
									 echo '<form action="tours.php?add" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
									 <div class="input text"><label for="UserDateOfBirth">მთავარი საურათი</label><input name="img_m" type="file" accept="image/*" id="UserUsername"/></div>
									 
									 <div class="input text"><label for="UserEmail">დასახელება ENG</label><input name="name_eng" type="text" value="'.$ProductRow3['name_eng'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">დასახელება RUS</label><input name="name_rus" type="text" value="'.$ProductRow3['name_rus'].'" id="UserEmail"/></div>
									 
									 <div class="input text"><label for="UserEmail">ტურის დაწყება(ქალაქი)</label><input name="f" type="text" value="'.$ProductRow3['f'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">ტურის დამთავრება(ქალაქი)</label><input name="t" type="text" value="'.$ProductRow3['t'].'" id="UserEmail"/></div>
									 
									 <div class="input text"><label for="UserEmail">ტურის დაწყების თარიღი (მაგ DD/MM/YY)</label><input name="start" type="text" value="'.$ProductRow3['start'].'" id="UserEmail"/></div>
									 
									 <div class="input text"><label for="UserFirstName">აღწერა(ENG)</label><textarea name="desc_eng" id="editor3" rows="10" cols="80" type="text">'.$ProductRow3[desc_eng].'</textarea>
									<script>

										CKEDITOR.replace( "editor3" );
									</script>
									</div>
									
									
									<div class="input text"><label for="UserFirstName">აღწერა(RUS)</label><textarea name="desc_rus" id="editor4" rows="10" cols="80" type="text">'.$ProductRow3[desc_rus].'</textarea>
									<script>

										CKEDITOR.replace( "editor4" );
									</script>
									</div>
									
									<div class="input text"><label for="UserEmail">ფასი</label><input name="price" type="text" value="'.$ProductRow3['price'].'" id="UserEmail"/></div>
									
									 
									<br>
									<div class="input text"><label for="UserEmail">აირჩიეთ ტურის ტიპი</label><select name="type">';
										echo '<option value="1">Group</option>';
										echo '<option value="2">Family</option>';
										echo '<option value="3">Individual</option>';
									
									
									echo '</select></div>
									
									

									 <div class="input text"><label for="UserDateOfBirth">სურათი 1</label><input name="img1" type="file" accept="image/*" id="UserUsername"/></div>
									 

									 <div class="input text"><label for="UserDateOfBirth">სურათი 2</label><input name="img2" type="file" accept="image/*" id="UserUsername"/></div>
									 

									 <div class="input text"><label for="UserDateOfBirth">სურათი 3</label><input name="img3" type="file" accept="image/*" id="UserUsername"/></div>
									 

									 <div class="input text"><label for="UserDateOfBirth">სურათი 4</label><input name="img4" type="file" accept="image/*" id="UserUsername"/></div>
									 
									 
									
									
									';
									
									
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
									
									echo '
									
									
									
	<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
									 echo '                                 </div>
									</div></div></div></div></div></div>';

									if(isset($_POST['name_eng']))
									{

										$name_eng = $_POST['name_eng'];
										$name_rus = $_POST['name_rus'];
										
										$desc_eng = $_POST['desc_eng'];
										$desc_rus = $_POST['desc_rus'];
										
										$price = $_POST[price];
										$f = $_POST['f'];
										$t = $_POST['t'];
										$start = $_POST['start'];
										$type = $_POST[type];
										$filep = $_FILES['img_m']['tmp_name'];
										$filep1 = $_FILES['img1']['tmp_name'];
										$filep2 = $_FILES['img2']['tmp_name'];
										$filep3 = $_FILES['img3']['tmp_name'];
										$filep4 = $_FILES['img4']['tmp_name'];
			
										if(empty($name_eng))
										{
											echo '<h2 style="color:red;"><b>თქვენ გამოტოვეთ საჭირო ველები!!!</b></h2>';
										}
										else
										{
												$name = rand(1000,99999).rand(1000,99999).rand(1000,99999).'.jpg';
												
												$name1 = rand(1000,99999).rand(1000,99999).rand(1000,99999).'.jpg';
												$name2 = rand(1000,99999).rand(1000,99999).rand(1000,99999).'.jpg';
												$name3 = rand(1000,99999).rand(1000,99999).rand(1000,99999).'.jpg';
												$name4 = rand(1000,99999).rand(1000,99999).rand(1000,99999).'.jpg';
												$name5 = rand(1000,99999).rand(1000,99999).rand(1000,99999).'.jpg';
												$AddProduct = mysql_query("INSERT INTO tours(`name_eng`,`name_rus`,`desc_rus`,`desc_eng`,`price`,`start`,`type`,`f`,`t`) VALUES('$name_eng','$name_rus','$desc_rus','$desc_eng','$price','$start','$type','$f','$t')");
												if($AddProduct == true)
												{
													echo '<h2 style="color:green;"><b> დამატებულია!!!</b></h2>';
												}
												else
												{
													echo 'შეცდომაა';
												}

												
												
												if(!empty($filep))
												{
													if($_FILES["img_m"]["size"] > 1024*10*1024)
													{
														echo ("Размер файла превышает три мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["img_m"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["img_m"]["tmp_name"], $path."/tours/".$name);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE tours SET m_pic='http://rentservice.ge/tours/$name' WHERE name_eng='$name_eng' and desc_eng='$desc_eng' and price='$price' and start='$start'") or die(mysql_error());
													}
												}
												if(!empty($filep1))
												{
													if($_FILES["img1"]["size"] > 1024*10*1024)
													{
														echo ("Размер файла превышает три мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["img1"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["img1"]["tmp_name"], $path."/tours/".$name1);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE tours SET pic1='http://rentservice.ge/tours/$name1' WHERE name_eng='$name_eng' and desc_eng='$desc_eng' and price='$price' and start='$start'") or die(mysql_error());
													}
												}
												if(!empty($filep2))
												{
													if($_FILES["img2"]["size"] > 1024*10*1024)
													{
														echo ("Размер файла превышает три мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["img2"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["img2"]["tmp_name"], $path."/tours/".$name2);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE tours SET pic2='http://rentservice.ge/tours/$name2' WHERE name_eng='$name_eng' and desc_eng='$desc_eng' and price='$price' and start='$start'") or die(mysql_error());
													}
												}
												if(!empty($filep3))
												{
													if($_FILES["img3"]["size"] > 1024*10*1024)
													{
														echo ("Размер файла превышает три мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["img3"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["img3"]["tmp_name"], $path."/tours/".$name3);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE tours SET pic3='http://rentservice.ge/tours/$name3' WHERE name_eng='$name_eng' and desc_eng='$desc_eng' and price='$price' and start='$start'") or die(mysql_error());
													}
												}
												if(!empty($filep4))
												{
													if($_FILES["img4"]["size"] > 1024*10*1024)
													{
														echo ("Размер файла превышает три мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["img4"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["img4"]["tmp_name"], $path."/tours/".$name4);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE tours SET pic4='http://rentservice.ge/tours/$name4' WHERE name_eng='$name_eng' and desc_eng='$desc_eng' and price='$price' and start='$start'") or die(mysql_error());
													}
												}
												echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=tours.php">';
												
										}
									}
									
									 echo '                                 </div>
									</div></div></div></div></div></div>';
	}
	if(isset($_GET['del']) and !empty($_GET['del']) and !isset($_GET[comment_id]))
	{
	$id = mysql_real_escape_string($_GET['del']);
	$Product2 = mysql_query("SELECT * FROM tours WHERE id='".$id."'");
	$ProductRow2 = mysql_fetch_array($Product2);
	echo '<div class="row-fluid ">
				<div class="span12">
					<!-- BEGIN INLINE TABS PORTLET-->
					<div class="widget">
					<div class="widget-body">
							<div class="row-fluid">
								<div class="span12">
									<!--BEGIN TABS-->
									<div class="table table-custom">
									 <h3>პროექტი <b>'.$ProductRow2[name_eng].' წაშლა</b></h3> 
									 <br />
										<div class="tab-content">
											Are you sure?<br> <a href="tours.php?del='.$_GET[del].'&yes">Yes, of course</a><br><a href="tours.php" style="color:red;">No</a>                                    </div>
									</div>
									</div></div></div></div></div></div>';
									if(isset($_GET[yes]))
									{
										$DelProduct = mysql_query("DELETE FROM tours WHERE id='".$id."'");
										if($DelProduct == true)
										{
											echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=tours.php"><h2 style="color:green;"><b>PRODUCT '.$ProductRow2[title].' წაშლილია</b></h2>';
											
										}
									}
									
	}
	if(isset($_GET['edit']) and !empty($_GET['edit']))
	{
		$id = mysql_real_escape_string($_GET['edit']);
		if(isset($_GET[d]))
		{
			$d = $_GET[d];
			if($d == '1')
			{
				$Up = mysql_query("UPDATE tours SET m_pic='' WHERE id='$id'");
			}
			
			if($d == '2')
			{
				$Up = mysql_query("UPDATE tours SET pic1='' WHERE id='$id'");
			}
			if($d == '3')
			{
				$Up = mysql_query("UPDATE tours SET pic2='' WHERE id='$id'");
			}
			if($d == '4')
			{
				$Up = mysql_query("UPDATE tours SET pic3='' WHERE id='$id'");
			}
			if($d == '5')
			{
				$Up = mysql_query("UPDATE tours SET pic4='' WHERE id='$id'");
			}

		}

	$Product3 = mysql_query("SELECT * FROM tours WHERE id='".$id."'");
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
									 <h3>რედაქტირება <b>'.$ProductRow3[name_eng].'</b></h3> 
									 <br />';
									 echo '<form action="tours.php?edit='.$ProductRow3[id].'" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
									 <div class="input text"><img src="'.$ProductRow3[image].'" height="240" width="120"></div>
									 <div class="input text"><label for="UserDateOfBirth">მთავარი საურათი(<a href="?edit='.$id.'&d=1" style="color:red;">წაშლა</a>)</label><input name="img_m" type="file" accept="image/*" id="UserUsername"/></div>
									 
									 <div class="input text"><label for="UserEmail">დასახელება ENG</label><input name="name_eng" type="text" value="'.$ProductRow3['name_eng'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">დასახელება RUS</label><input name="name_rus" type="text" value="'.$ProductRow3['name_rus'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">დასახელება GEO</label><input name="name_geo" type="text" value="'.$ProductRow3['name_geo'].'" id="UserEmail"/></div>
									 
									<div id="tour_kendo" style="width: 700px;"></div>
									';
									
									
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
									
									echo '
									
									
									
	<div class="submit"><input  class="btn" style="margin-top: 15px;" type="submit" value="Submit"/></div></form>';
									 echo '                                 </div>
									</div></div></div></div></div></div>';

									if(isset($_POST['name_eng']))
									{

										$name_eng = $_POST['name_eng'];
										$name_rus = $_POST['name_rus'];
										
										$desc_eng = $_POST['desc_eng'];
										$desc_rus = $_POST['desc_rus'];
										
										$price = $_POST[price];
										$f = $_POST['f'];
										$t = $_POST['t'];
										$start = $_POST['start'];
										$type = $_POST[type];
										$filep = $_FILES['img_m']['tmp_name'];
										$filep1 = $_FILES['img1']['tmp_name'];
										$filep2 = $_FILES['img2']['tmp_name'];
										$filep3 = $_FILES['img3']['tmp_name'];
										$filep4 = $_FILES['img4']['tmp_name'];
			
										if(empty($name_eng))
										{
											echo '<h2 style="color:red;"><b>თქვენ გამოტოვეთ საჭირო ველები!!!</b></h2>';
										}
										else
										{
												$UpdateProduct = mysql_query("UPDATE tours SET type='$type', name_eng='$name_eng', duration='$_POST[duration]', name_rus='$name_rus', desc_rus='$desc_rus', desc_eng='$desc_eng', price='$price', start='$start', `f`='$f', `t`='$t' WHERE id='$id'") or die(mysql_error());
												if($UpdateProduct == true)
												{
													echo '<h2 style="color:green;"><b> შესწორებულია!!!</b></h2>';
												}
												else
												{
													echo 'შეცდომაა';
												}


												$name = rand(1000,99999).rand(1000,99999).rand(1000,99999).'.jpg';
												
												$name1 = rand(1000,99999).rand(1000,99999).rand(1000,99999).'.jpg';
												$name2 = rand(1000,99999).rand(1000,99999).rand(1000,99999).'.jpg';
												$name3 = rand(1000,99999).rand(1000,99999).rand(1000,99999).'.jpg';
												$name4 = rand(1000,99999).rand(1000,99999).rand(1000,99999).'.jpg';
												// загружаем файл
												if(!empty($filep))
												{
													if($_FILES["img_m"]["size"] > 1024*5*1024)
													{
														echo ("Размер файла превышает 5 мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["img_m"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["img_m"]["tmp_name"], $path."/tours/".$name);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE tours SET m_pic='http://rentservice.ge/tours/$name' WHERE id='".$id."'") or die(mysql_error());
													}
												}
												
												if(!empty($filep1))
												{
													if($_FILES["img1"]["size"] > 1024*5*1024)
													{
														echo ("Размер файла превышает 5 мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["img1"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["img1"]["tmp_name"], $path."/tours/".$name1);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE tours SET pic1='http://rentservice.ge/tours/$name1' WHERE id='".$id."'") or die(mysql_error());
													}
												}
												if(!empty($filep2))
												{
													if($_FILES["img2"]["size"] > 1024*5*1024)
													{
														echo ("Размер файла превышает 5 мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["img2"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["img2"]["tmp_name"], $path."/tours/".$name2);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE tours SET pic2='http://rentservice.ge/tours/$name2' WHERE id='".$id."'") or die(mysql_error());
													}
												}
												if(!empty($filep3))
												{
													if($_FILES["img3"]["size"] > 1024*5*1024)
													{
														echo ("Размер файла превышает 5 мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["img3"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["img3"]["tmp_name"], $path."/tours/".$name3);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE tours SET pic3='http://rentservice.ge/tours/$name3' WHERE id='".$id."'") or die(mysql_error());
													}
												}
												if(!empty($filep4))
												{
													if($_FILES["img4"]["size"] > 1024*5*1024)
													{
														echo ("Размер файла превышает 5 мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["img4"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["img4"]["tmp_name"], $path."/tours/".$name4);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE tours SET pic4='http://rentservice.ge/tours/$name4' WHERE id='".$id."'") or die(mysql_error());
													}
												}
												
												
												echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=tours.php">';
												
										}
									}
	}
	if(!isset($_GET['edit']) and !isset($_GET['del']) and !isset($_GET['add']))
	{
	echo '<div class="row-fluid ">
				<div class="span12">
					<!-- BEGIN INLINE TABS PORTLET-->
					<div class="widget">
					<div class="widget-body">
							<div class="row-fluid">
								<div class="span12">
									<!--BEGIN TABS-->
									<div class="table table-custom">
									 <ul class="nav nav-tabs">
										<li class="active">
						<a href="#">სია</a>                </li>
								<li >
						<a href="tours.php?add">დამატება</a>                </li>
							</ul>
									 <br />
									 <div class="tab-content">
										
										<div class="row-fluid">
			<div class="span12">
				<!-- BEGIN TABLE widget-->
				<div class="widget">
					<div class="widget-title">
						<h4>
							<i class="icon-reorder"></i>
														Data list                                            </h4>

					</div>
					<div class="widget-body">
						<table class="table table-hover">
							<thead>
							<tr>
																	<th>
											<a href="/users.php/index/sort:id/direction:asc" class="desc">Id</a>                                    </th>
																		<th>
											<a href="/users.php/index/sort:username/direction:asc">Image</a>                                    </th>
											<th>
											<a href="/users.php/index/sort:username/direction:asc">დასახელება ENG</a>                                    </th>
											<th>
											<a href="/users.php/index/sort:username/direction:asc">დასახელება RUS</a>                                    </th>
											
											
											
											
									
											
									
																<th>
										Actions                                </th>
								
														</tr>
							</thead>
							<tbody>';

						   
						   $Product = mysql_query("SELECT * FROM tours ORDER BY id DESC") or die(mysql_error());
						   $ProductRow = mysql_fetch_array($Product);
						   do
						   {
							   echo "<tr><td class=''>".$ProductRow[id]."</td><td class=''><img src='".$ProductRow[image]."' width='90' height='90'></td><td class=''>";
							   echo $ProductRow[name_eng];
							   echo "</td>";		
							   echo "<td class=''>";
							   echo $ProductRow[name_rus];
							   echo "</td>";
							   
							  echo "<td style='min-width: 190px;' class='actions'>
		<a href='?edit=$ProductRow[id]' class='btn btn-mini btn-primary'>Edit</a> <a href='?del=$ProductRow[id]' class='btn btn-mini btn-success'>Delete</a>  </td>                       </tr>";
						   }
						   while($ProductRow = mysql_fetch_array($Product));
						   

							
							
												   echo ' <tr>
																<td>
															   </td>
																<td>
															   </td>
																<td>
															   </td>
																<td>
															   </td>
																<td>
															   </td>
																						<td></td>
														</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- END TABLE widget-->
			</div>
		</div>

									 
																	  </div>
									</div></div></div></div></div></div>';	
	}








		?>
    </div>
    <!-- END PAGE CONTENT-->
</div>			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>

	<div title="ტურის აწყობა" id="get_edit_page"></div>
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
	<script type="text/javascript" language="javascript" src="assets/plugins/jquery-ui/chosen.jquery.js"></script>
	<script type="text/javascript" language="javascript" src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" language="javascript" src="assets/js/kendoUI/kendo.all.min.js"></script>
	<script type="text/javascript" language="javascript" src="assets/js/kendoUI/kendo.main.class.js"></script>
	<script type="text/javascript" language="javascript" src="assets/js/kendoUI/pako_deflate.min.js"></script>  

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
			var hid = "&tour_id=<?php echo $_REQUEST['edit']; ?>";
			LoadKendoTable_incomming(hid);
		});

		var aJaxURL	        =   "server-side/tours.action.php";
		function LoadKendoTable_incomming(hidden){

			//KendoUI CLASS CONFIGS BEGIN
			
			var gridName        = 	'tour_kendo';
			var actions         = 	'<div class="btn btn-list"><a id="button_add" style="color:white;" class="btn ripple btn-primary"><i class="fas fa-plus-square"></i> დამატება</a><a id="button_trash" style="color:white;" class="btn ripple btn-primary"><i class="fas fa-trash"></i> წაშლა</a></div>';
			var editType        =   "popup"; // Two types "popup" and "inline"
			var itemPerPage     = 	20;
			var columnsCount    =	3;
			var columnsSQL      = 	[
										"id:string",
										"location:string",
										"position:string"
									];
			var columnGeoNames  = 	[
										"ID", 
										"ლოკაცია",
										"პოზიცია"
									];

			var showOperatorsByColumns  =   [0,0,0]; 
			var selectors               =   [0,0,0]; 

			var locked                  =   [0,0,0];
			var lockable                =   [0,0,0];

			var filtersCustomOperators = '{"date":{"start":"-დან","ends":"-მდე","eq":"ზუსტი"}, "number":{"start":"-დან","ends":"-მდე","eq":"ზუსტი"}}';
			//KendoUI CLASS CONFIGS END
				
			const kendo = new kendoUI();
			kendo.loadKendoUI(aJaxURL,'get_list',itemPerPage,columnsCount,columnsSQL,gridName,actions,editType,columnGeoNames,filtersCustomOperators,showOperatorsByColumns,selectors,hidden, 1, locked, lockable);

			}


			$(document).on('click','#button_add',function(){
				$.ajax({
					url: aJaxURL,
					type: "POST",
					data: {
						act: "get_add_page"
					},
					dataType: "json",
					success: function(data){
						$('#get_edit_page').html(data.page);
						$("#get_edit_page").dialog({
							resizable: false,
							height: "auto",
							width: 350,
							modal: true,
							buttons: {
								"შენახვა": function() {
									alert(324);
								},
								'დახურვა': function() {
									$( this ).dialog( "close" );
								}
							}
						});
					}
				});
			});
	</script>
<?
if(isset($_GET['exit']))
{
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=/admin" />';
}
?>
</body>
<!-- END BODY -->
</html>
