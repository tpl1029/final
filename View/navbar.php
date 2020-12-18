<!-- Navbar -->
    <div style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('./View/Public/Images/car.jpg'); background-position: center; background-repeat: no-repeat;
        background-size: cover;" class="navbar-grid">
        <div class="left-grid">
        <a href="./index.php" id="link" class="Home"><img src="./View/Public/Images/logo.png" alt="Fortisure Logo"></a>
        </div>

        <h1 class="fort">Fortisure Repair</h1>

        <!-- <div class="center-grid"> -->
            <a href="./index.php" id="link" class="Home">Home</a>
            <a href="./user_display.php" id="link" class="Manage"><span class="Manage">Manage Users</span></a>
            <a href="./outstandingorders.php" id="link" class="Orders">Outstanding Orders</a>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                &#9776; Home
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a href="./index.php" class="dropdown-item">Home</a>
                    <a href="./user_display.php" class="dropdown-item">Manage Users</a>
                    <a href="./outstandingorders.php" class="dropdown-item">Outstanding Orders</a>
                </div>
            </div>

        <div class="right-grid">
            <form method="post" action="./Controller/logout.php">
                <input type="submit" class="btn btn-primary" value="Logout" name="logout" id="logout" >
            </form>
        </div>

        <div class = "welcome">
            <?php echo 'Hello:' . ' ' . $_SESSION["username"];?>
        </div>
    </div>
<!-- Navbar -->