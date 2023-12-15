<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoamReady</title>
    <link rel="stylesheet" href="../static/styles/styles.css">
    <link rel="stylesheet" href="../static/styles/page2.css">
</head>
<body>
    <div class="navbar">
        
        <div class="logo">
            <a href="index.html" class="home-link"><img src="../static/images/Logo1.png" alt="Logo" height="50" width="50"></a>
        </div>
    </div>
<?php
if(isset($_COOKIE['user']))
$userID = $_COOKIE['user'];

    require("config.php");
    $fn = $_POST['first'];
    $ln = $_POST['last'];
    $city = $_POST['city'];
    $TableName = "userinfo";
    $sql = "UPDATE $TableName SET first='$fn', last='$ln', city='$city' WHERE userID = '$userID'";

    $pdo->exec($sql);

$pdo = null;
?>


<header></header>
<p>Success! Your information has been updated!</p>
<p>Return to the homepage and start your journey!<p>


<div class="footer">
        <p>&copy; 2023 RoamReady. All rights reserved.</p>
    </div>
    
</body>
</html>