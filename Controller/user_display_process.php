<?php

function makeViewTable( $UserName, $Password, $Email, $Status)
    {
    
        echo "

        <tr>

        
        <form action='' method='post'>

        
        <label>$UserName</label>
        <label>$Password</label>
        <label>$Email</label>
        <label>$Status</label>
        <div class='form-input'>
        <input type='text' name='username' id='username' class='form-control' value='$UserName' >
        </div>
        <input type='submit' class='btn btn-primary' value='Update User' name='update' id='update'>
        <input type='submit' class='btn btn-primary' value='Delete User' name='submit' id='submit'>  
        </form>
        </tr>
   ";
    

     

    }

    
?>