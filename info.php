<?php
	require('fonctions.php');	

	session_start();

	$connection = getConnection();
	$gateau = getGateau($connection,null);
	
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Information Patisserie</title>
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
            <li id="info"><a href="#"></a></li>
            <li id="contact"><a href="contact.php"></a></li>
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
        <h1>INFORMATION</h1>
        <h2> Nous somme la pour Sucré votre Vie </h2>
      </hgroup>
      
    </section>
  </div>
</div>
<!--end intro-->
<div class="container">
  <div class="row">
    <div class="holder_content1">
      <section class="group4">
        <h3>Chez Mika Patisserie</h3>
        <article>
          <h4>Les Meilleurs Des Patissiers 
              <span>Profitez, Savourez, Regalez vous </span>
              <span> Nous vous offrons les plus innouies des recettes </span>
              <span> Facile à préparer, mais délicieux a savourer </span>
          </h4>
        </article>
      </section>
    </div>
    <!--end holder-->
  </div>
</div>
<center>
<?php 
 foreach($gateau as $gateaux) {
?>

<div class="container" style="margin-left:700px;">
  <div class="row">
    <div class="fourcol">
      <section class="group1">
        <h5><?php echo $gateaux["nom"]; ?></h5>
        <a class="photo_hover2" ><img src="<?php echo $gateaux["image"]; ?>" style="width:215px;height:137px;"  alt=""/></a> 
         
      </section>
    </div>
  </div>
</div>
<?php } ?>
</center>

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
