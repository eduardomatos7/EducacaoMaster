<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./_CSS/login.css">
    <link rel="shortcut icon" type="imagex/png" href="./Imagens/Logo-head.ico">
    <title>Faça Login ou Cadastre-se</title>
</head>

<body>
    <H1 class="home"><a href="index.html"> <i class="fas fa-home" aria-hidden="true" style="
        font-size: 20pt;
        color: #fd7cff;
    "> Voltar</i></a></H1>
    <div class="container">
        <div class="forms-container">
            <div class="login-cadastro">

                <?php
                if(isset($_SESSION['msg'])):
                ?>
                
                    <p style="
                margin-top: -413px;
                background-color: #ff000099;
                padding: 10px;
                font-size: 10pt;
                align-content: center;
                justify-content: center;
                position: relative;
                margin-left: auto;
                max-width: 380px;
                width: 100%;
                height: 40px;
                margin-right: auto;
                font-family: cursive;
                border: none;
                border-radius: 100px;
                text-align: center;
                color: #fff;
            ">Usuário ou senha inválidos!</p>
            
            <?php
            endif;
            unset($_SESSION['msg'])
            ?>
            <?php
                if(isset($_SESSION['msg2'])):
                ?>
                
                    <p style="
                margin-top: -413px;
                background-color: green;
                padding: 10px;
                font-size: 10pt;
                align-content: center;
                justify-content: center;
                position: relative;
                margin-left: auto;
                max-width: 380px;
                width: 100%;
                height: 40px;
                margin-right: auto;
                font-family: cursive;
                border: none;
                border-radius: 100px;
                text-align: center;
                color: #fff;
            ">Usuário cadastrado com sucesso!</p>
            
            <?php
            endif;
            unset($_SESSION['msg2'])
            ?>
                <form method="POST" action="autenticacao/testLogin.php" class="login-form">
                    <h2 class="titulo">Entrar</h2>
                    <div class="input-dig">
                        <i class="fas fa-user"></i>
                        <input type="text" name="usuario" id="usuario" placeholder="Usuário" required>
                    </div>
                    <div class="input-dig">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="senha" placeholder="Senha" required>
                    </div>
                    <input type="submit" name="submit" value="Entrar" class="btn solid">
                </form>

                <form method="POST" action="autenticacao/cadastro.php" class=" cadastro-form">
                    <h2 class="titulo">Cadastre-se</h2>
                    <div class="input-dig">
                        <i class="fas fa-user"></i>
                        <input type="text" name="nome_completo" placeholder="Nome completo" required maxlength="50">
                    </div>
                    <div class="input-dig">
                        <i class="fas fa-user"></i>
                        <input type="text" name="usuario" placeholder="Nome de usuário" required maxlength="50">
                    </div>
                    <div class="input-dig">
                        <i class="fas fa-calendar-alt"></i>
                        <input type="date" name="data_nasc" id="date" min="1922-01-01" max="2017-12-30" required>
                    </div>
                    <!--A DATA DE NASCIMENTO NÃO PODE SER MAIOR QUE A DATA ATUAL-->
                    <div class="input-dig">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="E-mail" required maxlength="30">
                    </div>
                    <div class="input-dig">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="senha" placeholder="Senha" required maxlength="32">
                    </div>
                    <div class="input-dig">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="conf_senha" placeholder="Confirmar senha" required maxlength="32">
                    </div>

                    <input type="submit" value="Cadastrar" class="btn solid">
                </form>
            </div>
        </div>
        <div class="painel-container">
            <div class="painel esquerdo-painel">
                <div class="content">
                    <h3>Novo Usuário?</h3>
                    <p>Crie uma conta agora mesmo!</p>
                    <button class="btn transparent" id="btn-cadastro-mudar">Cadastre-se</button>
                </div>

                <img src="./Imagens/Gender identity-rafiki.svg" class="imagem">
            </div>
            <div class="painel direito-painel">
                <div class="content">
                    <h3>Já possui uma conta?</h3>
                    <p>Entre com uma conta existente!</p>
                    <button class="btn transparent" id="btn-login-mudar">Entrar</button>
                </div>

                <img src="./Imagens/Registrar.svg" class="imagem">
            </div>
        </div>

    </div>


    <script src="./_JS/lgn.js"></script>
</body>

</html>