
<?php
session_start();
include_once "../includes/conexao.php";

if(empty($_POST['usuario']) || empty($_POST['senha'])){

    $_SESSION['msg'] = "Preencha todos os campos!";
    header("location: ../login.php");

}else{

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "select * from pessoas where usuario = ? and senha = ?";

    $stmt = $mysqli->prepare($sql);

    if($stmt){

        $stmt->bind_param("ss",$usuario, md5($senha));
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows == 1){

            $pessoas = $result->fetch_object();
            $_SESSION['autenticado'] = true;
            $_SESSION['usuario'] = $pessoas->usuario;
            $stmt->close();
            $mysqli->close();

            header('location: ../home/home.php');

        }else{

            $_SESSION['msg'] = true;
            header('location: ../login.php');
        }
    }else{

        header('Location: ../login.php');

    }


}

?>
<?php/*
session_start();
//print_r($_REQUEST);
if(isset($_POST['submit'])
&& !empty ($_POST['usuario']) 
&& !empty($_POST['senha']))
{
//se existir, acessar
include_once ('conexao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
//print_r('email: ' . $usuario);
//print_r('Senha: ' . $senha);
$sql = "SELECT * FROM  pessoas WHERE usuario = '$usuario' and senha = MD5('$senha')"; //verificar no banco de dados os dados inseridos no campo usuario e senha
$result = $conexao->query($sql);
//print_r($result);

if(mysqli_num_rows($result) < 1){
    $_SESSION['msg'] = true;
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: login.php');
    

}
else {
    
    header('Location: home.php');
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;

}
}else{
    //não acessar
   header('Location: login.php');
   
}
*/
?>



