
<?php 

session_start();



$_SESSION['user_email'] = null;
$_SESSION['firstname'] = null;
$_SESSION['lastname'] = null;
$_SESSION['user_role'] = null;
$_SESSION['user_pass'] = null;

header("Location: ../index.php");






 ?>


