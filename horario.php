<?php

session_start();

if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/assets/database/database.php";
    $sql = "SELECT * FROM user WHERE id={$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}

?>

<head>
    <title>Job2Be - Semana da Biomédica</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/styles/style_geral.css">
    <link rel="stylesheet" href="assets/styles/style_horario.css">
</head>

<body>
    <?php include("includes/new_menu.php");?>
    <div class="fundo-branco horario">
        <div class="segunda">
            <div class="titulo-roxo titulo-dia">2ª FEIRA</div>
            <div class="bloco-horario trinta palestra">
                <div class="texto-branco titulo">SESSÃO DE ABERTURA</div>
                <div class="texto-branco hora">9h00 - 9h30</div>
            </div>
            <div class="bloco-horario trinta coffee-break">
                <div class="texto-branco titulo">COFFEE BREAK</div>
                <div class="texto-branco hora">9h30 - 10h00</div>
            </div>
            <div class="bloco-horario noventa palestra">
                <div class="texto-branco titulo">PALESTRA</div>
                <div class="texto-branco hora">10h00 - 11h30</div>
            </div>
            <div class="bloco-horario trinta outros">
                <div class="texto-branco titulo">PITCH</div>
                <div class="texto-branco hora">11h30 - 12h00</div>
            </div>
            <div class="bloco-horario noventa almoco">
                <div class="texto-branco titulo">ALMOÇO</div>
                <div class="texto-branco hora">12h00 - 13h30</div>
            </div>
            <div class="bloco-horario noventa palestra">
                <div class="texto-branco titulo">PALESTRA</div>
                <div class="texto-branco hora">13h30 - 15h00</div>
            </div>
            <div class="bloco-horario trinta coffee-break">
                <div class="texto-branco titulo">COFFEE BREAK</div>
                <div class="texto-branco hora">15h00 - 15h30</div>
            </div>
            <div class="bloco-horario noventa workshop">
                <div class="texto-branco titulo">WORKSHOP</div>
                <div class="texto-branco hora">15h30 - 17h00</div>
            </div>
        </div>
        <div class="terca">
            <div class="titulo-roxo titulo-dia">3ª FEIRA</div>
            <div class="bloco-horario sessenta workshop">
                <div class="texto-branco titulo">WORKSHOP</div>
                <div class="texto-branco hora">9h00 - 10h00</div>
            </div>
            <div class="bloco-horario trinta coffee-break">
                <div class="texto-branco titulo">COFFEE BREAK</div>
                <div class="texto-branco hora">10h00 - 10h30</div>
            </div>
            <div class="bloco-horario noventa outros">
                <div class="texto-branco titulo">FEIRA DE EMPRESAS</div>
                <div class="texto-branco hora">10h30 - 12h00</div>
            </div>
            <div class="bloco-horario noventa almoco">
                <div class="texto-branco titulo">ALMOÇO</div>
                <div class="texto-branco hora">12h00 - 13h30</div>
            </div>
            <div class="bloco-horario noventa palestra">
                <div class="texto-branco titulo">PALESTRA</div>
                <div class="texto-branco hora">13h30 - 15h00</div>
            </div>
            <div class="bloco-horario trinta coffee-break">
                <div class="texto-branco titulo">COFFEE BREAK</div>
                <div class="texto-branco hora">15h00 - 15h30</div>
            </div>
            <div class="bloco-horario noventa workshop">
                <div class="texto-branco titulo">WORKSHOP</div>
                <div class="texto-branco hora">15h30 - 17h00</div>
            </div>
        </div>
        <div class="quarta">
            <div class="titulo-roxo titulo-dia">4ª FEIRA</div>
            <div class="bloco-horario noventa workshop">
                <div class="texto-branco titulo">WORKSHOP</div>
                <div class="texto-branco hora">9h00 - 10h30</div>
            </div>
            <div class="bloco-horario trinta coffee-break">
                <div class="texto-branco titulo">COFFEE BREAK</div>
                <div class="texto-branco hora">10h30 - 11h00</div>
            </div>
            <div class="bloco-horario sessenta outros">
                <div class="texto-branco titulo">SESSÃO DE ALUMNI</div>
                <div class="texto-branco hora">11h00 - 12h00</div>
            </div>
            <div class="bloco-horario noventa almoco">
                <div class="texto-branco titulo">ALMOÇO</div>
                <div class="texto-branco hora">12h00 - 13h30</div>
            </div>
            <div class="bloco-horario noventa palestra">
                <div class="texto-branco titulo">PALESTRA</div>
                <div class="texto-branco hora">13h30 - 15h00</div>
            </div>
            <div class="bloco-horario trinta coffee-break">
                <div class="texto-branco titulo">COFFEE BREAK</div>
                <div class="texto-branco hora">15h00 - 15h30</div>
            </div>
            <div class="bloco-horario trinta palestra">
                <div class="texto-branco titulo">SESSÃO DE ENCERRAMENTO</div>
                <div class="texto-branco hora">15h30 - 16h00</div>
            </div>
        </div>
    </div>
    <?php include("includes/new_footer.php");?>
</body>