<?php
session_start();

if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/assets/database/database.php";
    $sql = "SELECT * FROM user WHERE id={$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    if ($user['email'] == "admin@gmail.com") {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];

            // Use prepared statement to prevent SQL injection
            $stmt = $mysqli->prepare("SELECT * FROM user WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user_mail = $result->fetch_assoc();

            if ($result->num_rows > 0) {

                if(is_null($user_mail['kit'])){
                    // If the email exists in the database
                    $updateSql = "UPDATE user SET kit = NOW() WHERE email = ?";
                    $stmt = $mysqli->prepare($updateSql);
                    $stmt->bind_param("s", $email);
                    $stmt->execute(); 
                    
                    echo '<p class="mensagem">Sucesso :)</p>';
                }
                else{
                    echo '<p class="mensagem">Este utilizador já levantou o seu kit: ' . $user_mail['kit'] . '</p>';
                }
            } else {
                // If the email does not exist in the database or the 'cv' is already set
                echo '<p class="mensagem"> Este mail não foi encontrado na base de dados :(</p>';
            }
        }
?>

<head>
    <title>Job2Be - Semana da Biomédica</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/styles/style_geral.css">
    <meta charset="UTF-8">
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <style>
        .pagina{
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
        }
        
        .mensagem{
            font-family: 'League Spartan', sans-serif;
            color: #3F165B;
            text-align: center;
            margin: 5px;
        }

        .kit-form {
            display: flex;
            flex-direction: column;
            width: 60%; /* Ensure the form takes full width */
        }

        .titulo-kit {
            margin-right: 5px;
            font-family: 'League Spartan', sans-serif;
            color: #3F165B;
        }

        .input-field{
            display: flex;
        }

        .kit-input {
            width: 100%; /* Ensure the input field expands to full width */
        }

        #email {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            outline: none; /* Remove default outline */
        }

        .titulo{
            margin-top: 150px;
            margin-bottom: 70px;
        }

        .submit-button{
            color: #fff;
            background-color: #3F165B;
            border: none;
            border-radius: 5px;
            margin-left: 8px;
        }

        .submit-button:hover{
            scale: 1.02;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class="pagina">
        <div class="titulo-roxo titulo">Confirmar Entrega de Kit</div>
        <form class="kit-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="email" class="titulo-kit">Email do Participante:</label>
            <div class="input-field">
                <input type="text" name="email" id="email" class="kit-input" required>
                <button type="submit" class="submit-button">SUBMIT</button>
            </div>
        </form>
        
    </div>
</body>
        
<?php
    } else {
        echo '<p style="font-family: \'League Spartan\', sans-serif; color: #3F165B; text-align: center; margin: 20px;">This page is not available for you :)</p>';
    }
}
?>
