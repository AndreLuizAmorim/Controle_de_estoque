<?php

function conexao(){
    return new PDO("mysql:host=127.0.0.1:3307;dbname=mercadin", "root", "usbw");
}
function cadastro($nome, $valor, $qtd, $dt_val){
    $sql = "INSERT INTO `cadastro`(`nome`, `valor`, `qtd`, `validade`) VALUES (:nome,:valor,:qtd,:validade);";
    $prepare = conexao()->prepare($sql);
    $prepare->bindValue(":nome", $nome );
    $prepare->bindValue(":valor", $valor );
    $prepare->bindValue(":qtd", $qtd);
    $prepare->bindValue(":validade", $dt_val );
    $prepare->execute();

    $sqlh = "INSERT INTO `historico`(`nome`, `valor`, `qtd`, `validade`) VALUES (:nome,:valor,:qtd,:validade);";
    $preparo = conexao()->prepare($sqlh);
    $preparo->bindValue(":nome", $nome );
    $preparo->bindValue(":valor", $valor );
    $preparo->bindValue(":qtd", $qtd);
    $preparo->bindValue(":validade", $dt_val );
    $preparo->execute();
}

function ver(){
    $sql = "SELECT * FROM `cadastro`;";
    $prepare = conexao()->prepare($sql);
    $prepare->execute();
    while ($linha = $prepare->fetch(PDO::FETCH_ASSOC)){
        ?>
    <table id="center">
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Valor</td>
                <td>Quantidade</td>
                <td>Data de Validade</td>
            </tr>
            <tr>
                <td><?php echo $linha["idcadastro"]; ?></td>
                <td><?php echo $linha["nome"]; ?></td>
                <td><?php echo $linha["valor"]; ?></td>
                <td><?php echo $linha["qtd"]; ?></td>
                <td><?php echo $linha["validade"]; ?></td>
                <td>
                    <form method="post">
                        <input type="submit" class="tiny button botao" value="excluir" />
                        <input type="hidden" name="id" value="<?php echo $linha["idcadastro"]; ?>" />
                    </form>
                </td>
                <td>
                    <form action="editar.php">
                        <input type="submit" class="tiny button botao" value="editar" />
                    </form>
                </td>
            </tr>
    </table>
        <?php
        }
    }
    function delete($id) {
        $sql= "DELETE FROM `cadastro` WHERE idcadastro=:id;";
        $prepare = conexao()->prepare($sql);
        $prepare->bindValue(":id", $id);
        $prepare->execute();
    }
    
    function cadastrou($email, $senha){
    $sql = "INSERT INTO `login`(`email`, `senha`) VALUES (:email,:senha);";
    $prepare = conexao()->prepare($sql);
    $prepare->bindValue(":email", $email );
    $prepare->bindValue(":senha", $senha );
    $prepare->execute();
    
    }
    
    function login(){
    $sql = "SELECT `idlogin`, `email`, `senha` FROM `login` WHERE `email`=:email and `senha`=:senha;";
    $prepare_usuario = conexao()->prepare($sql);
    $prepare_usuario->bindValue(":email", $_POST['email']);
    $prepare_usuario->bindValue(":senha", $_POST['senha']);
    $prepare_usuario->execute();

    if($prepare_usuario->rowCount() == 1){
        header("Location: cadastro_produtos.php");
        return;
    }

    return "Login ou senha inválidos!";
}