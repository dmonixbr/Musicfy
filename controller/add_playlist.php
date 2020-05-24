<?php

$nome = $_GET['nome'];
$descricao = $_GET['descricao'];

require_once 'conexao.php';

$sql = "INSERT INTO playlist(nome,descricao,status) VALUES ('$nome','$descricao','1')";

$conexao->query($sql);

$conexao->close();

header('location:../index.php')

?>