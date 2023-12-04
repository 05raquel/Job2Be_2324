

<!-- https://www.youtube.com/watch?v=GdrbE-s5DgQ -->

<head>
    <link rel="stylesheet" href="assets/styles/style_menu.css">
</head>
<body>
    <div class="new_menu">
        <div class="navbar">

            <div>
                <a href="index.php"><img id="logo" src="assets/img/logo-branco.png"></a>
            </div>

            <div class="links">

                <a href="sobre.php">SOBRE</a>
                <a href="horario.php">HORÁRIO</a>
                <a href="equipa.php">A EQUIPA</a>
                <a href="contactos.php">CONTACTOS</a>
                <div id="login">
                    <?php if (isset($user)):?>
                        <div class="item">
                                <a href="profile-page.php"> <button class="menu-button">PERFIL</button> </a>
                        </div>
                    <?php else: ?>
                        <div class="item">
                                <a href="login.php"> <button class="menu-button">LOGIN</button> </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</body>

