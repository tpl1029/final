<?php

function makeViewTable( $UserName, $Password, $Email, $Status)
    {
    
        echo "
        
        
        <tr>
        <form action='' method='post'>
        
            <td> <label>$UserName</label> </td>
            <td> <label>$Password</label> </td>
            <td> <label>$Email</label> </td>
            <td> <label>$Status</label> </td>
            <div class='form-input'>
            <input type='text' name='username' id='username' class='form-control' value='$UserName' >
            </div>
            <td> <input type='submit' class='btn btn-primary' value='Update User' name='update' id='update'> </td>
            <td> <input type='submit' class='btn btn-danger' value='Delete User' name='submit' id='submit'> </td> 
            </form>
            </td>

        </tr>
   ";
    

     

    }

    
?>