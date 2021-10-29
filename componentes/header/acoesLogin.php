<?php
    session_start();

    require_once("../../database/conexao.php");

    #####   FUNÇÕES LOGIN E LOGOUT #######

    function realizarLogin($usuario, $senha, $conexao){


        //Vai até o banco e vê se tem algum registro igual
        $sql = "SELECT * FROM tbl_administrador
        WHERE usuario = '$usuario' AND senha = '$senha'";

        //Pega o resultado da busca
        $resultado = mysqli_query($conexao, $sql);

        //Pega os resultados da busca e os transforma em array/vetor/matriz
        $dadosUsuario = mysqli_fetch_array($resultado);

        //Se o banco conseguir coletar os dois dados de usuario e senha, ele entra no IF
        if(isset($dadosUsuario["usuario"]) && isset($dadosUsuario["senha"])  &&  password_verify($senha,isset($dadosUsuario["senha"]) ) ){

            echo 'LOGADO!';

            $_SESSION["usuarioId"] = $dadosUsuario["id"];
            $_SESSION["nome"] = $dadosUsuario["nome"];

        //    echo $_SESSION["usuarioID"];
        //    echo $_SESSION["nome"];

        header('location: ../../index.php');

        }else{
            
            header('location: ../../index.php');
        }

    }      



    switch ($_POST["acao"]) {
        case 'login':
            
            //O usuario vem do header via POST
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];

            //Requisita a função realizar Login(feita na linha 8)
            realizarLogin($usuario, $senha, $conexao);


            //var_dump($_POST);

            
            break;
        
    case 'logout';
            
            echo "FAZENDO LOGOUT";

            //Destroi a sessão deletando as variaveis dela
            session_destroy();

            header('location: ../../produtos/index.php');

            

        default:
        
            break;
    }
  
?>