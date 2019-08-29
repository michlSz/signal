<?php session_start(); ?>
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

	<!-- signin-page -->
	<section id="main" class="clearfix user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
					<div class="user-account">
						<h2>Zaloguj się</h2>
						<!-- form -->

						<?php
						//czy puste

						if(isset($_POST['login'])){

						if(empty($_POST['user_email'])){

						$error_email = "Wypełnij pole login";

						}
						if(empty($_POST['password'])){

							$error_password = "Wypełnij pole hasło";
						}
					}


					if(!empty($_POST['user_email']) && !empty($_POST['password'])){



$user_email = $_POST['user_email'];
$user_password = $_POST['password'];


//$user_email = mysqli_real_escape_string($con, $user_email);
//$user_password = mysqli_real_escape_string($con, $user_password);

$query = "SELECT * FROM users WHERE user_email = '{$user_email}' ";
$select_user_query = $database->query($query);




while($row = mysqli_fetch_array($select_user_query)){

	
	 $db_user_id = $row['user_id_ok'];
	 $db_user_email = $row['user_email'];

	 $db_user_firstname = $row['user_firstname'];
	 $db_user_lastname = $row['user_lastname'];
	 $db_user_role = $row['user_role'];
	 $db_user_password = $row['user_password'];
}

if($user_email == @$db_user_email && $user_password == @$db_user_password){

$_SESSION['user_email'] = $db_user_email;
$_SESSION['firstname'] = $db_user_firstname;
$_SESSION['lastname'] = $db_user_lastname;
$_SESSION['user_role'] = $db_user_role;
$_SESSION['user_pass'] = $db_user_password;

header("Location: admin");

	

} else {


echo "Zły login lub hasło";




}

}



						?>
						<form action="" method="POST">
							<div class="form-group">
								<label class="text-danger"><?php echo isset($error_email) ? $error_email : '' ; ?></label>
								<input type="email" name="user_email" class="form-control" placeholder="E-mail" >
							</div>
							<div class="form-group">
								<label class="text-danger"><?php echo isset($error_password) ? $error_password : '' ; ?></label>
								<input type="password" name="password" class="form-control" placeholder="Hasło" >
							</div>
							<input type="submit" name="login" class="btn" value="Zaloguj">
						</form><!-- form -->
					
						<!-- forgot-password -->
						<div class="user-option">
							<div class="checkbox pull-left">
								<label for="logged"><input type="checkbox" name="logged" id="logged"> Keep me logged in </label>
							</div>
							<div class="pull-right forgot-password">
								<a href="#">Forgot password</a>
							</div>
						</div><!-- forgot-password -->
					</div>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signin-page -->
	
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