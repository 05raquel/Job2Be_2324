<head>
    <link rel="stylesheet" href="assets/styles/style_geral.css">
    <link rel="stylesheet" href="assets/styles/style_index.css">
</head>

<body>
    <div class="fundo-roxo">
        <h1 class="titulo-branco" style="text-align:right; padding-right: inherit;">ATIVIDADES</h1>
        <div class="atividades">
            <div class="palestra" onclick="redirectToLink('./atividades.php#palestra')"> <a href="">
                <div class="content"> 
                    <h4>PALESTRAS</h4>
                </div>
            </a>
            </div>
            <div class="workshop" onclick="redirectToLink('./atividades.php#workshop')"> <a href="">
                <div class="content"> 
                    <h4>WORKSHOPS</h4>
                </div>
            </a>
            </div> 
            <div class="pitch" onclick="redirectToLink('./atividades.php#pitch')"> <a href="">
                <div class="content"> 
                    <h4>PITCH</h4>
                </div>
            </a>
            </div>
            <div class="feira_e" onclick="redirectToLink('./atividades.php#feira-empresas')"> <a href="">
                <div class="content"> 
                    <h4>FEIRA DE EMPRESAS</h4>
                </div>
            </a>
            </div>
            <div class="alumni" onclick="redirectToLink('./atividades.php#alumni')"> <a href="">
                <div class="content"> 
                    <h4>ALUMNI SESSION</h4>
                </div>
            </a>
            </div>
        </div>

    </div>

    <script>
        function redirectToLink(link) {
            // Change window location to the desired link
            window.location.href = link;
        }
    </script>
    
</body>