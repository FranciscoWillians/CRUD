<?php


include_once 'C:\xampp\htdocs\CURSO DE PHP 7 node\CRUD\php_action\db_conect.php';
include_once 'C:\xampp\htdocs\CURSO DE PHP 7 node\CRUD\includes\header.php';
include_once 'C:\xampp\htdocs\CURSO DE PHP 7 node\CRUD\includes\mensagem.php';

?>

<div class="row">
    <div class="col s12 m6 push-m3 ">
        <h3 class="ligth">Clientes</h3>
        
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>email:</th>
                    <th>idade:</th>
                    <th>telefone:</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                $sql = "SELECT * FROM tarefa";
                $resultado = mysqli_query($connect, $sql);
                if (mysqli_num_rows($resultado) > 0):
                    

                
                while($dados=mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['nome'];?></td>
                    <td><?php echo $dados['sobrenome'];?></td>
                    <td><?php echo $dados['email'];?></td>
                    <td><?php echo $dados['idade'];?></td>
                    <td><?php echo $dados['telefone'];?></td>
                    <td><a href="editar.php?id=<?php echo $dados['id'];?>" class="btn-floating orange waves-effect waves-light"><i class="material-icons">edit</i></a></td>

                    <td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating red waves-effect waves-light modal-trigger"><i class="material-icons">delete_sweep</i></a></td>
                    
                    <!-- Modal Structure -->
                   <div id="modal<?php echo $dados['id'];?>"class="modal">
                     <div class="modal-content">
                          <h4>Olá</h4>
                              <p>Tem certeza que deseja apagar?</p>
                     </div>
                     <div class="modal-footer">
                         
                         <form action="./delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                            <button type="submit" name="btn-deletar" class="btn red">Sim, desejo apagar</button>
                            <a href="#!" class="modal-close waves-effect waves-green   btn-flat">Cancelar</a>
                     </div>
                    </div>

                </tr>   
                <?php
                    endwhile;
                else: ?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                <?php
                endif;
                ?>

                

            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="waves-effect waves-light btn"> Adicionar cliente</a>
    </div>



</div>





<?php
 include_once 'C:\xampp\htdocs\CURSO DE PHP 7 node\CRUD\includes\footer.php'
 ?>