<body class='orders'>
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
    
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
    

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

<script>
    //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 

</script>

</div>    

        <?php
    include './View/footer.php';
    ?>



<?php
    include './View/footer.php';
?>
