<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>VISA Center</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">
      <!-- Favicons -->
      <link href="img/favicon.png" rel="icon">
      <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700|Lato:400,700" rel="stylesheet">
      <!-- Bootstrap CSS File -->
      <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Libraries CSS Files -->
      <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="lib/fancybox/fancybox.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <!-- Main Stylesheet File -->
      <link href="css/style.css" rel="stylesheet">
      <link href="css/upperMenu.css" rel="stylesheet">
      <link href="css/Support.css" rel="stylesheet">
      <link href="css/Letters.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/image.css">
      <link rel="stylesheet" type="text/css" href="css/demo-image.css">
      <link href="css/GoToCountryButton.css" rel="stylesheet">
      <link rel="stylesheet" href="css/tip.css">
   </head>
   <body>


      <!-- Menu -->
      <nav class="menu" id="theMenu">
         <div class="menu-wrap">
            <h1 class="logo"><a href="#home" class="smoothscroll">Visa center</a></h1>
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
             <a href ="#" style="text-decoration:underline">Головна</a>
           <a href="countries.php" >Вибір країни</a>
           <a href="BetterPersonalInfo/index.php">Замовити</a>
           <a href="PersonalPage/index.php">Про нас</a>
           <a href="contactus.php">На зв'язку</a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
         </div>


         <!-- Menu button -->

        

      <div id="menuToggle">
        <div id="anim">
          <span data-placement="bottom" class="tooltip" data-tooltip="Дивіться, тут меню!">
            <i class="fa fa-bars"></i>
          </span>
        </div>
        
      </div>
      </nav>
      <section id="home" name="home"></section>
      <div id="headerwrap">


         <!--Upper Menu-->
      <div class="cont">
		  <div class="green borderXwidth">
		     <a href="#" class="curr">ГОЛОВНА</a>
		     <a href="countries.php">ВИБІР КРАЇНИ</a>
		     <a href="BetterPersonalInfo/index.php">ЗАМОВИТИ</a>
		     <a href="PersonalPage/index.php">ПРО НАС</a>
		     <a href="contactus.php">НА ЗВ'ЯЗКУ</a>
		   </div>
       </div>
         <!--/Upper Menu-->


         <!--Suport Button-->
         <div class="support">
          <div class="">
               <div class="col-md-12">
                 <div class="material-button-anim over-page">
                   <ul class="list-inline" id="options">
                     <li class="option">
                       <a href="Login_v1/reg.php" title="Увійти до вашого аккаунту"><button class="material-button option1" type="button" >
                         <span class="fa fa-sign-in"></span>
                       </button></a>
                     </li>
                     <li class="option">
                       <a href="contactus.php" title="На Зв'язку"><button class="material-button option2" type="button">
                         <span class="fa fa-envelope-o" aria-hidden="true"></span>
                       </button></a>
                     </li>
                     <li class="option">
                       <a href="PersonalPage/ind.php" title="Ваша персональна сторінка"><button class="material-button option3" type="button">
                         <span class="fa fa-user" aria-hidden="true"></span>
                       </button></a>
                     </li>
                   </ul>
                   
                   <button class="material-button material-button-toggle" type="button">
                     <span class="fa fa-plus" aria-hidden="true"></span>
                   </button>
                    
                 </div>
               </div>
              
          </div>
          

         </div>
         <!--/Suport Button-->

         <div class="container">
            <div class="row shadow-block">
               <div class="col-md-6 col-md-offset-3">
                <div class="foo">
                  <table class="letters">
                    <tr>
                      <td><span class="letter" data-letter="G" style = 'margin-left: 50%;'>G</span></td>
                      <td><span class="letter" data-letter="E">E</span></td>
                      <td><span class="letter" data-letter="T" style = 'margin-right: 50%;'>T</span></td>
                    </tr>
                  </table>
                  <table class="letters">
                    <tr>
                      <td><span class="letter" data-letter="V">V</span></td>
                      <td><span class="letter" data-letter="I">I</span></td>
                      <td><span class="letter" data-letter="S">S</span></td>
                      <td><span class="letter" data-letter="A">A</span></td>
                    </tr>
                  </table>
                </div>
                  <!--<h1 class="Losung">GET VISA</h1>-->
                  <!--<a href="#" class="flipper-container">
                    <div id="id" class="flipper">
                      <div class="front-face" data-icon="➣"><span data-hover="Clicked">Click Me</span></div>
                      <div class="back-face" data-icon="✓">Thanks</div>
                    </div>
                  </a>-->
                  <button class="button">
                    <a href="countries.php"> <span class="button__inner">Вибрати країну</span> </a>
                  </button>

                  <button class="button">
                     <a href="BetterPersonalInfo/index.php"><span class="button__inner" >Замовити візу</span></a>
                  </button>
                <button class="button button--secondary links-to-countries" style="margin-top:18px">
                    <span class="button__inner">Отримати інформацію</span>
                  </button>

                  <!--<button class="links-to-countries">Рушаймо</button>-->
                  <br>
                  <br>
               </div>
            </div>
         </div>
      </div>


      <section id="about" name="about"></section>


         <div class="container">
            <div class="row mini-form">
              <!--advices-->
              <div id="portfoliowrap">
                <div class="container">
                   <div class="row mt centered">
                       <div style="margin-bottom:50px">
                       <h1 style="margin-bottom:4px">Інформація </h1>
                       <a href="PersonalPage/index.php" style="color:gray; text-decoration:underline">хочеш ще?</a>
                       </div>
                      <div class="col-lg-4 proc">
                         <i class="glyphicon glyphicon-user"></i>
                         <h3>Дещо про візу</h3>
                         <p>О так, так, звичайно у нас ви зможете дізнатися де отримати ту чи іншу візу, ви зможете побачити багато чого, якщо справді того захочете</p>
                      </div>
                      <div class="col-lg-4 proc">
                         <i class="glyphicon glyphicon-flag"></i>
                         <h3>Дещо про туристів</h3>
                         <p>Все досить просто, достатньо поїхати в іншу країну на тиждень, забувши про все, що тут залишилось, з нами у Вас це вийде</p>
                      </div>
                      <div class="col-lg-4 proc">
                         <i class="glyphicon glyphicon-home"></i>
                         <h3>Дещо про подорож</h3>
                         <p>Спочатку необхідно обрати відповідне представництво, оформити документи і придбати білет на транспорт, сподіваємось наша додаткова інформація стане Вам у пригоді</p>
                      </div>
                      <div class="col-lg-4 proc">
                         <i class="glyphicon glyphicon-usd"></i>
                         <h3>Дещо про бізнес</h3>
                         <p>Так, ми займаємось не тільки звичайними туристичними візами, але й допомагаємо налагодити взаємозв'язок з бізнес-середовищем тієї чи іншої країни</p>
                      </div>
                      <div class="col-lg-4 proc">
                         <i class="fa fa-cogs"></i>
                         <h3>Дещо про ідеї</h3>
                         <p>Ми постійно відкриті до ваших ідей, ідей, що можуть зробити кращими не тільки нас, тому ми і зайнялися цим, аби дати людям можливість бачити більше і, як наслідок, розуміти більше</p>
                      </div>
                      <div class="col-lg-4 proc">
                         <i class="glyphicon glyphicon-education"></i>
                         <h3>Дещо про навчання</h3>
                         <p>Також ми займаємось проведенням перемовин з приводу навчання за кордоном, проте про це дещо пізніше</p>
                      </div>
                   </div>
                </div>
              </div>
              <!--/avices-->
            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      <!-- /aboutwrap -->
      <div class="sep about" data-stellar-background-ratio="0.5"></div>
      <section id="services" name="services"></section>
      <div id="servicewrap">
         <div class="container">
            <div class="row">
               <div class="col-lg-8-offset-2 centered">
                  <h1>Усі наші послуги</h1>
                  <h3>Все, що ми робимо, ми робимо для вас</h3>
                  <p>Робимо, аби ви почували себе комфортно, аби ви бачили більше, аби ви мали час мріяти</p>
               </div>
               <!-- /col-lg-8 -->
            </div>
            <div class="row mt">
               <div class="col-lg-3 service">
                  <i class="fa fa-clock-o"></i>
                  <p>НАЙКОРОТШІ ТЕРМІНИ<br/><small>Найшвидші від усіх</small></p>
                  <p class="text">Партнерство з великою кількістю представництв дає можливість нам зменшити ваш час очікування</p>
               </div>
               <div class="col-lg-3 service">
                  <i class="fa fa-cloud"></i>
                  <p>БІЛЕТИ В ДОРОГУ<br/><small>Все невиходячи з дому</small></p>
                  <p class="text">Наша кур'єрська служба зможе доставити вам ваші документи для поїздки прямо до дверей вашої домівки</p>
               </div>
               <div class="col-lg-3 service">
                  <i class="fa fa-shield"></i>
                  <p>ОХОРОНА ІНФОРМАЦІЇ<br/><small>У нас все під контролем</small></p>
                  <p class="text">Всі дані, які ви передаєте посольству через нас, не будуть розпосюджуватися, варто зазначити, що ми також не будемо користуватися вашою інофрмацією</p>
               </div>
               <div class="col-lg-3 service">
                  <i class="fa fa-heart"></i>
                  <p>БАГАТО ЦІКАВОГО<br/><small>І навіть дня буде замало</small></p>
                  <p class="text">Окрім безпосередніх послуг пов'язаних з отриманням візи, ми пропонуємо Вам велику кількість цікавинок про всі доступні нам країни</p>
               </div>
            </div>
            <div class="row mt">
               <div class="col-lg-3 service">
                  <i class="fa fa-trophy"></i>
                  <p>ВИСОКА ЯКІСТЬ<br/><small>Лідери ринку за якістю послуг</small></p>
                  <p class="text">Наша компанія пропонує найкраще обслуговування в цій сфері, ми пілуємось про вас та про ваш відпочинок</p>
               </div>
               <div class="col-lg-3 service">
                  <i class="fa fa-globe"></i>
                  <p>КОМУНІКАЦІЯ НА ВІДСТАНІ<br/><small>Ми за новий підхід в туризмі</small></p>
                  <p class="text">Наші оператори в різних соцмережах працюють цілодобово і зможуть допомогти, якщо виникнуть питання</p>
               </div>
               <div class="col-lg-3 service">
                  <i class="fa fa-lock"></i>
                  <p>ГАРАНТІЇ ЯКОСТІ<br/><small>Молоді, проте надійні</small></p>
                  <p class="text">Першооснова нашої компанії це надійність всіх підрозділів,які в нас є,повірте - вік всього лише число</p>
               </div>
               <div class="col-lg-3 service">
                  <i class="fa fa-thumbs-up"></i>
                  <p>100% ПОВЕРНЕННЯ<br/><small>Якщо трапиться лихо</small></p>
                  <p class="text">Якщо ми незможемо зробити так, що ви отримаєте візу, то всі ваші кошти будуть повернені вам назад</p>
               </div>
            </div>
         </div>
      </div>
      <section id="portfolio" name="portfolio"></section>

      <div class="sep portfolio" data-stellar-background-ratio="0.5"></div>


      <!--service-wrap-->


      <div id="testimonials">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-lg-offset-2 mt">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                        <div class="item active mb centered">
                           <h3>Ілон Маск</h3>
                           <p>Я так багато шукав подібну компанію, проте все було марно, поки Сергій Брін не підказав мені сайт однієї української компанії і повірте мені, я в захваті, це найкраща компанія, якщо ви хочете отримати візу, на Марс так точно 
                           </p>
                           <p><img class="img-circle" src="img/pic-t1.jpg" width="80"></p>
                        </div>
                        <div class="item mb centered">
                           <h3>Степан Титаренко</h3>
                           <p>Це був наш перший концепт, була наша перша ідея, ідея того, як показати людям світ, як змусити бачити їх більше, ніж зазвичай, ми хотіли, аби вони відсунулись від екранів і побачили світ, думаю. що нам це вдалося
                           </p>
                           <p><img class="img-circle" src="img/pic-t2.jpg" width="80"></p>
                        </div>
                        <div class="item mb centered">
                           <h3>Артем Ховрат</h3>
                           <p>Було важко, нам відмовляли представництва, один за одним, бо ми дуже молоді, аби взаємодіяти з ними напряму, проте під Новий Рік все повернулося в інший бік, Штати вирішили співпрацювати з нами і відтоді все змінилося
                           </p>
                           <p><img class="img-circle" src="img/pic-t3.jpg" width="80"></p>
                        </div>
                     </div>
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active pimp"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="sep contact" data-stellar-background-ratio="0.5"></div>
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
		               <div class="sent-message">Ваше повідомлення відправлено. Дякуємо!</div>
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
      <!-- / copyrights -->
      <!--Prelude classes JS -->
      <script src="js/calledFunctions.js"></script>
      <!-- JavaScript Libraries -->
      <script src="lib/jquery/jquery.min.js"></script>
      <!--<script src="lib/bootstrap/js/bootstrap.min.js"></script>-->
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript">
        $.fn.bootstrapBtn = $.fn.button.noConflict();
        $.fn.bootstrapTooltip = $.fn.tooltip.noConflict();   
      </script>
      <script src="lib/php-mail-form/validate.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/stellar/stellar.min.js"></script>
      <script src="lib/fancybox/fancybox.js"></script>
      <!-- Template Main Javascript File -->
      <script src="js/main.js"></script>
      <script src="js/image.js"></script>
      <script src="js/ButtonToGo.js" type="text/javascript"></script>
   </body>
</html>