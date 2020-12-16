<body class='manage'>
    <div class="web-grid">

    <?php
        include './View/header.php';
        include './View/navbar.php';
        // include './Controller/admin_check.php';
    ?>

    <div class = "manage-menu-grid">

        <div class= "manage-menu-text">
            <h1>What Would You Like To Do?</h1>
        </div>

        <div class = "manage-menu-grid">
            <div class = "manage-menu-content">
                <div class = "manage-menu-btn1">
                    <a href="./insertuser.php" id="manage-link" class="btn btn-success">Add A New User</a>
                </div>

                <div class = "manage-menu-btn2">
                    <a href="./updateuser.php" id="manage-link" class="btn btn-success">Update An Existing User</a>
                </div>

                <div class = "manage-menu-btn3">
                    <a href="./deleteuser.php" id="manage-link" class="btn btn-success">Delete A User</a>
                </div>
</div>
        </div>        



        <?php
        include './view/footer.php';

        ?>

    </div>
    
