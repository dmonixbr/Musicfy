<?php 
$id = $_POST['idmusica'];
include 'header.php';
include 'funcoes.php';
include 'conexao.php';

$sql = "SELECT * FROM musica WHERE id='$id'";
$nome = $conexao->query($sql);
$nome = $nome->fetch_assoc();
?>
<div style="margin-left: 22%; margin-top: 0%" id="page-wrapper">
	<div class="titulo">
    	<div class="row">
   			<div class="col-lg-12">
   				
<?php

echo "<h3>Adicionar " .  $nome['nome'] .  " a playlist:</h3>";

musica_playlist($id); #funcao que leva id do filme e o id do usario na lista de usuarios.
 ?>
				
			</div>
		</div>
	</div>
</div>