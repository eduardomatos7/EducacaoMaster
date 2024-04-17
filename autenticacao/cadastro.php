<?php/*

include_once("conexao.php");


    $nome_completo=$_POST['nome_completo'];
    $usuario=$_POST['usuario'];
    $data_nasc=$_POST['data_nasc'];
    $email=$_POST['email'];
    $senha=MD5($_POST['senha']);
    $conf_senha=MD5($_POST['conf_senha']);
    //colocar senha e confirmar senha iguais

    $sql="INSERT INTO pessoas (nome_completo, usuario, data_nasc, email, senha, conf_senha) 
    VALUES ('$nome_completo', '$usuario', '$data_nasc', '$email', '$senha', '$conf_senha')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado com sucesso";
        header('Location: login.php');
    }
    else {
        echo "não foi possível cadastrar" .mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
*/
?>
<?php
session_start();
include_once "../includes/conexao.php";


if(empty($_POST['nome_completo'])){
    $mensagem = "Preencha o campo nome";
}
    else if(empty($_POST['usuario'])){
    $mensagem = "Preencha o campo usuário";
}
    else if(empty($_POST['data_nasc'])){
    $mensagem = "Preencha o campo senha";
    }
    else if(empty($_POST['email'])){
        $mensagem = "Preencha o campo senha";
    }
    else if(empty($_POST['senha'])){
        $mensagem = "Preencha o campo senha";
    }
    else if(empty($_POST['conf_senha'])){
        $mensagem = "Preencha o campo senha";
    }
else{

    $nome_completo =$_POST['nome_completo'];
    $usuario = $_POST['usuario'];
    $data_nasc = $_POST['data_nasc'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['conf_senha'];

    $sql = "insert into pessoas (nome_completo, usuario, data_nasc, email, senha, conf_senha) values (?,?,?,?,?,?)";

    $stmt = $mysqli->prepare($sql);

    if($stmt){

        $stmt->bind_param("ssssss", $nome_completo, $usuario, $data_nasc, $email, md5($senha), md5($conf_senha));
        $stmt->execute();

        if($stmt->affected_rows > 0){
            $_SESSION['msg2'] = true;
        }else{
            $mensagem = "Não foi possível inserir!";
        }
        $stmt->close();
    }else{

        $mensagem = "<p class = 'erro'>Erro ao inserir </p>";
    }
}
$mysqli->close();
header("location: ../login.php");

?>