<?php
  if(isset($_POST['submit']))
  {
    
    include_once('config.php');

    $email= $_POST['email'];
    $senha= $_POST['password'];
  }
  if(isset($_POST['submit']))
  {
    
    include_once('config.php');

    $nome= $_POST['username'];
    $email= $_POST['email'];
    $senha= $_POST['password'];
    $tele= $_POST['phone'];
    $sexo=$_POST['sexo'];

    $result= mysqli_query($conexao_regis, "INSERT INTO cadastro(nome,email,senha,telefone,sexo) 
    VALUES ('$nome','$email','$senha','$tele','$sexo')");


    $email_log=$_POST['email'];
    $senha_log=$_POST['password'];
    $result2= mysqli_query($conexao_login, "INSERT INTO tb_login(email,senha) 
    VALUES ('$email_log','$senha_log')");

    header('Location:entrar.php');

  }
 ?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="assets/images/favico.png" type="image/x-icon">
  <title>Andre Fernandes</title>
  <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
  <link rel="stylesheet" href="assets/css/style-login.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  <style>
   #enviar{
      background-color:rgba(255,0,0,1);
      text-transform: uppercase;
      color: #fff;
      font-size:0.9em;
      padding-bottom: 0.5em;
      padding-top:0.5em;
      padding-left:0.5em;
      padding-right:0.5em;
      cursor:pointer;
      border-radius: 10rem;
      
      border-color:#000;
    }
    input[type=submit]{
      border:1px solid #000;
      width:10rem;
    }
    .termos{
      font-weight: bold
    }
  </style>
</head>

<body>
  
<div class="container" id="container">
  <!--register-->  
  <div class="form-container sign-up-container">
      <form  action="entrar.php" method="post">
        <h1>Criar conta</h1>
        <!--
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
-->
        <input type="text" placeholder="Nome" name="username" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑ ]+[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑ ]+" required/>
        <input type="email" placeholder="Email" name="email" required/>
        <input type="tel" name="phone" placeholder="Telefone (99)99999-9999" pattern="[0-9]({2})[0-9]{5}-[0-9]{4}" required>
        <!--
        <label>Sexo</label>
        <input type="radio" id="feminino" name="sexo" value="feminino" required><label class="escolha">Feminino</label>
        
        <input type="radio" id="masculino" name="sexo" value="masculino" required><label class="escolha">Masculino</label>
        
        <input type="radio" id="outro" name="sexo" value="outro" required><label class="escolha">Outro</label>
  -->
        <input type="password" placeholder="Senha" name="password"  id="senha" required/>
       
       
        <input type="checkbox" id="termos" name="termos" required value="termos">
        <label for="termos">
          <a href="assets/pdf/termo-de-privacidade.pdf" download="termo-de-privacidade.pdf" 
            type="application/pdf" target="_blank" style="font-size: 0.7rem;" class="termos">
            li e concordo com os termos e privacidade</a> 
        </label>
        <br>
        
        <input type="submit" value="inscrever-se" name="submit" id="enviar">
      </form>
    </div>
    
    <!--login-->
    <div class="form-container sign-in-container">
      <form action="teste.php" method="post">
        <h1>Entrar</h1>
        
        <br>
        <input type="email" placeholder="Email" name="email" required/>
        <input type="password" placeholder="Senha" name="password" id="senha" required/>
        <a href="remember-password.php" target="_blank">Esqueceu sua senha?</a>
        
        <input type="submit" value="conectar" name="submit" id="enviar">
      </form>
    
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-right">
          <h1>Bem vindo!</h1>
          <p>Para se manter conectado, faça o login com suas informações</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Java Script -->
  <script>
    document.getElementById('remember').addEventListener('click', function () {
      var href = this.dataset.link;
      window.location = href;
    });
    document.getElementById('register').addEventListener('click', function () {
      var href = this.dataset.link;
      window.location = href;
    });

  </script>
  <script src="senha.js"></script>
  <script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
      container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
      container.classList.remove("right-panel-active");
    });
  </script>
</body>

</html>