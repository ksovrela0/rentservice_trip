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

		echo 'მძღოლები';

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
									 echo '<form action="drivers.php?add" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
									 <div class="input text"><img src="'.$ProductRow3[avatar].'" height="120" width="120"></div>
									 <div class="input text"><label for="UserDateOfBirth">ავატარი(<a href="?edit='.$id.'&d=1" style="color:red;">წაშლა</a>)</label><input name="avatar" type="file" accept="image/*" id="UserUsername"/></div>
									 
									 <div class="input text"><label for="UserEmail">სახელი ENG</label><input name="name_eng" type="text" value="'.$ProductRow3['firstname_eng'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">სახელი RUS</label><input name="name_rus" type="text" value="'.$ProductRow3['firstname_rus'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">სახელი GEO</label><input name="name_geo" type="text" value="'.$ProductRow3['firstname_geo'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">გვარი GEO</label><input name="lastname_geo" type="text" value="'.$ProductRow3['lastname'].'" id="UserEmail"/></div>


                                     <div class="input text"><label for="UserEmail">ენები ENG</label><input name="languages_eng" type="text" value="'.$ProductRow3['languages_eng'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">ენები RUS</label><input name="languages_rus" type="text" value="'.$ProductRow3['languages_rus'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">ენები GEO</label><input name="languages_geo" type="text" value="'.$ProductRow3['languages_geo'].'" id="UserEmail"/></div>

                                     <div class="input text"><label for="UserEmail">ასაკი</label><input name="age" type="text" value="'.$ProductRow3['age'].'" id="UserEmail"/></div>

                                     <div class="input text"><label for="UserEmail">ანაზღაურება დღეში</label><input name="salary" type="text" value="'.$ProductRow3['salary_per_day'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">ტელეფონი</label><input name="phone" type="text" value="'.$ProductRow3['phone'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">პ/ნ</label><input name="pid" type="text" value="'.$ProductRow3['pid'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">E-mail</label><input name="email" type="text" value="'.$ProductRow3['email'].'" id="UserEmail"/></div>

                                     <div class="input text"><label for="UserEmail">username</label><input name="username" type="text" value="'.$ProductRow3['username'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">password</label><input name="password" type="password" value="'.$ProductRow3['password'].'" id="UserEmail"/></div>
                                     
									
									';

                                    $car_d = mysql_query("SELECT * FROM cars WHERE user_id = '$ProductRow3[id]'");

                                    $car_data = mysql_fetch_array($car_d);

                                    echo '
                                    <div class="input text"><img src="'.$car_data[image].'" height="120" width="120"></div>
									 <div class="input text"><label for="UserDateOfBirth">მანქანის სურათი</label><input name="car_img" type="file" accept="image/*" id="UserUsername"/></div>

                                     <div class="input text"><label for="UserEmail">მანქანის სახელი</label><input name="car_name" type="text" value="'.$car_data['car_name'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">წვა 100კმ-ზე</label><input name="fuel_100" type="text" value="'.$car_data['fuel_per_100'].'" id="UserEmail"/></div>';

                                     echo '<div class="input text"><label for="UserEmail">მანქანის ტიპი</label><select name="car_type">';
                                        $tr_cat = mysql_query("SELECT id, name
                                                                FROM car_type");
                                        $tr_row = mysql_fetch_array($tr_cat);

                                        do{
                                            if($car_data[car_type] == $tr_row[id]){
                                                echo '<option value="'.$tr_row[id].'" selected>'.$tr_row[name].'</option>';
                                            }
                                            else{
                                                echo '<option value="'.$tr_row[id].'">'.$tr_row[name].'</option>';
                                            }
                                        }
                                        while($tr_row = mysql_fetch_array($tr_cat));
                                     echo '</select></div>';

                                     echo '<div class="input text"><label for="UserEmail">მანქანის ტიპი</label><select name="fuel_type">';
                                        $tr_cat = mysql_query("SELECT id, name_geo
                                                                FROM fuel_type");
                                        $tr_row = mysql_fetch_array($tr_cat);

                                        do{
                                            if($car_data[fuel_type] == $tr_row[id]){
                                                echo '<option value="'.$tr_row[id].'" selected>'.$tr_row[name_geo].'</option>';
                                            }
                                            else{
                                                echo '<option value="'.$tr_row[id].'">'.$tr_row[name_geo].'</option>';
                                            }
                                        }
                                        while($tr_row = mysql_fetch_array($tr_cat));
                                     echo '</select></div>
                                     <div class="input text"><label for="UserEmail">ადგილები</label><input name="seats" type="text" value="'.$car_data['seats'].'" id="UserEmail"/></div>
                                     ';

                                     echo '<div class="input text"><label for="UserEmail">კონდინციონერი</label><select name="air">';
                                            if($car_data[air_conditioner] == 1){
                                                echo '<option value="1" selected>კი</option>';
                                                echo '<option value="0">არა</option>';
                                            }
                                            else{
                                                echo '<option value="1" >კი</option>';
                                                echo '<option value="0" selected>არა</option>';
                                            }
                                     echo '</select></div>';

                                     echo '<div class="input text"><label for="UserEmail">Wi-Fi</label><select name="wifi">';
                                            if($car_data[wifi] == 1){
                                                echo '<option value="1" selected>კი</option>';
                                                echo '<option value="0">არა</option>';
                                            }
                                            else{
                                                echo '<option value="1" >კი</option>';
                                                echo '<option value="0" selected>არა</option>';
                                            }
                                     echo '</select></div>
									 
									 
									 <div class="input text"><label for="UserDateOfBirth">მანქანის სურათი 1</label><input name="car_img1" type="file" accept="image/*" id="UserUsername"/></div>
									 <div class="input text"><label for="UserDateOfBirth">მანქანის სურათი 2</label><input name="car_img2" type="file" accept="image/*" id="UserUsername"/></div>
									 <div class="input text"><label for="UserDateOfBirth">მანქანის სურათი 3</label><input name="car_img3" type="file" accept="image/*" id="UserUsername"/></div>
									 <div class="input text"><label for="UserDateOfBirth">მანქანის სურათი 4</label><input name="car_img4" type="file" accept="image/*" id="UserUsername"/></div>
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
                                        $name_geo = $_POST['name_geo'];
										
										$lastname_geo = $_POST['lastname_geo'];
                                        
                                        $languages_eng = $_POST['languages_eng'];
                                        $languages_rus = $_POST['languages_rus'];
                                        $languages_geo = $_POST['languages_geo'];
										
										$age = $_POST['age'];
										$salary_per_day = $_POST['salary'];
										$phone = $_POST['phone'];
										$pid = $_POST['pid'];
										$email = $_POST['email'];

										$username = $_POST['username'];
										$password = md5($_POST['password']);

                                        $car_name = $_POST['car_name'];
                                        $fuel_100 = $_POST['fuel_100'];
                                        $seats = $_POST['seats'];


										$car_type = $_POST['car_type'];
                                        $fuel_type = $_POST['fuel_type'];
                                        $air = $_POST['air'];
                                        $wifi = $_POST['wifi'];


										$filep = $_FILES['avatar']['tmp_name'];
										$filep1 = $_FILES['car_img']['tmp_name'];

										$filep2 = $_FILES['car_img1']['tmp_name'];
										$filep3 = $_FILES['car_img2']['tmp_name'];
										$filep4 = $_FILES['car_img3']['tmp_name'];
										$filep5 = $_FILES['car_img4']['tmp_name'];

			
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
												$AddProduct = mysql_query("INSERT INTO users SET  firstname_eng='$name_eng',
                                                                                    firstname_rus='$name_rus', 
                                                                                    firstname_geo='$name_geo', 
                                                                                    lastname = '$lastname_geo', 
                                                                                    languages_eng='$languages_eng',
                                                                                    languages_rus='$languages_rus', 
                                                                                    languages_geo='$languages_geo', 
                                                                                    age='$age',
                                                                                    salary_per_day='$salary_per_day',
                                                                                    phone='$phone',
                                                                                    pid='$pid',
                                                                                    email='$email',
                                                                                    username='$username',
                                                                                    password='$password'");
                                                
												if($AddProduct == true)
												{
													echo '<h2 style="color:green;"><b> დამატებულია!!!</b></h2>';
													$user = mysql_query("SELECT MAX(id) AS dd FROM users");
													$ma = mysql_fetch_array($user);
													mysql_query("INSERT INTO cars SET car_type = '$car_type',
																	car_name ='$car_name',
																	fuel_per_100 = '$fuel_100',
																	seats = '$seats',
																	fuel_type='$fuel_type',
																	air_conditioner = '$air',
																	wifi='$wifi',
																	user_id='$ma[dd]'");
													$carrr = mysql_query("SELECT MAX(id) AS cc FROM cars");
													$cr = mysql_fetch_array($carrr);
													
												}
												else
												{
													echo 'შეცდომაა';
												}

												
												
												if(!empty($filep))
												{
													if($_FILES["avatar"]["size"] > 1024*10*1024)
													{
														echo ("Размер файла превышает три мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["avatar"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["avatar"]["tmp_name"], $path."/img/cars/".$name);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE users SET avatar='https://viptrip.ge/img/drivers/$name' WHERE id = '$ma[dd]'") or die(mysql_error());
													}
												}
												if(!empty($filep1))
												{
													if($_FILES["car_img"]["size"] > 1024*10*1024)
													{
														echo ("Размер файла превышает три мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["car_img"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["car_img"]["tmp_name"], $path."/img/cars/".$name1);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE cars SET `image`='https://viptrip.ge/img/cars/$name1' WHERE user_id = '$ma[dd]'") or die(mysql_error());
													}
												}
												if(!empty($filep2))
												{
													if($_FILES["car_img1"]["size"] > 1024*10*1024)
													{
														echo ("Размер файла превышает три мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["car_img1"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["car_img1"]["tmp_name"], $path."/img/cars/".$name2);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE cars SET car1='https://viptrip.ge/img/cars/$name2' WHERE user_id = '$ma[dd]'") or die(mysql_error());
													}
												}
												if(!empty($filep3))
												{
													if($_FILES["car_img2"]["size"] > 1024*10*1024)
													{
														echo ("Размер файла превышает три мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["car_img2"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["car_img2"]["tmp_name"], $path."/img/cars/".$name3);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE cars SET car2='https://viptrip.ge/img/cars/$name3' WHERE user_id = '$ma[dd]'") or die(mysql_error());
													}
												}
												if(!empty($filep4))
												{
													if($_FILES["car_img3"]["size"] > 1024*10*1024)
													{
														echo ("Размер файла превышает три мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["car_img3"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["car_img3"]["tmp_name"], $path."/img/cars/".$name4);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE cars SET car3='https://viptrip.ge/img/cars/$name4' WHERE user_id = '$ma[dd]'") or die(mysql_error());
													}
												}
												if(!empty($filep5))
												{
													if($_FILES["car_img4"]["size"] > 1024*10*1024)
													{
														echo ("Размер файла превышает три мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["car_img4"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["car_img4"]["tmp_name"], $path."/img/cars/".$name5);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE cars SET car4='https://viptrip.ge/img/cars/$name5' WHERE user_id = '$ma[dd]'") or die(mysql_error());
													}
												}
												echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=drivers.php">';
												
										}
									}
									
									 echo '                                 </div>
									</div></div></div></div></div></div>';
	}
	if(isset($_GET['del']) and !empty($_GET['del']) and !isset($_GET[comment_id]))
	{
	$id = mysql_real_escape_string($_GET['del']);
	$Product2 = mysql_query("SELECT * FROM users WHERE id='".$id."'");
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
									 <h3>მძღოლის <b>'.$ProductRow2[lastname].' წაშლა</b></h3> 
									 <br />
										<div class="tab-content">
											Are you sure?<br> <a href="drivers.php?del='.$_GET[del].'&yes">Yes, of course</a><br><a href="drivers.php" style="color:red;">No</a>                                    </div>
									</div>
									</div></div></div></div></div></div>';
									if(isset($_GET[yes]))
									{
										$DelProduct = mysql_query("DELETE FROM users WHERE id='".$id."'");
										if($DelProduct == true)
										{
											echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=drivers.php"><h2 style="color:green;"><b>PRODUCT '.$ProductRow2[title].' წაშლილია</b></h2>';
											
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
				$Up = mysql_query("UPDATE users SET avatar='' WHERE id='$id'");
			}
			
			if($d == '2')
			{
				$Up = mysql_query("UPDATE cars SET image='' WHERE user_id='$id'");
			}
			if($d == '3')
			{
				$Up = mysql_query("UPDATE cars SET car1='' WHERE user_id='$id'");
			}
			if($d == '4')
			{
				$Up = mysql_query("UPDATE cars SET car2='' WHERE user_id='$id'");
			}
			if($d == '5')
			{
				$Up = mysql_query("UPDATE cars SET car3='' WHERE user_id='$id'");
			}
			if($d == '6')
			{
				$Up = mysql_query("UPDATE cars SET car4='' WHERE user_id='$id'");
			}

		}

	$Product3 = mysql_query("SELECT * FROM users WHERE id='".$id."'");
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
									 echo '<form action="drivers.php?edit='.$ProductRow3[id].'" id="UserAdminEditForm" enctype="multipart/form-data" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"/></div><fieldset>
									 <div class="input text"><img src="'.$ProductRow3[avatar].'" height="120" width="120"></div>
									 <div class="input text"><label for="UserDateOfBirth">ავატარი(<a href="?edit='.$id.'&d=1" style="color:red;">წაშლა</a>)</label><input name="avatar" type="file" accept="image/*" id="UserUsername"/></div>
									 
									 <div class="input text"><label for="UserEmail">სახელი ENG</label><input name="name_eng" type="text" value="'.$ProductRow3['firstname_eng'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">სახელი RUS</label><input name="name_rus" type="text" value="'.$ProductRow3['firstname_rus'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">სახელი GEO</label><input name="name_geo" type="text" value="'.$ProductRow3['firstname_geo'].'" id="UserEmail"/></div>
									 <div class="input text"><label for="UserEmail">გვარი GEO</label><input name="lastname_geo" type="text" value="'.$ProductRow3['lastname'].'" id="UserEmail"/></div>


                                     <div class="input text"><label for="UserEmail">ენები ENG</label><input name="languages_eng" type="text" value="'.$ProductRow3['languages_eng'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">ენები RUS</label><input name="languages_rus" type="text" value="'.$ProductRow3['languages_rus'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">ენები GEO</label><input name="languages_geo" type="text" value="'.$ProductRow3['languages_geo'].'" id="UserEmail"/></div>

                                     <div class="input text"><label for="UserEmail">ასაკი</label><input name="age" type="text" value="'.$ProductRow3['age'].'" id="UserEmail"/></div>

                                     <div class="input text"><label for="UserEmail">ანაზღაურება დღეში</label><input name="salary" type="text" value="'.$ProductRow3['salary_per_day'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">ტელეფონი</label><input name="phone" type="text" value="'.$ProductRow3['phone'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">პ/ნ</label><input name="pid" type="text" value="'.$ProductRow3['pid'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">E-mail</label><input name="email" type="text" value="'.$ProductRow3['email'].'" id="UserEmail"/></div>

                                     <div class="input text"><label for="UserEmail">username</label><input name="username" type="text" value="'.$ProductRow3['username'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">password</label><input name="password" type="password" value="'.$ProductRow3['password'].'" id="UserEmail"/></div>
                                     
									
									';

                                    $car_d = mysql_query("SELECT * FROM cars WHERE user_id = '$ProductRow3[id]'");

                                    $car_data = mysql_fetch_array($car_d);

                                    echo '
                                    <div class="input text"><img src="'.$car_data[image].'" height="120" width="120"></div>
									 <div class="input text"><label for="UserDateOfBirth">მანქანის სურათი(<a href="?edit='.$id.'&d=2" style="color:red;">წაშლა</a>)</label><input name="car_img" type="file" accept="image/*" id="UserUsername"/></div>

                                     <div class="input text"><label for="UserEmail">მანქანის სახელი</label><input name="car_name" type="text" value="'.$car_data['car_name'].'" id="UserEmail"/></div>
                                     <div class="input text"><label for="UserEmail">წვა 100კმ-ზე</label><input name="fuel_100" type="text" value="'.$car_data['fuel_per_100'].'" id="UserEmail"/></div>';

                                     echo '<div class="input text"><label for="UserEmail">მანქანის ტიპი</label><select name="car_type">';
                                        $tr_cat = mysql_query("SELECT id, name
                                                                FROM car_type");
                                        $tr_row = mysql_fetch_array($tr_cat);

                                        do{
                                            if($car_data[car_type] == $tr_row[id]){
                                                echo '<option value="'.$tr_row[id].'" selected>'.$tr_row[name].'</option>';
                                            }
                                            else{
                                                echo '<option value="'.$tr_row[id].'">'.$tr_row[name].'</option>';
                                            }
                                        }
                                        while($tr_row = mysql_fetch_array($tr_cat));
                                     echo '</select></div>';

                                     echo '<div class="input text"><label for="UserEmail">მანქანის ტიპი</label><select name="fuel_type">';
                                        $tr_cat = mysql_query("SELECT id, name_geo
                                                                FROM fuel_type");
                                        $tr_row = mysql_fetch_array($tr_cat);

                                        do{
                                            if($car_data[fuel_type] == $tr_row[id]){
                                                echo '<option value="'.$tr_row[id].'" selected>'.$tr_row[name_geo].'</option>';
                                            }
                                            else{
                                                echo '<option value="'.$tr_row[id].'">'.$tr_row[name_geo].'</option>';
                                            }
                                        }
                                        while($tr_row = mysql_fetch_array($tr_cat));
                                     echo '</select></div>
                                     <div class="input text"><label for="UserEmail">ადგილები</label><input name="seats" type="text" value="'.$car_data['seats'].'" id="UserEmail"/></div>
                                     ';

                                     echo '<div class="input text"><label for="UserEmail">კონდინციონერი</label><select name="air">';
                                            if($car_data[air_conditioner] == 1){
                                                echo '<option value="1" selected>კი</option>';
                                                echo '<option value="0">არა</option>';
                                            }
                                            else{
                                                echo '<option value="1" >კი</option>';
                                                echo '<option value="0" selected>არა</option>';
                                            }
                                     echo '</select></div>';

                                     echo '<div class="input text"><label for="UserEmail">Wi-Fi</label><select name="wifi">';
                                            if($car_data[wifi] == 1){
                                                echo '<option value="1" selected>კი</option>';
                                                echo '<option value="0">არა</option>';
                                            }
                                            else{
                                                echo '<option value="1" >კი</option>';
                                                echo '<option value="0" selected>არა</option>';
                                            }
                                     echo '</select></div>
									 
									 <div class="input text"><label for="UserDateOfBirth">მანქანის სურათი 1(<a href="?edit='.$id.'&d=3" style="color:red;">წაშლა</a>)</label><input name="car_img1" type="file" accept="image/*" id="UserUsername"/></div>
									 <div class="input text"><label for="UserDateOfBirth">მანქანის სურათი 2(<a href="?edit='.$id.'&d=4" style="color:red;">წაშლა</a>)</label><input name="car_img2" type="file" accept="image/*" id="UserUsername"/></div>
									 <div class="input text"><label for="UserDateOfBirth">მანქანის სურათი 3(<a href="?edit='.$id.'&d=5" style="color:red;">წაშლა</a>)</label><input name="car_img3" type="file" accept="image/*" id="UserUsername"/></div>
									 <div class="input text"><label for="UserDateOfBirth">მანქანის სურათი 4(<a href="?edit='.$id.'&d=6" style="color:red;">წაშლა</a>)</label><input name="car_img4" type="file" accept="image/*" id="UserUsername"/></div>
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
                                        $name_geo = $_POST['name_geo'];
										
										$lastname_geo = $_POST['lastname_geo'];
                                        
                                        $languages_eng = $_POST['languages_eng'];
                                        $languages_rus = $_POST['languages_rus'];
                                        $languages_geo = $_POST['languages_geo'];
										
										$age = $_POST['age'];
										$salary_per_day = $_POST['salary'];
										$phone = $_POST['phone'];
										$pid = $_POST['pid'];
										$email = $_POST['email'];

										$username = $_POST['username'];
										$password = $_POST['password'];

                                        $car_name = $_POST['car_name'];
                                        $fuel_100 = $_POST['fuel_100'];
                                        $seats = $_POST['seats'];


										$car_type = $_POST['car_type'];
                                        $fuel_type = $_POST['fuel_type'];
                                        $air = $_POST['air'];
                                        $wifi = $_POST['wifi'];


										$filep = $_FILES['avatar']['tmp_name'];
										$filep1 = $_FILES['car_img']['tmp_name'];

										$filep2 = $_FILES['car_img1']['tmp_name'];
										$filep3 = $_FILES['car_img2']['tmp_name'];
										$filep4 = $_FILES['car_img3']['tmp_name'];
										$filep5 = $_FILES['car_img4']['tmp_name'];

			
										if(empty($name_eng))
										{
											echo '<h2 style="color:red;"><b>თქვენ გამოტოვეთ საჭირო ველები!!!</b></h2>';
										}
										else
										{
                                                $check_pass = mysql_query(" SELECT  COUNT(*) AS 'cc'
                                                                            FROM    users
                                                                            WHERE   id = '$id' AND password='$password'");
                                                $pass_row = mysql_fetch_array($check_pass);

                                                if($pass_row['cc'] == 0){
                                                    $pass = md5($password);
                                                    mysql_query("UPDATE users SET password = '$pass' WHERE id = '$id'");
                                                }
												$UpdateProduct = mysql_query("UPDATE users SET  firstname_eng='$name_eng',
                                                                                                firstname_rus='$name_rus', 
                                                                                                firstname_geo='$name_geo', 
                                                                                                lastname = '$lastname_geo', 
                                                                                                languages_eng='$languages_eng',
                                                                                                languages_rus='$languages_rus', 
                                                                                                languages_geo='$languages_geo', 
                                                                                                age='$age',
                                                                                                salary_per_day='$salary_per_day',
                                                                                                phone='$phone',
                                                                                                pid='$pid',
                                                                                                email='$email',
                                                                                                username='$username'
                                                                                                
                                                                                                 
                                                                                                WHERE id='$id'") or die(mysql_error());

                                                mysql_query("UPDATE cars SET car_type = '$car_type',
                                                                                car_name ='$car_name',
                                                                                fuel_per_100 = '$fuel_100',
                                                                                seats = '$seats',
                                                                                fuel_type='$fuel_type',
                                                                                air_conditioner = '$air',
                                                                                wifi='$wifi'
                                                                WHERE user_id='$id'");
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
												$name5 = rand(1000,99999).rand(1000,99999).rand(1000,99999).'.jpg';
												// загружаем файл
												if(!empty($filep))
												{
													if($_FILES["avatar"]["size"] > 1024*5*1024)
													{
														echo ("Размер файла превышает 5 мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["avatar"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["avatar"]["tmp_name"], $path."/img/drivers/".$name);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE users SET avatar='https://viptrip.ge/img/drivers/$name' WHERE id='".$id."'") or die(mysql_error());
													}
												}
												
												if(!empty($filep1))
												{
													if($_FILES["car_img"]["size"] > 1024*5*1024)
													{
														echo ("Размер файла превышает 5 мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["car_img"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["car_img"]["tmp_name"], $path."/img/cars/".$name1);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE cars SET image='https://viptrip.ge/img/cars/$name1' WHERE user_id='".$id."'") or die(mysql_error());
													}
												}
												if(!empty($filep2))
												{
													if($_FILES["car_img1"]["size"] > 1024*5*1024)
													{
														echo ("Размер файла превышает 5 мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["car_img1"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["car_img1"]["tmp_name"], $path."/img/cars/".$name2);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE cars SET car1='https://viptrip.ge/img/cars/$name2' WHERE user_id='".$id."'") or die(mysql_error());
													}
												}
												if(!empty($filep3))
												{
													if($_FILES["car_img2"]["size"] > 1024*5*1024)
													{
														echo ("Размер файла превышает 5 мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["car_img2"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["car_img2"]["tmp_name"], $path."/img/cars/".$name3);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE cars SET car2='https://viptrip.ge/img/cars/$name3' WHERE user_id='".$id."'") or die(mysql_error());
													}
												}
												if(!empty($filep4))
												{
													if($_FILES["car_img3"]["size"] > 1024*5*1024)
													{
														echo ("Размер файла превышает 5 мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["car_img3"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["car_img3"]["tmp_name"], $path."/img/cars/".$name4);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE cars SET car3='https://viptrip.ge/img/cars/$name4' WHERE user_id='".$id."'") or die(mysql_error());
													}
												}
												if(!empty($filep5))
												{
													if($_FILES["car_img4"]["size"] > 1024*5*1024)
													{
														echo ("Размер файла превышает 5 мегабайта");
														exit;
													}
													if(is_uploaded_file($_FILES["car_img4"]["tmp_name"]))
													{
														$move = move_uploaded_file($_FILES["car_img4"]["tmp_name"], $path."/img/cars/".$name5);
														echo $move;
														$UpdateProduct = mysql_query("UPDATE cars SET car4='https://viptrip.ge/img/cars/$name5' WHERE user_id='".$id."'") or die(mysql_error());
													}
												}
												
												
												echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=drivers.php">';
												
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
						<a href="drivers.php?add">დამატება</a>                </li>
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
											<a href="/users.php/index/sort:username/direction:asc">სახელი</a>                                    </th>
											<th>
											<a href="/users.php/index/sort:username/direction:asc">ასაკი</a>                                    </th>
                                            <th>
											<a href="/users.php/index/sort:username/direction:asc">მანქანა</a>                                    </th>
                                            <th>
											<a href="/users.php/index/sort:username/direction:asc">ანაზღაურება დღეში</a>                                    </th>
                                            <th>
											<a href="/users.php/index/sort:username/direction:asc">ტელეფონი</a>                                    </th>
                                            <th>
											<a href="/users.php/index/sort:username/direction:asc">პ/ნ</a>                                    </th>
                                            <th>
											<a href="/users.php/index/sort:username/direction:asc">E-mail</a>                                    </th>
                                            

											
											
											
									
											
									
																<th>
										Actions                                </th>
								
														</tr>
							</thead>
							<tbody>';

						   
						   $Product = mysql_query(" SELECT  users.id,
                                                            IFNULL(users.avatar, 'no-avatar.jpg') AS avatar,
                                                            CONCAT(users.firstname_geo, ' ', users.lastname) AS cl_name,
                                                            users.age,
                                                            CONCAT(cars.car_name, '(ID:',cars.id , ')') AS car,
                                                            users.salary_per_day,
                                                            users.phone,
                                                            users.pid,
                                                            users.email

                                                    FROM users 
                                                    JOIN cars ON cars.user_id = users.id
                                                    ORDER BY id DESC
                                                    ") or die(mysql_error());
						   $ProductRow = mysql_fetch_array($Product);
						   do
						   {
							   echo "<tr><td class=''>".$ProductRow[id]."</td><td class=''><img src='".$ProductRow[avatar]."' width='200' height='90'></td><td class=''>";
							   echo $ProductRow[cl_name];
							   echo "</td>";		
							   
							   echo "<td class=''>";
								echo $ProductRow['age'];
							   echo "</td>";

                               echo "<td class=''>";
								echo $ProductRow['car'];
							   echo "</td>";
							   
                               echo "<td class=''>";
                               echo $ProductRow['salary_per_day'];
                              echo "</td>";

                              echo "<td class=''>";
                               echo $ProductRow['phone'];
                              echo "</td>";

                              echo "<td class=''>";
                               echo $ProductRow['pid'];
                              echo "</td>";

                              echo "<td class=''>";
                               echo $ProductRow['email'];
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
