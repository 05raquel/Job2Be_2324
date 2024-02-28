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
        <link rel="stylesheet" href="assets/styles/style_geral.css">
        <meta charset="UTF-8">
        <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
        <style>
            .atividade{
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .data-local{
                font-weight: 600;
                font-size: 18px;
                padding-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <?php include("includes/new_menu.php");?>
        
        <div class="fundo-branco">
            <div id="palestra">
                <h1 class="titulo-roxo"  style="text-align:center">PALESTRAS</h1>
                
                <div class="atividade" id="p-nova_era_saude">
                    <h2 class="titulo-roxo">A Nova Era na Saúde | Telemonitorização & Telemedicina</h2>
                    <div class = "texto-roxo">
                        <p class="data-local">2ª feira, dia 4 das 10:00 às 11:30</p>
                        <p>Local:</p>
                        <p>Descrição:</p>
                        <p>Oradores:
                            Foto
                            Descrição </p>
                    </div>
                </div>


                <div class="atividade" id="p-eng_tecidos">
                    <h2 class="titulo-roxo">R(e)volucionando a engenharia de tecidos | Do cultivo à impressão</h2>
                    <div class = "texto-roxo">
                        <p class="data-local">2ª feira, dia 4 das 13:30 às 15:00</p>
                        <p>Local:</p>
                        <p>Descrição:</p>
                        <p>Oradores:
                            Foto
                            Descrição </p>
                    </div>
                </div>


                <div class="atividade" id="p-mobilidade">
                    <h2 class="titulo-roxo">Mobilidade Assistida  | Da inovação à acessibilidade</h2>
                    <div class = "texto-roxo">
                        <p class="data-local">3ª feira, dia 5 das 13:30 às 15:00</p>
                        <p>Local:</p>
                        <p>Descrição:</p>
                        <p>Oradores:
                            Foto
                            Descrição </p>
                    </div>
                </div>


                <div class="atividade" id="p-ia_saude">
                    <h2 class="titulo-roxo">Inteligência Artificial | Na Saúde</h2>
                    <div class = "texto-roxo">
                        <p>Horário: 4ª feira, dia 6 das 13:30 às 15:00</p>
                        <p>Local:</p>
                        <p>Descrição:</p>
                        <p>Oradores:
                            Foto
                            Descrição </p>
                    </div>
                </div>


            </div>  
            <div id="workshop">
                <h1 class="titulo-roxo"  style="text-align:center">WORKSHOPS</h1>
                <div class="atividade" id="ws1">
                    <h2 class="titulo-roxo"></h2>
                    <div class = "texto-roxo">
                        <p>Horário: 2ª feira, dia 4 das 15:30 às 17:00</p>
                        <p>Local:</p>
                        <p>Descrição:</p>
                        <p>Oradores:
                            Foto
                            Descrição </p>
                    </div>
                </div>
                <div class="atividade" id="ws2">
                    <h2 class="titulo-roxo"></h2>
                    <div class = "texto-roxo">
                        <p>Horário: 3ª feira, dia 5 das 9:00 às 11:00</p>
                        <p>Local:</p>
                        <p>Descrição:</p>
                        <p>Oradores:
                            Foto
                            Descrição </p>
                    </div>
                </div>
                <div class="atividade" id="ws3">
                    <h2 class="titulo-roxo">Técnica Cirúrgica - Volar-e</h2>
                    <div class = "texto-roxo">
                        <p class="data-local">3ª feira, dia 5 das 15:30 às 17:00</p>
                        <p>Local: v1.05</p>
                        <p>Descrição:</p>
                        <p>Oradores:
                            Foto
                            Descrição </p>
                    </div>
                </div>
                <div class="atividade" id="ws1">
                    <h2 class="titulo-roxo"></h2>
                    <div class = "texto-roxo">
                        <p>Horário: 4ª feira, dia 6 das 9:00 às 10:30</p>
                        <p>Local:</p>
                        <p>Descrição:</p>
                        <p>Oradores:
                            Foto
                            Descrição </p>
                    </div>
                </div>
            </div>

            <div id="pitch">
                <h1 class="titulo-roxo"  style="text-align:center">PITCH</h1>
                <div class="atividade">
                    <h2 class="titulo-roxo"></h2>
                    <div class = "texto-roxo">
                        <p>Horário: 2ª feira, dia 4 das 11:30 às 12:00</p>
                        <p>Local:</p>
                        <p>Descrição:</p>
                        <p>Oradores:
                            Foto
                            Descrição </p>
                    </div>
                </div>
            </div>


            <div id="feira-empresas">
                <h1 class="titulo-roxo"  style="text-align:center">FEIRA DE EMPRESAS</h1>
                <div class="atividade">
                    <h2 class="titulo-roxo"></h2>
                    <div class = "texto-roxo">
                        <p>Horário: 3ª feira, dia 5 das 10:30 às 12:00</p>
                        <p>Local:</p>
                        <p>Descrição:</p>
                        <p>Oradores:
                            Foto
                            Descrição </p>
                    </div>
                </div>
            </div>  
            

            <div id="alumni">
                <h1 class="titulo-roxo"  style="text-align:center">ALUMNI SESSION</h1>
                <div class="atividade">
                    <h2 class="titulo-roxo"></h2>
                    <div class = "texto-roxo">
                        <p>Horário: 4ª feira, dia 6 das 11:00 às 12:00</p>
                        <p>Local:</p>
                        <p>Descrição:</p>
                        <p>Oradores:
                            Foto
                            Descrição </p>
                    </div>
                </div>
            </div> 
            
            
        </div>
        
        <?php include("includes/new_footer.php");?>
    </body>

</html>