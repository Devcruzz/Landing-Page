<?php
include_once "../config/conn.php";
include_once '../includes/protect.php';


if (!isset($_SESSION)) {
    session_start();
}

$btncaduser = filter_input(INPUT_POST, "btncaduser", FILTER_SANITIZE_STRING);

if ($btncaduser) {
    // echo "cadastrar";

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    // var_dump($dados);

     // Criptografar a senha
    $senha_criptografada = password_hash($dados["senha"], PASSWORD_DEFAULT);

    // Corrigir a consulta SQL
    $result_usuario = "INSERT INTO usuario (nome, email, senha, nivel_acesso) VALUES (
        '".$mysqli->real_escape_string($dados["nome"])."',
        '".$mysqli->real_escape_string($dados["email"])."',
        '".$mysqli->real_escape_string($senha_criptografada)."',
        '".$mysqli->real_escape_string($dados["nivel_acesso"])."'
    )";

    // Executar a consulta
    if ($mysqli->query($result_usuario)) {
        $_SESSION['success_message'] = "Novo usuário cadastrado com sucesso.";

    } else {
        echo "Erro: " . mysqli_error($mysqli);
    }

    // Fechar a conexão
    $mysqli->close();

    header("Location: ../index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/alternative.css">
</head>

<body class="create_user_body">
    <div class="heading_createuser">
        <h3>CADASTRAR NOVO USUÁRIO</h3>
    </div>
       <?php         
        if (isset($_SESSION['error_message'])) {
            echo "<div class='error'>" . $_SESSION['error_message'] . "</div>";
            unset($_SESSION['error_message']);         
            }         
        ?>
        <form action="" method="post">
            <div class="form_container">
                <label>Nome</label>  
                <input type="text" name="nome" placeholder="Digite o nome e o sobrenome" class="input_type">
                
                <div class="input_box">
                    <label>E-mail</label>
                    <input type="text" name="email" placeholder="Digite o seu e-mail" class="input_type">
                </div>
                <div class="input_box">
                    <label for="nivel_acesso">Nível de Acesso:</label>
                    <select id="nivel_acesso" name="nivel_acesso" required>
                        <option value="" disabled selected>Escolha um nível</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                </div>
            
                <div class="input_box">
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Digite a senha" class="input_type">
                </div>

                <input type="submit" name="btncaduser" value="Cadastrar" id="submit_bot">
                
                <p>Lembrou?<p>
                <a href="../index.php">Clique aqui</a> para logar
            </div>
        </form>
</body>