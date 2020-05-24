<?php
	
	$titulo = "Editar playlist";

	include 'header.php';

	include 'conexao.php';

	$id = $_GET['id'];

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];

		$sql = "UPDATE playlist SET nome='$nome', descricao = '$descricao' WHERE id=$id";


		if ($conexao->query($sql) === TRUE) {
		    header('location: ../index.php');
		}  else {
		    echo "Erro: " . $sql . "<br>" . $conexao->error. "<br>";
		}
		
	}

	$sql = "SELECT * FROM playlist WHERE id=$id";

	$playlist = $conexao->query($sql);

	$playlist = $playlist->fetch_assoc();

	$conexao->close();
?>
<div style="text-align: center; margin: 20px; margin-left: 700px;margin-right: 350px;">
	<form action="editar_playlist.php?id=<?php echo $id; ?>" method="POST">
		<label>Nome: </label> <input class="form-control" type="text" name="nome" placeholder="<?php echo $playlist['nome']; ?>"><br>
		<label>Descrição: </label> <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao"></textarea><br>
		<button>Editar playlist</button>
	</form>
</div>

<?php

include '../footer.php';

?>