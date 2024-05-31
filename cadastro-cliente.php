<?php
    session_start();

    $name_error = $email_error = $address_error = $phone_error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $client_name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $phone_number = $_POST["phone"];

        if(empty($client_name)){
            $name_error = "Campo obrigatório";
        }
        else if(empty($email)){
            $email_error = "Campo obrigatório";
        }
        else if(empty($address)){
            $address_error = "Campo obrigatório";
        }
        else if(empty($phone_number)){
            $phone_error = "Campo obrigatório";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_error = "Formato de email inválido";
        }
        else{
            $_SESSION["client_name"] = $client_name;
            $_SESSION["email"] = $email;
            $_SESSION["address"] = $address;
            $_SESSION["phone_number"] = $phone_number;
            header("Location: cadastro-pet.php"); //manda o valor da variavel para a outra pagina
        }
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
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
                    *Campo obrigatório<br><br>
                    Nome*
                    <?php
                        echo " ", $name_error;
                    ?><br>
                    <input type="text" name="name">
                    <br><br>
                    Email*
                    <?php 
                        echo " ", $email_error;
                    ?><br>
                    <input type="text" name="email">
                    <br><br>
                    Endereço*
                    <?php 
                        echo " ", $address_error;
                    ?><br>
                    <input type="text" name="address">
                    <br><br>
                    Telefone*
                    <?php 
                        echo " ", $phone_error;
                    ?><br>
                    <input type="text" name="phone">
                    <br><br>
                    <input type="submit" name="submit" value="Próximo">
                </form>
            </div>
        </div>
    </div>
</body>
</html>