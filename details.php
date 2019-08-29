<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Trade | World's Largest Classifieds Portal</title>

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
		<?php include ("includes/top_nav.php"); ?>
		<!-- navbar -->
	</header><!-- header -->

	<!-- main -->
	<section id="main" class="clearfix details-page">
		<div class="container">
			<div class="section banner">				
				<!-- banner-form -->
				<!-- banner-form -->
			</div><!-- banner -->
	
<?php

										if(isset($_GET['id'])){

										$id = $_GET['id'];

										global $con;

										$query = "SELECT * FROM signals WHERE signal_id = '{$id}' ";

										
							

										$signal_query = $database->query($query);

										while($row = fetch_array($signal_query)){

										$signal_id = $row['signal_id'];

										$signal_pair_1 = $row['signal_pair_1'];
										$signal_pair_2 = $row['signal_pair_2'];
										$signal_curr_price = $row['signal_curr_price'];
										$signal_entry_from = $row['signal_entry_from'];
										$signal_entry_to = $row['signal_entry_to'];
										$signal_target_1 = $row['signal_target_1'];
										$signal_target_2 = $row['signal_target_2'];
										$signal_target_3 = $row['signal_target_3'];
										$signal_target_4 = $row['signal_target_4'];
										$signal_stoploss = $row['signal_stoploss'];
										$signal_created = $row['signal_created'];
										$signal_status = $row['signal_status'];
										$signal_end = $row['signal_end'];
										
$url = "https://rest.coinapi.io/v1/exchangerate/$signal_pair_1/BTC?apikey=3F4FD663-D169-472C-BF60-A766140D03E6";


										$dane_json = file_get_contents($url);
										$dane_tablica = json_decode($dane_json, true);

										$trimmed = substr($dane_tablica['rate'], 0, -9);


										if($trimmed > $signal_target_1 && $trimmed < $signal_target_2 ){

if(empty($_SESSION['t1_' . '$signal_id'] )){

	$_SESSION['t1_' . '$signal_id'] = 1;
}

}

if(isset($_SESSION['t1_' . '$signal_id'])){

	$message =  "I target osiągniety";
	$target1 = TRUE;
}
echo "<br>";





if($trimmed >= $signal_target_2 && $trimmed < $signal_target_3 ){

if(empty($_SESSION['t2_' . '$signal_id'] )){

	$_SESSION['t2_' . '$signal_id'] = 1;
}

}

if(isset($_SESSION['t2_' . '$signal_id'])){

	$message =  "II target osiągniety";
	$target2 = TRUE;
}
echo "<br>";




if($trimmed >= $signal_target_3 && $trimmed < $signal_target_4 ){

if(empty($_SESSION['t3_' . '$signal_id'] )){

	$_SESSION['t3_' . '$signal_id'] = 1;
}

}

if(isset($_SESSION['t3_' . '$signal_id'])){

	$message =  "III target osiągniety";
	$target3 = TRUE;
}

if($trimmed >= $signal_target_4){

if(empty($_SESSION['t4_' . '$signal_id'] )){

	$_SESSION['t4_' . '$signal_id'] = 1;
}

}

if(isset($_SESSION['t4_' . '$signal_id'])){

	$message =  "IV target osiągniety";
	$target4 = TRUE;
}
						

$procentage1 = $signal_target_1 / $signal_entry_from * 100 - 100 ;
$procentage2 = $signal_target_2 / $signal_entry_from * 100 - 100 ;
$procentage3 = $signal_target_3 / $signal_entry_from * 100 - 100 ;
$procentage4 = $signal_target_4 / $signal_entry_from * 100 - 100 ;


						?>
			<div class="section slider">					
				<div class="row">
					<!-- carousel -->
					
									<img src="

										<?php 
										if(isset($target1) == TRUE){
											echo "images/czop1.png";
										}
										if(isset($target2) == TRUE){
											echo "images/czop2.png";
										}
										if(isset($target3) == TRUE){
											echo "images/czop3.png";
										}
										if(isset($target4) == TRUE){
											echo "images/czop4.png";
										}else{
											echo "images/czop0.png";
										}

										?>

										" alt="Carousel Thumb" class="img-details">
								<!-- Controls -->	

					<!-- slider-text -->
					<div class="col-lg-8">
						<div class="slider-text">
							
							<span class="float-left"><?php echo $signal_pair_1 . $signal_pair_2; ?></span><span class="float-right">Aktualna Cena:</span><br><span class="float-right"><strong><?php echo $trimmed; ?> </strong> BTC</span><br><hr>
							<span><strong>Wejście:</strong></span><span class="float-right text-success"><?php echo $signal_entry_from; ?> - <?php echo $signal_entry_to; ?></span><hr><span><strong>Targety:</strong></span>

							<span class="float-right <?php
echo ($target2 == TRUE) ? "text-success" : "" ; ?>"> 2. <?php echo $signal_target_2; ?> (<?php echo round($procentage2) ?>%)   </span>

							<span class="float-right <?php
echo ($target1 == TRUE) ? "text-success" : "" ; ?>">1. <?php echo $signal_target_1; ?> (<?php echo round($procentage1) ?>%) </span><br>



										<span class="float-right <?php
echo ($target4 == TRUE) ? "text-success" : "" ; ?>"> 4. <?php echo $signal_target_4; ?>(<?php echo round($procentage4) ?>%) </span>
										<span class="float-right <?php
echo ($target3 == TRUE) ? "text-success" : "" ; ?>">3. <?php echo $signal_target_3 ?>(<?php echo round($procentage3) ?>%) </span><hr>

							<span><strong>Stop Loss:</strong></span><span class="float-right text-danger"><?php echo $signal_stoploss; ?> BTC</span>

		
																			
							<!-- social-links -->						
						</div>
						<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">Utworzony: <?php echo $signal_created; ?> </a></span>
											<span class="float-right">Status: <span class="text-success"><?php echo $signal_status; ?></span></span>
											
										</div>										
										<!-- item-info-right -->
										<!-- item-info-right -->
									</div>
					</div><!-- slider-text -->				
				</div>				
			</div><!-- slider -->

		<?php }} ?> 



			<div class="description-info">
				<div class="row">
					<!-- description -->
					<?php 

$query_update = "SELECT * FROM updates WHERE signal_id = '{$id}' ORDER BY update_date DESC";

 $update_query = $database->query($query_update);

 confirm($update_query);

 while($row = fetch_array($update_query)){


 	$update_date = $row['update_date'];
 	$update_content = $row['update_content'];




								?>
					<div class="col-md-12">




						<div class="description">
							<div class="date-content">

								<span>Update: <?php echo $update_date ?></span>
							</div>
							<p><?php echo $update_content ?></p>
						</div>
					</div>
<?php } ?>
					<!-- description -->

					<!-- description-short-info -->
					
				</div><!-- row -->
			</div><!-- description-info -->	
			
			<div class="recommended-info">
				<div class="row">
					<div class="col-md-8">				
						
					</div><!-- recommended-ads -->

					<!-- recommended-cta-->
				</div><!-- row -->
			</div><!-- recommended-info -->
		</div><!-- container -->
	</section><!-- main -->
	
	<!-- download -->
	
	<!-- footer -->
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
		</section>
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