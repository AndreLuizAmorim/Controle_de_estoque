<?php 
    include_once ("template/header.php");
    include_once ("php/global.php");
    include_once ("php/produto.php");
    include_once ("php/usuario.php");
    if(!estalogado()){
        header("Location: /index.php");
    }
    cadastro();
    
?>

<a href="sair.php">SAIR</a>
<form method="post">
    <div class="row login">
        <div class="large-12 small-12 medium-12 columns">
            <label>
                Nome:
                <input type="text" name="nome" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <label>
                Valor:
                <input type="text" name="valor" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <label>
                Quantidade:
                <input type="text" name="qtd" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <label>
                Data de Validade (se tiver):
                <input type="text" name="validade" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <input type="submit" Value="Cadastrar" class="button tiny botao" />
        </div>
    </div>
</form>

<form action="lista_produtos.php">
    <div class="large-12 small-12 medium-12 columns">
            <input type="submit" Value="Ver Produtos cadastrados" class="button tiny botao" />
        </div>
</form>
<?php include_once ("template/footer.php"); ?>