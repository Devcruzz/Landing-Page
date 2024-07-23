<?php
// Inicia a sessão se não estiver iniciada
if (!isset($_SESSION)) {
    session_start();
}

// Limpa todas as variáveis de sessão
session_unset();

// Destrói a sessão
session_destroy();

// Redireciona para a página de login (index.php)
header("Location: ../index.php");
exit(); // Encerra o script para garantir que o redirecionamento funcione corretamente
?>
