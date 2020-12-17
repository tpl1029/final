<body class="manage">

<?php 
    include './View/header.php';
    // include './Controller/admin_check.php';
    include './View/navbar.php';
    include './Controller/db_conn.php';   
    include './Controller/user_display_process.php';
    include './Model/query-new-user-display.php';

    $database = new Database();
    $db = $database->connect();

    $view = new View($db);

    $viewGet = $view->viewRead();
    include './Controller/user_update_process.php';
    include './Controller/delete_user.php';    
    ?>


        <!-- Loops though people (db rows) -->
<div class = "users-grid">     
    <h1 class="users-text">Users</h1>
    <div class = "add-user">
                    <a href="./insertuser.php" id="manage-link" class="btn btn-success">Add A New User</a>
                </div>
    
 <div class = "users-table">       
        <?php


            echo "<table>
            <tr >
            <th> User Name</th>
            <th>Password</th>
            <th>Email</th>
            <th>Status</th>
            <th></th>
            <th></th>                             
            </tr>";
                        
            while ($row = $viewGet->fetch(PDO::FETCH_ASSOC)) {
                    // variables

                    $UserName = $row['UserName'];
                    $Password = $row['Password'];
                    $Email = $row['Email'];
                    $Status = $row['Status'];

                    // variables

                    makeViewTable($UserName, $Password, $Email, $Status); 

                } 

                echo " </table> ";
            ?>



            <!-- Put your people cards here, they can be listed vertically -->


        <!-- Loops through people (db rows) -->
    </div>
</div>    

<?php
    include './View/footer.php';
?>