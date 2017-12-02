<?php 
include 'fragments/load_twig.php'
?>

<body>
    <?php
        include 'fragments/header.php';
        include 'fragments/menubar.php';
        include 'fragments/back-to-top.php';        
    ?>
        <div class="container">
            <h2>About</h2>
            <div class="about">
                <h3>Crew</h3>
                <div class=card>
                    <!-- <img src="media/asset/member1.png" alt=""> -->
                    <p>Stephen</p>
                    <p>jlong@browsecat.info
                </div>
                <div class=card>
                    <!-- <img src="media/asset/member2.png" alt=""> -->
                    <p>Lu Jun</p>
                    <p>mgreene@camimbo.info</p>
                </div>
                <div class=card>
                    <!-- <img src="media/asset/member3.png" alt=""> -->
                    <p>Jack</p>
                    <p>i@jack-li.com</p>
                </div>
                <h3>Website Developer</h2>
                <div class=card>
                    <!-- <img src="media/asset/member4.png" alt=""> -->
                    <p>Xiaoxu Li</p>
                    <p>me@uucky.me</p>
                </div>
                <!-- <img src="res/6.jpg" alt="our people"> -->
            </div>

        </div>
        <?php
        include 'fragments/footer.php';
    ?>
</body>