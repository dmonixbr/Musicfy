<?php
	
	$titulo = "Excluir música";

	include 'header.php';

	include 'conexao.php';

	$id = $_GET['id'];

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$sql = "UPDATE musica SET status = '0' WHERE id = '$id'";			#optei por nao usar DROP para excluir

		if ($conexao->query($sql) === TRUE) {
		    $conexao->close();
		    header("Location: ../musicas.php");
			die();
		}  else {
		    echo "Erro: " . $sql . "<br>" . $conexao->error. "<br>";
		}
		
	}

	$sql = "SELECT * FROM musica WHERE id=$id";

	$musica = $conexao->query($sql);

	$musica = $musica->fetch_assoc();

	$conexao->close();
?>
<div style="text-align: center; margin: 20px; margin-left: 700px;margin-right: 350px;">
	<form action="excluir_musica.php?id=<?php echo($id);?>" method="POST">
		<label>Você tem certeza que deseja excluir <?php echo $musica['nome']; ?></label><br>
		<button>Confirmar</button>
	</form>
	<br>
	<a href="../musicas.php"><button>Cancelar</button></a>
</div>
<?php

include '../footer.php';

?>