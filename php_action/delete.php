<?php
session_start();
require_once 'db_conect.php';

if(isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);



    $sql = "DELETE FROM tarefa WHERE id = '$id'";
    
    if (mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso";
        header('Location: ./index.php?');
    else:
        $_SESSION['mensagem'] = "Erro ao deletar";
        header('Location: ../index.php?');
  
    endif;
endif;