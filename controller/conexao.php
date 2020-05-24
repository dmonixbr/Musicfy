<?php

$servidor = "localhost"; // Sempre será localhost se executado no próprio computador
$username = "root"; // Costuma ser root por padrão
$senha = ""; // Costuma ser root ou vazio por padrão
$banco = "Musicfy";

$conexao = new mysqli($servidor, $username, $senha, $banco); // Conecta com o banco

if ($conexao->connect_error) { // Testa se houve erro na conexão.
	die("Falha na conexão: " . $conexao->connect_error);
}

?> 