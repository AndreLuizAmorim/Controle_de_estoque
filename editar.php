<?php 
        include_once ("template/header.php"); 
        include_once ("php/global.php");
        include_once ("php/produto.php");   
        if(isset($_POST["nome"]) and isset($_POST["valor"]) and isset($_POST["qtd"]) and isset($_POST["validade"]) and isset($_POST["fodase"])){
               
            editar($_POST["nome"], $_POST["valor"], $_POST["qtd"], $_POST["validade"], $_POST["fodase"]);
        }
        
    ?>

<table id="center">
    <tr>
        <td>nome</td>
        <td>valor</td>
        <td>qtd</td>
        <td>validade</td>
        <td></td>
    </tr>

</table>
    <?php
        
    if(isset($_GET["editar"])){
        
        editar2($_GET["editar"]);
    }
    ?>
<?php include_once ("template/footer.php"); ?>