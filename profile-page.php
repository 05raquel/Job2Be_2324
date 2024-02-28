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
        <style>
            @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,400,400italic,600,600italic,700,700italic");
            @import url("https://fonts.googleapis.com/css?family=League+Spartan:wght@300,300i,400,400i,600,600i,700,700i&display=swap");
            @import url('https://fonts.googleapis.com/css2?family=Oswald');
            
            .pessoal{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
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
            }

            li{
                padding: 3px;
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
                <?php
                    $sql = 'SELECT * FROM user WHERE email!="admin@gmail.com" ORDER BY points DESC';
                    $result = $mysqli->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<ul>";

                        while ($row = $result->fetch_assoc()) {
                            echo "<li>{$row['user']} - {$row['points']}</li>";
                        }

                        echo "</ul>";
                    } else {
                        echo "No users found.";
                    }
                ?>
            </div>
        </div>

        <h1>Home</h1>
        <?php if (isset($user)):?>

            <button data-tally-open="3qV06G" data-tally-width="400" data-tally-hide-title="1" data-tally-auto-close="1000">Click me</button>
            <button>ola</button>
            <p>Hello, <?= htmlspecialchars($user["user"])?></p>
            <a href="assets/database/logout.php">Log Out</a>           
            <form method="post" action="assets/database/update_description.php">
                <label for="description">Update Description:</label>
                <input type="text" name="description" id="description">
                <button type="submit">Submit</button>
            </form>
            <?php if (!empty($user['descricao'])): ?>
                <p>Description: <?= htmlspecialchars($user['descricao']) ?></p>
            <?php endif; ?>
            <!-- Add a button to update the workshops field -->
            <form method="post" action="assets/database/update_workshops.php">
                <button type="submit" name="update_workshops">Update Workshops</button>
            </form>
            <form method="post" action="assets/database/update_linkedin.php">
                <label for="linkedin">Update LinkedIn:</label>
                <input type="text" name="linkedin" id="linkedin">
                <button type="submit">Submit</button>
            </form>
            <!-- Display workshops based on the user's workshops field -->
            <?php
            $workshops_array = [
                "workshop1",
                "workshop2",
                "workshop3"
            ];

            $workshop_ids = array_map('intval', explode(',', $user['workshops']));
            foreach ($workshop_ids as $workshop_id) {
                $workshop_info = $workshops_array[$workshop_id];
                if ($workshop_info) {
                    echo "<p>{$workshop_info}</p>";
                }
            }
            ?>
            
            <?php
            $sql = 'SELECT * FROM user ORDER BY points DESC';
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                echo "<h2>Users Sorted by Points</h2>";
                echo "<ul>";

                while ($row = $result->fetch_assoc()) {
                    echo "<li>{$row['user']} - Points: {$row['points']}</li>";
                }

                echo "</ul>";
            } else {
                echo "No users found.";
            }
            ?>

        <?php else: ?>
            <p><a href="login.php">Log In</a> or <a href="signup.html">Sign Up</a>.</p>
        <?php endif; ?>

        

        <?php include("includes/new_footer.php");?>
    </body>

</html>
