<body class='delete'>
    <div class="web-grid">

        <?php

            include './View/header.php';
            include './View/navbar.php';
            // include './Controller/login_check.php';
            include './Controller/db_conn.php';

                $database = new Database();
                $db = $database->connect();

            include './Controller/delete_user.php';
        ?>
    

        
            <h2>Delete User</h2>
            <p>Please enter the username and password of the account you wish to delete.</p>
       

        <div class="user-css">
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
               
                <div>               
                    <input type="submit" class="btn btn-primary" value="Delete User" name="submit" id="submit">                    
                    <br> <span class="help-block"><?php echo $welcome; ?></span>
                </div>
                
            </form>
        </div>

        <script>
           document.getElementById('username').value = '';
           document.getElementById('password').value = '';                 
           history.pushState({}, '', '');
           </script>

   



<?php
include './View/footer.php';
?>