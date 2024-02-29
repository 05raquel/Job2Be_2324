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
    </head>
    <body>
        <?php include("includes/new_menu.php");?>
        <div class="fundo-branco botao">
            <h1 class="titulo-roxo"  style="text-align:center">PALESTRA</h1>
            <h2 class="titulo-roxo">R(e)volucionando a engenharia de tecidos | Do cultivo à impressão</h2>
            <form method="post" action="assets/database/pontos.php">
                <button class="pontos-botao"type="submit" name="p2">Palestra 2</button>
            </form>
        </div>
        
        <?php include("includes/new_footer.php");?>
    </body>

</html>