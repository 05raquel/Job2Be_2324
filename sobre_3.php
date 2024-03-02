<head>
    <link rel="stylesheet" href="assets/styles/style_geral.css">
    <link rel="stylesheet" href="assets/styles/style_sobre.css">
</head>


<body>
    <div class="fundo-roxo">
        <h1 class="titulo-branco"  style="text-align:center">TEMAS DESTE ANO</h1>
        
        <div class="temas">
            <div class="mobilidade" onclick="redirectToLink('./atividades.php#p-mobilidade')"> <a href="">
                <div class="content"> 
                    <h4>Mobilidade Assistida </h4>
                    <p>Da inovação à acessibilidade</p> 
                </div>
            </a>
            </div>
            <div class="eng_tecidos" onclick="redirectToLink('./atividades.php#p-eng_tecidos')">> <a href="">
                <div class="content"> 
                    <h4> R(e)volucionando a engenharia de tecidos</h2>
                    <p>Do cultivo à impressão</p>
                </div>
            </a>
            </div>
            <div class="nova_era_saude" onclick="redirectToLink('./atividades.php#p-nova_era_saude')">> <a href="">
                <div class="content"> 
                    <h4>A Nova Era na Saúde</h4>
                    <p>Wearables & Telemonitorização</p>
                </div>
            </a>
            </div>
            <div class="ia_saude" onclick="redirectToLink('./atividades.php#p-ia_saude')">> <a href="">
                <div class="content"> 
                    <h4> Inteligência Artificial</h4>
                    <p>No setor da Saúde</p>
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