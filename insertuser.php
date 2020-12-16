<body class='insert'>
    <div class="web-grid">

        <?php
    include './View/header.php';
    include './View/navbar.php';
    // include './Controller/admin_check.php';    
    include './Controller/db_conn.php';


                $database = new Database();
                $db = $database->connect();

            include './Controller/create_user.php';
        ?>
            
<div class = "manage-grid">
    <div class="insert-background">

        <div class="manage-text">
            <h2>Create a New User</h2>
            <p>Please fill out this form to create an account.</p>
        </div>

        <div class="user-css">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>Username</label>
                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>  
                <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                    <label>Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
                    <span class="help-block"><?php echo $email_err; ?></span>
                </div>   
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="form-control" value="<?php echo $password; ?>">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>
                               
                    <input type="submit" class="btn btn-primary" value="Create User" name="submit" id="submit">                    
                    <br> <span class="help-block"><?php echo $welcome; ?></span>
                
                
            </form>

        </div>

        <script>
           document.getElementById('username').value = '';
           document.getElementById('password').value = '';
           document.getElementById('email').value = '';          

           history.pushState({}, '', '');
           </script>

<?php
include './View/footer.php';
?>

    </div>

</div>


