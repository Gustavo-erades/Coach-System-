<?php

  if(!empty($_GET['cod']))
  { 
    include_once('config.php');

    $cod = $_GET['cod'];
    $meta= $_POST['meta'];


    $sqlupdate = "UPDATE meta_relacionamento SET meta= NULL
    WHERE cod='$cod' ";
    $result2 = $conexao_forms15->query($sqlupdate);


    /*$sqlselect = "SELECT meta FROM meta_relacionamento  WHERE cod=$cod";
    $result = $conexao_forms15->query($sqlselect);

    if($result->num_rows > 0)
    {
       $sqldelete="DELETE FROM meta_relacionamento WHERE cod=$cod";
       $resultdelete = $conexao_forms15->query($sqldelete);
    }*/
  
  }
  
  header('Location:coach_meta_relacionamento.php?cod='.$cod);

 ?> 