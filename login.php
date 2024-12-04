<?php
// Inicie a sessão
session_start();


require('models/Cliente.php');
// Verifique se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Inclua a classe Cliente

    // Recupere os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Crie uma instância da classe Cliente
    $cliente = new Cliente;

    // Tente autenticar o cliente
    if ($cliente->autenticar($email, $senha)) {
        // Se a autenticação for bem-sucedida, redirecione para a página principal ou faça o que for necessário
        $_SESSION['usuario_logado'] = true; // Defina uma variável de sessão para indicar que o usuário está logado
        $clientedata = $cliente->obterClientePorEmail($email);

        $_SESSION['id'] = $clientedata['id'];

        header("Location: index.php");
        exit();
    } else {
        // Se a autenticação falhar, exiba uma mensagem de erro (pode redirecionar para a página de login novamente)
        echo "Autenticação falhou!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <style>
        *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body {
    width: 100%;
    min-height: 100vh;
    height: 100vh;
    /* colocando height do body pra ocupar 100% da viewport do dispositivo */
    font-family: Arial, Helvetica, sans-serif;
    background-image: url(./img/1339172.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: absolute;
  }
  
  h1 {
    text-align: center;
    font-size: 20px;
    color:white
    
  }
  
  .container {
    /*  alinhando a caixa cinza no meio da tela/página  */
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    /* pra ocupar 100% que ele conseguir */
  }
  
  .form-container {
  
  
    /*  alinhando os itens no centro com display flex  */
    display: flex;
    flex-direction: column;
    /* mudando a direção para coluna */
    align-items: center;
    /* alinhando iitens no centro verticalmente(interessante notar que isso fica invertido com o justify-content devido ao flex direction) */
  
    /* adicionando espacamento entre itens */
    gap: 1rem;
  
    /*  apenas stilizacao da caixaa  */
    background: rgb(32 32 36);
    padding: 2rem;
    border-radius: 0.675rem;
  }
  
  
  .form-container .form-btn {
    /*  apenas stilizacao do botao  */
    text-decoration: none;
    background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
    font-size: 15px;
    width: 100%;
    border: none;
    padding: 15px;
    color: #FFF;
    cursor: pointer;
    border-radius: 10px;
    text-align: center;
  }
  #submit{
    background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
    
  }
    </style>
    <!--icone do navegador-->
    <link rel="shortcut icon" href="./projeto-de-logotipo-de-lavagem-de-carros_23-2149933675.avif">
</head>

<body>
    <form class="formulario" method="post">

        <div class="container">
            <div class="form-container">
                <h1>Login</h1>
                <input type="text" name="email" placeholder="email" required />
                <input type="password" name="senha" placeholder="password" required />

                <input type="submit" name="submit" id="submit" required>
                <a class="form-btn" type="submit" href="./cadastro.php">
                    Registre-se
                </a>
            </div>
        </div>
    </form>
</body>

</html>