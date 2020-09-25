<?php include("init.php");

$sort = '';
if(isset($_GET["sort"])){
	if($_GET["sort"]=='asc'){
		$sort =" order by l.cena asc";
	}
	if($_GET["sort"]=='desc'){
		$sort =" order by l.cena desc";
	}
}



 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>E-Apoteka</title>
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="css/font-awesome.min.css">
  	<link rel="stylesheet" href="css/jquery.bxslider.css">
  	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  	<link rel="stylesheet" href="css/animate.css">
  	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  	<link href="css/prettyPhoto.css" rel="stylesheet" />
  	<link href="css/style.css" rel="stylesheet" />
	
		
  <!-- Favicons -->
  <link href="img/logo.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/prettyphoto/css/prettyphoto.css" rel="stylesheet">
  <link href="lib/hover/hoverex-all.css" rel="stylesheet">
  <link href="lib/jetmenu/jetmenu.css" rel="stylesheet">
  <link href="lib/owl-carousel/owl-carousel.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style2.css" rel="stylesheet">
  <link rel="stylesheet" href="css/colors/pomegranate.css">
	
	</head>
  <body>
	<div class="topbar clearfix">
    <div class="container">
      <div class="col-lg-12 text-right">
        <div class="social_buttons">
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble"></i></a>
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa fa-rss"></i></a>
        </div>
      </div>
    </div>
    <!-- end container -->
	</div>
	
  <?php include 'headerPocetna.php'; ?>
  <section id="intro">
    <div class="container">
      <div class="ror">
        <div class="col-md-8 col-md-offset-2">
          <h1>KM APOTEKA</h1>
          <p><span style="background-color: #303030;">Naša e-apoteka Vam pruža mogućnost poručivanja proizvoda po najpovoljnijim cenama.</span></p>
          <p><span style="background-color: #303030;">Radno vreme:</span></p>
          <p><span style="background-color: #303030;">00-24</span></p>
        </div>
      </div>
    </div>
  </section>


	<div class="features">
		<div class="container">
			<div class="text-center">
				<div class="dm-icon-effect-1" data-effect="slide-bottom">
					<h1>Lekovi</h1>
				</div>
				<div class="dm-icon-effect-1" data-effect="slide-bottom">
          <h2> Sortirajte lekove po ceni </h2>
          <a data-effect="slide-left" href="index.php?sort=asc">Rastuće</a>
			    <a data-effect="slide-right" href="index.php?sort=desc"> Opadajuće</a>
				</div>
        <br>
				
        <div>
					<table class="table table-hover dm-icon-effect-1" data-effect="slide-top">
            <thead>
              <tr>
                <th class="text-center">Naziv</th>
                <th class="text-center">Kategorija</th>
                <th class="text-center">Opis</th>
                <th class="text-center">Cena</th>
                <th class="text-center">Slika</th>
              </tr>
            </thead>
            <tbody>
              <?php
        					$lekovi=$db->rawQuery("select * from lekovi l join kategorijalekova kl  on l.kategorijaID = kl.kategorijaID ".$sort);
        					foreach($lekovi as $l):
        				?>
                <tr>
                  <td><?php echo $l["naziv"];?></td>
                  <td><?php echo $l["nazivKategorije"];?></td>
                  <td><?php echo $l["opis"];?></td>
                  <td><?php echo $l["cena"];?></td>
                  <td><img src="slike/<?php echo $l["slika"];?>" width="150px" height="100px"/></td>
                </tr>
                <?php endforeach;?>
            </tbody>
          </table>
				</div>
			</div>
		</div>
	</div>


  <?php include 'footer2.php'; ?>





    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/functions.js"></script>
  <script>wow = new WOW({}).init();</script>
    
    
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/prettyphoto/js/prettyphoto.js"></script>
  <script src="lib/isotope/isotope.min.js"></script>
  <script src="lib/hover/hoverdir.js"></script>
  <script src="lib/hover/hoverex.min.js"></script>
  <script src="lib/unveil-effects/unveil-effects.js"></script>
  <script src="lib/owl-carousel/owl-carousel.js"></script>
  <script src="lib/jetmenu/jetmenu.js"></script>
  <script src="lib/animate-enhanced/animate-enhanced.min.js"></script>
  <script src="lib/jigowatt/jigowatt.js"></script>
  <script src="lib/easypiechart/easypiechart.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
