<?php
// Inicie a sessão
session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION['usuario_logado'])) {
    // Se não estiver logado, redirecione para a página de login
    header("Location: login.php");
    exit(); // Certifique-se de parar a execução do script após o redirecionamento
}

// Resto do seu código HTML e formulário aqui
echo $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lava Jato</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url(./img/1339172.png);
            background-size: cover;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: rgb(32, 32, 36);
            padding: 2rem;
            border-radius: 0.675rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        /* cor e estilização da box */
        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;

            h1 {
                text-align: center;
                font-size: 20px;
                color: white;
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
                color: #fff;
            }

            transform: translate(-40%, -45%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 03px;
            border-radius: 25px;
            width: 20%;
        }

        /* cor e largura das bordas */
        fieldset {
            border: 3px solid dodgerblue;
            border-radius: 20px;
        }

        /* estilização da legenda */
        legend {
            border: 3px solid dodgerblue;
            padding: 5px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 5px;
        }

        /* centralizar a box */
        .inputBox {
            position: center;
        }

        /* estilização da interação do usuario */
        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        /* Animação (não esta utilizando) */
        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: 0.5s;
        }

        /* estilização dos labelinputs */
        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        /* modicar o campo de agendamento */
        #data_agendamento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        /* estilização do botão enviar */
        #submit {
            background-image: linear-gradient(to right,
                    rgb(0, 92, 197),
                    rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        /* cor do botão enviar */
        #submit:hover {
            background-image: linear-gradient(to right,
                    rgb(0, 80, 172),
                    rgb(80, 19, 195));
        }

        /* modifica a cor do calendario */
        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            filter: invert(1) brightness(100%);
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
            padding: 3rem;
            border-radius: 0.675rem;
        }

        .form-container .form-btn {
            /*  apenas stilizacao do botao  */
            text-decoration: none;
            background: rgb(130 87 229);
            padding: 0.675rem 1rem;
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="box">
        <form action="ordems.php" method="POST">
            <fieldset>
                <legend>Agendamento</legend>

                <div class="inputbox">
                    <label for="nome"> Nome :</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>

                </div>

                <div class="inputbox">
                    <label for="nome"> Marca :</label>
                    <input type="text" name="marca" id="marca" class="inputUser" required>

                </div>

                <div class="inputbox">
                    <label for="nome"> Modelo :</label>
                    <input type="text" name="modelo" id="marca" class="inputUser" required>

                </div>

                <div class="inputbox">
                    <label for="nome"> Placa :</label>
                    <input type="text" name="placa" id="marca" class="inputUser" required>

                </div>

                <div class="inputbox">
                    <label for="data_agendada"><br> Agendamento :</label>
                    <input type="date" name="data_agendada" id="data_agendada" class="inputUser" required>

                </div> <br>

                <input type="text" name="clienteid" hidden value="<?= $_SESSION['id'] ?>">

                <input type="submit" name="submit" id="submit" href="./ordems.php">
            </fieldset>
        </form>
    </div>
</body>

</html>