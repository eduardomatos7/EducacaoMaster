<?php session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_CSS/contato.css">
    <link rel="shortcut icon" type="imagex/png" href="./Imagens/Logo-head.ico">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Contate-nos</title>
</head>


<body>
    <H1 class="home"><a href="home/home.php"><i class="fas fa-home" aria-hidden="true" style="
        font-size: 20pt;
        color: #fd7cff;
    "> Voltar</i></a></H1>
    <section class="forms-container">
        
            <div class="container-form"> 
         
            
                <form method="POST" action="_PHP/conexaoContato.php" class="contato-form">
                    <h1 class="titulo">Contate-nos</h1>
                   
              
                    <div class="input-dig">
                        <i class="fas fa-user"></i>
                        <input type="text" name="nome_completo" id="nome_completo" placeholder="Nome completo" required>
                    </div>
                    <div class="input-dig">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="input-dig2">
                        <textarea name="msg" id="msg"  placeholder="Digite sua mensagem aqui..."></textarea>
                    </div>
                    <input type="submit" value="Enviar" class="btn solid">
                </form>
                <?php
                if(isset($_SESSION['msg3'])):
                ?>
                
                    <p style="
                background-color: green;
                padding: 10px;
                font-size: 10pt;
                align-content: center;
                justify-content: center;
                position: relative;
                width: 100%;
                height: 40px;
                font-family: cursive;
                border: none;
                text-align: center;
                color: #fff;
            ">Mensagem enviada com sucesso!</p>
            
            <?php
            unset($_SESSION['msg3']);
            endif;
            
            ?>

    </div>
</div>
            </div>
            
        </div>
        </div>

    </section>
    
    



</body>

</html>