<?php
	require('fonctions.php');	

	session_start();

	$connection = getConnection();
	$gateau = getGateau($connection,null);
	
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Contact</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Recettes simples et efficaces pour les gateaux en famille et plus. ">
<link rel="stylesheet" href="css/1140.css" type="text/css" media="screen">
<link rel="stylesheet" href="sprite.css" type="text/css" >
<!--[if lte IE 9]>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<script src="js/html5.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
</head>
<body>



<div class="container">
  <div class="row">
    <!--start header-->
    <header>
      <!--start logo-->
      <div class="sixcol"> <img src="images/logoo.png" width="303" height="120" alt=""> </div>
      <!--end logo-->
      <!--start menu-->
      <div class="sixcol">
        
          <ul id="navlist" style="margin-left : 950px">
            <li id="home"><a href="index.php"></a></li>
            <li id="info"><a href="info.php"></a></li>
            <li id="contact"><a href="#"></a></li>
          </ul>
        
      </div>
      <!--end menu-->
      <img src="images/cake.png" width="350" height="256" alt="" class="cake">
      <!--end header-->
    </header>
  </div>
</div>
<!--start intro-->
<div class="container">
  <div class="row">
    <section id="intro" class="onecol">
      <hgroup>
        <h1>Contact</h1>
        <h2> Pour plus de détail </h2>
      </hgroup>
      
    </section>
  </div>
</div>
<!--end intro-->
<div class="container">
  <div class="row">
    <div class="holder_content1">
      <section class="group4">
        <h3>Contact Mika Patisserie</h3>
        <article>
          <h4>Les Meilleurs Des Patissiers 
              <span>Contactez nous pour embéllir votre sucrerie </span>
               <span>(+261)32 41 665 49 </span>
              
          </h4>
        </article>
      </section>
    </div>
    <!--end holder-->
  </div>
</div>


<!--start footer-->
<footer>
  <div class="container copyright">
    <div class="row">
      <div class="sixcol">
        <div id="FooterTree"> &copy; 2018 Chez Mika </div>
      </div>
      <div class="sixcol last">
        <div id="FooterTwo"> RABENANAHARY Mickael n°18 </div>
      </div>
    </div>
  </div>
</footer>
<!--end footer-->
</body>
</html>
