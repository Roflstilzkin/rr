<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelour</title>
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

if (empty($_POST['user'])||empty($_POST['password']))
exit ("<p> You must enter values in all fields ! Click your browser's Back button to return to the previous page.</p>");

require("config.php");


$userID = $_POST['user'];
$password = $_POST['password'];
$TableName = "userinfo";

$sql = "SELECT * FROM $TableName";
$result = $pdo->query($sql);
while ($row = $result->fetch()) {
    if($row['userID']==$userID)
    exit("<p> This username is taken. Return to the previous page and choose another");
}

$sql = "INSERT INTO $TableName ( userID, password ) VALUES ('$userID', '$password')";
$pdo->exec($sql);

setcookie("user", $userID);//set the cookie!


$pdo = null;

?>
<header></header>
<p>Success! You're logged in!</p>
<p>Please provide us with a few more bits of information about yourself!<p>

<form action="register2.php" method="post">
    <p>First Name <input type="text" name="first" size="20"/></p>
    <p>Last Name <input type="text" name="last" size="20"/></p>
    <p>City <input type="text" name="city" size="20"/></p>
    <input type="submit" value="submit">
</form>


<div class="footer">
        <p>&copy; 2023 Travelour. All rights reserved.</p>
    </div>
    
</body>
</html>