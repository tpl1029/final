<?php

function makeViewTable( $UserName, $Password, $Email, $Status)
    {
    
        echo "

        <div class=''> 

        
        <form>

        
        <label>$UserName</label>
        <label>$Password</label>
        <label>$Email</label>
        <label>$Status</label>
        <input type='text' name='update_username' id='update_username' class='form-control' value='$UserName'>
        <input type='submit' class='btn btn-primary' value='Update User' name='submit' id='submit'> 
        </form>
   ";
    

     

    }

    
?>