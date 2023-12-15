<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Roam Ready</title>
    <link rel="stylesheet" href="../static/styles/styles.css">
    <link rel="stylesheet" href="../static/styles/page2.css">
    <script src="../static/scripts/scripts.js"></script>
</head>
<body>
    <div class="navbar">
    <?php
if(isset($_COOKIE['user']))
$userID = $_COOKIE['user'];

    require("config.php");
    $travel = $_POST['travel'];
    $TableName = "places";
    $sql = "UPDATE $TableName SET travel='$travel' WHERE userID = '$userID'";

    $pdo->exec($sql);

$pdo = null;
?>
        <div class="logo">
            <a href="index.html" class="home-link"><img src="../static/images/Logo1.png" alt="Logo" height="50" width="50"></a>
        </div>
        <div class="signup">
            <a href="#signup" class="signup-btn">Sign Up</a>
        </div>
    </div>    
    <div class="header">
        <h1>Choose your Adventure</h1>

    <form action = "" method="post">

    <div class="container">
        <div class="picture">
            <img id="outdoor" src="../static/images/outdoor.jpg" alt="tree" width="300" height="440" class="image" onclick="select()">
            <div class="middle">
                <div class="text">
                    Outdoor Activities
                </div>
            </div>
        </div>
        <div class="picture">
            <img id="event" src="../static/images/event.jpg" alt="tree" width="300" height="440" class="image" onclick="select()">
            <div class="middle2">
                <div class="text">
                    Event Activities
                </div>
            </div>
        </div>
        <div class="picture">
            <img id="leisure" src="../static/images/leisure.jpg" alt="tree" width="300"height="440" class="image" onclick="select()">
            <div class="middle3">
                <div class="text">
                    Leisure Activities
                </div>
            </div>
        </div>
    </div>

    </form>

    <div class="footer">
        <p>&copy; 2023 RoamReady. All rights reserved.</p>
    </div>
</body>
</html>