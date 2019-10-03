
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
	<link href="../css/frameHolder.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/demo-image.css">
	<link rel="stylesheet" type="text/css" href="../css/image.css">
	<link rel="stylesheet" href="../css/tip.css">

	<!-- Modernizer JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <style>
        #colorlib-main{
            width:100%;
        }
        #colorlib-hero{
            padding: 0;
            margin:0;
            background-size: cover;
        }
        </style>
	</head>
	<body>
      <nav class="menu" id="theMenu">
         <div class="menu-wrap">
            <h1 class="logo"><a href="../index.php" class="smoothscroll">Visa center</a></h1>
            <i class="fa fa-times menu-close"></i>
            <figure class="snip1566"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample17.jpg" alt="sq-sample17" />
              <figcaption><i class="ion-android-open"></i></figcaption>
              <a href="ind.php"></a>
            </figure>
            <a href="ind.php" class="username"><?php if(isset($_SESSION["Username"])) {echo $_SESSION["Username"];}?></a>
             <a href ="ind.php" >Аккаунт</a>
             <a href ="../index.php" >Головна</a>
           <a href="../countries.php" style="text-decoration:underline">Вибір країни</a>
           <a href="../BetterPersonalInfo/index.php">Замовити</a>
           <a href="#" class="curr">Про нас</a>
           <a href="../contactus.php">На зв'язку</a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
         </div>


         <!-- Menu button -->

         <div id="menuToggle"><i class="fa fa-bars"></i></div>
      </nav>
		   <!--Upper Menu-->
		<div class="cont">
		   <div class="green borderXwidth">
		     <a href="../index.php">ГОЛОВНА</a>
		     <a href="../countries.php">ВИБІР КРАЇНИ</a>
		     <a href="../BetterPersonalInfo/index.php">ЗАМОВИТИ</a>
		     <a href="#" class="curr">ПРО НАС</a>
		     <a href="../contactus.php">НА ЗВ'ЯЗКУ</a>
		   </div>
		 </div>
		   <!--/Upper Menu-->
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		
		<div id="colorlib-main">
			<section id="colorlib-hero" class="js-fullheight" data-section="home" style="width:100%; ">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(images/img_bg_4rd.jpg)" >
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc">
						   					<h1  style="font-family: 'Verdana'; color: white; font-size: 34pt;">Вітаємо у <br>Visa center</h1>
						   					<span class="continue"  style="font-family: 'Verdana'; color: white;">Дізнатися більше</span>
										</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(images/img_bg_1.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-7 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1 style="font-size: 25pt; font-family: 'Verdana'">Ми допоможемо вам із Документами</h1>
												<h3 style="font-family: 'Verdana'; text-align: justify;">Скажемо що і як зібрати, а також самі відправимо документи у посольство країни, до якої ви хотіли б відправитися</h3>
												<span class="continue" style="font-family: 'Verdana'; color: black;">Дізнатися більше</span>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</section>

			<section class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
										<span class="heading-meta">Про нас</span>
										<h2 class="colorlib-heading">Хто ми такі?</h2>
										<p><strong>Ми Visa center</strong>, наша історія бере початок з далекого 2006 року, саме тоді ми отримали дозвіл від Міністерства закордонних справ на реалізацію принципово новго типу візового центру для українців. В нас немає черг, немає емоційних співробіників, немає пустого витрачання часу. Все що вам необхідно буде: це вибрати країну, заповнити анкету і надати нам ваші особисті документи - все це займе у Вас не більше 10 хвилин. Безпека даних гарантується, а якщо станеться щось непередбачуване, то ми повернемо Вам кошти</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-1">
										<span class="icon2"><i class="icon-bulb"></i></span>
										<h3>Допомога з виникаючими питаннями</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
									<div class="services color-2">
										<span class="icon2"><i class="icon-globe-outline"></i></span>
										<h3>Вибір країн</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
									<div class="services color-3">
										<span class="icon2"><i class="icon-data"></i></span>
										<h3>Збір даних</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
									<div class="services color-4">
										<span class="icon2"><i class="icon-phone3"></i></span>
										<h3>Дистанційний зв'язок</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<div class="hire">
										<h2>Ми раді повідомити, <br>що більше ніж 3000 осіб вже отримали візу із нашою допомогою!</h2>
										<a href="../BetterPersonalInfo/index.php" class="btn-hire">Замовити</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			
<section class="colorlib-services" data-section="services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Що саме ми робимо?</span>
							<h2 class="colorlib-heading">Ось декілька питань із якими ми вам допоможемо</h2>
						</div>
					</div>
					<div class="row row-pt-md">
						<div class="col-md-4 text-center animate-box">
							<div class="services color-1">
								<span class="icon">
									<i class="icon-bulb"></i>
								</span>
								<div class="desc">
									<h3>Будь-які виникаючі питання</h3>
									<p>З будь-якою проблемою з приводу оформлення ви можете звернутися до нашого <a href="../contactus.php" >контактного центру</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-2">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
								<div class="desc">
									<h3>Збір необхідних даних</h3>
									<p>Протягом часу офрмлення візи, Вам знадобиться певний пакет документів, який саме та як його дістати, підкажемо Вам ми!</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-3">
								<span class="icon">
									<i class="icon-phone3"></i>
								</span>
								<div class="desc">
									<h3>Подача заявки</h3>
									<p>Весь період оформлення візи буде проходити дистанційно (якщо, ви не забажаєте проконтролювати його у посольстві особисто)</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-4">
								<span class="icon">
									<i class="icon-layers2"></i>
								</span>
								<div class="desc">
									<h3>Видання візи</h3>
									<p>Після завершення терміну обробки документів, за яким ви можете спострегати через особисту сторінку, з Вами зв'яжуться наші представники та обумовлять передачу візи.</p>
								</div>
							</div>
					</div>
				</div>
			</section>
			
	<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/counter.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="3029" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Задоволених користувачів</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="356" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Віз на обробці</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="12" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Років роботи</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="10" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Партнерів</span>
						</div>
					</div>
				</div>
			</div>

	

			<section class="colorlib-experience" data-section="experience">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Кроки</span>
							<h2 class="colorlib-heading animate-box">Необхідні кроки для отримання візи</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
				         <div class="timeline-centered">
					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">

					               <div class="timeline-icon color-1">
					                  <i class="icon-pen2"></i>
					               </div>

					               <div class="timeline-label">
					                  <h2><a href="#">В першу чергу</a> <span>2017-2018</span></h2>
					                  <p>Предоставити свій звичайний або міжнародний паспорт, що затверджує Вас, як громадянина України. 
					                  	Для віправлення заявки через сайт Вам необхідно буде відсканувати основні сторінки вашого паспорту (або предоставити сканер пластикового паспорту нового взірця). Також необхідно предоставити кольорову нову фотокартку 3х4.
					                  </p>
					               </div>
					            </div>
					         </article>


					         <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-2">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">Другий крок</a> <span>2017-2018</span></h2>
					                  <p>За наявністю усіх необхідних документів, ви можете звернутися з питаннями, що виникли до нашого <a href="" > сервісу пілтримки </a>, або самостійно заповнити форму на замовлення візи.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-3">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">Третій крок</a> <span>2017-2018</span></h2>
					                  <p>Протягом не менш ніж двох тижнів після подання заявки на отримання візи, Вам необхідно буде чекати <strong> відповіді від посольства </strong> , до якого були направлені документи.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-4">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">У разі відмови</a> <span>2017-2018</span></h2>
					                  <p>Якщо Вам відмовили у отриманні візи без об'єктивних причин, то Ви можете звернутися до нас за поштою <strong>example@mail.com</strong>, і через деякий час із Вами зв'яжуться для уточнення деталей, аби допомогти Вам знову подати заявку.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-5">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">У разі позитивної відповіді</a> <span>2017-2018</span></h2>
					                  <p>З Вами зв'язуються наші робітники і домовляються з приводу того яким чином, та коли Вам буде зручно отримати Вашу візу.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-none">
					               </div>
					            </div>
					         </article>
					      </div>
					   </div>
				   </div>
				</div>
			</section>
			
			
			
            </section>
		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->
		<div id="contactwrap">
		   <div class="container">
		      <div class="row">
                <div class="col-lg-6">
                  <section id="contact" name="contact"></section>
                  <p>Напишіть нам прямо зараз</p>
                  <p>Ми дуже любимо спілкуватися з нашими клієнтами, ми хочемо допомогти вам у будь-який час, пишіть, якщо виникли питання, чи вам просто самотньо.</p>
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
		         <div class="col-lg-6 hide-contact">
		            <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">
		               <div class="form-group">
		                  <input type="name" name="name" class="form-control" id="contact-name" placeholder="Ваше ім'я" data-rule="minlen:4" data-msg="Введіть не менше 4 символів" >
		                  <div class="validate"></div>
		               </div>
		               <div class="form-group">
		                  <input type="email" name="email" class="form-control" id="contact-email" placeholder="Ваша електронна адреса" data-rule="email" data-msg="Введіть корректну електронну адресу">
		                  <div class="validate"></div>
		               </div>
		               <div class="form-group">
		                  <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Тема" data-rule="minlen:4" data-msg="Введіть не менше 8 символів">
		                  <div class="validate"></div>
		               </div>
		               <div class="form-group">
		                  <textarea class="form-control" name="message" id="contact-message" placeholder="Ваше повідомлення" rows="5" data-rule="required" data-msg="Будь-ласка напишіть щось нам"></textarea>
		                  <div class="validate"></div>
		               </div>
		               <div class="loading"><img src="lib/php-mail-form/loading.gif"></div>
		               <div class="error-message"></div>
		               <div class="sent-message">Ваше повідомлення відправлено.Дякуємо!</div>
		               <div class="form-send">
		                  <button type="submit" class="btn btn-large">Відправити повідомлення</button>
		               </div>
		            </form>
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
		<script src="../js/calledFunctions.js"></script>
		<script src="../lib/stellar/stellar.min.js"></script>
		
	</body>
</html>

