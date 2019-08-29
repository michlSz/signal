<?php

include ("db.php");
include ("../admin/includes/functions.php");
ob_start();
?>
<nav class="navbar navbar-default navbar-expand-lg">
			<div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tr-mainmenu" aria-controls="tr-mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                </button>
				<a class="navbar-brand" href="index.html"><img class="img-fluid" src="images/logo.png" alt="Logo"></a>
				
				<div class="collapse navbar-collapse" id="tr-mainmenu">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="signals.php">Trading</a></li>
						<li><a href="register.php">Zarejestruj się</a></li>
						<li><a href="signin.php">Zaloguj się</a></li> 
						<?php 

						if(isset($_GET['rola'])){

							$_SESSION['panel_admina'] = $_GET['rola'];

						}
						if(isset($_SESSION['panel_admina'])){

							echo "<li><a href='admin'>Admin</a></li>";
						}
						?>
					</ul>
				</div>

		
			</div><!-- container -->
		</nav>