<?php
session_start();

if (!isset($_SESSION['nome'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $conexao = mysqli_connect('localhost', 'root', '', 'projetoa3','3306');

  
    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }


    $novasenha = $_POST['nova_senha'];
    $confirmarsenha = $_POST['confirmar_senha'];


    if ($novasenha !== $confirmarsenha) {
        die("A nova senha e a confirmação da senha não correspondem.");
    }

    
    $nomeUsuario = $_SESSION['nome']; 
    $senhaHash = $novasenha;

    $sql = "UPDATE login SET senha = '$senhaHash' WHERE nome = '$nomeUsuario'";
    if (mysqli_query($conexao, $sql)) {
        mysqli_close($conexao);
        $_SESSION['senha'] = $novasenha;
        header("Location: senhaatualizada.php");
        exit();
    } else {
        echo "Erro ao atualizar a senha: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
}
?>

<html>
<body>
<style>

body{
     font-family: Arial, Helvetica, sans-serif;
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
  color: white;
}
 
input{
  padding: 15px;
  border: none;
  outline: none;
  font-size: 15px;

}

</style>
<body>
    <div>
<center>
  
   <h1>Alterar Senha</h1>
   <form method="POST" action="alterarsenha.php">
       <label for="nova_senha"  >Nova senha:<br></label>
       <input type="password" name="nova_senha" id="nova_senha" required>

       <label for="confirmar_senha" ><br><br>Confirmar nova senha:</label><br>
       <input type="password" name="confirmar_senha" id="confirmar_senha" required>

       <input type="submit" value="Alterar Senha">
</div>
   </form>

   </center>
</body>
</html>
