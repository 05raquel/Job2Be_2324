<?php
session_start();

if (isset($_SESSION["user_id"]) && isset($_POST['p1'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['p1'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 30, p1 = 1 WHERE id = $user_id";
            $update_result = $mysqli->query($sql_update);

            if ($update_result) {
                // Atualização bem-sucedida
                echo "Pontos atualizados com sucesso!";
            } else {
                // Se houver um erro na atualização
                echo "Erro ao atualizar pontos: " . $mysqli->error;
            }
        } else {
            // Se p1 não for 0, pode executar outra ação, se necessário
            echo "já validaste esta atividade";
        }
    } else {
        // Se a consulta não retornar resultados
        echo "Nenhum usuário encontrado com o ID fornecido.";
    }

    // Fechar a conexão
    header("Location: ../../profile-page.php");
    $mysqli->close();
    
    exit;
} else {
    // Se o ID do usuário não estiver definido na sessão ou se 'p1' não estiver definido em POST
    echo "Dados de sessão ou POST incompletos.";
}

if (isset($_SESSION["user_id"]) && isset($_POST['p2'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['p2'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 30, p2 = 1 WHERE id = $user_id";
            $update_result = $mysqli->query($sql_update);

            if ($update_result) {
                // Atualização bem-sucedida
                echo "Pontos atualizados com sucesso!";
            } else {
                // Se houver um erro na atualização
                echo "Erro ao atualizar pontos: " . $mysqli->error;
            }
        } else {
            // Se p1 não for 0, pode executar outra ação, se necessário
            echo "já validaste esta atividade";
        }
    } else {
        // Se a consulta não retornar resultados
        echo "Nenhum usuário encontrado com o ID fornecido.";
    }

    // Fechar a conexão
    header("Location: ../../profile-page.php");
    $mysqli->close();
    
    exit;
} else {
    // Se o ID do usuário não estiver definido na sessão ou se 'p1' não estiver definido em POST
    echo "Dados de sessão ou POST incompletos.";
}

if (isset($_SESSION["user_id"]) && isset($_POST['p3'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['p3'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 30, p3 = 1 WHERE id = $user_id";
            $update_result = $mysqli->query($sql_update);

            if ($update_result) {
                // Atualização bem-sucedida
                echo "Pontos atualizados com sucesso!";
            } else {
                // Se houver um erro na atualização
                echo "Erro ao atualizar pontos: " . $mysqli->error;
            }
        } else {
            // Se p1 não for 0, pode executar outra ação, se necessário
            echo "já validaste esta atividade";
        }
    } else {
        // Se a consulta não retornar resultados
        echo "Nenhum usuário encontrado com o ID fornecido.";
    }

    // Fechar a conexão
    header("Location: ../../profile-page.php");
    $mysqli->close();
    
    exit;
} else {
    // Se o ID do usuário não estiver definido na sessão ou se 'p1' não estiver definido em POST
    echo "Dados de sessão ou POST incompletos.";
}

if (isset($_SESSION["user_id"]) && isset($_POST['p4'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['p4'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 30, p4 = 1 WHERE id = $user_id";
            $update_result = $mysqli->query($sql_update);

            if ($update_result) {
                // Atualização bem-sucedida
                echo "Pontos atualizados com sucesso!";
            } else {
                // Se houver um erro na atualização
                echo "Erro ao atualizar pontos: " . $mysqli->error;
            }
        } else {
            // Se p1 não for 0, pode executar outra ação, se necessário
            echo "já validaste esta atividade";
        }
    } else {
        // Se a consulta não retornar resultados
        echo "Nenhum usuário encontrado com o ID fornecido.";
    }

    // Fechar a conexão
    header("Location: ../../profile-page.php");
    $mysqli->close();
    
    exit;
} else {
    // Se o ID do usuário não estiver definido na sessão ou se 'p1' não estiver definido em POST
    echo "Dados de sessão ou POST incompletos.";
}

?>
