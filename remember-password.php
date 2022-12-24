<?php
if (isset($_POST['submit'])) {

    include_once('config.php');

    $email = $_POST['email'];
    $senha = $_POST['password'];
}
if (isset($_POST['submit'])) {

    include_once('config.php');

    $nome = $_POST['username'];
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $tele = $_POST['phone'];
    $sexo = $_POST['sexo'];

    $result = mysqli_query($conexao_regis, "INSERT INTO cadastro(nome,email,senha,telefone,sexo) 
    VALUES ('$nome','$email','$senha','$tele','$sexo')");

    header('Location:entrar.php');
}
if (isset($_POST['ok'])) {

    $email = $mysqli ->escape_string($_POST['email']);

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erro[] = "E-mail inválido.";
    }

    if($total == 0)
        $erro[] = "O e-mail informado não existe.";
    if(count($erro)== 0 && $total > 0){

    $novasenha = substr(md5(time()), 0, 6);
    $nscriptografada = md5(md5($novasenha));

    if (mail($email, "Sua nova senha", "Sua nova senha é: ".$novasenha));{


    $sql_code = "UPDATE cadastro SET senha = '$nscriptografada' WHERE email='$email' ";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
  
        if ($sql_query)
        $erro[] = "Senha alterada com sucesso!";

}
    }
    if(count($erro)==0 || !isset($erro)){
        echo "<script>alert('Login efetuado com sucesso'); location.href='entrar.php';</script> ";
    }
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
        #enviar {
            background-color: rgba(255, 0, 0, 1);
            text-transform: uppercase;
            color: #fff;
            font-size: 0.9em;
            padding-bottom: 0.5em;
            padding-top: 0.5em;
            padding-left: 0.5em;
            padding-right: 0.5em;
            cursor: pointer;
            border-radius: 10rem;

            border-color: #000;
        }

        input[type=submit] {
            border: 1px solid #000;
            width: 10rem;
        }

        .termos {
            font-weight: bold
        }
    </style>
</head>

<body>
    <?php
    if (count($erro)> 0)
        foreach ($erro as $msg) {
        echo "<p>$msg</p>";
        }
?>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form method="POST" action="#">
                <h1>Restaurar senha</h1><br><br><br><br>

                <input value="<?php echo $_POST['email'];?>" type="email" name="email" placeholder="Email" /> <br><br>
                <input type="submit" value="ok" name="ok">
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Restaurar senha</h1>
                    <p>Siga as instruções para restaurar sua senha</p>
                    <button class="ghost" id="signUp">Entrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Java Script -->
    <script>
        document.getElementById('remember').addEventListener('click', function() {
            var href = this.dataset.link;
            window.location = href;
        });
        document.getElementById('register').addEventListener('click', function() {
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