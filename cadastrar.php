<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Login - PHP + MySQL - Canal TI</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>

    <body>
        <section class="hero is-success is-fullheight">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="column is-4 is-offset-4">
                        <h3 class="title has-text-grey">Sistema de Login</h3>
                        <h3 class="title has-text-grey"><a href="https://youtube.com/canaltioficial" target="_blank">Canal TI</a></h3>
                        <div class="notification is-danger">
                        <p>ERRO: Usuário ou senha inválidos.</p>
                        </div>
                        <div class="box">
                            <form method="POST">
                                <div class="field">
                                    <div class="control">
                                        <input name="nome" class="input is-large" type="text" placeholder="Digite seu nome..." autofocus="" maxlength="30">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input name="email" class="input is-large" type="email" placeholder="Digite seu email..." maxlength="40">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input name="cpf" class="input is-large" type="text" placeholder="Digite seu cpf..." maxlength="11">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input name="cor_fav" class="input is-large" type="text" placeholder="Sua cor favorita (hexadecimal)..." maxlength="7">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input name="senha" class="input is-large" type="password" placeholder="Digite sua senha..." maxlength="15">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input name="confirmarSenha" class="input is-large" type="password" placeholder="Confirme sua senha..." maxlength="15">
                                    </div>
                                </div>
                                <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                            </form><br>
                            <a href="index.php">Entrar com usuário e senha</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>

<?php
    $msg = "teste";
    header("location: ./php/validateBack.php?msg=$msg");
?>