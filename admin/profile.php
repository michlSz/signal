<?php include "includes/admin_header.php"; ?>

<?php


$user_email = $_SESSION['user_email'];


$query = "SELECT * FROM users WHERE user_email = '{$user_email}'";

$select_user_query = $database->query($query);



while($row = mysqli_fetch_array($select_user_query)){

                                    $user_id = $row['user_id_ok'];
                                    $user_password = $row['user_password'];
                                    $user_firstname = $row['user_firstname'];
                                    $user_lastname = $row['user_lastname'];
                                    $user_email = $row['user_email'];
                                    $user_image = $row['user_image'];
                                    $user_role = $row['user_role'];

}




?>

<?php 

if(isset($_POST['edit_user'])){

                                    $user_password = $_POST['user_password'];
                                    $user_firstname = $_POST['user_firstname'];
                                    $user_lastname = $_POST['user_lastname'];

    $update_query = "UPDATE users SET user_firstname = '$user_firstname', user_lastname = '$user_lastname', user_password = '$user_password' WHERE user_email = '$username' ";

    $edit_user_query = $database->query($update_query);


}



?>



<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_nav.php"; ?>


           <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Witaj
                            <small>              
                             <?php echo $_SESSION['firstname'] ?>
                            </small>
                        </h1>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Firstname</label>
        <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
    </div>
    <div class="form-group">
        <label for="title">Lastname</label>
        <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
    </div>

    <div class="form-group">
    </div>
<!--
    <div class="form-group">
        <label for="post_category">Pst image </label>
        <input type="text" class="form-control" name="">
    </div>
-->
    <div class="form-group">
        <label for="post_image">Email </label>
        <p> <?php echo $_SESSION['user_email'] ?></p>
    </div> 
    <div class="form-group">
        <label for="post_image">Rola </label>
        <p> <?php echo $_SESSION['user_role'] ?></p>
    </div> 

    <div class="form-group">    
        <label for="post_tags">Password </label>
        <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
    </div>


    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="edit_user" value="Edit User">
    </div>
</form>             
            
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
</div>
</div>
</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
