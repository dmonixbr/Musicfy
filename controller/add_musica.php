<?php

$nome = $_GET['nome'];
$autor = $_GET['autor'];
$album = $_GET['album'];
$genero = $_GET['genero'];
$duracao = $_GET['duracao'];

include_once 'conexao.php';

$sql = "INSERT INTO musica(nome,autor,album,genero,duracao,status) VALUES ('$nome','$autor','$album','$genero','$duracao','1')";

$conexao->query($sql);
$conexao->close();

header('location: ../musicas.php');
?>