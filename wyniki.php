<?php

session_start();
/*
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "gallery_db");



$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(isset($_SESSION['analizy'])){

$query2 = "SELECT * FROM analizy WHERE 'date_end' > 'now()' ";

$wywalenie = mysqli_query($con,$query2);

$row = mysqli_fetch_array($wywalenie);

//if($row['data_end'] > $row['data_start']){

while ($row = mysqli_fetch_array($wywalenie)) {


   echo $row['login'] . "<br>";
    echo $row['target_1'] . "<br>";
   echo $row['target_2'] . "<br>";

}
//}
}




if($json_target >= 400){

return true;

}


$_SESSION['target1'] = $json_target;







$targer_na_stronie = 700;

if($_SESSION['target1'] >= $targer_na_stronie){

	echo "I targer osiągnięty";
	session_destroy()
}

*/




$json = 7000;
$t1 = 5000;
$t2 = 7000;
$t3 = 9000;


$signal_id = 12; 

if($trimmed > $signal_target_1 && $trimmed < $signal_target_2 ){

if(empty($_SESSION['t1_' . '$signal_id'] )){

	$_SESSION['t1_' . '$signal_id'] = 1;
}

}

if(isset($_SESSION['t1_' . '$signal_id'])){

	echo "I target osiągniety";
}
echo "<br>";





if($trimmed >= $signal_target_2 && $trimmed < $signal_target_3 ){

if(empty($_SESSION['t2_' . '$signal_id'] )){

	$_SESSION['t2_' . '$signal_id'] = 1;
}

}

if(isset($_SESSION['t2_' . '$signal_id'])){

	echo "II target osiągniety";
}
echo "<br>";




if($trimmed >= $signal_target_3 && $trimmed < $signal_target_4 ){

if(empty($_SESSION['t3_' . '$signal_id'] )){

	$_SESSION['t3_' . '$signal_id'] = 1;
}

}

if(isset($_SESSION['t3_' . '$signal_id'])){

	echo "III target osiągniety";
}

if($trimmed >= $signal_target_4){

if(empty($_SESSION['t4_' . '$signal_id'] )){

	$_SESSION['t4_' . '$signal_id'] = 1;
}

}

if(isset($_SESSION['t4_' . '$signal_id'])){

	echo "IV target osiągniety";
}




echo "<br>";



foreach ($_SESSION as $key => $value) {
	echo $key . '<br>';
	echo $value;
}

//session_destroy();


echo '<br>';

echo  't3_' . $signal_id ;

//$tabla = ['t5_'.$signal_id];

//echo $tabla = ['t5_' . $signal_id ''];
echo '<br>';
$tabla2 = ['sietora'];
echo $tabla2[0];




$a =  100 ;
$b = 130;


echo $b / $a * 100 - 100 ;






?>