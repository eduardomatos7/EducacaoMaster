<?php
session_start();
	include_once "../includes/conexao.php";
    if(empty($_POST['nome_completo'])){
        $mensagem = "Preencha o campo nome";
    }
        else if(empty($_POST['email'])){
        $mensagem = "Preencha o campo email";
    }
        else if(empty($_POST['msg'])){
        $mensagem = "Preencha o campo mensagem";
        }
    else{
    
	$nome_completo = $_POST['nome_completo'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];
	
	$sql = "insert into contatos (nome_completo, email, msg) values (?,?,?)";

    $stmt = $mysqli->prepare($sql);

    if($stmt){

        $stmt->bind_param("sss", $nome_completo, $email, $msg);
        $stmt->execute();
        
        
        if($stmt->affected_rows > 0){
            $_SESSION['msg3'] = true;
        header ('Location: ../contato.php');
        }else{
            
        }
        $stmt->close();
    }else{

        
    }
    }
$mysqli->close();
header('location: ../contato.php');

?>