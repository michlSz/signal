<?php



/*
session_start();
session_destroy();
if(!$_SESSION['zalogowany_admin'] && !$_SESSION['zalogowany_subscriber']) {

header("Location: index.php");

}
*/

?>

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
		<?php include "includes/top_nav.php" ?>
		<!-- navbar -->
	</header><!-- header -->

	<!-- main -->
	<section id="main" class="clearfix category-page main-categories">
		<div class="container">
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Electronics & Gedget</li>
				</ol><!-- breadcrumb -->						
				<h2 class="title">Mobile Phones</h2>
			</div>

			<?php
			/*
// program wyszukiwarki - search.php
// wyświetlenie nagłówka
echo'<h2>Wyniki wyszukiwania</h2>';
// usunięcie niepotrzebnych białych znaków
if(isset($_GET['szukaj'])){
	$_GET['szukaj']=trim($_GET['szukaj']);}
// sprawdzenie, czy użytkownik wpisał dane
if(!isset($_GET['szukaj'])){
// jeśli nie, to wyświetl komunikat i zakończ działanie skryptu
//die('Formularz wypełniony niepoprawnie! Nie można wyświetlić wyników wyszukiwania!');
// jeśli jednak dane są wpisane poprawnie
}else
{
// połączenie z bazą danych, NIE ZAPOMINJ USTAWIĆ WŁASNYCH DANYCH!
//$base=mysqli_connect('host','uzytkownik','haslo','nazwa_bazy');
// skonstruowanie zapytania
// zwróć uwagę na operator Like - to on jest sercem całej aplikacji. Pozwala wyszukać dany ciąg w bazie danych
// jak zapewne zauważyłeś, przed frazą i po niej umieszczam znaki procenta %
// ten znak symbolizuje dowolny inny ciąg znaków, więc jest niezbędny do skutecznego wyszukiwania
// połaczenie operatorem Or pozwala na wyszukiwanie danego ciągu zarówno w nazwie, jak i opisie produktu
// UWAGA! Tutaj też nie zapomnij ustawić swoich danych!
$query_search="SELECT * FROM signals WHERE signal_pair LIKE '%{$_GET['szukaj']}%'";
// wysłanie zapytania do bazy danych
$result=mysqli_query($con,$query_search);
// ustalenie ilości wyszukanych obiektów
$obAmount=mysqli_num_rows($result);
// wyswietlenie ilości wyszukanych obiektów
echo'Znaleziono: '.$obAmount.'<br /><br />';
// wyświetlenie wyników w pętli
for($x=0;$x<$obAmount;$x++)
{
// przekształcenie danych na tablicę
$row=mysqli_fetch_array($result);
// wyświetlenie numeru identyfikacyjnego
echo $x+1;
echo '. ';
// wyświetlenie nazwy produktu
echo $row['signal_pair'];
echo'<br />';
}
}
// zamknięcie połączenia

// koniec aplikacji
*/
?>	
			<div class="banner">
			
				<!-- banner-form -->
				<div class="banner-form banner-form-full">
					<form method="GET"  action="">
						<!-- category-change -->
						<input name="szukaj" type="text" class="form-control" placeholder="Wpisz skrót kryptowaluty">
						<button type="submit" class="form-control" value="Search">Szukaj</button>
					</form>
				</div><!-- banner-form -->
			</div>
	
			<div class="category-info">	
				<div class="row">
					<!-- accordion-->




					
					<!-- recommended-ads -->
					<div class="col-md-9 col-lg-9">				
						<div class="section recommended-ads">
							<!-- featured-top -->
							<div class="featured-top">
								<h4>Recommended Ads for You</h4>
								<div class="dropdown pull-right">
								
								<!-- category-change -->
								<div class="dropdown category-dropdown">
															
									<a data-toggle="dropdown" href="#"><span class="change-text">Sortuj</span><i class="fa fa-caret-square-o-down"></i></a>
									<ul class="dropdown-menu category-change">
										<li><a href="signals.php?najnowsze">Najnowsze</a></li>
										<li><a href="signals.php?najstarsze">Najstarsze</a></li>
										<li><a href="signals.php?najstarsze">Wszystkie</a></li>
									</ul>								
								</div><!-- category-change -->														
								</div>							
							</div><!-- featured-top -->	


<?php

// program wyszukiwarki - search.php
// wyświetlenie nagłówka
//echo'<h2>Wyniki wyszukiwania</h2>';
// usunięcie niepotrzebnych białych znaków
//if(isset($_GET['szukaj'])){
	//$_GET['szukaj']=trim($_GET['szukaj']);}
// sprawdzenie, czy użytkownik wpisał dane
//if(!isset($_GET['szukaj'])){
// jeśli nie, to wyświetl komunikat i zakończ działanie skryptu
//die('Formularz wypełniony niepoprawnie! Nie można wyświetlić wyników wyszukiwania!');
// jeśli jednak dane są wpisane poprawnie
//}else
//{
// połączenie z bazą danych, NIE ZAPOMINJ USTAWIĆ WŁASNYCH DANYCH!
//$base=mysqli_connect('host','uzytkownik','haslo','nazwa_bazy');
// skonstruowanie zapytania
// zwróć uwagę na operator Like - to on jest sercem całej aplikacji. Pozwala wyszukać dany ciąg w bazie danych
// jak zapewne zauważyłeś, przed frazą i po niej umieszczam znaki procenta %
// ten znak symbolizuje dowolny inny ciąg znaków, więc jest niezbędny do skutecznego wyszukiwania
// połaczenie operatorem Or pozwala na wyszukiwanie danego ciągu zarówno w nazwie, jak i opisie produktu
// UWAGA! Tutaj też nie zapomnij ustawić swoich danych!
//$query_search="SELECT * FROM signals WHERE signal_pair LIKE '%{$_GET['szukaj']}%'";
// wysłanie zapytania do bazy danych
//$result=mysqli_query($con,$query_search);
// ustalenie ilości wyszukanych obiektów
//$obAmount=mysqli_num_rows($result);
// wyswietlenie ilości wyszukanych obiektów
//echo'Znaleziono: '.$obAmount.'<br /><br />';
// wyświetlenie wyników w pętli


									if(isset($_GET['duration'])){
											
										$duration = $_GET['duration'];

										

										$query_list = "SELECT * FROM signals WHERE signal_timeframe = '{$duration}' ";
									}elseif (isset($_GET['szukaj'])){

										$_GET['szukaj']=trim($_GET['szukaj']);

										$query_list = "SELECT * FROM signals WHERE signal_pair_1 LIKE '%{$_GET['szukaj']}%'";

}
elseif (isset($_GET['najnowsze'])){


										$query_list = "SELECT * FROM signals ORDER BY signal_created DESC";

}
elseif (isset($_GET['najstarsze'])){


										$query_list = "SELECT * FROM signals ORDER BY signal_created ASC";

}
elseif (isset($_GET['wszystkie'])){


										$query_list = "SELECT * FROM signals";

}
										else{

										$query_list = "SELECT * FROM signals";
									}



										
										$signal_query = $database->query($query_list);

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


$procentage1 = ($signal_target_1 / $signal_entry_from) * 100 - 100 ;
$procentage2 = ($signal_target_2 / $signal_entry_from) * 100 - 100 ;
$procentage3 = ($signal_target_3 / $signal_entry_from) * 100 - 100 ;
$procentage4 = ($signal_target_4 / $signal_entry_from) * 100 - 100 ;


if (isset($target1) && $target1 == TRUE ){

	$rounded_proc1 = round($procentage1);
	$query_update = "UPDATE signals SET signal_reached = 1, signal_profit = '{$rounded_proc}'  WHERE signal_id = '{$signal_id}' ";
}

if (isset($target2) && $target2 == TRUE ){

	$rounded_proc2 = round($procentage2);

$query_update = "UPDATE signals SET signal_reached = 2, signal_profit = '{$rounded_proc2}'  WHERE signal_id = '{$signal_id}' ";
}

if (isset($target3) && $target3 == TRUE){

	$rounded_proc3 = round($procentage3);

$query_update = "UPDATE signals SET signal_reached = 3, signal_profit = '{$rounded_proc3}'  WHERE signal_id = '{$signal_id}' ";
}

if (isset($target4) && $target4 == TRUE ){

	$rounded_proc4 = round($procentage4);

$query_update = "UPDATE signals SET signal_reached = 4, signal_profit = '{$rounded_proc4}'  WHERE signal_id = '{$signal_id}' ";
}

if(isset($update_query)){

$database->query($query_update);

}

if(empty($message)){
	echo "Terget jeszcze nie osiągnięty";
}else{
echo $message;
}
						?>
							<!-- ad-item -->
							<div class="ad-item row">
								<!-- item-image -->
								<div class="item-image-box col-lg-4">
									<div class="item-image">
										<a href="details.php?id=<?php echo $signal_id; ?>"><img src="images/listing/1.jpg" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div>
								
								

								<!-- rending-text -->
								<div class="item-info col-lg-8">
									
									<!-- ad-info -->
									<a href="details.php?id=<?php echo $signal_id; ?>"><div class="ad-info">
										<span class="float-left"><?php echo $signal_pair_1 . $signal_pair_2; ?></span><span class="float-right">Aktualna Cena:</span><br><span class="float-right"><strong><?php echo $trimmed; ?></strong> BTC</span><br><hr>
										<span>Wejście:</span><span class="float-right text-success"><?php echo $signal_entry_from; ?> - <?php echo $signal_entry_to; ?></span><hr><span>Targety:</span>


										<span class="float-right <?php
											echo ($target2 == TRUE) ? "text-success" : "" ; ?>"> 2. <?php echo $signal_target_2; ?> (<?php echo round($procentage2) ?>%)   </span>


											<span class="float-right <?php
											echo ($target1 == TRUE) ? "text-success" : "" ; ?>">1. <?php echo $signal_target_1; ?> (<?php echo round($procentage1) ?>%) </span><br>


											<span class="float-right <?php
											echo ($target4 == TRUE) ? "text-success" : "" ; ?>"> 4. <?php echo $signal_target_4; ?>(<?php echo round($procentage4) ?>%) </span>

											<span class="float-right <?php
											echo ($target3 == TRUE) ? "text-success" : "" ; ?>">3. <?php echo $signal_target_3 ?>(<?php echo round($procentage3) ?>%) </span><hr>

										<span>Stop Loss:</span><span class="float-right text-danger"><?php echo $signal_stoploss; ?> BTC</span>


									
		
																			
									</div></a><!-- ad-info -->
									
									<!-- ad-meta -->
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">Utworzony: <?php echo $signal_created; ?> </a></span><span class="float-right">Status: <span class="<?php
											echo (strtotime($signal_end) < strtotime(date("Y-m-d"))) ? "text-danger" : "text-success" ; ?>"><?php echo (strtotime($signal_end) < strtotime(date("Y-m-d"))) ? "nieaktywny" : "aktywny" ;?>
												
									</span>										
										</div>	

																			
										<!-- item-info-right -->
										<!-- item-info-right -->
									</div><!-- ad-meta -->
								</div><!-- item-info -->
							</div><!-- ad-item -->
										<?php } ?>
										 
							<!-- ad-item -->
							<!-- item-image-box -->
								
								<!-- rending-text -->
								<!-- ad-item -->
							
							<!-- ad-item -->
							<!-- ad-item -->	
							







							<!-- ad-item -->
							<!-- ad-item -->	
							
							<!-- pagination  -->
							<!-- pagination  -->					
						</div>
					</div><!-- recommended-ads -->

<div class="col-lg-3 col-md-4">
						<div class="category-accordion tr-accordion" id="accordion">
							<div class="card">
								<div class="card-header" id="heading-1">
									<button data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">Typy czasowe</button>
								</div>

								<div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">
									<div class="card-body">
										<ul>
											<li><a href="signals.php?duration=short"><i class="icofont icofont-dart"></i>Short-term</a></li>
											<li><a href="signals.php?duration=medium"><i class="icofont icofont-dart"></i>Medium-term</a></li>
							
										</ul>												
									</div>
								</div>
							</div>


						</div><!-- accordion-->
					</div>



					
				</div>	
			</div>
		</div><!-- container -->
	</section><!-- main -->
	
	
	
	<!-- footer -->
	<footer id="footer" class="clearfix">
		<!-- footer-top -->
		<section class="footer-top clearfix">
			<div class="container">
				<div class="row">
					<!-- footer-widget -->
					<div class="col-sm-6 col-md-3">
						<div class="footer-widget">
							<h3>Quik Links</h3>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">All Cities</a></li>
								<li><a href="#">Help & Support</a></li>
								<li><a href="#">Advertise With Us</a></li>
								<li><a href="#">Blog</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-6 col-md-3">
						<div class="footer-widget">
							<h3>How to sell fast</h3>
							<ul>
								<li><a href="#">How to sell fast</a></li>
								<li><a href="#">Membership</a></li>
								<li><a href="#">Banner Advertising</a></li>
								<li><a href="#">Promote your ad</a></li>
								<li><a href="#">Trade Delivers</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-6 col-md-3">
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
					<div class="col-sm-6 col-md-3">
						<div class="footer-widget news-letter">
							<h3>Newsletter</h3>
							<p>Trade is Worldest leading classifieds platform that brings!</p>
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
