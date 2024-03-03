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
    <link rel="stylesheet" href="assets/styles/style_equipa.css">
</head>

<body>
    <?php include("includes/new_menu.php");?>
    <div id="presi">
        <div class="titulo-branco" id="presi">PRESIDÊNCIA</div>
        <div class="elementos">
            <div class="andrePestana">
                <div class="pessoa">
                    <h2 class="name">André Pestana</h2>
                </div>
            </div>
            <div class="danielaFerreira">
                <div class="pessoa">
                    <h2 class="name">Daniela Ferreira</h2>
                </div>
            </div>
            <div class="martaAlves">
                <div class="pessoa">
                    <h2 class="name">Marta Alves</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="cientifico">
        <div class="titulo-barra">
            <div class="titulo-branco">DEPARTAMENTO CIENTÍFICO</div>
        </div>
        <div class="pessoas-row">
            <div class="coordenadora">
                <div class="titulo-branco-pequeno">Coordenadora</div>
                <div class="coord leticiaSousa">
                    <div class="pessoa-coord">
                        <div class="rowIcons">
                            
                        </div>
                        <h2 class="name">Letícia Sousa</h2>
                    </div>
                </div>
            </div>
            <div class="colaboradores">
                <div class="titulo-roxo-pequeno">Colaboradores</div>
                <div class="elementos" id="cientifico2">
                    <div class="afonsoCarvalho">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Afonso Carvalho</h2>
                        </div>
                    </div>
                    <div class="beatrizCoutinho">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Beatriz Coutinho</h2>
                        </div>
                    </div>
                    <div class="sofiaCosta">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Sofia Costa</h2>
                        </div>
                    </div>
                    <div class="leonorCaldeira">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Leonor Caldeira</h2>
                        </div>
                    </div>
                    <div class="brunoMassano">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Bruno Massano</h2>
                        </div>
                    </div>
                    <div class="franciscoSilva">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Francisco Silva</h2>
                        </div>
                    </div>
                    <div class="rodrigoCarago">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Rodrigo Carago</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="imagem">
        <div class="titulo-barra">
            <div class="titulo-branco">DEPARTAMENTO DE IMAGEM</div>
        </div>
        <div class="pessoas-row">
            <div class="coordenadora">
                <div class="titulo-branco-pequeno">Coordenadora</div>
                <div class="coord beatrizMartins">
                    <div class="pessoa-coord">
                        <div class="rowIcons">
                            
                        </div>
                        <h2 class="name">Beatriz Martins</h2>
                    </div>
                </div>
            </div>
            <div class="colaboradores">
                <div class="titulo-roxo-pequeno">Colaboradores</div>
                <div class="elementos" id="imagem2">
                    <div class="goncaloMonteiro">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Gonçalo Monteiro</h2>
                        </div>
                    </div>
                    <div class="carlotaMontes">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Carlota Montes</h2>
                        </div>
                    </div>
                    <div class="mariaCoutinho">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Maria Coutinho</h2>
                        </div>
                    </div>
                    <div class="mariaPita">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Maria Pita</h2>
                        </div>
                    </div>
                    <div class="inesMabutana">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Inês Mabutana</h2>
                        </div>
                    </div>
                    <div class="martinaMachado">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Martina Machado</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="informatica">
        <div class="titulo-barra">
            <div class="titulo-branco">DEPARTAMENTO DE INFORMÁTICA</div>
        </div>
        <div class="pessoas-row">
            <div class="coordenadora">
                <div class="titulo-branco-pequeno">Coordenadora</div>
                <div class="coord raquelCoelho">
                    <div class="pessoa-coord">
                        <div class="rowIcons">
                            
                        </div>
                        <h2 class="name">Raquel Coelho</h2>
                    </div>
                </div>
            </div>
            <div class="colaboradores">
                <div class="titulo-roxo-pequeno">Colaboradores</div>
                <div class="elementos" id="informatica2">
                    <div class="anaAlfaiate">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Ana Alfaiate</h2>
                        </div>
                    </div>
                    <div class="saraCoelho">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Sara Coelho</h2>
                        </div>
                    </div>
                    <div class="inesSantos">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Inês Santos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="logistica">
        <div class="titulo-barra">
            <div class="titulo-branco">DEPARTAMENTO DE LOGÍSTICA</div>
        </div>
        <div class="pessoas-row">
            <div class="coordenadora">
                <div class="titulo-branco-pequeno">Coordenadora</div>
                <div class="coord mafaldaAleixo">
                    <div class="pessoa-coord">
                        <div class="rowIcons">
                            
                        </div>
                        <h2 class="name">Mafalda Aleixo</h2>
                    </div>
                </div>
            </div>
            <div class="colaboradores">
                <div class="titulo-roxo-pequeno">Colaboradores</div>
                <div class="elementos" id="logistica2">
                    <div class="anaCampos">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Ana Campos</h2>
                        </div>
                    </div>
                    <div class="catarinaFreitas">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Catarina Freitas</h2>
                        </div>
                    </div>
                    <div class="margaridaNunes">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Margarida Nunes</h2>
                        </div>
                    </div>
                    <div class="matildeFonseca">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Matilde Fonseca</h2>
                        </div>
                    </div>
                    <div class="marianaAzevedo">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Mariana Azevedo</h2>
                        </div>
                    </div>
                    <div class="monicaAlmeida">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Mónica Almeida</h2>
                        </div>
                    </div>
                    <div class="pedroMarques">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Pedro Marques</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="parcerias">
        <div class="titulo-barra">
            <div class="titulo-branco">DEPARTAMENTO DE PARCERIAS</div>
        </div>
        <div class="pessoas-row">
            <div class="coordenadora">
                <div class="titulo-branco-pequeno">Coordenadora</div>
                <div class="coord ritaNunes">
                    <div class="pessoa-coord">
                        <div class="rowIcons">
                            
                        </div>
                        <h2 class="name">Rita Nunes</h2>
                    </div>
                </div>
            </div>
            <div class="colaboradores">
                <div class="titulo-roxo-pequeno">Colaboradores</div>
                <div class="elementos" id="parcerias2">
                    <div class="cesarRosa">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Mateus Rosa</h2>
                        </div>
                    </div>
                    <div class="antonioGameiro">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">António Gameiro</h2>
                        </div>
                    </div>
                    <div class="inesReis">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Inês Reis</h2>
                        </div>
                    </div>
                    <div class="marianaFerreira">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Mariana Ferreira</h2>
                        </div>
                    </div>
                    <div class="davidLopes">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">David Lopes</h2>
                        </div>
                    </div>
                    <div class="rodrigoCosta">
                        <div class="pessoa">
                            <div class="rowIcons">
                                
                            </div>
                            <h2 class="name">Rodrigo Costa</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/new_footer.php");?>

    <script>
        function scrollHorizontally(event, container) {
            var delta = Math.max(-1, Math.min(1, (event.wheelDelta || -event.detail)));
            container.scrollLeft -= (delta * 70); // Adjust scrolling speed
            event.preventDefault();
        }

        document.getElementById('cientifico2').addEventListener('wheel', function(event) {
            scrollHorizontally(event, this);
        });
        document.getElementById('imagem2').addEventListener('wheel', function(event) {
            scrollHorizontally(event, this);
        });
        document.getElementById('informatica2').addEventListener('wheel', function(event) {
            scrollHorizontally(event, this);
        });
        document.getElementById('logistica2').addEventListener('wheel', function(event) {
            scrollHorizontally(event, this);
        });
        document.getElementById('parcerias2').addEventListener('wheel', function(event) {
            scrollHorizontally(event, this);
        });
    </script>
</body>