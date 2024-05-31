<!DOCTYPE html>
<html lang="en">
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
        <div class="title">
            Cadastro de Pet
        </div>
        <div class="form-group">
            <div class="pet-image">
            </div>
            <div class="form-content">
                <form method="post">
                    Nome do Pet<br>
                    <input type="text" name="pet-name">
                    <br><br>
                    Nome do Dono<br>
                    <input type="text" name="owner-name">
                    <br><br>
                    Tipo de animal<br>
                    <input type="radio" name="animal-type" value="dog"> Cachorro <br>
                    <input type="radio" name="animal-type" value="cat"> Gato <br>
                    <input type="radio" name="animal-type" value="bird"> Pássaro <br>
                    <input type="radio" name="animal-type" value="other"> Outro <br>
                    <br>
                    Descrição do problema<br>
                    <input type="text" name="desc" cols="40" rows="2">
                    <br><br>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>

        <?php 
            session_start();
            $pet_name = "";
            if(isset($_POST["submit"])){
                $_SESSION["pet_name"] = $_POST["pet-name"];
                $_SESSION["owner_name"] = $_POST["owner-name"];
                $_SESSION["animal_type"] = $_POST["animal-type"];
                $_SESSION["pet_problem"] = $_POST["desc"];
                header("Location: data-output.php"); //manda o valor da variavel para a outra pagina
            }
        ?>

    </div>
</body>
</html>