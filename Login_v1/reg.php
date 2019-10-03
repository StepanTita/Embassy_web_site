<?php 
define ('SITE_ROOT', realpath(dirname(__FILE__)));
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$users = include("data/users.php");
$OK = 0;
$NOT_OK = 1;
if(isset($_POST['signIn']) && isset($_POST["email"]) && isset($_POST["pass"]))
{
	if(isset($users[$_POST["email"]]) && $users[$_POST["email"]]["pass"] == $_POST["pass"])
	{

		$_SESSION["auth"] = true;
		$_SESSION["Username"] = $users[$_POST["email"]]["name"];
		$_SESSION["Image_name"] = $users[$_POST["email"]]["name"] . ".jpg";
		header("Location: ../index.php");
		exit;
	}
	$_SESSION['status'] = "Logging";
}
elseif (isset($_POST["signUp"])) {
	$login = trim($_POST["email"]);
	$pass = trim($_POST["pass"]);
	$user = trim($_POST["user"]);
	$uploaddir = "\data\users_Images\\";
	$_FILES['image']['name'] = $user . ".jpg";
	$uploadfile = SITE_ROOT . $uploaddir . basename($_FILES['image']['name']);

	//echo $_FILES['image']['tmp_name'];
	if (isset($_FILES['image']) && isset($_FILES['image']['tmp_name']) && move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
		$status = $OK;
	} else {
	    $status = $NOT_OK;
	}
	file_put_contents("data/users.txt", $login . ":" . $pass . ":" . $user . ";\r\n", FILE_APPEND);
	$_SESSION['status'] = "Signing";
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../img/favicon.png" rel="icon">
	<link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/reg.css">
	<link rel="stylesheet" type="text/css" href="../css/image.css">
	<link rel="stylesheet" href="../css/upperMenu.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter reg">

		<div class="cont">
		   <div class="green borderXwidth">
		     <a href="../index.php">ГОЛОВНА</a>
		     <a href="../countries.php" >ВИБІР КРАЇНИ</a>
		     <a href="../BetterPersonalInfo/index.php">ЗАМОВИТИ</a>
		     <a href="../PersonalPage/index.php">ПРО НАС</a>
		     <a href="../contactus.php">НА ЗВ'ЯЗКУ</a>
		   </div>
		 </div>
		<div class="container-login100">
			<div class="wrap-login100">
				<!--<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>-->
				<div class="col-md-5">
					<form class="login100-form validate-form" method="post" action="#" name="reg" enctype="multipart/form-data">
						<span class="login100-form-title">
							Реєстрація
						</span>

						<div class="wrap-input100 validate-input" data-validate = "Пошта має бути подібна: ex@abc.xyz, Або ж ця пошта вже зареєстрована">
							<input class="input100" type="text" name="email" placeholder="Електронна адреса">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Пароль є обов'язковим">
							<input class="input100" type="password" name="pass" placeholder="Пароль">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-unlock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Пароль є обов'зяковим">
							<input class="input100" type="password" name="repeat-pass" placeholder="Повторіть пароль">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>
						
						<div class="container-login100-form-btn">
							<input type="text"  name="user" id="bicycle">
							<input type="file" onchange="previewFile()" name="image" id="hidden-file">
							<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
							<input type="submit"  class="login100-form-btn" name="signUp" value="Зареєструватися"/>
						</div>

						<div class="text-center p-t-12">
							<span class="txt1">
								Ви вже
							</span>
							<a class="txt2" href="#" id="GoToAuth">
								маєте аккаунт?
							</a>
						</div>

						
						<!--<input type="text"  name="user" id="bicycle">
						<input type="file" onchange="previewFile()" name="image" id="hidden-file">-->
					</form>
				</div>

				<div class="outer">
				  <div class="inner"></div>
				</div>

				<div class="col-md-5">
					<figure class="snip1566">
						<div class="user-pic">
					 	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample14.jpg" alt="sq-sample14" id="choose-mini-img"/>
					 	<figcaption><i class="ion-android-add"></i></figcaption>
					 	<a id="choose-img"></a>
					 	</div>
					</figure>
					<div class="wrap-input100 validate-input"  data-validate= "Логін обов'зякоий для введення">
						<input class="input100" type="text" name="user" placeholder="Логін" id="wheel">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
				</div>



			</div>
		</div>
	</div>
	
	
	<div class="limiter auth">
		<div class="cont">
		  <div class="green borderXwidth">
		     <a href="../index.php">ГОЛОВНА</a>
		     <a href="../countries.php" >ВИБІР КРАЇНИ</a>
		     <a href="../BetterPersonalInfo/index.php">ЗАМОВИТИ</a>
		     <a href="../PersonalPage/index.php">ПРО НАС</a>
		     <a href="../contactus.php">НА ЗВ'ЯЗКУ</a>
		   </div>
		 </div>
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="#" name="auth">
					<span class="login100-form-title" style="font-size:34px">
						Вхід
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Пошта має бути подібна: ex@abc.xyz, Або ж ця пошта вже зареєстрована">
							<input class="input100" type="text" name="email" placeholder="Електронна адреса">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>
						</div>

					<div class="wrap-input100 validate-input" data-validate = "Пароль є обов'язковим">
						<input class="input100" type="password" name="pass" placeholder="Пароль">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<!--<input type="submit" class="login100-form-btn" value="Login">-->
						<input name="signIn" type="submit" class="login100-form-btn" value="Увійти"/>
					</div>

					<div class="text-center p-t-12">
						<span class="txt2" id="GoToReg">
							<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
							Створити аккаунт
						</span>
					</div>

					
				</form>
			</div>
		</div>
	</div>

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/easing/easing.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="../js/image.js"></script>

</body>
</html>