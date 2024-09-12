<?php

// Dados do Banco de Dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forum";

// Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

//iniciar conexao com o banco de dados
session_start();

// Processa o formulário quando enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Criptografa a senha
    $cpf = $_POST['cpf'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Insere as informações no banco de dados
    $sql = "INSERT INTO cadastro (name, email, cpf, password, address, phone) VALUES ('$name', '$email', '$cpf', '$password',  '$address', '$phone')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Usuário registrado com sucesso. <a href='login.php'>Clique aqui para fazer login.</a></p>";
    } else {
        echo "<p>Erro ao registrar usuário: " . $conn->error . "</p>";
    }
}

// Fecha a conexão com o banco de dados
$conn->close();

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
    <h1 class="register">Cadastro Pessoal</h1>
    <a href="index.html ">
        <button id="back" class="back">
            <img src="img/seta.png" alt="back">
        </button>
    </a>
    
    <hr class="line">

    <div class="form">
        <form action = 'login.php' method = 'post'>
            <fieldset class = box>
                <label for="name">Nome:</label>
                <input class="labelinput" type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input class="labelinput" type="email" id="email" name="email" required>

                <label for="cpf">CPF:</label>
                <input class="labelinput" type="text" id="cpf" name="cpf" required maxlength = 14>

                <label for="phone">Telefone:</label>
                <input class="labelinput" type="phone" id="phone" name="phone" required maxlength = 19>

                <label for="address">Endereço:</label>
                <input class="labelinput" type="text" id="address" name="address" required>

                <label for="password">Senha:</label>
                <input class="labelinput" type="text" id="password" name="password" required>
                
                <input class = submit type="submit" value = 'Enviar'>
            
            </fieldset>
        </form>
    </div>
    
    <script src ="js/login.js"></script>
</body>

</html>
