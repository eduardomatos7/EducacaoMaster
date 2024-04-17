<?php
session_start();
if(!isset  ($_GET['nomes_titulos'])){
    header('Location: ../home/home.php');

}
$nome = "%".trim($_GET['nomes_titulos'])."%"; //a porcentagem esta concatenada para que na hora da pesquisa busque pela palavra independete da posição

$dbh = new PDO('mysql:host=localhost;dbname=cadastro-form', 'root', '21051806root@');

$sth = $dbh->prepare('SELECT * FROM buscar WHERE titulo LIKE :titulo ');
$sth->bindParam(':titulo', $titulo, PDO::PARAM_STR);
$sth->execute();
$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
print_r($resultados);
exit;
?>