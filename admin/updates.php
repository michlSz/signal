<?php include "includes/admin_header.php"; ?>



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
                            Witaj Admin
                            <small>Author</small>
                        </h1>

                        <?php


                        if(isset($_GET['source'])){
                            $source = $_GET['source'];
                        }else {
                            $source = '';
                        }

                        switch ($source) {

                                case 'add_update';
                                include "includes/add_update.php";
                                break;
                            
                            default:
                                include "includes/view_all_updates.php";
                                break;
                        }

                        ?>
            
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
