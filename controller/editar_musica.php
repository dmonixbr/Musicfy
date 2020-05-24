<?php
	
	$titulo = "Editar música";

	include 'header.php';

	include 'conexao.php';

	$id = $_GET['id'];

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$nome = $_POST['nome'];
		$autor = $_POST['autor'];
		$album = $_POST['album'];
		$genero = $_POST['genero'];
		$duracao = $_POST['duracao'];

		$sql = "UPDATE musica SET nome='$nome', autor='$autor', album='$album', genero='$genero', duracao='$duracao' WHERE id=$id";


		if ($conexao->query($sql) === TRUE) {
		    header('location: ../musicas.php');
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
	<form action="editar_musica.php?id=<?php echo $id; ?>" method="POST">
		<label>Nome: </label> <input class="form-control" type="text" name="nome" placeholder="<?php echo $musica['nome']; ?>"><br>
		<label>Artista: </label> <input class="form-control" type="text" name="autor" placeholder="<?php echo $musica['autor']; ?>"><br>
		<label>Album: </label> <input class="form-control" type="text" name="album" placeholder="<?php echo $musica['album']; ?>"><br>
		<label>Genero: </label> <input class="form-control" type="text" name="genero" placeholder="<?php echo $musica['genero']; ?>"><br>
		<label>Duração: </label> <input class="form-control" type="time" name="duracao" value="<?php echo $musica['duracao']; ?>"><br>
		<button>Editar música</button>
	</form>
</div>

<?php

include '../footer.php';

?>