<?php

$assunto = $_POST['assunto'];

$corpo = "
    SOLICITAÇÃO PELO FORMULÁRIO DE CONTATO
    ASSUNTO: " . $_POST['assunto'] . "
    NOME: " . $_POST['nome'] . "
    TELEFONE: " . $_POST['telefone'] . "
    EMAIL: " . $_POST['email'] . "
    MENSAGEM: " . $_POST['mensagem'] . "
        
        ";
mail('masterconta.projetotecnologia@gmail.com', $assunto, $corpo, 'From: contato@projetotecnologia.com');

header('Location:../index.html');
?>
