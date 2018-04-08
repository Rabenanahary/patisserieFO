<?php
	require('fonctions.php');	

	session_start();

	$connection = getConnection();
     $id= $_GET['id'];
	$gateau = getGateau($connection,"idGat = ".$id);
   
	
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Recettes</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <div class="sixcol"> <img src="images/logoo.png" width="303" height="120" alt=""> </a></div>
      <!--end logo-->
      <!--start menu-->
       <div class="sixcol">
        
          <ul id="navlist" style="margin-left : 950px">
            <li id="home"><a href="index.php"></a></li>
            <li id="info"><a href=" info.php"></a></li>
            <li id="contact"><a href="contact.php"></a></li>
          </ul>
        
      </div>
      <!--end menu-->
     <img src="images/re.png" width="350" height="256" alt="" class="cake">
      <!--end header-->
    </header>
  </div>
</div>
<!--start intro-->
<div class="container">
  <div class="row">
    <section id="intro" class="onecol">
      <hgroup>
        <h1>LES RECETTES</h1>
        <h2> Recettes simples et efficaces pour les gateaux en famille et plus. </h2>
      </hgroup>
      
    </section>
  </div>
</div>
<!--end intro-->
<div class="container">
  <div class="row">
    <div class="holder_content1">
      <section class="group4">
       
      </section>
    </div>
    <!--end holder-->
  </div>
</div>

<?php 
 foreach($gateau as $gateaux) {
?> 

<div class="container">
  <div class="row">
    <div class="fourcol">
      <section class="group1">
        <h5><?php echo $gateaux["nom"]; ?></h5>
        <h4><?php echo $gateaux["recette"]; ?></h4>
        <a class="photo_hover3" ><img src="<?php echo $gateaux["image"]; ?>" width="215" height="137" alt=""></a> 
      </section>
    </div>
  </div>
</div>
<?php } ?>
  

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
