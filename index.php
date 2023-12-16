<?php

session_start();

if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/assets/database/database.php";
    $sql = "SELECT * FROM user WHERE id={$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>index</title>
        <meta charset="UTF-8">
        <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
        <style>
            .qrcodeReader{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            #reader{
                width: 600px;
            }
            #result{
                text-align: center;
                font-size: 1.5rem;
            }
            #reader__scan_region img{
                display: none;
            }
        </style>
    </head>
    <body>
        <?php include("includes/new_menu.php");?>

        <?php include("index_1.php");?>
        <?php include("index_2.php");?>
        <?php include("index_3.php");?>
        
        <?php include("includes/new_footer.php");?>
    </body>

</html>