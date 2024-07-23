<?php 
session_start(); // Inicia a sessão

include_once "config/conn.php";
include_once "includes/header.php";

// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Verifica se o campo Email está vazio
    if (strlen($_POST["Email"]) == 0) {
        $_SESSION['error_message'] = "Preencha seu e-mail";
    } 
    // Verifica se o campo Senha está vazio
    else if (strlen($_POST["Password"]) == 0) {
        $_SESSION['error_message'] = "Preencha sua senha";
    } 
    else {
        // Escapa os dados recebidos do formulário para evitar SQL Injection
        $email = $mysqli->real_escape_string($_POST["Email"]);
        $senha = $mysqli->real_escape_string($_POST["Password"]);

        // Monta a query SQL para selecionar usuário com o email e senha fornecidos
        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha';";
        
        // Executa a query SQL no banco de dados
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução: " . $mysqli->error); 

        // Verifica se encontrou exatamente um usuário com o email e senha fornecidos
        $qtd = $sql_query->num_rows;

        if ($qtd == 1) {
            // Obtém os dados do usuário encontrado
            $usuario = $sql_query->fetch_assoc();

        // Define variáveis de sessão com os dados do usuário
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['senha'] = $usuario['senha'];
            $_SESSION['nivel_acesso'] = $usuario['nivel_acesso'];

            // Redireciona o usuário para a página apropriada com base no nível de acesso
            if ($usuario['nivel_acesso'] == 'admin') {
                header("Location: pages/admin_page.php");
                exit();
            } elseif ($usuario['nivel_acesso'] == 'user') {
                header("Location: pages/user_page.php");
                exit();
            }
        } else {
            // Mensagem de erro caso não encontre usuário com o email e senha fornecidos
            $_SESSION['error_message'] = "Falha ao logar, e-mail ou senha incorretos!";
        }
    }

    // Redireciona de volta ao formulário
    header("Location: index.php");
    exit();
}
?>
<body>
    <div class="container">
        <h1 id="heading">Entrar</h1>

        <?php         
        if (isset($_SESSION['error_message'])) {
            echo "<div class='error'>" . $_SESSION['error_message'] . "</div>";
            unset($_SESSION['error_message']);         
            }         
        ?>

        <form action="" method="post">
            <div class="style_forms">
                <input type="email" name="Email" placeholder="Email" required>
            </div>

            <div class="style_forms">
                <input type="password" name="Password" placeholder="Password" required>
            </div>

            <input type="submit" value="Entrar" class="submit">
        </form>
    </div>
</body>
</html>

<?php
include_once "includes/footer.php";
?>
