<?php

session_start();

if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/assets/database/database.php";
    $sql = "SELECT * FROM user WHERE id={$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}

?>
<body>
    <?php include("includes/new_menu.php");?>

    <?php include("sobre_1.php");?>
    <?php include("sobre_2.php");?>
    <?php include("sobre_3.php");?>

    <?php include("includes/new_footer.php");?>
</body>
