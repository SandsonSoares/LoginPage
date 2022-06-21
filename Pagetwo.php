<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo(a)!</title>
    <link rel="stylesheet" href="Folha.css">
    <script src="interacao.js"></script>
    <link rel="shortcut icon" href="./Imagens/icon.png" type="image/x-icon">
    <style>
        /* Config interna */
        .top {
            box-sizing: border-box;
            margin: 35px auto;
            width: 50vw;
            height: 10vh;
            padding: 0;
            position: relative;
        }

        .posi-top {
            height: 10vh;
            width: 15vw;
            box-sizing: border-box;
            display: block;
            float: right;
        }

        .nome {
            font-family: 'Dosis', sans-serif;
            padding-right: 10px;
            width: 8.5vw;
            text-align: right;
            display: block;
            float: left;
        }

        .icon {
            display: block;
            float: right;
            height: 40px;
            margin-right: 2.5vw;
        }

        .icone {
            width: 40px;
            height: 40px;
        }

        .usuario {
            text-decoration: none;
            color: #E07200;
            transition: ease-in-out 200ms;
        }

        .usuario:hover {
            text-decoration: underline;
            color: #000000;
        }

        .destaque {
            color: #E07200;
            font-weight: bold;
        }

        .Dgif {
            width: 50vw;
            height: 50vh;
        }

        .Dgif p {
            text-align: center;
        }

        .gif {
            width: 20vw;
            height: 25vh;
        }

        @media only screen and (max-width: 1051px) {
            .posi-top {
                width: 18vw;
            }
        }

        @media only screen and (max-width: 600px) {
            .posi-top {
                width: 23vw;
            }

            .gif {
                height: 20vh;
                width: 30vw;
            }

            .icone {
                width: 30px;
                height: 30px;
            }

            .icon {
                margin-right: 1vw;
            }

            .nome {
                font-size: .9em;
            }
        }
    </style>
</head>
<?php $nome = $_GET["username"]; ?>

<body>
    <main class="corpo">
        <section class="conteudo-central">
            <div class="top">
                <!-- USER PANNEL -->
                <div class="posi-top">
                    <p class="nome"><?php print $nome; ?> <br>
                        <!-- class="resetar"> --><a href="PageThree.html" class="usuario">Sair</a></p>
                    <p class="icon"> <img src="./Imagens/user.png" alt="Usuário" class="icone"></p>
                    <!---->
                </div>
            </div>

            <div class="txt">
                <h1 class="titulo">Cadastrado!</h1>
                <p class="texto">Bem vindo! você pode fazer login no site oficial</p>
                <p class="texto">Olá <?php
                                        print "<span class='destaque'>$nome</span>" ?>, o email cadastrado foi <?php $email = $_GET["email"];
                                                                                                                print "<span class='destaque'>$email</span>"; ?>. <br> Aproveite nossos serviços!</p>
            </div>
            <div class="Dgif">
                <p><img src="./Imagens/load.gif" alt="Boa vindas" class="gif"></p>
            </div>
            <footer class="rodape">
                <article class="biografia">
                    <a href="https://www.linkedin.com/in/sandson-soares-bb7573232/" target="_blank">Sandson Soares</a>&nbsp;
                    <span id="linha"></span> &nbsp;
                    <a href="https://github.com/SandsonSoares" target="_blank">GitHub</a>
                </article>
            </footer>
        </section>

    </main>

</body>

</html>