<?php include "db.php"; ?>
<?php session_start(); ?>


<?php
 
if(isset($_POST['login'])) {

$user_email = $_POST['user_email'];
$user_password = $_POST['password'];


//$user_email = mysqli_real_escape_string($con, $user_email);
//$user_password = mysqli_real_escape_string($con, $user_password);

$query = "SELECT * FROM users WHERE user_email = '{$user_email}' ";
$select_user_query = mysqli_query($con, $query);




while($row = mysqli_fetch_array($select_user_query)){

	
	 $db_user_id = $row['user_id_ok'];
	 $db_user_email = $row['user_email'];

	 $db_user_firstname = $row['user_firstname'];
	 $db_user_lastname = $row['user_lastname'];
	 $db_user_role = $row['user_role'];
	 $db_user_password = $row['user_password'];
}

if($user_email == $db_user_email && $user_password == $db_user_password){

$_SESSION['user_email'] = $db_user_email;
$_SESSION['firstname'] = $db_user_firstname;
$_SESSION['lastname'] = $db_user_lastname;
$_SESSION['user_role'] = $db_user_role;
$_SESSION['user_pass'] = $db_user_password;

header("Location: ../admin");

	

} else {

header("Location: ../index.php");




}










}



?>