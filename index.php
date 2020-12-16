<body class='index'>
    <div class="web-grid">

    <?php 

    include './view/header.php';
    // include './Controller/login_check.php';
    include './view/navbar.php';

    ?>

    
    <script>
        document.getElementById('background').style.background = "linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('./View/Public/Images/LightJar.jpg')";
        document.getElementById('background').style.backgroundPosition = "center"; 
        document.getElementById('background').style.backgroundRepeat = "no-repeat";
        document.getElementById('background').style.backgroundSize = "cover"; 
    </script>
     <!-- Website Information -->
        <div class="info-grid">
            <div class="service">   
                <img src="./View/Public/Images/service.jpg" class="img-service"> 
            </div>

            <div class="serivce-info">
                <p class="p-services" id="style-font">Welcome to Fortisure Repairs, where we make sure that our customers recieve the best customer services and are provided with the help they need!</p>
            </div>

            <div class="repair">
                <img src="./View/Public/Images/repair.jpg" class="img-repair">
            </div>

            <div class="repair-info">
                <p class="p-repairs" id="style-font">We do all of sorts of repairs on cars:</p>
                <br>
                    <ul class="p-repairs" id="style-font">
                        <li>Oil/oil filter changed.</li>
                        <li>Wiper blades replacement.</li>
                        <li>Replace air filter.</li>
                        <li>Scheduled maintenance.</li>
                        <li>New tires.</li>
                        <li>Battery replacement.</li>
                        <li>Brake work.</li>
                        <li>And More!</li>
                    </ul>
            </div>

            <div class="paper">
                <img src="./View/Public/Images/paper.jpg" class="img-paper">
            </div>

            <div class="paper-info">
                <p class="p-papers" id="style-font">As we do our repairs on vehicles, we make sure that everything works perfectly! 
                And we even provide a way for our customers to check and recieve any status updates during the repairs!</p>
            </div>
        </div>


     <!-- Website Information -->











<?php 

    include './view/footer.php';

?>