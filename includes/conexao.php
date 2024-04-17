<?php

$host = "localhost:3306";
$usuarioBD = "root";
$senhaBD = "21051806root@";
$nomebd = "cadastro-form";

$mysqli = new mysqli($host, $usuarioBD, $senhaBD, $nomebd);

if(!$mysqli){
    die("Erro ao conectar com o banco de dados");
}
//else{
   // echo "Conexão efetuada com sucesso!";
//}

?>