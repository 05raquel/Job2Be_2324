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
        <script async src="https://tally.so/widgets/embed.js"></script>
        <script src="https://kit.fontawesome.com/e434f48fbf.js" crossorigin="anonymous"></script>
        <style>
            @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,400,400italic,600,600italic,700,700italic");
            @import url("https://fonts.googleapis.com/css?family=League+Spartan:wght@300,300i,400,400i,600,600i,700,700i&display=swap");
            @import url('https://fonts.googleapis.com/css2?family=Oswald');
            
            .profile{
                height: 100vh;
                display: flex;
            }
            .pessoal{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 22%;
            }
            .lista{
                height: 100%;
            }

            ul {
                list-style-type: none;
                font-family: 'League Spartan', sans-serif;
                font-weight: 500;
                color: #3F165B;
                padding: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                max-height: 100%;
                overflow: scroll;
            }

            ul::-webkit-scrollbar{
                display: none;
            }

            li{
                padding: 7px;
            }

            .pontuacao{
                font-size: 23px;
                font-weight: bolder;
            }

            .bold-item {
                font-weight: 600;
            }

            .linkedin{
                font-family: 'League Spartan', sans-serif;
                font-size: 15px;
                color: #3F165B;
            }
            .linkedin-button{
                background-color: #fff;
                border: none;
            }

            .botao-cv{
                background-color: #3F165B;
                border-radius: 8px;
                border: none;
                padding: 5px;
                color: white;
                font-size: 20px;
                font-family: 'League Spartan', sans-serif;
                font-weight: 600;
                box-shadow: 0 0 5px rgb(0, 0, 0, 0.3);
                line-height: 1.2em;
                width: auto;
                min-width: 250px; /* Set a minimum width for the button */
                flex-grow: 1;
            }
            .botao-cv:hover{
                transform: scale(1.01);
                cursor: pointer;
            }
            .linha-topo-botoes {
                display: flex;
                justify-content: space-between; /* Align items horizontally */
                align-items: bottom;
                margin-bottom: 15px;
            }
            .linha-titulo-pontos{
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 20px;
            }
            .pessoal-dir{
                width: 78%;
                display: flex;
                flex-direction: column;
            }

            .grid-container {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
                gap: 10px;
                max-width: 100%;
                margin: 0 auto;
                margin-top: 15px;
            }

            .grid-item img {
                width: 100%;
                height: auto;
                display: block;
            }

            /* Style for the tooltip */
            .tooltip {
                position: relative;
                display: inline-block;
                top: 25%;
            }

            .tooltip2 {
                position: relative;
                display: inline-block;
            }

            /* Style for the tooltip text */
            .tooltip .tooltiptext {
                visibility: hidden;
                width: 300px;
                background-color: #959595;
                color: #fff;
                font-family: 'League Spartan', sans-serif;
                line-height: 1.3em;
                font-weight: lighter;
                text-align: center;
                border-radius: 6px;
                padding: 10px;
                position: absolute;
                z-index: 1;
                bottom: 125%;
                left: 50%;
                margin-left: -100px; /* Adjust based on the tooltip width */
                opacity: 0;
                transition: opacity 0.3s;
            }

            /* Show the tooltip text when hovering over the tooltip container */
            .tooltip:hover .tooltiptext {
                visibility: visible;
                opacity: 1;
            }

            /* Style for the tooltip text */
            .tooltip2 .tooltiptext {
                visibility: hidden;
                width: 350px;
                background-color: #959595;
                color: #fff;
                font-family: 'League Spartan', sans-serif;
                line-height: 1.3em;
                font-weight: lighter;
                text-align: center;
                border-radius: 6px;
                padding: 10px;
                position: absolute;
                z-index: 1;
                bottom: 125%;
                left: 50%;
                margin-left: -100px; /* Adjust based on the tooltip width */
                opacity: 0;
                transition: opacity 0.3s;
            }

            /* Show the tooltip text when hovering over the tooltip container */
            .tooltip2:hover .tooltiptext {
                visibility: visible;
                opacity: 1;
            }

            .linkedin-form {
                display: flex;
                flex-direction: column;
                width: 100%; /* Ensure the form takes full width */
            }

            .linkedin {
                margin-right: 5px;
            }

            .linkedin-input {
                width: 100%; /* Ensure the input field expands to full width */
            }

            #linkedin {
                padding: 8px;
                border-radius: 5px;
                border: 1px solid #ccc;
                font-size: 16px;
                outline: none; /* Remove default outline */
            }

            .submit {
                display: flex;
                align-items: center;
                width: 100%; /* Ensure the submit button takes full width */
            }

            .linkedin-button:hover{
                cursor: pointer;
            }

            .logout-button{
                text-decoration: none; 
                font-family: 'League Spartan', sans-serif;
                background-color: #3F165B;
                padding-left: 15px;
                padding-right: 15px;
                padding-top: 8px;
                padding-bottom: 8px;
                border-radius: 10px;
                color: white;
            }
            .logout-button:hover{
                background-color: #301B3F;
            }
            
        </style>
    </head>
    <body>
        <?php include("includes/new_menu.php");?>

        <div class="profile">
            <div class="pessoal fundo-roxo">
                <div class="pontuacao titulo-roxo">A TUA PONTUAÇÃO</div>
                <?php
                    $pontos = $user['points'];
                    echo "<div class='pontos titulo-branco'>{$pontos}</div>";
                ?>
                <div class="rank titulo-roxo">RANKING</div>
                <div class="lista">
                    <?php
                        $sql = 'SELECT * FROM user WHERE email!="admin@gmail.com" ORDER BY points DESC';
                        $result = $mysqli->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<ul>";

                            $count = 0; // Initialize a counter

                            while ($row = $result->fetch_assoc()) {
                                $count++;

                                // Apply a CSS class for the first three items
                                $class = ($count <= 3) ? 'bold-item' : '';

                                echo "<li class='{$class}'>{$row['user']} - {$row['points']}</li>";
                            }

                            echo "</ul>";
                        } else {
                            echo "No users found.";
                        }
                    ?>
                </div>
                <a class="logout-button" href="assets/database/logout.php" >Log Out</a> 
            </div>
            <div class="pessoal-dir fundo-branco">
                <div class="linha-topo-botoes" style="margin-bottom: 15px;">
                    <button class="botao-cv" data-tally-open="3qV06G" data-tally-width="600" data-tally-hide-title="1" data-tally-auto-close="1000">SUBMETE AQUI O TEU CV</button>
                    <?php if ($user["cv"] == 1):?>
                        <i class="fa-solid fa-circle-check" style="color: #63E6BE; font-size: 25px; margin-left: 10px; margin-top: 5px; opacity: 0.5; margin-right: 20px; top: 50%;"></i>
                    <?php endif; ?>
                    <?php if ($user["cv"] == 0):?>
                        <div class="tooltip">
                            <!-- Icon element -->
                            <i class="fa-solid fa-clock-rotate-left" style="color: #878787; font-size: 25px; margin-left: 10px; margin-right: 20px; margin-top: 5px; opacity: 0.5;"></i>
                            <!-- Tooltip text -->
                            <span class="tooltiptext">Depois de submeteres o teu CV, aguarda que validemos a submissão para ganhares os pontos que mereces!</span>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="assets/database/update_linkedin.php" class="linkedin-form">
                        <label for="linkedin" class="linkedin">LinkedIn:</label>
                        <div class="submit">
                            <input type="text" name="linkedin" id="linkedin" class="linkedin-input">
                            <button type="submit" class="linkedin-button"><i class="fa-solid fa-square-check" style="color: #3F165B; font-size: 36px;"></i></button>
                        </div>
                    </form>
                </div>
                <div class="linha-titulo-pontos">
                    <div class="rank titulo-roxo" style="font-size: 30px;">POINTS CHECKLIST</div>
                    <div class="tooltip2">
                        <!-- Icon element -->
                        <i class="fa-solid fa-circle-question" style="color: #878787; font-size: 25px; margin-left: 10px; margin-top: 5px; opacity: 0.5;"></i>
                        <!-- Tooltip text -->
                        <span class="tooltiptext">Aqui tens a checklist com todas as atividades que te podem fazer ganhar pontos na Job2Be! Há um prémio para a pessoa que estiver no topo da lista no final da semana 😉</span>
                    </div>
                </div>
                <div class="grid-container">
                    <!-- Repeat this block for each image -->
                    <div class="grid-item">
                        <?php if ($user["abertura"] == 1):?>
                            <img src="assets/img/atividades/abertura-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["abertura"] == 0):?>
                            <img src="assets/img/atividades/abertura.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["p1"] == 1):?>
                            <img src="assets/img/atividades/palestra-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["p1"] == 0):?>
                            <img src="assets/img/atividades/palestra.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["p2"] == 1):?>
                            <img src="assets/img/atividades/palestra-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["p2"] == 0):?>
                            <img src="assets/img/atividades/palestra.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["p3"] == 1):?>
                            <img src="assets/img/atividades/palestra-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["p3"] == 0):?>
                            <img src="assets/img/atividades/palestra.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["p4"] == 1):?>
                            <img src="assets/img/atividades/palestra-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["p4"] == 0):?>
                            <img src="assets/img/atividades/palestra.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["ws1"] == 1):?>
                            <img src="assets/img/atividades/workshop-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["ws1"] == 0):?>
                            <img src="assets/img/atividades/workshop.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["ws2"] == 1):?>
                            <img src="assets/img/atividades/workshop-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["ws2"] == 0):?>
                            <img src="assets/img/atividades/workshop.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["ws3"] == 1):?>
                            <img src="assets/img/atividades/workshop-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["ws3"] == 0):?>
                            <img src="assets/img/atividades/workshop.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["alumni"] == 1):?>
                            <img src="assets/img/atividades/alumni-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["alumni"] == 0):?>
                            <img src="assets/img/atividades/alumni.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["alumni"] == 1):?>
                            <img src="assets/img/atividades/alumni-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["alumni"] == 0):?>
                            <img src="assets/img/atividades/alumni.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["pitch"] == 1):?>
                            <img src="assets/img/atividades/pitch-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["pitch"] == 0):?>
                            <img src="assets/img/atividades/pitch.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["fe_astrolabe"] == 1):?>
                            <img src="assets/img/atividades/astrolabe-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["fe_astrolabe"] == 0):?>
                            <img src="assets/img/atividades/astrolabe.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["fe_teachforportugal"] == 1):?>
                            <img src="assets/img/atividades/teachforportugal-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["fe_teachforportugal"] == 0):?>
                            <img src="assets/img/atividades/teachforportugal.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["fe_ieee"] == 1):?>
                            <img src="assets/img/atividades/ieee-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["fe_ieee"] == 0):?>
                            <img src="assets/img/atividades/ieee.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["fe_aneeb"] == 1):?>
                            <img src="assets/img/atividades/aneeb-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["fe_aneeb"] == 0):?>
                            <img src="assets/img/atividades/aneeb.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["fe_nebm"] == 1):?>
                            <img src="assets/img/atividades/nebm-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["fe_nebm"] == 0):?>
                            <img src="assets/img/atividades/nebm.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["fe_glintt"] == 1):?>
                            <img src="assets/img/atividades/glintt-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["fe_glintt"] == 0):?>
                            <img src="assets/img/atividades/glintt.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["encerramento"] == 1):?>
                            <img src="assets/img/atividades/encerramento-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["encerramento"] == 0):?>
                            <img src="assets/img/atividades/encerramento.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <div class="grid-item">
                        <?php if ($user["cv"] == 1):?>
                            <img src="assets/img/atividades/cv-complete.png" alt="Image 1">
                        <?php endif; ?>
                        <?php if ($user["cv"] == 0):?>
                            <img src="assets/img/atividades/cv.png" alt="Image 1">
                        <?php endif; ?>
                    </div>
                    <!-- Repeat for other images -->
                </div>
            </div>
        </div> 
        <?php include("includes/new_footer.php");?>
    </body>

</html>
