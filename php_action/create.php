<?php
session_start();
require_once 'db_conect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);

    $sql = "INSERT INTO tarefa (nome, sobrenome, email, idade, telefone) VALUES ('$nome','$sobrenome','$email','$idade','$telefone')";

    if (mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso";
        header('Location: ./index.php?');
    else:
        $_SESSION['mensagem'] = "Cadastrado inválido";
        header('Location: ../index.php?');
  
    endif;

endif;
?>