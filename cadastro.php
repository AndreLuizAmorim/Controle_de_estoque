<?php 
    include_once ("template/header.php");
    include_once ("php/global.php"); 
    include_once ("php/usuario.php"); 
    if(estalogado()){
        header("Location: /index.php");
    }
        cadastrou( );
    
?>

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
                Email:
                <input type="email" name="email" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <label>
                senha:
                <input type="password" name="senha" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <input type="submit" Value="Cadastrar" class="button tiny botao" />
        </div>
    </div>
</form>

<form action="index.php">
    <div class="large-12 small-12 medium-12 columns">
            <input type="submit" Value="Voltar para Login" class="button tiny botao" />
        </div>
</form>
<?php include_once ("template/footer.php"); ?>