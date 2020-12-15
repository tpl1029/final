<?php

function makeViewTable( $FirstName, $LastName, $make, $model, $year, $vin, $orderamount, $paymentamount, $outstandingbalance)
    {
    
        echo "

        <div class=''> 

        <tr>
        <td>{$FirstName}</td>
        <td>{$LastName}</td>
        <td>{$make}</td>
        <td>{$model}</td>
        <td>{$year}</td>
        <td>{$vin}</td>
        <td>{$orderamount}</td>   
        <td>{$paymentamount}</td>   
        <td>{$outstandingbalance}</td>       
    </tr>";
    

     

    }

    
?>