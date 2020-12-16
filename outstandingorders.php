<?php 
    include './View/header.php';
    // include './Controller/login_check.php';
    include './View/navbar.php';
    include './Controller/db_conn.php';
    include './Controller/display_view.php';
    include './Model/query-view.php';

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


            echo "<table>
            <tr >
            <th> First Name</th>
            <th>Last Name</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
            <th>Vin</th>
            <th>Order Amount</th>   
            <th>Payment Amount</th>   
            <th>Outstanding Balance</th>                     
            </tr>";
                        
            while ($row = $viewGet->fetch(PDO::FETCH_ASSOC)) {
                    // variables

                    $FirstName = $row['FirstName'];
                    $LastName = $row['LastName'];
                    $make = $row['Make'];
                    $model = $row['Model'];
                    $year = $row['Year'];
                    $vin = $row['Vin'];
                    $orderamount = $row['OrderAmount'];
                    $paymentamount = $row['PaymentAmount'];
                    $outstandingbalance = $row['OutstandingBalance'];
                    // variables

                    makeViewTable($FirstName, $LastName, $make, $model, $year, $vin, $orderamount, $paymentamount, $outstandingbalance); 

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

