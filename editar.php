<?php include_once ("template/global.php"); ?>
<?php include_once ("template/header.php"); ?>
<table>
    <tr>
        <td>nome</td>
        <td>valor</td>
        <td>qtd</td>
        <td>validade</td>
        <td></td>
    </tr>
    <?php
    if(isset($_POST["editar"])){
        editar2($_POST["editar"]);
    }
    if(isset($_POST["name"]) and isset($_post["valor"]) and isset($_post["qtd"]) and isset($_post["validade"]) and isset($_post["validade"])){
        editar($_POST["nome"], $_POST["valor"], $_POST["qtd"], $_POST["validade"], $_POST["editar"]);
    }
    ?>
</table>
<?php include_once ("template/footer.php"); ?>