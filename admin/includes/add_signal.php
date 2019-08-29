<?php

if(isset($_POST['create_signal'])){

	$post_pair1 = $_POST['pair1'];
	$post_pair2 = $_POST['pair2'];
	$post_entry_from = $_POST['entry_from'];
	$post_entry_to = $_POST['entry_to'];
	$post_target1 = $_POST['target1'];
	$post_target2 = $_POST['target2'];
	$post_target3 = $_POST['target3'];
	$post_target4 = $_POST['target4'];
	$post_stop_loss = $_POST['stop_loss'];
	$post_timeframe = $_POST['timeframe'];
	$post_risk = $_POST['risk'];
	$post_market = $_POST['market'];
	$post_created = date('d-m-y');
	$post_expire = $_POST['expire'];
	$post_author = $_SESSION['user_email'];



	$add_signal = Signal::add_signal($post_author, $post_pair1, $post_pair2, $post_expire, $post_market, $post_timeframe, $post_risk, $post_entry_from, $post_entry_to, $post_target1, $post_target2, $post_target3, $post_target4, $post_stop_loss);


}

/*
$query = "INSERT INTO signals(signal_author, signal_pair_1, signal_pair_2, signal_created, signal_end, signal_market, signal_timeframe, signal_risk, signal_entry_from, signal_entry_to, signal_target_1, signal_target_2, signal_target_3, signal_target_4, signal_stoploss) 
	
	VALUES ('$post_author', '$post_pair1', '$post_pair2', now(), '$post_expire', '$post_market', '$post_timeframe', '$post_risk', '$post_entry_from', '$post_entry_to', '$post_target1', '$post_target2', '$post_target3', '$post_target4', '$post_stop_loss' )";

*/

//$queryAddPost = $database->query($query);

//confirm($queryAddPost);



?>



<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">Kryptowaluta </label>
		<input type="text" class="form-control" name="pair1">
	</div>
	<div class="form-group">
		<label for="title">Do: </label>
		<input type="text" class="form-control" name="pair2">
	</div>

	<div class="form-group">
		<label for="title">Wejście od:</label>
		<input type="number" step="0.000001" class="form-control" name="entry_from">
	</div>
	<div class="form-group">
		<label for="title">Wejście do:</label>
		<input type="number" step="0.000001" class="form-control" name="entry_to">
	</div>
	<div class="form-group">
		<label for="title">Cel 1:</label>
		<input type="number" step="0.000001" class="form-control" name="target1">
	</div>
	<div class="form-group">
		<label for="title">Cel 2:</label>
		<input type="number" step="0.000001" class="form-control" name="target2">
	</div>
	<div class="form-group">
		<label for="title">Cel 3:</label>
		<input type="number" step="0.000001" class="form-control" name="target3">
	</div>
	<div class="form-group">
		<label for="title">Cel 4:</label>
		<input type="number" step="0.000001" class="form-control" name="target4">
	</div>
	<div class="form-group">
		<label for="title">Stop Loss:</label>
		<input type="number" step="0.000001" class="form-control" name="stop_loss">
	</div>


	<div class="form-group">

		<label for="">Termin: </label>
		<select name="timeframe" id="">

		<option value="short">Short</option>
		<option value="medium">Medium</option>
		<option value="long">Long</option>

	</select>
	</div>
	<div class="form-group">
		<label for="">Ryzyko: </label>
		<select name="risk" id="">

		<option value="low">Low</option>
		<option value="normal">Normal</option>
		<option value="high">High</option>

	</select>
	</div>
	<div class="form-group">
		<label for="title">Giełda</label>
		<input type="text" class="form-control" name="market">
	</div>
	<div class="form-group">
		<label for="title">Data ważności sygnału</label>
		<input type="date" class="form-control" name="expire">
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="create_signal" value="Publish Post">
	</div>
</form>

	