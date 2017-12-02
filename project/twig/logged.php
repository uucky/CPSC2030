<?php 
include 'fragments/load_twig.php';
session_start();
?>

<body>
    <?php
        include 'fragments/header.php';
        include 'fragments/menubar.php';
        include 'fragments/back-to-top.php';        
    ?>
    <div class="container">
        <h2>Control Panel</h2>
        <?php 
        require 'login_lib.php';
        $result = loginCheck();  
        if($result){      
           $template2 = $twig->load('login.twig');
        //    echo $template2->render(array("session_id"=>session_id()));
        }

        ?>
        Order to perform:
            <input type="button" value="check" class="checkOrder">
            <div class="history">
            </div>
        <br>
        
        <a href="login_logout.php">Log out</a><br>
    </div>
    <?php
        include 'fragments/footer.php';
    ?>
</body>