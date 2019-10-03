<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
session_start();
$COUNTRIES = ["Канада", "Перу", "Італія", "Франція", "Швеція", "Іспанія", "Японія", "Австралія", "Аргентина", "Латвія", "США", "Німеччина", "Азербайджан", "Греція", "Турція", "Україна"]
?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Require Visa</title>
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
  <link rel="stylesheet" href="css/style.css">
  <link href="css/imageuploadify.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/upperMenu.css">


  
</head>
<script type="text/javascript" src="js/countries.js"></script>
<body>
     <!--Upper Menu-->
  <div class="cont">
     <div class="green borderXwidth">
       <div class="green borderXwidth">
		     <a href="../index.php">ГОЛОВНА</a>
		     <a href="../countries.php" >ВИБІР КРАЇНИ</a>
		     <a href="#" class="curr">ЗАМОВИТИ</a>
		     <a href="../PersonalPage/index.php">ПРО НАС</a>
		     <a href="../contactus.php">НА ЗВ'ЯЗКУ</a>
		   </div>
     </div>
   </div>
     <!--/Upper Menu-->
  <!-- multistep form -->
<form id="msform" action="../success.php" method="post">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Загальна інформація</li>
    <li>Особиста інформація</li>
    <li>Документи</li>
    <li>Соціальні аккаунти</li>
    <li>Підтвердження</li>
  </ul>
  <!-- fieldsets -->


  <fieldset id="basic">
    
    <h2 class="fs-title">Загальна інформація</h2>

    <h3 class="fs-subtitle">Крок 1</h3>
      <div class="form-row row">
        
        <div class="form-group col-md-8 col-md-offset-2">
          <label class="input-label">Тип візи</label>
          <select name="visa_type" class="form-control" id="visa_type" placeholder="Оберіть тип візи">
          
            <option>Гостьова</option>
            <option>Туристична</option>
            <option>Робоча</option>
            <option>Транзитна</option>
            </select>
          <span class="symbol-input">
            <i class="fa fa-globe" aria-hidden="true"></i>
          </span>

        </div>
      </div>
      
      <div class="form-row row">
        
        <div class="form-group col-md-12">
          <label class="input-label">Країна виїзду</label>
         <!-- TODO GET CURRENT POSITION -->
         
          <input list="countries-out-data" name="country-out" class="form-control input-with-help countries" placeholder="Ukraine" id="country-out" value="Україна"/>
          <datalist id="countries-out-data">
            <?php
              for($i = 0; $i < count($COUNTRIES); $i++)
              {
                echo "<option value=". $COUNTRIES[$i] . ">";
              }
            ?>
            <
          </datalist>
          <span class="symbol-input">
            <i class="fa fa-flag-o" aria-hidden="true"></i>
          </span>
        </div>
      </div>

      <span class="glyphicon glyphicon-sort" id="swap"></span>

      
      <div class="form-row row">
        
        <div class="form-group col-md-12">
          <label class="input-label">Країна в'їзду</label>
          <?php
            if(isset($_GET["country"]) && in_array($_GET["country"], $COUNTRIES))
            {
              echo "<input list='cuntries-in-data' class='form-control input-with-help countries' placeholder='America' id='country-in' value=" . $_GET["country"] .">";
            }
            else
            {
              echo "<input list='cuntries-in-data' class='form-control input-with-help countries' placeholder='America' id='country-in'>";
            }
          ?>
          <!--<input list="cuntries-in" class="form-control" placeholder="America" id="country-in">-->
          <datalist id="cuntries-in-data">
              <?php
                for($i = 0; $i < count($COUNTRIES); $i++)
                {
                  echo "<option value=". $COUNTRIES[$i] . ">";
                }
              
              ?>
          </datalist>
          <span class="symbol-input">
            <i class="fa fa-flag" aria-hidden="true"></i>
          </span>
        </div>
      </div>
      <input type="button" name="next" class="next action-button" value="Далі" />
    
  </fieldset>


  <fieldset id="personal">
    <h2 class="fs-title">Особиста інформація</h2>
    <h3 class="fs-subtitle">Крок 2</h3>
    <div class="form-row">

      
      <div class="form-group col-md-6">
        <label class="input-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" id="email">
        <span class="symbol-input">
          <i class="fa fa-at" aria-hidden="true"></i>
        </span>
      </div>

      
      <div class="form-group col-md-6">
        <label class="input-label">Мобільний телефон</label>
        <input type="tel" class="form-control telephone" name="telephone" placeholder="+.(...)...-..-.." id="telephone">
        <span class="symbol-input">
          <i class="fa fa-mobile" aria-hidden="true"></i>
        </span>
      </div>

    </div>

    <div class="form-row">

      
      <div class="form-group col-md-6">
        <label class="input-label">Ім'я</label>
        <input type="text" class="form-control" name="user-name" placeholder="Ivan" id="user-name">
        <span class="symbol-input">
          <i class="fa fa-address-book" aria-hidden="true"></i>
        </span>
      </div>

      
      <div class="form-group col-md-6">
        <label class="input-label">Прізвище</label>
        <input type="text" class="form-control"  name="user-surname" placeholder="Petrov" id="user-surname">
        <span class="symbol-input">
          <i class="fa fa-address-book-o" aria-hidden="true"></i>
        </span>
      </div>

    </div>

    <div class="form-row">

      
      <div class="form-group col-md-6">
        <label class="input-label">Місто</label>
        <input type="text" class="form-control" name="city" placeholder="Donetsk" id="city">
        <span class="symbol-input">
          <i class="fa fa-map" aria-hidden="true"></i>
        </span>
      </div>

      
      <div class="form-group col-md-6">
        <label for="inputState" class="input-label">Область</label>
        <input list="states-data" name="state" id="inputState" class="form-control input-with-help states" placeholder="State"> <!--ADD OPTIONS VIA JS**********************************************************-->
        <datalist id="states-data">
          
        </datalist>
        <span class="symbol-input">
          <i class="fa fa-map-o" aria-hidden="true"></i>
        </span>
      </div>

    </div>

    </div>

    <span class="previous back-btn">Назад</span>
    <!--<input type="button" name="previous" class="previous action-button" value="Назад" />-->
    <input type="button" name="next" class="next action-button" value="Далі" />
  </fieldset>


  <fieldset id="docs">
    <h2 class="fs-title">Документи</h2>
    <h3 class="fs-subtitle">Крок 3</h3>
    <div class="form-row">

      <div class="form-group">

        <label>Паспорт та фото 3x4</label>
        <input type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
      </div>

    </div>

    <!--<input type="button" name="previous" class="previous action-button" value="Назад" />-->
    <span class="previous back-btn">Назад</span>
    <input type="button" name="next" class="next action-button" value="Далі" />
    <!--<input type="submit" name="submit" class="submit action-button" value="Submit" />***********************************************-->
  </fieldset>


  <fieldset id="social">
    <h2 class="fs-title">Соціальні аккаунти*</h2>
        <h6 style="text-align:left; text-color:gray">*ці поля не є обов'язковими</h6>
    <h3 class="fs-subtitle">Крок 4</h3>

      <div class="form-group">

        
        <div class="form-row row">
          <div class="form-group col-md-12">
            <label class="input-label">Facebook</label>
            <input type="text" class="form-control"  placeholder="facebook.com" id="face-book"/>
            <span class="symbol-input">
              <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </span>
          </div>
        </div>

        

        <div class="form-row row">
          <div class="form-group col-md-12">
            <label class="input-label">Skype</label>
            <input type="text" name="skype" class="form-control" placeholder="Skype" id="skype"/>
            <span class="symbol-input">
              <i class="fa fa-skype" aria-hidden="true"></i>
            </span>
          </div>
        </div>

        

        <div class="form-row row">
          <div class="form-group col-md-12">
            <label class="input-label">Telegram</label>
            <input type="text" name="telegram" class="form-control" placeholder="Telegram" id="telegram"/>
            <span class="symbol-input">
              <i class="fa fa-telegram" aria-hidden="true"></i>
            </span>
          </div>
        </div>

      </div>
      <span class="previous back-btn">Назад</span>
      <!--<input type="button" name="previous" class="previous action-button" value="Назад" />-->
      <input type="button" name="next" class="next action-button" value="Далі" />
      
  </fieldset>

  <fieldset id="accept">
    <h2 class="fs-title">Підтвердження</h2>
    <h3 class="fs-subtitle">Крок 5</h3>

      <div class="form-group output">
        <!--<label class="output-label"></label>-->
      </div>
      <div class="form-group" id="show-photos">
        
      </div>
      <span class="previous back-btn">Назад</span>
      <!--<input type="button" name="previous" class="previous action-button" value="Назад" />-->
      <input type="submit" name="submit" class="submit action-button" value="Підтвердити" />
      
  </fieldset>

</form>

  
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="js/maskedinput/src/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="js/imageuploadify.min.js"></script>
    <script src="js/User.js" type="text/javascript"></script>
    <script src="js/index.js" type="text/javascript"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('input[type="file"]').imageuploadify();
        })
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
        });
    </script>

</body>
</html>
