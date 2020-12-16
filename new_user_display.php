<?php 
    include './View/header.php';
    // include './Controller/login_check.php';
    include './View/navbar.php';
    include './Controller/db_conn.php';
    include './Controller/new_user_display.php';
    include './Model/query-new-user-display.php';

    $database = new Database();
    $db = $database->connect();

    $view = new View($db);

    $viewGet = $view->viewRead();

    ?>


        <!-- Loops though people (db rows) -->
<div class = "orders-grid">     
    <h1 class="orders-text">Outstanding Orders</h1>
    
 <div class = "orders-table">       
        <?php


            // echo "<table>
            // <tr >
            // <th> User Name</th>
            // <th>Password</th>
            // <th>Email</th>
            // <th>Status</th>
            // <th>Option</th>                             
            // </tr>";
                        
            while ($row = $viewGet->fetch(PDO::FETCH_ASSOC)) {
                    // variables

                    $UserName = $row['UserName'];
                    $Password = $row['Password'];
                    $Email = $row['Email'];
                    $Status = $row['Status'];

                    // variables

                    makeViewTable($UserName, $Password, $Email, $Status); 

                } 

                echo " </table> ";
            ?>



            <!-- Put your people cards here, they can be listed vertically -->


        <!-- Loops through people (db rows) -->
    </div>

    

        <?php
    include './View/footer.php';
    ?>

</div>    

