<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Signal | Portal sygnałowy rynku kryptowalut</title>

   <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/owl.carousel.css">  
    <link rel="stylesheet" href="css/slidr.css">     
    <link rel="stylesheet" href="css/main.css">  
	<link id="preset" rel="stylesheet" href="css/presets/preset1.css">	
    <link rel="stylesheet" href="css/responsive.css">
	
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
  </head>
  <body>
	<!-- header -->
	<header id="header" class="clearfix">
		<!-- navbar -->
		<?php include "includes/top_nav.php" ?>
		
		<!-- navbar -->



	</header><!-- header -->

	<!-- services-ad -->
	<section id="services-ad" class="clearfix home-three">
		<!-- view-ad -->
		<div id="home-section" class="parallax-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">

						<?php

							$query_max = "SELECT * FROM signals WHERE signal_profit = (SELECT MAX(signal_profit) FROM signals)";

							$query_max_con = $database->query($query_max);

							$row = fetch_array($query_max_con);

							$signal_profit = $row['signal_profit'];
							$signal_reached = $row['signal_reached'];
							$signal_pair_1 = $row['signal_pair_1'];
							$signal_pair_2 = $row['signal_pair_2'];

							$signal_target_1 = $row['signal_target_1'];
							$signal_target_2 = $row['signal_target_2'];
							$signal_target_3 = $row['signal_target_3'];
							$signal_target_4 = $row['signal_target_4'];

?>	
									<h1 id="h1-main"><?php echo $signal_profit; ?> % zysku</h1>
									<h2><?php echo $signal_reached; ?> cel osiągnięty</h2>
									<span><?php echo $signal_pair_1 . $signal_pair_2; ?>:</span>
									<span class="text-success"><?php 

								switch($signal_reached){
									case "4":
									echo $signal_target_4;
									break;

									case "3":
									echo $signal_target_3;
									break;

									case "2":
									echo $signal_target_2;
									break;

									case "1":
									echo $signal_target_1;
									break;
									}

								?>	BTC</span>
									<br>
			

						<div class="ad-btn">
							<a href="#" class="btn btn-primary">Dołącz</a>
						</div>
					</div>
					<div class="col-md-6 text-center">
						<img src="images/mobile.png" alt="Image" class="img-fluid">
					</div>
				</div><!-- row -->
			</div><!-- contaioner -->
		</div><!-- view-ad -->

		<div class="container">
			<div class="row">
				<!-- banner -->
				<div class="col-sm-12">
					<!-- banner -->
			</div><!-- row -->	

			<!-- services -->			

			<!-- featureds -->
			<div class="section featureds">
				<div class="row">
					<!-- featured-top -->
					<div class="col-sm-12">
						<div class="featured-top">
							<h4>Featured Ads</h4>
						</div>
					</div><!-- featured-top -->
				</div>
					
				<div class="row">
					<?php
									
// select * from tabela order by rand() limit 1

							$query_group = "SELECT * FROM signals WHERE signal_reached > 0 LIMIT 4";

							$query_max_con = $database->query($query_group);

							while ($row = fetch_array($query_max_con)) {

							$signal_id = $row['signal_id'];
							$signal_profit = $row['signal_profit'];
							$signal_reached = $row['signal_reached'];
							$signal_pair_1 = $row['signal_pair_1'];
							$signal_pair_2 = $row['signal_pair_2'];

							$signal_target_1 = $row['signal_target_1'];
							$signal_target_2 = $row['signal_target_2'];
							$signal_target_3 = $row['signal_target_3'];
							$signal_target_4 = $row['signal_target_4'];
							$signal_created = $row['signal_created'];

										
										

									

									
					
									?>
					<!-- featured -->
					<div class="col-md-6 col-lg-3">
						<!-- featured -->
						<div class="featured">
							<div class="featured-image">
								<a href="details.php?id=<?php echo $signal_id; ?>"><img src="images/featured/1.jpg" alt="" class="img-fluid"></a>
								<a href="#" class="verified" data-toggle="tooltip" data-placement="top" title="Verified"><i class="fa fa-check-square-o"></i></a>
							</div>
							
							<!-- ad-info -->
							<div class="ad-info">
								<h3 class="item-price"><?php echo $signal_profit; ?>%</h3>
								<h4 class="item-title">Cel <?php echo $signal_reached; ?> osiągnięty</h4>
								<p><?php 

								switch($signal_reached){
									case "4":
									echo $signal_target_4;
									break;

									case "3":
									echo $signal_target_3;
									break;

									case "2":
									echo $signal_target_2;
									break;

									case "1":
									echo $signal_target_1;
									break;
									}

								?> BTC</p>
								<div class="item-cat">
									<span><?php echo $signal_pair_1 . $signal_pair_2; ?><span> 
								</div>
							</div><!-- ad-info -->
							
							<!-- ad-meta -->
							<div class="ad-meta">
								<div class="meta-content">
									<span class="dated">Utworzony:  <?php echo $signal_created; ?> </span>
								</div>									
								<!-- item-info-right -->

							</div><!-- ad-meta -->
						</div><!-- featured -->
					</div><!-- featured -->
							<?php } ?>		
					<!-- featured -->

					<!-- featured -->
					
										
					<!-- featured -->
					<!-- featured -->
					
				</div><!-- row -->				
	
				<!-- pagination  -->
				<!-- pagination  -->	
			</div><!-- featureds -->			

			<!-- cta -->
			<div class="cta text-center">
				<div class="row">
					<!-- single-cta -->
					<div class="col-md-4">
						<div class="single-cta">
							<!-- cta-icon -->
							<div class="cta-icon icon-secure">
								<img src="images/icon/13.png" alt="Icon" class="img-fluid">
							</div><!-- cta-icon -->

							<h4>Załóż konto</h4>
							<p>Zajmie to jedną chwilę by otrzymać dostęp do grupy sygnałów</p>
						</div>
					</div><!-- single-cta -->

					<!-- single-cta -->
					<div class="col-md-4">
						<div class="single-cta">
							<!-- cta-icon -->
							<div class="cta-icon icon-support">
								<img src="images/icon/14.png" alt="Icon" class="img-fluid">
							</div><!-- cta-icon -->

							<h4>Sprawdź sygnał</h4>
							<p>Gotowe targety stworzone prze grupę doświadczonych analityków</p>
						</div>
					</div><!-- single-cta -->

					<!-- single-cta -->
					<div class="col-md-4">
						<div class="single-cta">
							<!-- cta-icon -->
							<div class="cta-icon icon-trading">
								<img src="images/icon/15.png" alt="Icon" class="img-fluid">
							</div><!-- cta-icon -->

							<h4>Zarób</h4>
							<p>Czysty zysk, wystarczy otowrzyć zlecenie i wcielić sygnał w życie</p>
						</div>
					</div><!-- single-cta -->
				</div><!-- row -->			
			</div><!-- cta -->			
			
		</div><!-- container -->
	</section><!-- services-ad -->
	
	<!-- download -->
	<section id="download" class="clearfix parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-left opis-home">
					<h2>Trading z Signal</h2>
					<p>Gotowe targety stworzone prze grupę doświadczonych analityków. </p>
					<ul>
						<li><strong>informacje na bieżąco:</strong> Kazdego dnia dostarczamy najlepsze sygnały bazując na aktialnej sytuacji rynkowej</li>
						<li> </li>
					</ul>
				</div>
			</div><!-- row -->

			<!-- row -->
			<!-- row -->
		</div><!-- contaioner -->
	</section><!-- download -->
	
	<!-- footer -->
	<footer id="footer" class="clearfix">
		<!-- footer-top -->
		<section class="footer-top clearfix">
			<div class="container">
				<div class="row">
					<!-- footer-widget -->
					<div class="col-md-3 col-sm-6">
						<div class="footer-widget">
							<h3>Quik Links</h3>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="signals.php">Trading</a></li>
								<li><a href="register.php">Zarejestruj się</a></li>
								<li><a href="signin.php">Zaloguj się</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-md-3 col-sm-6">
						<div class="footer-widget social-widget">
							<h3>Follow us on</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
								<li><a href="#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
								<li><a href="#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
								<li><a href="#"><i class="fa fa-youtube-play"></i>youtube</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-md-3 col-sm-6">
						<div class="footer-widget news-letter">
							<h3>Newsletter</h3>
							<p>Zapisz się do newslettera!</p>
							<!-- form -->
							<form action="#">
								<input type="email" class="form-control" placeholder="Your email id">
								<button type="submit" class="btn btn-primary">Sign Up</button>
							</form><!-- form -->			
						</div>
					</div><!-- footer-widget -->
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- footer-top -->

		
		<div class="footer-bottom clearfix text-center">
			<div class="container">
				<p>Copyright &copy; 2018. Developed by <a href="http://themeregion.com/">ThemeRegion</a></p>
			</div>
		</div><!-- footer-bottom -->
	</footer><!-- footer -->

	
     <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/scrollup.min.js"></script>
    <script src="js/price-range.js"></script>  
    <script src="js/jquery.countdown.js"></script>  
    <script src="js/custom.js"></script>

  </body>
</html>
