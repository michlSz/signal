<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Signal ID</th>
                                    <th>Signal Pair</th>
                                    <th>Signal Created</th>
                                    <th>Add Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

/*
                                    if($_SESSION['user_role'] == "admin"){

                                    $update_query = "SELECT * FROM signals";

                                }elseif($_SESSION['user_role'] == "analyst"){

                                   $user_session_email = $_SESSION['user_email'];

                                    $update_query = "SELECT * FROM signals WHERE signal_author = '{$user_session_email}' ";
                                    $update_query_2 = 
                                }

                                $select_updates = $database->query($update_query);

*/

                                $select_signals = Signal::find_all_signals();

                                while($row = mysqli_fetch_array($select_signals)){
                                    $signal_id = $row['signal_id'];
                                    $signal_pair_1 = $row['signal_pair_1'];
                                    $signal_pair_2 = $row['signal_pair_2'];
                                    $signal_created = $row['signal_created'];


                                $signal_pair = $signal_pair_1 . $signal_pair_2;

                                    echo "<tr>";
                                    echo "<td>$signal_id</td>";
                                    echo "<td>$signal_pair_1 $signal_pair_2</td>";
                                    echo "<td>$signal_created</td>";
                                    echo "<td><a href='updates.php?source=add_update&id=$signal_id&pair=$signal_pair'>Add Update</a></td>";
                                    echo "</tr>";


                                    

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

                            </tbody>
                        </table>