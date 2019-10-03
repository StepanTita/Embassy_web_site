 <?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//session_start();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
		<meta charset="utf-8">
		<title>Contact Us</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="" name="keywords">
		<meta content="" name="description">
    <link href="../img/favicon.png" rel="icon">
    <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
		<!-- Bootstrap CSS File -->
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.css" rel="stylesheet" type="text/css">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!--Stylesheet CSS -->
		<link href="css/style.css" rel="stylesheet">
      <link href="css/upperMenu.css" rel="stylesheet">
      <link href="css/Support.css" rel="stylesheet">
      <link href="css/Letters.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/image.css">
      <link rel="stylesheet" type="text/css" href="css/demo-image.css">
      <link href="css/GoToCountryButton.css" rel="stylesheet">
      <link rel="stylesheet" href="css/tip.css">
      		<style type="text/css">
			.cont{
				background-color: rgba(0, 0, 0, 0.6);
			}
            #headerwrap2 {
            	background: url(/img/backcontact.jpg) no-repeat center top;
            	margin-top: 0px;
	            text-align:center;
              
	            background-position: center top;
                height: 40%;
	            width: 100%;

                -webkit-background-size: 100%;
                -moz-background-size: 100%;
                -o-background-size: 100%;
                background-size: 100%;
				background-size: cover;
            }
                .form-group2 {
                    border: 2px;
                    width: 200%;
                }
                textarea{
                    width: 100%;
                    resize: none;
                }
                .form-send2 button  {
                    background: #1AAB8A;    
                    border: 0;
                    padding: 14px 40px;
                    color: #fff;
                    transition: 0.4s;
                    cursor: pointer;
                    margin-left:45%;
                }
                
		</style>
   </head>
   <body>
  <!-- Menu -->
    
<nav class="menu" id="theMenu">
         <div class="menu-wrap">
            <h1 class="logo"><a href="index.php" class="smoothscroll">Visa center</a></h1>
            <i class="fa fa-times menu-close"></i>
<figure class="snip1566">
              <?php
              $flag = true;
              if(isset($_SESSION["Image_name"])){
                $img_name = 'Login_v1/data/users_Images/' . $_SESSION["Image_name"];
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
              <figcaption><i class="ion-android-open"></i></figcaption>
              <a href="PersonalPage/ind.php" ></a>
            </figure>
            <a href="PersonalPage/ind.php" class="username"><?php if(isset($_SESSION["Username"])) {echo $_SESSION["Username"];}?></a>
             <a href ="PersonalPage/ind.php" >Аккаунт</a>
             <a href ="index.php" >Головна</a>
           <a href="countries.php">Вибір країни</a>
           <a href="BetterPersonalInfo/index.php">Замовити</a>
           <a href="PersonalPage/index.php">Про нас</a>
           <a href="#" style="text-decoration:underline">На зв'язку</a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
         </div>


         <!-- Menu button -->

         <div id="menuToggle"><i class="fa fa-bars"></i></div>
      </nav>
      <div id="headerwrap2">
         <!--Upper Menu-->
      <div class="cont">
         <div class="green borderXwidth">
           <a href ="index.php" >ГОЛОВНА</a>
           <a href="countries.php">ВИБІР КРАЇНИ</a>
           <a href="BetterPersonalInfo/index.php">ЗАМОВИТИ</a>
           <a href="PersonalPage/index.php">ПРО НАС</a>
           <a href="#" class="curr">НА ЗВ'ЯЗКУ</a>

         </div>
       </div>

       </div>
         <!--/Upper Menu-->
 <div id="contact" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8-offset-2 centered">
                    <h1>НА ЗВ'ЯЗКУ</h1>
                    <p>Якщо у Вас виникли якісь питання, то ви можете надіслати нам їх, заповнивши відповідну форму.</p>
                </div> 
                <div class="row mt">
 <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6">
                    
                    <div class="row">
<div class="col-lg-6 hide-contact">
                  <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">
                     <div class="form-group form-group2">
                        <input type="name" name="name" class="form-control" id="contact-name" placeholder="Ім'я" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                        <div class="validate"></div>
                     </div>
                     <div class="form-group form-group2">
                        <input type="email" name="email" class="form-control" id="contact-email" placeholder="Пошта" data-rule="email" data-msg="Please enter a valid email">
                        <div class="validate"></div>
                     </div>
                     <div class="form-group form-group2">
                        <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Тема" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validate"></div>
                     </div>
                     <div class="form-group form-group2">
                        <textarea class="form-control" name="message" id="contact-message" placeholder="Повідомлення" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                        <div class="validate"></div>
                     </div>
                     <div class="loading"><img src="lib/php-mail-form/loading.gif"></div>
                     <div class="error-message"></div>
                     <div class="sent-message">Ваше повідомлення відправлене. Дякуємо!</div>
                     <div class=" form-send2 ">
                        <button type="submit" class="btn btn-large">Відправити повідомлення</button>
                     </div>
                  </form>
               </div>
                     
                    </div> <!-- /.contact-form -->
                    
                </div> <!-- /.col-md-6 -->
                                <div class="col-md-6 col-sm-6">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.8166878060233!2d36.22630211571564!3d50.014790979417555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a1243f9e69d1%3A0x6daed05394f03251!2z0KXQsNGA0YzQutC-0LLRgdC60LjQuSDQvdCw0YbQuNC-0L3QsNC70YzQvdGL0Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgiDRgNCw0LTQuNC-0Y3Qu9C10LrRgtGA0L7QvdC40LrQuA!5e0!3m2!1sru!2sua!4v1537984849357" width="600" height="450" frameborder="0" style="border:0; padding-bottom: 10%" allowfullscreen></iframe>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>
       </div> <!-- /#products -->

 <div id="contactwrap">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <section id="contact" name="contact"></section>
                  <p>Напишіть нам прямо зараз</p>
                  <p>Ми дуже любимо спілкуватися з нашими клієнтами, ми хочемо допомогти вам у будь-який час, пишіть, якщо виникли питання, чи вам просто самотньо.</p>
                  
               </div>
               <div class="col-lg-6 hide-contact">
                    <p>
                     <small>Gagarina Avenue, 41/2<br/>
                     61001, Kharkiv,<br/>
                     USU.</small>
                  </p>
                  <p>
                     <small>Тел. +38(066)699-93-33<br/>
                     Mail.VisaPlanet@example.com<br/>
                     Skype. VisaPlanet
                  </p>
               </div>
            </div>
         </div>
         <!-- /container -->
      </div>
      <div id="copyrights">
         <div class="container">
            <p>
               &copy; Copyrights <strong>Visa Planet</strong>. All Rights Reserved
            </p>
         </div>
      </div>
      <!-- / copyrights -->
      <!--Prelude classes JS -->
      <script src="js/calledFunctions.js"></script>
      <!-- JavaScript Libraries -->
      <script src="lib/jquery/jquery.min.js"></script>
      <script src="lib/bootstrap/js/bootstrap.min.js"></script>
      <script src="lib/php-mail-form/validate.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/stellar/stellar.min.js"></script>
      <script src="lib/fancybox/fancybox.js"></script>
      <!-- Template Main Javascript File -->
      <script src="js/main.js"></script>
      <script src="js/image.js"></script>
</body>
</html>