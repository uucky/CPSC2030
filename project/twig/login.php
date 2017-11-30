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
            <!-- <h2>Welcome to user system</h2> -->
                <form class="login-box" method="POST" action="logged.php">
                    <h2>Administration Portal</h2>
                    <!-- <span class="alert" id="error">invalid input</span> -->
                    <input type="text" placeholder="Username" name="username" required>
                    <br>
                    <input type="password" placeholder="Password" name="password" required>
                    <br>
                    <input type="submit" id="login-submit" value="Login">
                </form>
            </div>
        </div>
        <?php
        include 'fragments/footer.php';
    ?>
</body>