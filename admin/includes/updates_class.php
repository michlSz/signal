<?php

class Update {
	
public static function find_all_updates(){	

	global $database;

	if($_SESSION['user_role'] == "admin"){
	
		$result_set = $database->query("SELECT * FROM updates");

		return $result_set;

	}elseif($_SESSION['user_role'] == "analyst"){

    	$user_session_email = $_SESSION['user_email'];

		$result_set = $database->query("SELECT * FROM updates WHERE signal_author = '{$user_session_email}' ");
		return $result_set;

}
}

public static function add_update($signal_id, $signal_pair,  $update_content){

	global $database;
	
	$result_add = $database->query("INSERT INTO updates (signal_id, signal_pair, update_content, update_date) 
	
	VALUES ('$signal_id', '$signal_pair', '$update_content', now() ) " ) ;

	return $result_add;

}


}