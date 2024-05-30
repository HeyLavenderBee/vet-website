<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <div class="header">
        <div class="left-side">
            <a href="index.php"><div class="logo"></div></a>
        </div>
    </div>

    <div class="main">
        <div class="title">
            Cadastro de Cliente
        </div>
        <div class="form-group">
            <div class="human-image">
            </div>
            <div class="form-content">
                <form method="post">
                    Nome<br>
                    <input type="text" name="name">
                    <br><br>
                    Email<br>
                    <input type="text" name="email">
                    <br><br>
                    Endereço<br>
                    <input type="text" name="address">
                    <br><br>
                    Telefone<br>
                    <input type="text" name="phone">
                    <br><br>
                    <input type="submit" name="submit" value="Próximo">
                </form>
            </div>
        </div>

        <?php
            session_start();
            $client_name = "";
            echo $client_name;
            if(isset($_POST["submit"])){
                $_SESSION["client_name"] = $client_name = $_POST["name"];
                $_SESSION["email"] = $email = $_POST["email"];
                $_SESSION["address"] = $address = $_POST["address"];
                $_SESSION["phone_number"] = $phone_number = $_POST["phone"];
                header("Location: cadastro-pet.php"); //manda o valor da variavel para a outra pagina
            }
        ?>

    </div>
</body>
</html>