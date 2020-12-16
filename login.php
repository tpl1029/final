<body class='login'>

        <?php 
            include './view/header.php';
            include './Controller/db_conn.php';

            $database = new Database();
            $db = $database->connect();
            include './Controller/user_login.php';
        ?>


        <div class="text">
            <h2>Login</h2>
            <p>Please fill in your credentials to login.</p>
        </div>

        <div class="form-css">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>    
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Login" name="login" id="login" >
                    <br> <span class="help-block"><?php echo $welcome; ?></span>
                </div>
                
            </form>
        </div>

    </div>

</body>
</html>
