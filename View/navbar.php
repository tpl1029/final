<!-- Navbar -->
    <div style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('./View/Public/Images/car.jpg'); background-position: center; background-repeat: no-repeat;
        background-size: cover;" class="navbar-grid">
        <div class="left-grid">
        <a href="./index.php" id="link" class="Home"><img src="./View/Public/Images/logo.png" alt="Fortisure Logo"></a>
        </div>

        <h1 class="fort">Fortisure Repair</h1>

        <!-- <div class="center-grid"> -->
            <a href="./index.php" id="link" class="Home">Home</a>
            <a href="./manage.php" id="link" class="Manage"><span class="Manage">Manage Users</span></a>
            <a href="./outstandingorders.php" id="link" class="Orders">Outstanding Orders</a>
        <!-- </div> -->



        <div class="right-grid">
            <form method="post" action="./Controller/logout.php">
                <input type="submit" class="btn btn-primary" value="Logout" name="logout" id="logout" >
            </form>
        </div>
    </div>
<!-- Navbar -->