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

                                }

                                ?>

                            </tbody>
                        </table>