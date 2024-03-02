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
                <a href="index.php">HOME</a>
                <a href="sobre.php">SOBRE</a>
                <a href="horario.php">HORÁRIO</a>
                <a href="equipa.php">A EQUIPA</a>
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
            <!-- Menu button for small screens -->
            <button class="toggle-button" onclick="toggleDropdown()">☰</button>
            <!-- Dropdown menu -->
            <div class="dropdown_menu" id="dropdownMenu">
                <a href="index.php">HOME</a>
                <a href="sobre.php">SOBRE</a>
                <a href="horario.php">HORÁRIO</a>
                <a href="equipa.php">A EQUIPA</a>
                <div id="login">
                    <?php if (isset($user)):?>
                        <a href="profile-page.php">PERFIL</a>
                    <?php else: ?>
                        <a href="login.php">LOGIN</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Script to toggle the dropdown menu -->
    <script>
        function toggleDropdown() {
            var dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.toggle("open");
        }
    </script>
</body>

