<body class='index'>
    <div class="web-grid">

    <?php 

        include './view/header.php';
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
                <img src="./View/Public/Images/service.jpg">
            </div>

            <div class="repair">
                <img src="./View/Public/Images/repair.jpg">
            </div>

            <div class="paper">
                <img src="./View/Public/Images/paper.jpg">
            </div>
        </div>


     <!-- Website Information -->











<?php 

    include './view/footer.php';

?>