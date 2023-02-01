<?php
include_once 'C:\xampp\htdocs\CURSO DE PHP 7 node\CRUD\php_action\db_conect.php';
include_once 'C:\xampp\htdocs\CURSO DE PHP 7 node\CRUD\includes\header.php';

if (isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM tarefa WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3 ">
        <h3 class="ligth">EDITAR CADASTRO DE CLIENTE</h3>
        <form action="./update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $dados['id']?>">
            <div class="input-field col s12 ">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']?>">
                <label for="nome">NOME</label>
            </div>

            <div class="input-field col s12 ">
                <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']?>">
                <label for="sobrenome">SOBRENOME</label>
            </div>

            <div class="input-field col s12 ">
                <input type="text" name="email" value="<?php echo $dados['email']?>" id="email">
                <label for="email">E-MAIL</label>
            </div>
                
            <div class="input-field col s12 ">
                <input type="text" name="idade" value="<?php echo $dados['idade']?>" id="idade">
                <label for="idade">IDADE</label>
            </div>

            <div class="input-field col s12 ">
                <input type="text" name="telefone" value="<?php echo $dados['telefone']?>" id="telefone">
                <label for="telefone">NÚMERO</label>
            </div>

            <button type="submit" name= "btn-editar" class="btn">Atualizar</button>
            <a href="index.php" class="btn green">Lista de clientes</a>
                
        </form>
        
       
    
    </div>



</div>





<?php
 include_once 'C:\xampp\htdocs\CURSO DE PHP 7 node\CRUD\includes\footer.php'
?>