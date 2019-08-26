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

                                case 'add_signal';
                                include "includes/add_signal.php";
                                break;

                                case 'edit_post':
                                include "includes/edit_post.php";
                                break;

                                case '70':
                                echo "nice 70";
                                break;
                            
                            default:
                                include "includes/view_all_signals.php";
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
