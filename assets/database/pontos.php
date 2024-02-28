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

if (isset($_SESSION["user_id"]) && isset($_POST['ws1'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['ws1'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 10, ws1 = 1 WHERE id = $user_id";
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
if (isset($_SESSION["user_id"]) && isset($_POST['ws2'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['ws2'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 10, ws2 = 1 WHERE id = $user_id";
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

if (isset($_SESSION["user_id"]) && isset($_POST['ws3'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['ws3'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 10, ws3 = 1 WHERE id = $user_id";
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

if (isset($_SESSION["user_id"]) && isset($_POST['alumni'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['alumni'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 20, alumni = 1 WHERE id = $user_id";
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

if (isset($_SESSION["user_id"]) && isset($_POST['fe_accenture'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['fe_accenture'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 10, fe_accenture= 1 WHERE id = $user_id";
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


if (isset($_SESSION["user_id"]) && isset($_POST['fe_astrolabe'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['fe_astrolabe'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 10, fe_astrolabe= 1 WHERE id = $user_id";
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

if (isset($_SESSION["user_id"]) && isset($_POST['fe_glintt'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['fe_glintt'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 10, fe_glintt= 1 WHERE id = $user_id";
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

if (isset($_SESSION["user_id"]) && isset($_POST['fe_teachforportugal'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['fe_teachforportugal'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 10, fe_teachforportugal= 1 WHERE id = $user_id";
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

if (isset($_SESSION["user_id"]) && isset($_POST['fe_ieee'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['fe_ieee'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 10, fe_ieee= 1 WHERE id = $user_id";
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


if (isset($_SESSION["user_id"]) && isset($_POST['fe_junitec'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['fe_junitec'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 10, fe_junitec= 1 WHERE id = $user_id";
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

if (isset($_SESSION["user_id"]) && isset($_POST['fe_aneeb'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['fe_aneeb'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 10, fe_aneeb= 1 WHERE id = $user_id";
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

if (isset($_SESSION["user_id"]) && isset($_POST['fe_nebm'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['fe_nebm'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 10, fe_nebm= 1 WHERE id = $user_id";
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

// pitch

if (isset($_SESSION["user_id"]) && isset($_POST['pitch'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['pitch'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 30, pitch = 1 WHERE id = $user_id";
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
//abertura
if (isset($_SESSION["user_id"]) && isset($_POST['abertura'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['abertura'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 10, abertura = 1 WHERE id = $user_id";
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

// fecho
if (isset($_SESSION["user_id"]) && isset($_POST['encerramento'])) {
    $mysqli = require __DIR__ . "/database.php";
    $user_id = $_SESSION["user_id"];

    // Fetch the current workshops field value
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = $mysqli->query($sql);

    // Verifica se a consulta teve resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica se p1 é igual a 0
        if ($row['encerramento'] == 0) {
            // Atualiza os pontos e o valor de p1
            $sql_update = "UPDATE user SET points = points + 10, encerramento = 1 WHERE id = $user_id";
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
