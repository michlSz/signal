<?php 

	

            if($_SESSION['user_role'] == 'admin'){

            include "includes/admin_navi.php";

                }

            if($_SESSION['user_role'] == 'analyst'){

            include "includes/analyst_nav.php";   

                }

            elseif($_SESSION['user_role'] == 'user'){

            include "includes/user_nav.php";     

                }


/*
               if($_SERVER['REQUEST_URI'] == '/signal2/public/admin/users.php' && $_SESSION['user_role'] == 'user' || $_SESSION['user_role'] == 'analyst'){

            	  header("Location: /signal2/public/admin/");

             
                }

*/


                if($_SERVER['REQUEST_URI'] == '/signal2/public/admin/users.php' && $_SESSION['user_role'] == 'user'){

                header("Location: /signal2/public/admin/");

                }


            

			if($_SERVER['REQUEST_URI'] == '/signal2/public/admin/signals.php' && $_SESSION['user_role'] == 'user'){

				 header("Location: /signal2/public/admin/");

			}
           
				if($_SERVER['REQUEST_URI'] == '/signal2/public/admin/updates.php' && $_SESSION['user_role'] == 'user'){

				 header("Location: /signal2/public/admin/");

			}



                if($_SERVER['REQUEST_URI'] == '/signal2/public/admin/users.php' && $_SESSION['user_role'] == 'analyst'){

                header("Location: /signal2/public/admin/");

                }


        
           





?>