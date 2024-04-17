<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION ['autenticado']) == true) and (!isset($_SESSION['usuario']) == true))
{
    unset($_SESSION['autenticado']);
    unset($_SESSION['usuario']);
    header ('Location: ../login.php');
}
$logado = $_SESSION ['usuario'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../_CSS/estilo.css">
    <link rel="stylesheet" type="text/css" href="../_CSS/Crianças.css">
    <link rel="shortcut icon" type="imagex/png" href="../Imagens/Logo-head.ico">
    <title>Notícias</title>
</head>

<body>


    <!-- ============= ÁREA DE CONTEÚDO ============= -->

    <header id="acima-menu">
        <div id="arealogo">
            <div id="logo">
                <!-- ============= LOGOTIPO ============= -->
                <img src="../Imagens/Logo.png" height="85px">
            </div>
        </div>

    </header>
    <div class="larg-100">
        <nav id="menu">
            <!-- ============= MENU DA PÁGINA ============= -->
            <ul>
                <li><a href="home.php"> Início </a></li>
                <li><a href="Crianças.php"> Para crianças </a></li>
                <!-- <li><a href="#"> Quem Somos </a></li> 
                talvez um novo link pro menu-->
                <li><a href="../contato.php"> Contate-nos </a></li>
                <a href="../autenticacao/deslogar.php"> <button id="btnSair"> Sair </button> </a>
            </ul>
            <div id="Barra-Pes">
            <form action="../buscar/busca.php" method="GET">
                    <input placeholder="Pesquisar" type="text" name="nomes_titulos">
                    <button style="
    border: 0.5px solid black;
    background-color: #ffffff;
    border-radius: 5px;
    padding: 4px;
    cursor: pointer;
    outline: none;
"> Buscar</button>
                </form>
                <!--"Placeholder" Atribui um texto padrão dentro do input-->
            </div>
        </nav>
    </div>
    <main>
        <div class="content">
            <div class="video">
                <iframe src="https://www.youtube.com/embed/h7zEYi1TkDM" width="480px"
    height="260px" frameborder="0"></iframe>
            </div>
            <div class="titulo">
                <h1 class="titulo"> Educação Sexual para crianças </h1>
                <p>Se você tem filho(a), sobrinho(a), irmão(a) pequeno(a) ou até mesmo alguma criança próxima e 
                    gostaria de ensiná-la sobre Educação Sexual, você está no lugar certo! Além da conversa
                    essencial que você deve ter com eles, essa área também será uma grande fonte de ensinamentos para
                    essas crianças. Escolha o conteúdo desejado e deixe-a aprender mais, garanto que isso dará uma percepção melhor em caso de perigo .</p>
            </div>

        </div>
        <div class="content-02">
            <div class="caixas" id="caixa1">
                <div class="titulo-caixa">
                    <h3>VÍDEO</h3>
                    
                </div>
                <!-- =============== AQUI ENTRARÁ ALGUNS LINKS PARA ACESSO FUTURAMENTE, EXTERNOS OU INTERNOS ============*/-->
                <a href="https://www.youtube.com/watch?v=e5R0sQ9QWkM&t=8s" target="_blank"><button class="btn-caixa">Assistir</button></a>
                <p>Sinais da violência sexual infantil.</p>
            </div>
            <div class="caixas" id="caixa2">
                <div class="titulo-caixa">
                    <h3>VÍDEO</h3>
                   
                </div>
                <!-- =============== AQUI ENTRARÁ ALGUNS LINKS PARA ACESSO FUTURAMENTE, EXTERNOS OU INTERNOS ============*/-->
                <a href="https://www.youtube.com/watch?v=6UfLklzLjhs" target="_blank"><button class="btn-caixa">Assistir</button></a>
            </div>
            <div class="caixas" id="caixa3">
                <div class="titulo-caixa">
                    <h3>HISTORINHA</h3>
                    
                </div>
                <!-- =============== AQUI ENTRARÁ ALGUNS LINKS PARA ACESSO FUTURAMENTE, EXTERNOS OU INTERNOS ============*/-->
                <a href="https://ifan.com.br/wp-content/uploads/2020/04/Caroline-Arcari-Pipo-e-Fifi.pdf" target="_blank"> <button class="btn-caixa">Baixar e ler</button></a>
            </div>
            <div class="caixas" id="caixa4">
                <div class="titulo-caixa">
                    <h3>VÍDEO</h3>
                    <p>Como se defender?</p>
                </div>
                <!-- =============== AQUI ENTRARÁ ALGUNS LINKS PARA ACESSO FUTURAMENTE, EXTERNOS OU INTERNOS ============*/-->
                <a href="https://www.youtube.com/watch?v=e5R0sQ9QWkM&t=75s" target="_blank"><button class="btn-caixa">Assistir</button></a>
            </div>
            <div class="caixas" id="caixa5">
                <div class="titulo-caixa">
                    <h3>VÍDEO</h3>
                    
                </div>
                <!-- =============== AQUI ENTRARÁ ALGUNS LINKS PARA ACESSO FUTURAMENTE, EXTERNOS OU INTERNOS ============*/-->
                <a href="https://www.youtube.com/embed/rDL0xFaNGw8" target="_blank"><button class="btn-caixa">Assistir</button></a>
            </div>
        </div>

    </main>

    <footer id="rodape">
    <H1>Integrantes: Eduardo Matos Ferreira Silva<br>
                Carla Manuela de Oliveira<br>
                César de Jesus Faria<br>
                Virlen Crislane C. da Silva
            </H1><br />
            <p>Copyright © WebMasters, 2021 - 2022. Todos os Direitos Reservados.</p>
    </footer>

</body>

</html>