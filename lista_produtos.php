<?php 
    include_once ("template/header.php");
    include_once ("php/global.php");
    include_once ("php/produto.php");
    if(isset($_POST["id"])){
            $id = $_POST["id"];
            delete($id);
    }
    
    ver();
?>
<?php include_once ("template/footer.php"); ?>
