<?php

function makeViewTable( $personName, $slicesEaten, $comments)
    {
    if (is_null ($comments)) {
        echo "
            
        <div class='pizza-time-person'> 

            <div class = 'pizza-time-name'>
            <h2 > $personName </h2>
            <h2> $comments</h2>
            </div>

            <div class = pizza-time-slices-eaten>
            <h2>Slices Eaten:</h2>
            <h2> $slicesEaten </h2>            
            </div>

        </div>  ";

     } 
    
    else {
        echo "

        <div class='pizza-time-person'> 

            <div class = 'pizza-time-name'>
                <h2 > $personName </h2>
                <h2> \"$comments\"</h2>
            </div>

            <div class = pizza-time-slices-eaten>
                <h2>Slices Eaten:</h2>
                <h2> $slicesEaten </h2>            
            </div>

    </div>  ";

     }

    }

    
?>