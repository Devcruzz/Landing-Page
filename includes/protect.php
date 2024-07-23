<?php
if (!isset($_SESSION)) {
    session_start();
}

 if (!isset($_SESSION['id'])) {
    die ('<div class="error-message">Você não pode acessar, pois não está logado!!!<p><a href=" ../index.php">Entrar</a></p>');
}
