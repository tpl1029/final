<?php 
    include './Controller/pizza-display.php';
    include './Model/query-pizza.php';

    $database = new Database();
    $db = $database->connect();

    $view = new View($db);

    $viewGet = $view->viewRead();

    ?>

<div class='' id="">
        <!-- Loops though people (db rows) -->
         

            
<?php
            while ($row = $pizzaGet->fetch(PDO::FETCH_ASSOC)) {
                // variables

                $FirstName = $row['FirstName'];
                $LastName = $row['LastName'];
                $make = $row['Make'];
                $model = $row['Model'];
                $year = $row['Year'];
                $vin = $row['Vin'];
                $orderamount = $row['comments'];
                $paymentamount = $row['comments'];
                $outstandingbalance = $row['comments'];
                // variables

                makePizzaTable($personName, $slicesEaten, $comments); 

            } 
            ?>



            <!-- Put your people cards here, they can be listed vertically -->


        <!-- Loops through people (db rows) -->
    </div>


