<?php include("init.php");

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
	<link href="css/datatabela.css" rel="stylesheet" />
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
  <link href="css/style.css" rel="stylesheet" />
   <style type="text/css">
  img{
    margin-bottom: 20px;
    border-radius: 80px;
  }
  </style>
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
  <!-- end topbar -->

  <?php include 'headerKupi.php'; ?>
	<div class="features">
		<div class="container">
			<div class="text-center">
				<div class="dm-icon-effect-1" data-effect="slide-bottom">
					<h2>Kupovina lekova</h2>
				</div>
				<div class="dm-icon-effect-1" data-effect="slide-bottom">
          <table id="tabela">
      				<thead>
      					<tr>
      						<th>Naziv leka</th>
      						<th>Opis</th>
      						<th>Cena</th>
      						<th>Kategorija leka</th>
      						<th>Kupovina</th>
      					</tr>
      				</thead>
      				<tbody>
      					<?php
                    $path = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
      							$curl_zahtev = curl_init("{$path}/rest/lekoviKupovina.json");
      							curl_setopt($curl_zahtev, CURLOPT_RETURNTRANSFER, 1);
      							$curl_odgovor = curl_exec($curl_zahtev);
      							$json_objekat=json_decode($curl_odgovor, true);
      							curl_close($curl_zahtev);
      							foreach ($json_objekat as $lekovi) {
      								?>
      										<tr>
														<td><?php echo $lekovi['naziv']; ?></td>
      											<td><?php echo $lekovi['opis']; ?></td>
      											<td><?php echo $lekovi['cena']; ?></td>
      											<td><?php echo $lekovi['nazivKategorije']; ?></td>
      											<td><button role="button" onclick="kupi(<?php echo $lekovi['lekID']; ?>)" > Kupi lek </button></td>
      										</tr>
      								<?php
      							}
      					 ?>
      				 </tbody>
      			 </table>
      			 <div id="odgovor"> </div>
				</div>
				<div class="dm-icon-effect-1" data-effect="slide-bottom">
        <img src="img/kupi.jpg" height="300" width="350">
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
  <script src="js/datatabela.js"></script>
	<script>wow = new WOW({}).init();</script>
  <script>
				$(document).ready(function(){
					$('#tabela').DataTable();
				});

	</script>
  <script>
      	function kupi(lekID){

      		console.log(lekID);
      		var podaci = "lekID=" + lekID ;

      				$.ajax({
      					method: "post",
      					url: "novaKupovina.php",
      					data: podaci,
      					success: function(data){
      						$("#odgovor").html(data);
      				}
      			});
      	}

    </script>
</body>
</html>
