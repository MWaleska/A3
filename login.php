<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        color: white ;
      }
       
      input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
      }
      .b{
        color:black;
      }
    </style>
    </head>
<body>
    <center>
     <div>   <h1>Login</h1>
        <form id="login" action="logado.php" method="POST">
            Login: <input type="text" name="login" required placeholder ="Digite o login"><br><br>
            Senha: <input type="password" name="senha" required placeholder = "Digite a senha" ><br><br>
            <a href="cadastro.php" class= "b">Cadastre-se</a><br><br>
            <input type="submit" id="entrar" value="Entrar">
    </div>
        </form>
    </center>
</body>
</html>
