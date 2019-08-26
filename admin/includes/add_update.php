

<?php

if(isset($_GET['id'])){

$signal_id = $_GET['id'];
$signal_pair = $_GET['pair'];

}

if(isset($_POST['create_update'])){


	$update_content = $_POST['update_content'];


$query = "INSERT INTO updates (signal_id, signal_pair, update_content, update_date) 
	
	VALUES ('$signal_id', '$signal_pair', '$update_content', now() ) ";



$queryAddPost = mysqli_query($con, $query);

confirm($queryAddPost);




}



?>




<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="post_content">Update content </label>
		<textarea  class="form-control" name="update_content" id="" cols="30" rows="10"></textarea>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="create_update" value="Publish Update">
	</div>
</form>

	