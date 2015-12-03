<?php
if(file_exists("global.php")){
    include_once'global.php';
}else{
    include_once'php/global.php';
}

function cadastrou(){
    if(
        isset($_POST['nome']) and
        isset($_POST['email']) and
        isset($_POST['senha'])
    ){
    $sql = "INSERT INTO `login`(`nome`, `email`, `senha`) VALUES (:nome, :email,:senha);";
    $prepare = conexao()->prepare($sql);
    $prepare->bindValue(":nome", $_POST['nome'] );
    $prepare->bindValue(":email", $_POST['email'] );
    $prepare->bindValue(":senha", $_POST['senha'] );
    $prepare->execute();
    
    }
    }
    
    function estalogado() {
        if(
                isset($_SESSION['login'])){
                    return true;
                }else {
                return false;
                }
        }

    function login(){
        if(
        isset($_POST['email']) and
        isset($_POST['senha'])
        ){
            $sql = "SELECT * FROM `login` WHERE `email`=:email and `senha`=:senha;";
            $prepare_usuario = conexao()->prepare($sql);
            $prepare_usuario->bindValue(":email", $_POST['email']);
            $prepare_usuario->bindValue(":senha", $_POST['senha']);
            $prepare_usuario->execute();
            if($prepare_usuario->rowCount() == 1){
                $_SESSION['login'] = $prepare_usuario->fetch(PDO::FETCH_ASSOC);
                header("Location: /cadastro_produtos.php");
            }  else {
                $erro = "FUDEU DEU MERDA!";
            }
        }
    }