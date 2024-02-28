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
        <title>Job2Be - Semana da Biomédica</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
        <meta charset="UTF-8">
        <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
        <link rel="stylesheet" href="assets/styles/style_geral.css">
        <style>
            .fundo-branco{
                height: 100vh;
                display:flex;
                align-items:center;
                justify-content:center;
                flex-direction: column;
            }

            .pontos-botao{
                background-color: #3F165B;
                color: #FFFFFF;
                border-radius: 15px;
                border: none;
                box-shadow: 0 0 5px rgb(0, 0, 0, 0.3);
                margin-top: 2rem;
                padding: 5px;
                padding-right: 10px;
                padding-left: 10px;
            }
            .pontos-botao:hover{
                transform: scale(1.05);
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <?php include("includes/new_menu.php");?>
        <div class="fundo-branco botao">
            <h1 class="titulo-roxo"  style="text-align:center">PALESTRA</h1>
            <h2 class="titulo-roxo">A Nova Era na Saúde | Telemonitorização & Telemedicina</h2>
            <form method="post" action="assets/database/pontos.php">
                <button class="pontos-botao"type="submit" name="p1">Palestra 1</button>
            </form>
        </div>
        
        <?php include("includes/new_footer.php");?>
    </body>

</html>