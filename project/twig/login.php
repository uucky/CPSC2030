<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet/less" type=text/css href="ds9.less">
    <scrip
    src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery.js"></script>
    <title>Space Flight</title>
</head>

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
            <div class="login-reg">
                <form class="reg-box" method="POST" action="reg.php">
                <h3>Create account</h3>                    
                    username:
                    <input type="text" name="username">
                    <br> password:
                    <input type="password" name="password">
                    <br>
                    <input type="submit" value="Sign Up">
                </form>
                <form class="login-box" method="POST" action="logged.php">
                <h3>Already have an account? Please login</h3>
                    username:
                    <input type="text" name="username">
                    <br> password:
                    <input type="password" name="password">
                    <br>
                    <input type="submit" value="Login">
                </form>
            </div>
            the session id is {{session_id}}
        </div>
        <?php
        include 'fragments/footer.php';
    ?>
</body>