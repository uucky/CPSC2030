<!DOCTYPE html>

<head>
    <meta charset="UTF-8"> 
    <link rel="stylesheet/less" type=text/css href="ds9.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
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
        <h2>Login</h2>
        <form method="POST" action="store.php">
            username:<input type="text" name="username"><br>
            password:<input type="password" name="password"><br>
            <input type="submit" value="login">
        </form>
        <!-- the session id is {{session_id}} -->
    </div>
    <?php
        include 'fragments/footer.php';
    ?>
</body>