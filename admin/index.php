<?
session_start();
//////////
include("../db.php");
//////////
?>
<!DOCTYPE html>


<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<script type="text/javascript" src="../js/jquery.meerkat.1.0.js"></script>
<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){	
	meerkat({
		close: '.close',
		dontShow: '.dont-show',
		animation: 'slide',
		animationSpeed: 500,
		dontShowExpire: 0,
		removeCookie: '.remove-cookie',
		meerkatPosition: 'bottom',
		background: '#2e2a22 url(../../img/meerkat-bg.png) repeat-x 0 0',
		height: '110px'
	});
	
});
</script>
    <meta charset="utf-8" />
    <title>ადმინპანელი</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="favicon.ico" type="image/x-icon" rel="icon" /><link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="Admin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="Admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    
	<link rel="stylesheet" type="text/css" href="Admin/css/style.css" />
	<link rel="stylesheet" type="text/css" href="Admin/css/style_responsive.css" />
	<link rel="stylesheet" type="text/css" href="Admin/css/style_default.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body id="login-body">
<div class="login-header">
    <!-- BEGIN LOGO -->
    <div id="logo" class="center">
        <a href="admin.html">
             </a>
    </div>
    <!-- END LOGO -->
</div>

<!-- BEGIN LOGIN -->
<div id="login">

    

 <!--- <div class="alert alert-info">
        <button data-dismiss="alert" class="close">×</button>
        Please use logins to access <strong>ChalkPro</strong> below:<br><br>
		Username: <strong>admin</strong><br>
		Password: <strong>admin</strong><br>
    </div>
---!>
    <!-- BEGIN LOGIN FORM -->
	<?
	if(!isset($_SESSION['a_id']))
	{
		echo '<form action="index.php" class="form-vertical no-padding no-margin" id="loginform" method="POST" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>    <form id="loginform" class="form-vertical no-padding no-margin" action="index.php" method="POST">
			<div class="lock">
				<i class="icon-lock"></i>
			</div>
			<div class="control-wrap">
				<h4>ადმინპანელში შესვლა</h4>
				<div class="control-group">
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-user"></i></span>
							<input name="login" id="input-username" placeholder="Username" maxlength="50" type="text"/>                    </div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-key"></i></span>
							<input name="password" id="input-password" placeholder="Password" type="password"/>                    </div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="input-prepend">
							

				<div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
			</div>

			<input type="submit" id="login-btn" class="btn btn-block login-btn" value="ავტორიზაცია" />
		</form>';
		if(isset($_POST['login']) and isset($_POST['password']))
		{
			$login = strip_tags($_POST['login']);
			$password = md5(strip_tags($_POST['password']));
			if(empty($login) or empty ($password))
			{
				echo 'Fields are empty!!!';
			}
			else
			{
				$CheckUser = mysql_query("SELECT * FROM administration WHERE login='".$login."' and password='".$password."'");
				$CheckUserNum = mysql_num_rows($CheckUser);
				if($CheckUserNum == 0)
				{
					echo $login.'<br>'.$password;
					echo '<br>არასწორი ლოგინი ან პაროლი';
				}
				else
				{
					//$ip = $_SERVER['REMOTE_ADDR'];
					//$CheckIp = mysql_query("SELECT * FROM ip WHERE ip='$ip'");
					//$CheckIpC = mysql_num_rows($CheckIp);
					//if($CheckIpC == 1)
					//{
						$CheckUserRow = mysql_fetch_array($CheckUser);
						$_SESSION['a_id'] = $CheckUserRow['id'];
						$_SESSION['a_login'] = $login;
						echo 'თქვენ წარმატებით გაიარეთ ავტორიზაცია!!!';
						echo '<meta http-equiv="refresh" content="0; url=administration.php" />';
					//}
					//else
					//{
					//	echo 'შესვლა აკრძალულია!!!';
					//}
					
				}
			}
		}
	}
	else
	{
		echo 'თქვენ უკვე გაიარეთ ავტორიზაცია. გადამისამართება...';
		echo '<meta http-equiv="refresh" content="0; url=administration.php" />';
	}
	if(isset($_GET['exit']))
	{
		session_destroy();
		echo '<meta http-equiv="refresh" content="0; url=index.php" />';
	}	
	?>
	
    <!-- END LOGIN FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div id="login-copyright">
    
</div>


<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS -->

	<script type="text/javascript" src="Admin/js/jquery-1.8.3.min.js"></script>
<script src="Admin/assets/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="Admin/js/jquery.blockui.js"></script>
	<script type="text/javascript" src="Admin/js/scripts.js"></script>
<script>
    jQuery(document).ready(function() {
        App.initLogin();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->


</html>