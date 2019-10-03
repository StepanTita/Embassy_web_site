<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Success</title>
  
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
  <link rel="stylesheet" href="BetterPersonalInfo/css/style.css">
  <link rel="stylesheet" href="css/upperMenu.css">


  <style type="text/css">
  	#menu {
  	   float: left;
  	   background-color: #FFFFFF;
  	   padding: 15px;
  	   font-family: Tahoma;
  	   font-size: 18px;
  	   width: 100%;
  	   border-radius: 6px;
  	   -moz-border-radius: 6px;
  	   box-shadow: 0 3px 10px #e1e5e8, 0 0 10px #F6F5F5 inset;
  	   line-height:25px;
  	   margin-top: 15px;
  	   margin-bottom: 15px;
  	   text-align: justify;
  	}
  	#menu a {
  	    color: #0295b6;
  	   font-size: 12px;
  	   font-weight: bold;
  	}
  	#menu a:hover {
  	   color: #ff8400;
  	   text-decoration: none;
  	   font-size: 12px;
  	   font-weight: bold;
  	}  
  </style>
</head>

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

  <form method="get" action="index.php" id="msform">
  	<fieldset id="docs">
  	  <h2 class="fs-title">Відправка пройшла успішно</h2>
  	  <div class="form-row">

  	    <div class="form-group">
  	    	<h1>Ви успішно подали усі необхідні документи на візу</h1>
  	    	<div id="menu">
  	    		Ваша заявка прияйнята та буде оброблена посольством у найближчий час, Ви можете стежити за 
  	    		тим у яких відділах та на якому етапі відбувається обробка Ваших даних. Як тільки Ваші документи
  	    		будуть готові, або в посольстві виникнуть якість запитання, з Вами зв'яжуться наші представники.

  	    	 </div>
  	    	<h3 class="fs-subtitle">Дякуємо що обрали нас!</h3>
  	    </div>

  	  </div>


  	  <input type="submit" name="next" class="next action-button" value="На головну" />
  	  <!--<input type="submit" name="submit" class="submit action-button" value="Submit" />***********************************************-->
  	</fieldset>
  </form>

  
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
        });
    </script>

</body>
</html>
