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

            if ($result->num_rows > 0 && $user_mail['cv'] == 0) {
                // If the email exists in the database
                $updateSql = "UPDATE user SET cv = 1, points = points + 40 WHERE email = ?";
                $stmt = $mysqli->prepare($updateSql);
                $stmt->bind_param("s", $email);
                $stmt->execute();

                echo "User's CV has been updated and points increased by 10.";
            } else {
                // If the email does not exist in the database
                echo "Email not found in the database.";
            }
        }
?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required>
            <button type="submit">Submit</button>
        </form>
<?php
    } else {
        echo "This page is not available for you :)";
    }
}
?>