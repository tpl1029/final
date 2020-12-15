<?php

    
    include './Controller/db_conn.php';

        $database = new Database();
        $db = $database->connect();

    include './Controller/update_user.php';
?>
    

        
            <h2>Update a User</h2>
            <p>Please fill out this form to update a user.</p>
       

        <div class="">
       
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>Username</label>
                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>  

                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="form-control" value="<?php echo $password; ?>">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($update_username_err)) ? 'has-error' : ''; ?>">
                    <label>New Username</label>
                    <input type="text" name="update_username" id="update_username" class="form-control" value="<?php echo $update_username; ?>">
                    <span class="help-block"><?php echo $update_username_err; ?></span>
                </div>  
                <div class="form-group <?php echo (!empty($update_email_err)) ? 'has-error' : ''; ?>">
                    <label>New Email</label>
                    <input type="text" name="update_email" id="update_email" class="form-control" value="<?php echo $update_email; ?>">
                    <span class="help-block"><?php echo $update_email_err; ?></span>
                </div>   
                <div class="form-group <?php echo (!empty($update_password_err)) ? 'has-error' : ''; ?>">
                    <label>New Password</label>
                    <input type="password" name="update_password" id="update_password" class="form-control" value="<?php echo $update_password; ?>">
                    <span class="help-block"><?php echo $update_password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($update_confirm_password_err)) ? 'has-error' : ''; ?>">
                    <label>Confirm New Password</label>
                    <input type="password" name="update_confirm_password" id="update_confirm_password" class="form-control" value="<?php echo $update_confirm_password; ?>">
                    <span class="help-block"><?php echo $update_confirm_password_err; ?></span>
                </div>
                               
                    <input type="submit" class="btn btn-primary" value="Submit" name="submit" id="submit">                    
                    <br> <span class="help-block"><?php echo $welcome; ?></span>
                </div>
                
            </form>
        </div>

        <script>
           document.getElementById('username').value = '';
           document.getElementById('password').value = '';
           document.getElementById('update_username').value = '';
           document.getElementById('update_password').value = '';
           document.getElementById('update_confirm_password').value = '';
           document.getElementById('update_email').value = '';          
           history.pushState({}, '', '');
           </script>

   



