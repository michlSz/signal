<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "signal2");



class Database {


public $con;

function __construct(){

$this->open_database_con();

}

public function open_database_con() {

$this->con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(mysqli_connect_errno()){


	die("Błąd połączenia z bazą danych") . mysql_connect_error();
}
}

public function query($sql){

	$result = mysqli_query($this->con, $sql);

	if(!$result){
		echo "Brak połączenia z bazą danych.";
	}

	return $result;
}



}



$database = new Database();


