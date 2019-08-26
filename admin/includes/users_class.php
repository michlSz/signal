<?php

class User {
	
public static function find_all_users(){	

	global $database;

	$result_set = $database->query("SELECT * FROM users");
	return $result_set;




}

public static function add_user($user_firstname, $user_lastname,  $user_role, $user_email, $user_password){

	global $database;
	
	$result_add = $database->query( "INSERT INTO users(user_firstname, user_lastname, user_role, user_email, user_password) 
	
	VALUES ('$user_firstname', '$user_lastname',  '$user_role', '$user_email', '$user_password')" );

	return $result_add;

}

}