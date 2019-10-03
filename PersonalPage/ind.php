<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
session_start();
if(!isset($_SESSION["auth"]) || !$_SESSION["auth"])
{
	header("Location: ../Login_v1/reg.php");
	exit;
}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Personal Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />


	<link href="../img/favicon.png" rel="icon">
    <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<!--<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">-->
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/image.css">
	<link rel="stylesheet" type="text/css" href="css/profile-image.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/upperMenu.css">
	<link rel="stylesheet" type="text/css" href="css/upperMenuPersonal.css">


	<!-- Modernizer JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <style>
        #colorlib-main{
            margin-top:10%;
        }
        .text-center{
            margin-top:35%;
        }
        </style>

	</head>
	<body>
		   <!--Upper Menu-->
		<div class="cont">
		   <div class="green borderXwidth">
		     <a href = "../index.php">ГОЛОВНА</a>
		     <a href="../countries.php">ВИБІР КРАЇНИ</a>
		     <a href="../BetterPersonalInfo/index.php">ЗАМОВИТИ</a>
		     <a href="index.php">ПРО НАС</a>
		     <a href="../contactus.php">НА ЗВ'ЯЗКУ</a>
		   </div>
		 </div>
		   <!--/Upper Menu-->
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">

			<div class="text-center">
				<!--<div class="author-img" style="background-image: url(images/about.jpg);"></div>-->
				<figure class="snip1566">
				  <?php
				  $flag = true;
				  if(isset($_SESSION["Image_name"])){
				    $img_name = '../Login_v1/data/users_Images/' . $_SESSION["Image_name"];
				    if(file_exists($img_name)){
				      echo "<img src=" . $img_name . " alt='sq-sample17' />";
				      $flag = false;
				    }
				  }
				  if($flag){
				    $img_path = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample17.jpg';
				    echo "<img src=" . $img_path . " alt='sq-sample17' />";
				  }
				  ?>
				  <figcaption class="profile-image"><i class="ion-android-add"></i></figcaption>
				  <a href="#"></a>
				</figure>
				<h1 id="colorlib-logo">
					<a href="#">
						<?php
							if(isset($_SESSION["Username"])) {echo $_SESSION["Username"];}
						?>
					</a>
				</h1>
				<span class="position"><a href="../index.php">Visa center</a> в Україні</span>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
						<li><a href="#" data-nav-section="contact">Налаштування</a></li>
					</ul>
				</div>
			</nav>

			<div class="colorlib-footer">
				<p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook2"></i></a></li>
					<li><a href="#"><i class="icon-twitter2"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin2"></i></a></li>
				</ul>
			</div>

		</aside>

		<div id="colorlib-main">

			<section class="colorlib-skills" data-section="skills">
						<div class="colorlib-narrow-content">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
									<span class="heading-meta">Ваше замовлення</span>
									<h2 class="colorlib-heading animate-box">Віза</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<p>Тут ви можете спостерігати за тим де зараз обробляються ваші документи, та на якому вони етапі обробки.</p>
								</div>
								<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
									<div class="progress-wrap">
										<h3>Міграційна служба</h3>
										<div class="progress">
										 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
										  	aria-valuemin="0" aria-valuemax="100" style="width:75%">
										    <span>75%</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
									<div class="progress-wrap">
										<h3>Посольство країни в'їзду</h3>
										<div class="progress">
										 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
										  	aria-valuemin="0" aria-valuemax="100" style="width:60%">
										    <span>60%</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
									<div class="progress-wrap">
										<h3>Посольство України</h3>
										<div class="progress">
										 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
										  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
										    <span>85%</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
									<div class="progress-wrap">
										<h3>Паспортний стіл</h3>
										<div class="progress">
										 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
										  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
										    <span>90%</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
									<div class="progress-wrap">
										<h3>Міністерство закордонних справ</h3>
										<div class="progress">
										 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
										  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
										    <span>70%</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
									<div class="progress-wrap">
										<h3>Кабінет міністрів</h3>
										<div class="progress">
										 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
										  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
										    <span>80%</span>
										  	</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
			
			<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Залишайтеся з нами</span>
							<h2 class="colorlib-heading">Налаштування</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-globe-outline"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="#">VisaPlanet@example.com</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box addr" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map"></i>
								</div>
								<div class="colorlib-text">
									<p>Gagarina Avenue, 41/2,61001, Kharkiv,USU.</p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone3" aria-hidden="true"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="">Пароль</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
									<form action="#" method="post">
										<div class="form-group change-data">
											<input type="text" class="form-control" name="Username" placeholder="Новий Логін">
										</div>
										<div class="form-group change-data">
											<input type="text" class="form-control" name="Електронна адреса" placeholder="Нова електронна адреса">
										</div>
										<div class="form-group change-data">
											<input type="text" class="form-control" name="Адреса проживання" placeholder="Нова адреса">
										</div>
										<div class="form-group change-data">
											<input name="" class="form-control" name="Пароль" placeholder="Новий пароль"></input>
										</div>
										<div class="form-group change-data">
											<input type="submit" class="btn btn-primary btn-send-message" value="Змінити">
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
    
			</section>
		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->

	<!-- jQuery -->
	<script src="../lib/jquery/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!--Image-->
	<script src="../js/image.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

