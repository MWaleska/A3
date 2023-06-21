<?php
session_start();
?>
<html>
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
        color: black;
      }
       
      input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
    
      }
      .d{
        color:white;
      }
      .n{
        color:white;
      }
    </style>
<body>
    <div>
    <center>
        <?php if (isset($_SESSION['nome'])) {
            echo "Olá, " . $_SESSION['nome'] . "<br><br>";
            if ($_SESSION['nome'] === 'administrador') {
                ?>
 <a href="lista.php"class = "d" >Lista de Usuários</a><br>
                
                <?php
            }
            ?>
            <a href="alterarsenha.php" class = "d">Alterar Senha</a><br><br>
            <a href="logout.php"class = "d" >Sair</a><br>
            <?php
        } else {
            ?>
           <h4> Olá, visitante realize o  <a href="login.php" class= "n" >Login</a>
            <?php
        
        }
        ?>
    </center>

    </div>
</body>
</html>
