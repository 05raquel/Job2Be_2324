<head>
    <link rel="stylesheet" href="assets/styles/style_geral.css">
    <link rel="stylesheet" href="assets/styles/style_index_4.css">
</head>

<body>
    <div class="fundo-branco">
        <h1 class="titulo-roxo">VEM CONHECER-NOS!</h1>
        <div class="fotos-equipas" onwheel="scrollHorizontally(event)">
            <a href="./equipa.php#presi"><div class="presi"><div class="over-presi"></div></div></a>
            <a href="./equipa.php#cientifico"><div class="cientifico"><div class="over-cientifico"></div></div></a>
            <a href="./equipa.php#imagem"><div class="imagem"><div class="over-imagem"></div></div></a>
            <a href="./equipa.php#informatica"><div class="informatica"><div class="over-informatica"></div></div></a>
            <a href="./equipa.php#logistica"><div class="logistica"><div class="over-logistica"></div></div></a>
            <a href="./equipa.php#parcerias"><div class="parcerias"><div class="over-parcerias"></div></div></a>
        </div>
    </div>

    <script>
        function scrollHorizontally(event) {
            var delta = Math.max(-1, Math.min(1, (event.wheelDelta || -event.detail)));
            document.querySelector('.fotos-equipas').scrollLeft -= (delta * 70); // Adjust scrolling speed
            event.preventDefault();
        }
    </script>
</body>