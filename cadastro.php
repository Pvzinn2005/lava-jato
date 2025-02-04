<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./projeto-de-logotipo-de-lavagem-de-carros_23-2149933675.avif" />
    <title>Cadastro de Usuario</title>
    <style>
        *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.background{
  width: 100%;
  height: 100vh;
  /* colocando height do body pra ocupar 100% da viewport do dispositivo */
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(./img/1339172.png);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: absolute;
  display: flex;
  justify-content: center;
  overflow-y: hidden;
  overflow-x: hidden;
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
  height: 100%;
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
  background: rgb(39, 36, 163);
  padding: 0.675rem 1rem;
  color: #FFF;
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
</head>

<body>
    <div class="background">
        <form method="POST" action="processarcadastro.php">
            <div class="container">
                <div class="form-container">
                    <h1>Registro</h1>

                    <div class="inputbox">
                        
                        <input type="text" name="nome" placeholder="Nome" required />
                    </div>

                    <div class="inputbox">
                        
                        <input type="tel" name="telefone" placeholder="Telefone" required />
                    </div>

                    <div class="inputbox">
                        
                        <input type="email" name="email" placeholder="E-mail" required />
                    </div>

                    <div class="inputbox">
                        
                        <input type="password" name="senha" placeholder="Senha" required />
                    </div>

                    <input type="submit" name="submit" id="submit" value="Registrar" required>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
