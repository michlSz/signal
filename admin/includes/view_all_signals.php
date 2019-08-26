<div style="overflow: scroll;">
<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Signal pair from:</th>
                                    <th>Signal pair to:</th>
                                    <th>Current price</th>
                                    <th>Created</th>
                                    <th>Expire</th>
                                    <th>Market</th>
                                    <th>Time frame</th>
                                    <th>Risk</th>
                                    <th>Entry level from</th>
                                    <th>Entry level to</th>
                                    <th>Target 1</th>
                                    <th>Target 2</th>
                                    <th>Target 3</th>
                                    <th>Target 4</th>
                                    <th>Target 5</th>
                                    <th>Stop-loss</th>
                            </thead>
                            <tbody>
                                <?php 


                                $select_signals = Signal::find_all_signals();

                                while($row = mysqli_fetch_array($select_signals)){
                                    $signal_id = $row['signal_id'];
                                    $signal_author = $row['signal_author'];
                                    $signal_pair_from = $row['signal_pair_1'];
                                    $signal_pair_to = $row['signal_pair_2'];
                                    $signal_curr_price = $row['signal_curr_price'];
                                    $signal_created = $row['signal_created'];
                                    $signal_end = $row['signal_end'];
                                    $signal_market = $row['signal_market'];
                                    $signal_timeframe = $row['signal_timeframe'];
                                    $signal_risk = $row['signal_risk'];
                                    $signal_entry_from = $row['signal_entry_from'];
                                    $signal_entry_to = $row['signal_entry_to'];
                                    $signal_target_1 = $row['signal_target_1'];
                                    $signal_target_2 = $row['signal_target_2'];
                                    $signal_target_3 = $row['signal_target_3'];
                                    $signal_target_4 = $row['signal_target_4'];
                                    $signal_target_5 = $row['signal_target_5'];
                                    $signal_stoploss = $row['signal_stoploss'];

                                    echo "<tr>";
                                    echo "<td>$signal_id</td>";
                                    echo "<td>$signal_author</td>";
                                    echo "<td>$signal_pair_from</td>";
                                    echo "<td>$signal_pair_to</td>";
                                    echo "<td>$signal_curr_price</td>";
                                    echo "<td>$signal_created</td>";
                                    echo "<td>$signal_end</td>";
                                    echo "<td>$signal_market</td>";
                                    echo "<td>$signal_timeframe</td>"; 
                                    echo "<td>$signal_risk</td>"; 
                                    echo "<td>$signal_entry_from</td>"; 
                                    echo "<td>$signal_entry_to</td>"; 
                                    echo "<td>$signal_target_1</td>"; 
                                    echo "<td>$signal_target_2</td>"; 
                                    echo "<td>$signal_target_3</td>"; 
                                    echo "<td>$signal_target_4</td>"; 
                                    echo "<td>$signal_target_5</td>"; 
                                    echo "<td>$signal_stoploss</td>"; 
                                    echo "</tr>";
                                }

                                ?>



<?php

/*
if(isset($_GET['delete'])){
   $deletePost = $_GET['delete'];


$query = "DELETE FROM posts WHERE post_id = '$deletePost'";
$deletePostQuery = mysqli_query($con, $query);
header("Locaton: posts.php");

}
*/

?>


                            </tbody>
                        </table>
                    </tr>
                </thead>
            </table>
        </div>