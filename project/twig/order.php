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
        <form action="" method="get">
            <fieldset>
                <legend>Ordering a Spaceship Model</legend>
                <p>Your name: <input type="text" /></p>
                <p>Choose your Spaceship Model
                <select>
                    <?php
                        require 'fetch_data.php';
                        $data = new fetchData();
                        $data->connect();
                        // init connection
                        $allItems = $data->getAllItems();
                        // call defined public function
                        
                        while($row = $allItems->fetch_assoc()){
                            $issueId = $row["issueId"];
                            $name = $row["name"];
                            echo "<option value='$issueId'>[$issueId] $name</option>";
                       }
                    ?>
                </select></p>
                <p>Your address: <input type="text" ></p>
                <p>Write a comment:<br /><textarea></textarea></p>
                <p><input type="reset" value="reset" /><input type="submit" value="Send" /></p>
            </fieldset>
        </form>
    </div>
    <!-- <div class=card>
                <h3>Website Developer</h3>
            <img src="http://via.placeholder.com/76x76" alt="">
            <p>Xiaoxu Li</p>
            <p>me@uucky.me</p>
    </div> -->
    <?php
        include 'fragments/footer.php';
    ?>
</body>