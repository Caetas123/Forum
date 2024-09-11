<?php

$servename = "localhost";
$username = "root";
$password = "";
$dbname = "fórum";

// Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="css/login.css" rel="stylesheet">
</head>

<body>
    <h1 class="register center">Cadastro Pessoal</h1>
    <a href="index.html ">
        <button id="back" class="back">
            <img src="img/seta.png" alt="back">
        </button>
    </a>
    <hr class="line">
    <div class="form">
        <form>
            <fieldset>
                <div>
                <label for="name">Nome:</label>
                <input class="labelinput" type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input class="labelinput" type="email" id="email" name="email" required>
                <label for="cpf">CPF:</label>
                <input class="labelinput" type="text" id="cpf" name="cpf" required maxlength="11">
                <label for="address">Endereço:</label>
                <input class="labelinput" type="text" id="address" name="address" required>
                <label for="">Senha:</label>
                <input class="labelinput" type="text" id="password" name="password" required>
                <input class="submit" type="submit" value="Enviar">
            </fieldset>
        </form>
    </div>

    <script src="login.js"></script>
</body>

</html>
