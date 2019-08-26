<?php session_start(); 
ob_start(); ?>
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
						<h2>Zarejestruj się</h2>
						<!-- form -->

						<?php
						//czy puste

						if(isset($_POST['register'])){

						if(empty($_POST['email'])){

						$error_email = "Wypełnij pole email";

						}
						if(empty($_POST['imie'])){

						$error_imie = "Wypełnij pole imię";

						}
						if(empty($_POST['nazwisko'])){

						$error_nazwisko = "Wypełnij pole nazwisko";

						}
						if(empty($_POST['password'])){

							$error_password = "Wypełnij pole hasło";
						}
					}


					if(!empty($_POST['email']) && !empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['password'])){



echo $user_email = $_POST['email'];
$user_password = $_POST['password'];
$user_firstname = $_POST['imie'];
$user_lastname = $_POST['nazwisko'];
$user_role = $_POST['user_role'];

//$user_email = mysqli_real_escape_string($con, $user_email);
//$user_password = mysqli_real_escape_string($con, $user_password);


function email_exists($email) {

    global $con;


    $query = "SELECT user_email FROM users WHERE user_email = '$email' ";
    $result = mysqli_query($con, $query);

    $row = mysqli_fetch_array($result);


    if(mysqli_num_rows($result) > 0 ) {

        return true;
    } else {
        return false;
    }
}

if(isset($user_email)){

	email_exists($user_email);

	
}


if(email_exists($user_email) == FALSE){

$query_insert = "INSERT INTO users(user_firstname, user_lastname, user_role, user_email, user_password) 
	
	VALUES ('$user_firstname', '$user_lastname',  '$user_role', '$user_email', '$user_password')";
    $result = mysqli_query($con, $query_insert);


    $_SESSION['user_email'] = $_POST['email'];
	$_SESSION['firstname'] = $_POST['imie'];
	$_SESSION['lastname'] = $_POST['nazwisko'];
	$_SESSION['user_role'] = $_POST['user_role'];
	$_SESSION['user_pass'] = $_POST['password'];

    header("Location: admin");

}else{
	echo "Taki email już istnieje";
}

}

/*

while($row = mysqli_fetch_array($select_user_query)){

	
	 $db_user_email = $row['user_email'];

if($user_email !== @$db_user_email){

$_SESSION['user_email'] = $db_user_email;
$_SESSION['firstname'] = $db_user_firstname;
$_SESSION['lastname'] = $db_user_lastname;
$_SESSION['user_role'] = $db_user_role;
$_SESSION['user_pass'] = $db_user_password;

header("Location: admin");

	

} else {


echo "Taki email już istnieje";





}

}

*/
?>
					
						<form action="" method="POST">
							<div class="form-group">
								<label class="text-danger"><?php echo isset($error_email) ? $error_email : '' ; ?></label>
								<input type="email" name="email" class="form-control" placeholder="E-mail" >
							</div>
							<div class="form-group">
								<label class="text-danger"><?php echo isset($error_imie) ? $error_imie : '' ; ?></label>
								<input type="text" name="imie" class="form-control" placeholder="Imię" >
							</div>
							<div class="form-group">
								<label class="text-danger"><?php echo isset($error_nazwisko) ? $error_nazwisko : '' ; ?></label>
								<input type="text" name="nazwisko" class="form-control" placeholder="Nazwisko" >
							</div>
							<div class="form-group">

							<select name="user_role" id="">
								<option value="user">użytkownik</option>
								<option value="analyst">analityk</option>
							</select>
							</div>
							<div class="form-group">
								<label class="text-danger"><?php echo isset($error_password) ? $error_password : '' ; ?></label>
								<input type="password" name="password" class="form-control" placeholder="Hasło" >
							</div>
							<input type="submit" name="register" class="btn" value="Zarejestruj">



						</form><!-- form -->
					





						<!-- forgot-password -->
						<div class="user-option">
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
	<footer id="footer" class="clearfix">
		<!-- footer-top -->
		<section class="footer-top clearfix">
			<div class="container">
				<div class="row">
					<!-- footer-widget -->
					<div class="col-md-6 col-lg-3">
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
					<div class="col-md-6 col-lg-3">
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
					<div class="col-md-6 col-lg-3">
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
					<div class="col-md-6 col-lg-3">
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