<?php
    session_start();

    $pet_name_error = $owner_name_error = $animal_type_error = $problem_error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pet_name = $_POST["pet-name"];
        $owner_name = $_POST["owner-name"];
        $animal_type = $_POST["animal-type"];
        $pet_problem = $_POST["desc"];

        if(empty($pet_name)){
            $pet_name_error = "Campo obrigatório";
        }
        else if(empty($owner_name)){
            $owner_name_error = "Campo obrigatório";
        }
        else if(empty($animal_type)){
            $animal_type_error = "Campo obrigatório";
        }
        else if(empty($pet_problem)){
            $problem_error = "Campo obrigatório";
        }
        else{
            $_SESSION["pet_name"] = $pet_name;
            $_SESSION["owner_name"] = $owner_name;
            $_SESSION["animal_type"] = $animal_type;
            $_SESSION["pet_problem"] = $pet_problem;
            header("Location: data-output.php"); //manda o valor da variavel para a outra pagina
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
    <title>Cadastro de Pet</title>
</head>
<body>
    <div class="header">
        <div class="left-side">
            <a href="index.php"><div class="logo"></div></a>
        </div>
    </div>

    <div class="main">
        <a href="cadastro-cliente.php"><button>Voltar</button></a>
        <div class="title">
            Cadastro de Pet
        </div>
        <div class="form-group">
            <div class="pet-image">
            </div>
            <div class="form-content">
                <form method="post">
                    *Campo obrigatório<br><br>
                    Nome do Pet*
                    <?php
                        echo " ", $pet_name_error;
                    ?><br>
                    <input type="text" name="pet-name">
                    <br><br>
                    Nome do Dono*
                    <?php
                        echo " ", $owner_name_error;
                    ?><br>
                    <input type="text" name="owner-name">
                    <br><br>
                    Tipo de animal*
                    <?php
                        echo " ", $animal_type_error;
                    ?><br>
                    <input type="radio" name="animal-type" value="Cachorro"> Cachorro <br>
                    <input type="radio" name="animal-type" value="Gato"> Gato <br>
                    <input type="radio" name="animal-type" value="Passáro"> Pássaro <br>
                    <input type="radio" name="animal-type" value="Outro"> Outro <br>
                    <br>
                    Descrição do problema*
                    <?php
                        echo " ", $problem_error;
                    ?><br>
                    <input type="text" name="desc" cols="40" rows="2">
                    <br><br>
                    <input type="submit" name="submit" value="Terminar cadastro">
                </form>
            </div>
        </div>
    </div>
</body>
</html>