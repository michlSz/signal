<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Signal ID</th>
                                    <th>Signal Pair</th>
                                    <th>Signal Created</th>
                                    <th>Add Update</th>
                            </thead>
                            <tbody>
                                <?php 

/*
if($_SESSION['user_role'] == "admin"){

                                    $update_query = "SELECT * FROM updates";

                                }elseif($_SESSION['user_role'] == "analyst"){

                                   $user_session_email = $_SESSION['user_email'];

                                    $update_query = "SELECT * FROM updates WHERE signal_author = '{$user_session_email}' ";
                                }

                                $select_updates = $database->query($update_query);

*/

                                $select_updates = Update::find_all_updates();

                                while($row = mysqli_fetch_array($select_updates)){
                                    $update_id = $row['update_id'];
                                    $signal_id = $row['signal_id'];
                                    $signal_pair = $row['signal_pair'];
                                    $update_content = $row['update_content'];
                                    $update_date = $row['update_date'];
                                

                                    echo "<tr>";
                                    echo "<td>$update_id</td>";
                                    echo "<td>$signal_id</td>";
                                    echo "<td>$signal_pair</td>";
                                    echo "<td>$update_date</td>";
/*
                            $select_id = $con->query("SELECT * FROM categories WHERE cat_id = '$post_cat_id' ");

                            while( $row = mysqli_fetch_array($select_id)){
                            $cat_table_id = $row['cat_id'];
                            $cat_table_title = $row['cat_title'];
}
*/                                  echo "<td><a href='updates.php?source=add_update&id=$signal_id&pair=$signal_pair'>Add Update</a></td>";


                                    

/*

                                    $query = "SELECT * FROM posts WHERE post_id = '$comment_post_id' ";
                                    $select_post_id_query = mysqli_query($con, $query);
                                    while($row = mysqli_fetch_array($select_post_id_query)){
                                       $post_id = $row['post_id'];
                                    $post_title = $row['post_title'];

                                    echo "<td><a href='../post.php?p_id=$post_id'>$post_title</td>";



                                    }



                                    echo "<td>$comment_date</td>";


                                    
                                    echo "<td><a href='comments.php?approve=$comment_id'>Approve</td>"; 

                                    echo "<td><a href='comments.php?unapprove=$comment_id'>Unapprove</td>";

                                    echo "<td><a href='comments.php?delete=$comment_id'>Usuń</td>"; 
                                    echo "</tr>";
                                    */
                                }

                                ?>



<?php

if(isset($_GET['approve'])){
$the_comment_id = $_GET['approve'];


$query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id = '$the_comment_id' ";
$aprove_comment_query = mysqli_query($con, $query);
header('Location: comments.php');

}



if(isset($_GET['unapprove'])){
$the_comment_id = $_GET['unapprove'];


$query = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id = '$the_comment_id' ";
$unnaprove_comment_query = mysqli_query($con, $query);
header('Location: comments.php');

}


if(isset($_GET['delete'])){
   $the_comment_id = $_GET['delete'];


$query = "DELETE FROM comments WHERE comment_id = '$the_comment_id'";
$deletePostQuery = mysqli_query($con, $query);
header('Location: comments.php');
}


?>



                            </tbody>
                        </table>