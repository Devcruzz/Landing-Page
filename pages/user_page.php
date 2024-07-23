<?php
    include_once '../includes/protect.php';


    if (!isset($_SESSION)) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="../css/alternative.css">
</head>
<body class="user">

    <header class="header_user">
        <h1>Project Landing Page</h1>
        <a href="logout.php" class="logout-btn">Sair</a>
    </header>

    <div class="container-user">
        <h2>OLÁ SEJA BEM VINDO <?php echo $_SESSION['nome']?></h2>
    	<p>SEU NÍVEL DE ACESSO É: <?php echo $_SESSION['nivel_acesso'];?></p>
    </div>

</body>
</html>

<?php
include_once '../includes/footer.php';
?>