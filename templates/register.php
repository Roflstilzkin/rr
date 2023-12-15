<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoamReady</title>
    <link rel="stylesheet" href="../static/styles/styles.css">
</head>
<body>
    <div class="navbar">
<?php

if (empty($_GET['user'])||empty($_GET['password']))
exit ("<p> You must enter values in all fields ! Click your browser's Back button to return to the previous page.</p>");

require_once("config.php")

$TableName = "userinfo";
$userID = $_GET['user'];
$password = $_GET['password'];

$sql = "SELECT * FROM $tablename";
$result = $pdo->query($sql);
while ($row = $result->fetch()) {
    if($row['userID']==$userID)
    exit("<p> This username is taken. Return to the previous page and choose another");
}

$sql = "INSERT INTO $tablename ( userID, password ) VALUES ('$loginID', 'password')";
$pdo->exec($sql);

$pdo = null;
?>

<div class="footer">
        <p>&copy; 2023 RoamReady. All rights reserved.</p>
    </div>
    
</body>
</html>