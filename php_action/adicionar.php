<?php
include_once 'C:\xampp\htdocs\CURSO DE PHP 7 node\CRUD\includes\header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3 ">
        <h3 class="ligth">CADASTRO DE CLIENTE</h3>
        <form action="./create.php" method="post">
            <div class="input-field col s12 ">
                <input type="text" name="nome" id="nome">
                <label for="nome">NOME</label>
            </div>

            <div class="input-field col s12 ">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">SOBRENOME</label>
            </div>

            <div class="input-field col s12 ">
                <input type="text" name="email" id="email">
                <label for="email">E-MAIL</label>
            </div>
                
            <div class="input-field col s12 ">
                <input type="text" name="idade" id="idade">
                <label for="idade">IDADE</label>
            </div>

            <div class="input-field col s12 ">
                <input type="text" name="telefone" id="telefone">
                <label for="telefone">NÚMERO</label>
            </div>

            <button type="submit" name= "btn-cadastrar" class="btn">Cadastrar</button>
            <a href="index.php" class="btn green">Lista de clientes</a>
                
        </form>
        
       
    
    </div>



</div>





<?php
 include_once 'C:\xampp\htdocs\CURSO DE PHP 7 node\CRUD\includes\footer.php'
 ?>