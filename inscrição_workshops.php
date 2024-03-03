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
            .fundo-branco-admin{
                height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .button-admin{
                color: #fff;
                background-color: #3F165B;
                border: none;
                border-radius: 5px;
                padding: 10px;
            }

            .button-admin-link{
                color: #fff;
                background-color: #3F165B;
                border: none;
                border-radius: 5px;
                padding: 10px;
                font-family: 'League Spartan', sans-serif;
                text-decoration: none;
                width: 100%;
            }

            .button-admin:hover{
                scale: 1.02;
                cursor: pointer;
            }
            .button-row{
                display: flex;
                flex-direction: column;
                width: 75%;
            }
        </style>
    </head>
    <body>
        <?php include("includes/new_menu.php");?>
        <div class="fundo-branco-admin">
            <div class="titulo-roxo" style="margin-top: 150px; margin-bottom: 50px;">INSCRIÇÕES NOS WORKSHOPS</div>
            <div class="button-row">
                <a href="https://www.eventbrite.com/e/bilhetes-workshop-are-you-ready-for-cloud-854939114907?aff=oddtdtcreator"><button class="button-admin">Are you ready for Cloud?<p class="hora-ws">2ª Feira - 15h30 às 17h00</p></button></a>
                <div class="texto-roxo ws"></div>
                <a href="https://www.eventbrite.com/e/bilhetes-workshop-tecnica-cirurgica-volar-e-854945223177?aff=oddtdtcreator"><button class="button-admin">Técnica Cirúrgica | Volar-e<p class="hora-ws">3ª Feira - 15h30 às 17h00</p></button></a>
                <a href="https://www.eventbrite.com/e/bilhetes-workshop-inovacao-na-industria-dos-dispositivos-medicos-854949566167?aff=oddtdtcreator"><button class="button-admin">Inovação nos dispositivos médicos<p class="hora-ws">4ª Feira - 9h00 às 10h30</p></button></a>
            </div>
        </div>
        
        <?php include("includes/new_footer.php");?>
    </body>

</html>