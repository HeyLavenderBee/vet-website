<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Página Inicial</title>
</head>
<body>
    <div class="header">
        <div class="left-side">
            <a href="index.php"><div class="logo"></div></a>
        </div>
        <div class="right-side">
            <a href="cadastro-cliente.php">Cadastro</a>
            <a href="#">Login</a>
        </div>
    </div>
    <div class="home-image">
        <div class="image"></div>
        <div class="right-side">
            texto texto
        </div>
    </div>
    <div class="main">
        <?php
        session_start();
        echo $_SESSION["client_name"];
        echo $_SESSION["email"];
        echo $_SESSION["address"];
        echo $_SESSION["phone_number"];
        ?>
    </div>
    
</body>
</html>