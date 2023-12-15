<?php

if (empty($_GET['user'])||empty($_GET['password']))
exit ("<p> You must enter values in all fields ! Click your browser's Back button to return to the previous page.</p>");

require_once("config.php")
$tablename= "rr";
$loginID = $_GET['user'];
$password = $_GET['password'];

$sql = "SELECT * FROM $tablename";
$result = $pdo->query($sql);
while ($row = $result->fetch()) {
    if($row['loginID']==$loginID)
    exit("<p> This username is taken. Return to the previous page and choose another");
}

$sql = "INSERT INTO $tablename ( loginID, password ) VALUES ('$loginID', 'password')";
$pdo->exec($sql);

$pdo = null;
?>