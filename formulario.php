<?php
  session_start();
  include_once('config.php');

  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
      {
          unset($_SESSION['email']);
          unset($_SESSION['senha']);
          header('Location:entrar2.php');
      }
      $logado = $_SESSION['email'];

      if (!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT * FROM formulario_15_anos WHERE cod LIKE '%$data%' or nome LIKE '%$data%' or sobrenome LIKE '%$data%' or email LIKE '%$data%'  or saude LIKE '%$data%' or relacionamento LIKE '%$data%' or financeiro LIKE '%$data%'
        or espiritual LIKE '%$data%' or outro LIKE '%$data%'";
      
      } else{
        $sql = "SELECT * FROM formulario_15_anos ORDER BY cod DESC";
      }
      $result = $conexao_forms15->query($sql);
  if(isset($_POST['submit']))
  {
    include_once('config.php');
    $nome= $_POST['nome'];
    $sobrenome= $_POST['sobrenome'];
    $email= $_POST['email'];
    $saude= $_POST['saude'];
    $relacionamento= $_POST['relacionamento'];
    $financeiro= $_POST['financeiro'];
    $espiritual= $_POST['espiritual'];
    $outro= $_POST['outro'];

    $result= mysqli_query($conexao_forms15,"INSERT INTO formulario_15_anos(nome,sobrenome,email,saude,relacionamento,financeiro,espiritual,outro) VALUES ('$nome','$sobrenome','$email','$saude','$relacionamento','$financeiro','$espiritual','$outro')"); 
    header('show_sistema_persona.php');

    /* saúde */
    include_once('config.php');
    $oque= $_POST['oque'];
    $porquem= $_POST['porquem'];
    $onde= $_POST['onde'];
    $quando= $_POST['quando'];
    $porque= $_POST['porque'];
    $como= $_POST['como'];
    $nome= $_POST['nome'];
    $sobrenome= $_POST['sobrenome'];
    $objet= $_POST['objet'];
    $opcao= $_POST['opcao'];
    $responsa=$_POST['responsa'];
    $data_inicio= $_POST['data_inicio'];
    $data_fim= $_POST['data_fim'];
    $obs= $_POST['obs'];

    $resultSaude= mysqli_query($conexao_formsSaude,"INSERT INTO saude_12_meses(oque,porquem,onde,quando,porque,como,nome,sobrenome,objet,opcao,responsa,data_inicio,data_fim,obs) 
    VALUES ('$oque','$porquem','$onde','$quando','$porque','$como','$nome','$sobrenome','$objet','$opcao','$responsa','$data_inicio','$data_fim','$obs')"); 
    header('show_sistema_persona.php');

    /* relacionamentos */
    include_once('config.php');
    $oque= $_POST['oque'];
    $porquem= $_POST['porquem'];
    $onde= $_POST['onde'];
    $quando= $_POST['quando'];
    $porque= $_POST['porque'];
    $como= $_POST['como'];
    $nome= $_POST['nome'];
    $sobrenome= $_POST['sobrenome'];
    $objet= $_POST['objet'];
    $opcao= $_POST['opcao'];
    $responsa=$_POST['responsa'];
    $data_inicio= $_POST['data_inicio'];
    $data_fim= $_POST['data_fim'];
    $obs= $_POST['obs'];
    $resultSaude= mysqli_query($conexao_forms15,"INSERT INTO relacionamento_12_meses(oque,porquem,onde,quando,porque,como,nome,sobrenome,objet,opcao,responsa,data_inicio,data_fim,obs) 
    VALUES ('$oque','$porquem','$onde','$quando','$porque','$como','$nome','$sobrenome','$objet','$opcao','$responsa','$data_inicio','$data_fim','$obs')"); 
    header('show_sistema_persona.php');

    /* trabalho */
    include_once('config.php');
    $oque= $_POST['oque'];
    $porquem= $_POST['porquem'];
    $onde= $_POST['onde'];
    $quando= $_POST['quando'];
    $porque= $_POST['porque'];
    $como= $_POST['como'];
    $nome= $_POST['nome'];
    $sobrenome= $_POST['sobrenome'];
    $objet= $_POST['objet'];
    $opcao= $_POST['opcao'];
    $responsa=$_POST['responsa'];
    $data_inicio= $_POST['data_inicio'];
    $data_fim= $_POST['data_fim'];
    $obs= $_POST['obs'];
    $resultSaude= mysqli_query($conexao_forms15,"INSERT INTO trabalho_12_meses(oque,porquem,onde,quando,porque,como,nome,sobrenome,objet,opcao,responsa,data_inicio,data_fim,obs) 
    VALUES ('$oque','$porquem','$onde','$quando','$porque','$como','$nome','$sobrenome','$objet','$opcao','$responsa','$data_inicio','$data_fim','$obs')"); 
    header('show_sistema_persona.php');

    /* dinheiro */
    include_once('config.php');
    $oque= $_POST['oque'];
    $porquem= $_POST['porquem'];
    $onde= $_POST['onde'];
    $quando= $_POST['quando'];
    $porque= $_POST['porque'];
    $como= $_POST['como'];
    $nome= $_POST['nome'];
    $sobrenome= $_POST['sobrenome'];
    $objet= $_POST['objet'];
    $opcao= $_POST['opcao'];
    $responsa=$_POST['responsa'];
    $data_inicio= $_POST['data_inicio'];
    $data_fim= $_POST['data_fim'];
    $obs= $_POST['obs'];
    $resultSaude= mysqli_query($conexao_forms15,"INSERT INTO dinheiro_12_meses(oque,porquem,onde,quando,porque,como,nome,sobrenome,objet,opcao,responsa,data_inicio,data_fim,obs) 
    VALUES ('$oque','$porquem','$onde','$quando','$porque','$como','$nome','$sobrenome','$objet','$opcao','$responsa','$data_inicio','$data_fim','$obs')"); 
    header('show_sistema_persona.php');

    /* outro */
    include_once('config.php');
    $oque= $_POST['oque'];
    $porquem= $_POST['porquem'];
    $onde= $_POST['onde'];
    $quando= $_POST['quando'];
    $porque= $_POST['porque'];
    $como= $_POST['como'];
    $nome= $_POST['nome'];
    $sobrenome= $_POST['sobrenome'];
    $objet= $_POST['objet'];
    $opcao= $_POST['opcao'];
    $responsa=$_POST['responsa'];
    $data_inicio= $_POST['data_inicio'];
    $data_fim= $_POST['data_fim'];
    $obs= $_POST['obs'];
    $resultSaude= mysqli_query($conexao_forms15,"INSERT INTO outro_12_meses(oque,porquem,onde,quando,porque,como,nome,sobrenome,objet,opcao,responsa,data_inicio,data_fim,obs) 
    VALUES ('$oque','$porquem','$onde','$quando','$porque','$como','$nome','$sobrenome','$objet','$opcao','$responsa','$data_inicio','$data_fim','$obs')"); 
    header('show_sistema_persona.php');

  }
  $user_data = mysqli_fetch_assoc($result);
 ?>
<!doctype html>
<html>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Formulário</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
  <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <link rel="stylesheet" href="assets/css/nav.css">

</head>

<body className='snippet-body' style="background-color:#f8f9fa">

  <body id="body-pd">
    <header class="header" id="header">
      <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name"> <?php
              echo "Aluno" ?></span> </a>
          <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span
                class="nav_name">Início</span> </a> <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i>
              <span class="nav_name">Conta</span> </a> <a href="#" class="nav_link"> <i
                class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Formulário</span> </a> <a
              href="#" class="nav_link"> <i class='bx bxs-doughnut-chart'></i> <span class="nav_name">Metas</span>
            </a> <a href="#" class="nav_link"> <i class='bx bx-chat'></i> <span class="nav_name">Mensagem</span>
            </a>
          </div>
        </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sair</span>
        </a>
      </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
      <br><br>
      <h2> Bem vindo(a) <?php echo $logado ?>&#128578;</h2><br>
      <b>
        <p>Vamos começar primeiramente com a sua meta para daqui <u>15 anos</u></p>
      </b><br>
      <?php
        //echo"<form action='show_sistema_forms.php?cod=$user_data[cod]' method='post'>";
        echo"<form action='direcao_forms.php' method='post'>";
      ?>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Como quer estar de saúde?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Ex: Estar na faixa do 65Kg" name="saude" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Como quer estar nos seus relacionamentos ?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Ex: Casado e com filhos..." name="relacionamento"required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Como quer estar financeiramente ?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Ex: vivendo de renda..." name="financeiro" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Como quer estar espiritualmente ?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Objetivos espirituais" name="espiritual" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Algum outro ?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Escreva outro objetivo" name="outro">
        <small id="emailHelp" class="form-text text-muted">Descreva aqui algum outro objetivo que tenha e que foi listado acima</small>
      </div>
    </div>
    <div class="height-100 bg-light">
      <b>
        <p>Agora seus objetivos para os proximos <u>12 meses</u></p>
      </b>
      <p>Metodologia <b>5W2h</b></p><br>
      <p>Primeiramente em relação à <b>saúde</b></p>
      <div class="mb-3">
        <li>Saude</li><br>
        <label for="exampleFormControlTextarea1" class="form-label">O que ?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Ex: Estar na faixa do 65Kg" name="oque" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Por quem?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Alguma pessoa em especial ?" name="porquem" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Onde?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Onde precisa estar para alcançar esse objetivo ?" name="onde" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Quando?</label>
        <input type="date" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Em qual época quer alcançar?" name="quando" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Por quê?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Motivo do objetivo" name="porque" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Como?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Como fazer ?" name="como" required><br>
      </div>
      
      <!-- nova parte -->
<p>Acredita que é possivel realizar a meta ?</p>
            <input type="radio" value="sim" name="opcao" checked  class="form-check-input">
            <label for="sim">Sim</label>
            <input type="radio"  value="nao" name ="opcao" class="form-check-input">
            <label for="nao">Não</label>
            <br><br>
<!--
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox1" value="opcao"  name="opcao">
  <label class="form-check-label" for="opcao">Sim</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox2" value="opcao" name="opcao">
  <label class="form-check-label" for="opcao">Não</label>
</div><br><br>-->
<p><b>Metas sobre saúde</b></p><br>
   <div class="mb-3">
 <label for="exampleFormControlTextarea1" class="form-label">O que fazer para alcançar o objetivo ?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="" name="objet" required><br>
      </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Responsável:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="" name="responsa" required><br>
      </div>
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Data de início:</label>
        <input type="date" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Em qual época quer alcançar?" name="data_incio" required><br>
      </div>
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Data de término:</label>
        <input type="date" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Em qual época quer alcançar?" name="data_fim" required><br>
      </div>
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Observações:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="" name="obs" required><br>
      </div>
      <!--
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">complementos para o objetivo:</label>
        <input type="text" class="form-control" id="complementos_1"
          placeholder="André irá preencher" name="obs_andre" value="André irá preencher"><br>
      </div>
 <br>-->
      <!-- //////////// -->
      
      <p>Agora sobre <b>relacionamentos</b></p>
      <div class="mb-3">
        <li>Relacionamentos</li><br>
        <label for="exampleFormControlTextarea1" class="form-label">O que ?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Ex: Estar na faixa do 65Kg" name="oque" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Por quem?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Alguma pessoa em especial ?" name="porquem" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Onde?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Onde precisa estar para alcançar esse objetivo ?" name="onde" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Quando?</label>
        <input type="date" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Em qual época quer alcançar?" name="quando" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Por quê?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Motivo do objetivo" name="porque" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Como?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Como fazer ?" name="como" required><br>
      </div>
      <!-- nova parte -->
      <!--
      <p>Acredita que é possivel realizar a meta ?</p>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1" name="opcao">
  <label class="form-check-label" for="inlineCheckbox1">Sim</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2" name="opcao">
  <label class="form-check-label" for="inlineCheckbox2">Não</label>
</div><br><br>-->
<p><b>Metas sobre relacionamentos</b></p><br>
   <div class="mb-3">
 <label for="exampleFormControlTextarea1" class="form-label">O que fazer para alcançar o objetivo ?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="" name="objet" required><br>
      </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Responsável:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="" name="responsa" required><br>
      </div>
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Data de início:</label>
        <input type="date" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Em qual época quer alcançar?" name="data_inicio" required><br>
      </div>
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Data de término:</label>
        <input type="date" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Em qual época quer alcançar?" name="data_fim" required><br>
      </div>
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Observações:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="" name="obs" required><br>
      </div>
      <!--
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">complementos para o objetivo:</label>
        <input type="text" class="form-control" id="complementos_2"
          placeholder="André ira preencher" name="obs_andre"><br>
      </div>
 <br><br>-->
      <!-- //////////// -->
     
      <p>Agora sobre seu <b>trabalho</b></p>
      <div class="mb-3">
        <li>Trabalho</li><br>
        <label for="exampleFormControlTextarea1" class="form-label">O que ?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Ex: Estar na faixa do 65Kg" name="oque" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Por quem?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Alguma pessoa em especial ?" name="porquem" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Onde?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Onde precisa estar para alcançar esse objetivo ?" name="onde" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Quando?</label>
        <input type="date" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Em qual época quer alcançar?" name="quando" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Por quê?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Motivo do objetivo" name="porque" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Como?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Como fazer ?" name="como" required><br>
      </div>
<!-- nova parte -->
<!--
<p>Acredita que é possivel realizar a meta ?</p>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1" name="opcao">
  <label class="form-check-label" for="inlineCheckbox1">Sim</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2" name="opcao">
  <label class="form-check-label" for="inlineCheckbox2">Não</label>
</div><br><br>-->
<p><b>Metas sobre trabalho</b></p><br>
   <div class="mb-3">
 <label for="exampleFormControlTextarea1" class="form-label">O que fazer para alcançar o objetivo ?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="" name="objet" required><br>
      </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Responsável:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="" name="responsa" required><br>
      </div>
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Data de início:</label>
        <input type="date" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Em qual época quer alcançar?" name="data_inicio" required><br>
      </div>
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Data de término:</label>
        <input type="date" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Em qual época quer alcançar?" name="data_fim" required><br>
      </div>
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Observações:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="" name="obs" required><br>
      </div>
      <!--
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">complementos para o objetivo:</label>
        <input type="text" class="form-control" id="complementos_3"
          placeholder="André irá preencher" name="obs_andre"><br>
      </div>
 <br><br>-->
      <!-- //////////// -->
      
      <p>Agora sobre seu <b>dinheiro</b></p>
      <div class="mb-3">
        <li>Dinheiro</li><br>
        <label for="exampleFormControlTextarea1" class="form-label">O que ?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Ex: Estar na faixa do 65Kg" name="oque" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Por quem?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Alguma pessoa em especial ?" name="porquem" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Onde?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Onde precisa estar para alcançar esse objetivo ?" name="onde" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Quando?</label>
        <input type="date" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Em qual época quer alcançar?" name="quando" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Por quê?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Motivo do objetivo" name="porque" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Como?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Como fazer ?" name="como" required><br>
      </div>
    <!-- nova parte -->
    <!--
<p>Acredita que é possivel realizar a meta ?</p>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1" name="opcao">
  <label class="form-check-label" for="inlineCheckbox1">Sim</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2" name="opcao">
  <label class="form-check-label" for="inlineCheckbox2">Não</label>
</div><br><br>-->
<p><b>Metas sobre dinheiro</b></p><br>
   <div class="mb-3">
 <label for="exampleFormControlTextarea1" class="form-label">O que fazer para alcançar o objetivo ?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="" name="objet" required><br>
      </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Responsável:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="" name="responsa" required><br>
      </div>
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Data de início:</label>
        <input type="date" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Em qual época quer alcançar?" name="data_inicio" required><br>
      </div>
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Data de término:</label>
        <input type="date" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Em qual época quer alcançar?" name="data_fim" required><br>
      </div>
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Observações:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="" name="obs" required><br>
      </div>
      <!--
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">complementos para o objetivo:</label>
        <input type="text" class="form-control" id="complementos_4"
          placeholder="André ira preencher" name="obs_andre"><br>
      </div>
 <br><br>-->
      <!-- //////////// -->
      
      
      <p>Agora descreva <b>outro objetivo</b> que possua que <b>não</b> foi <b>citado</b></p>
      <div class="mb-3">
        <li>Demais objetivos</li><br>
        <label for="exampleFormControlTextarea1" class="form-label">O que ?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Ex: Estar na faixa do 65Kg" name="oque" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Por quem?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Alguma pessoa em especial ?" name="porquem" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Onde?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Onde precisa estar para alcançar esse objetivo ?" name="onde" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Quando?</label>
        <input type="date" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Em qual época quer alcançar?" name="quando" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Por quê?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Motivo do objetivo" name="porque" required><br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Como?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Como fazer ?" name="como" required><br>
      </div>
      <br>
      <!-- nova parte -->
      <!--
<p>Acredita que é possivel realizar a meta ?</p>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1" name="opcao">
  <label class="form-check-label" for="inlineCheckbox1">Sim</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2" name="opcao">
  <label class="form-check-label" for="inlineCheckbox2">Não</label>
</div><br><br>-->
<p><b>Metas sobre outros objetivos</b></p><br>
   <div class="mb-3">
 <label for="exampleFormControlTextarea1" class="form-label">O que fazer para alcançar o objetivo ?</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="" name="objet" required><br>
      </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Responsável:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="" name="responsa" required><br>
      </div>
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Data de início:</label>
        <input type="date" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Em qual época quer alcançar?" name="data_inicio" required><br>
      </div>
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Data de término:</label>
        <input type="date" class="form-control" id="exampleFormControlTextarea1"
          placeholder="Em qual época quer alcançar?" name="data_fim" required><br>
      </div>
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Observações:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1"
          placeholder="" name="obs" required><br>
      </div>
      <!--
<div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">complementos para o objetivo:</label>
        <input type="text" class="form-control" id="complementos_5"
          placeholder="André ira preencher" name="obs_andre"><br>
      </div>-->
      <!-- //////////// -->
      <h5><b>Agora para finalizar...</b></h5>
      <div class="form-group espace">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Qual seu nome?"
          pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑ ]+[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑ ]+" name="nome"
          required>
      </div>
      <div class="form-group espace">
        <label for="exampleInputEmail1">Sobrenome</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Qual seu sobrenome?"
          pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑ ]+[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑ ]+" name="sobrenome"
          required>
      </div>
      <div class="form-group espace">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Email" name="email" required />
        <small id="emailHelp" class="form-text text-muted">Coloque aqui o mesmo email usado no cadastro</small>
      </div>
      <button type="submit" class="btn" class="enviar_forms" style="background-color:rgb(255,0,0); color: #fff;"
        name="submit" >Enviar</button>
     
      </form>
    </div>
    <!--Container Main end-->
    <script type='text/javascript'
      src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'>document.addEventListener("DOMContentLoaded", function (event) {

        const showNavbar = (toggleId, navId, bodyId, headerId) => {
          const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

          // Validate that all variables exist
          if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
              // show navbar
              nav.classList.toggle('show')
              // change icon
              toggle.classList.toggle('bx-x')
              // add padding to body
              bodypd.classList.toggle('body-pd')
              // add padding to header
              headerpd.classList.toggle('body-pd')
            })
          }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
          if (linkColor) {
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
          }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
      });</script>
    <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
      myLink.addEventListener('click', function (e) {
        e.preventDefault();
      });
      
      const input = document.querySelector('#complementos_1');
      input.disabled=true;

      const input2 = document.querySelector('#complementos_2');
      input2.disabled=true;

      const input3 = document.querySelector('#complementos_3');
      input3.disabled=true;

      const input4 = document.querySelector('#complementos_4');
      input4.disabled=true;

      const input5 = document.querySelector('#complementos_5');
      input5.disabled=true;
      </script>

  </body>

</html>