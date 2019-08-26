<?php

class Signal {
	
public static function find_all_signals(){	

	global $database;

	if($_SESSION['user_role'] == "admin"){
	
		$result_set = $database->query("SELECT * FROM signals");

		return $result_set;

	}elseif($_SESSION['user_role'] == "analyst"){

    	$user_session_email = $_SESSION['user_email'];

		$result_set = $database->query("SELECT * FROM signals WHERE signal_author = '{$user_session_email}' ");
		return $result_set;

}

}


public static function add_signal($post_author, $post_pair1, $post_pair2, $post_expire, $post_market, $post_timeframe, $post_risk, $post_entry_from, $post_entry_to, $post_target1, $post_target2, $post_target3, $post_target4, $post_stop_loss ){

	global $database;
	
	$result_add = $database->query( "INSERT INTO signals(signal_author, signal_pair_1, signal_pair_2, signal_created, signal_end, signal_market, signal_timeframe, signal_risk, signal_entry_from, signal_entry_to, signal_target_1, signal_target_2, signal_target_3, signal_target_4, signal_stoploss) 
	
	VALUES ('$post_author', '$post_pair1', '$post_pair2', now(), '$post_expire', '$post_market', '$post_timeframe', '$post_risk', '$post_entry_from', '$post_entry_to', '$post_target1', '$post_target2', '$post_target3', '$post_target4', '$post_stop_loss' )" );

	return $result_add;

}

}