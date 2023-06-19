<?php
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    // Verificar se o nome de login já está em uso
    $verificarLogin = "SELECT * FROM login WHERE login = '$login'";
    $resultado = mysqli_query($conexao, $verificarLogin);

    if (mysqli_num_rows($resultado) > 0) {
        echo "O nome de login '$login' já está em uso. Por favor, escolha outro.";
    } else {
        $insert = "INSERT INTO login (nome, login, senha) VALUES ('$nome', '$login', '$senha')";
        if (mysqli_query($conexao, $insert)) {
            header('Location: index.php');
            exit();
        } else {
            echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
      body{
             background-image: url(../WW/chuva.jpg);
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        
      }
      div{
        background-color: rgba(0, 0, 0,0.5);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 80px;
        border-radius: 15px;
        color: black ;
      }
       
      input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
      }
      
      
    </style>
</head>
<body>
    <center>
      <div>  <h1>Cadastro</h1>
        <form id="cadastro" action="cadastro.php" method="POST">
            Nome: <input type="text" name="nome"  required placeholder="Digite o nome"><br><br>
            Login: <input type="text" name="login"  required placeholder="Digite o login"><br><br>
            Senha: <input type="password" name="senha" required placeholder="Digite a senha"><br><br>
            <input type="submit" value="Cadastrar">
    </div>
        </form>
    </center>
</body>
</html>
