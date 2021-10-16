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

		echo 'Home Vacations';

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
									 echo '<form action="vacations.php?add" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>

									 <div class="input text"><label for="UserDateOfBirth">მთავარი საურათი</label><input name="img_m" type="file" accept="image/*" id="UserUsername"/></div>
									 
									 <div class="input text"><label for="UserEmail">დასახელება ENG</label><input name="name_eng" type="text" value="'.$ProductRow3['name_eng'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">დასახელება RUS</label><input name="name_rus" type="text" value="'.$ProductRow3['name_rus'].'" id="UserEmail"/></div>
									 
									 <div class="input text"><label for="UserEmail">ქალაქი</label><input name="city" type="text" value="'.$ProductRow3['city'].'" id="UserEmail"/></div>
									 
									 
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
									
										$start = $_POST['city'];
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
												$AddProduct = mysql_query("INSERT INTO hotels(`name_eng`,`name_rus`,`desc_rus`,`desc_eng`,`price`,`city`) VALUES('$name_eng','$name_rus','$desc_rus','$desc_eng','$price','$start')");
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
														$move = move_uploaded_file($_FILES["img_m"]["tmp_name"], $path."/hotels/".$name);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE hotels SET m_pic='http://rentservice.ge/hotels/$name' WHERE name_eng='$name_eng' and desc_eng='$desc_eng' and price='$price' and city='$start'") or die(mysql_error());
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
														$move = move_uploaded_file($_FILES["img1"]["tmp_name"], $path."/hotels/".$name1);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE hotels SET pic1='http://rentservice.ge/hotels/$name1' WHERE name_eng='$name_eng' and desc_eng='$desc_eng' and price='$price' and city='$start'") or die(mysql_error());
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
														$move = move_uploaded_file($_FILES["img2"]["tmp_name"], $path."/hotels/".$name2);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE hotels SET pic2='http://rentservice.ge/hotels/$name2' WHERE name_eng='$name_eng' and desc_eng='$desc_eng' and price='$price' and city='$start'") or die(mysql_error());
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
														$move = move_uploaded_file($_FILES["img3"]["tmp_name"], $path."/hotels/".$name3);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE hotels SET pic3='http://rentservice.ge/hotels/$name3' WHERE name_eng='$name_eng' and desc_eng='$desc_eng' and price='$price' and city='$start'") or die(mysql_error());
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
														$move = move_uploaded_file($_FILES["img4"]["tmp_name"], $path."/hotels/".$name4);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE hotels SET pic4='http://rentservice.ge/hotels/$name4' WHERE name_eng='$name_eng' and desc_eng='$desc_eng' and price='$price' and city='$start'") or die(mysql_error());
													}
												}
												echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=vacations.php">';
												
										}
									}
									
									 echo '                                 </div>
									</div></div></div></div></div></div>';
	}
	if(isset($_GET['del']) and !empty($_GET['del']) and !isset($_GET[comment_id]))
	{
	$id = mysql_real_escape_string($_GET['del']);
	$Product2 = mysql_query("SELECT * FROM hotels WHERE id='".$id."'");
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
											Are you sure?<br> <a href="vacations.php?del='.$_GET[del].'&yes">Yes, of course</a><br><a href="vacations.php" style="color:red;">No</a>                                    </div>
									</div>
									</div></div></div></div></div></div>';
									if(isset($_GET[yes]))
									{
										$DelProduct = mysql_query("DELETE FROM hotels WHERE id='".$id."'");
										if($DelProduct == true)
										{
											echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=vacations.php"><h2 style="color:green;"><b>PRODUCT '.$ProductRow2[title].' წაშლილია</b></h2>';
											
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
				$Up = mysql_query("UPDATE hotels SET m_pic='' WHERE id='$id'");
			}
			
			if($d == '2')
			{
				$Up = mysql_query("UPDATE hotels SET pic1='' WHERE id='$id'");
			}
			if($d == '3')
			{
				$Up = mysql_query("UPDATE hotels SET pic2='' WHERE id='$id'");
			}
			if($d == '4')
			{
				$Up = mysql_query("UPDATE hotels SET pic3='' WHERE id='$id'");
			}
			if($d == '5')
			{
				$Up = mysql_query("UPDATE hotels SET pic4='' WHERE id='$id'");
			}

		}

	$Product3 = mysql_query("SELECT * FROM hotels WHERE id='".$id."'");
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
									 echo '<form action="vacations.php?edit='.$ProductRow3[id].'" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
									 <div class="input text"><img src="'.$ProductRow3[m_pic].'" height="240" width="120"></div>
									 <div class="input text"><label for="UserDateOfBirth">მთავარი საურათი(<a href="?edit='.$id.'&d=1" style="color:red;">წაშლა</a>)</label><input name="img_m" type="file" accept="image/*" id="UserUsername"/></div>
									 
									 <div class="input text"><label for="UserEmail">დასახელება ENG</label><input name="name_eng" type="text" value="'.$ProductRow3['name_eng'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">დასახელება RUS</label><input name="name_rus" type="text" value="'.$ProductRow3['name_rus'].'" id="UserEmail"/></div>
									 
									 <div class="input text"><label for="UserEmail">ქალაქი</label><input name="city" type="text" value="'.$ProductRow3['city'].'" id="UserEmail"/></div>
									 
									 
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
									
									<div class="input text"><img src="'.$ProductRow3[pic1].'" height="240" width="120"></div>
									 <div class="input text"><label for="UserDateOfBirth">სურათი 1(<a href="?edit='.$id.'&d=2" style="color:red;">წაშლა</a>)</label><input name="img1" type="file" accept="image/*" id="UserUsername"/></div>
									 
									 <div class="input text"><img src="'.$ProductRow3[pic2].'" height="240" width="120"></div>
									 <div class="input text"><label for="UserDateOfBirth">სურათი 2(<a href="?edit='.$id.'&d=3" style="color:red;">წაშლა</a>)</label><input name="img2" type="file" accept="image/*" id="UserUsername"/></div>
									 
									 <div class="input text"><img src="'.$ProductRow3[pic3].'" height="240" width="120"></div>
									 <div class="input text"><label for="UserDateOfBirth">სურათი 3(<a href="?edit='.$id.'&d=4" style="color:red;">წაშლა</a>)</label><input name="img3" type="file" accept="image/*" id="UserUsername"/></div>
									 
									 <div class="input text"><img src="'.$ProductRow3[pic4].'" height="240" width="120"></div>
									 <div class="input text"><label for="UserDateOfBirth">სურათი 4(<a href="?edit='.$id.'&d=5" style="color:red;">წაშლა</a>)</label><input name="img4" type="file" accept="image/*" id="UserUsername"/></div>
									 
									 
									
									
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
									
										$start = $_POST['city'];
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
												$UpdateProduct = mysql_query("UPDATE hotels SET name_eng='$name_eng', name_rus='$name_rus', desc_rus='$desc_rus', desc_eng='$desc_eng', price='$price', city='$start' WHERE id='$id'") or die(mysql_error());
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
														$move = move_uploaded_file($_FILES["img_m"]["tmp_name"], $path."/hotels/".$name);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE hotels SET m_pic='http://rentservice.ge/hotels/$name' WHERE id='".$id."'") or die(mysql_error());
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
														$move = move_uploaded_file($_FILES["img1"]["tmp_name"], $path."/hotels/".$name1);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE hotels SET pic1='http://rentservice.ge/hotels/$name1' WHERE id='".$id."'") or die(mysql_error());
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
														$move = move_uploaded_file($_FILES["img2"]["tmp_name"], $path."/hotels/".$name2);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE hotels SET pic2='http://rentservice.ge/hotels/$name2' WHERE id='".$id."'") or die(mysql_error());
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
														$move = move_uploaded_file($_FILES["img3"]["tmp_name"], $path."/hotels/".$name3);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE hotels SET pic3='http://rentservice.ge/hotels/$name3' WHERE id='".$id."'") or die(mysql_error());
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
														$move = move_uploaded_file($_FILES["img4"]["tmp_name"], $path."/hotels/".$name4);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE hotels SET pic4='http://rentservice.ge/hotels/$name4' WHERE id='".$id."'") or die(mysql_error());
													}
												}
												
												
												echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=vacations.php">';
												
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
						<a href="vacations.php?add">დამატება</a>                </li>
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
											<a href="/users.php/index/sort:username/direction:asc">ფასი</a>                                    </th>   
											
											
											
									
											
									
																<th>
										Actions                                </th>
								
														</tr>
							</thead>
							<tbody>';

						   
						   $Product = mysql_query("SELECT * FROM hotels ORDER BY id DESC") or die(mysql_error());
						   $ProductRow = mysql_fetch_array($Product);
						   do
						   {
							   echo "<tr><td class=''>".$ProductRow[id]."</td><td class=''><img src='".$ProductRow[m_pic]."' width='90' height='90'></td><td class=''>";
							   echo $ProductRow[name_eng];
							   echo "</td>";		
							   echo "<td class=''>";
							   echo $ProductRow[name_rus];
							   echo "</td>";
							   
							   echo "<td class=''>".$ProductRow[price]."</td>";
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
	echo '<meta http-equiv="refresh" content="0; url=/admin" />';
}
?>
</body>
<!-- END BODY -->
</html>
