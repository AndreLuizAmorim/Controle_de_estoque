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
    if($_post["editar"]){
        editar2($_post["editar"]);
    }
    if(isset($_post["name"]) and isset($_post["valor"]) and isset($_post["qtd"]) and isset($_post["validade"]) and isset($_post["validade"])){
        editar($_post["nome"], $_post["valor"], $_post["qtd"], $_post["validade"], $_post["editar"]);
    }
    ?>
</table>
<?php include_once ("template/footer.php"); ?>