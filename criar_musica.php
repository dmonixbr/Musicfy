<?php
$titulo = "Adicionar música";
include 'header.php';
?>


<div style="text-align: center; margin: 20px; margin-left: 700px;margin-right: 350px;">
	<form action="controller/add_musica.php" method="GET">
		<label>Nome: </label> <input class="form-control" type="text" placeholder="Nome da música" type="text" name="nome"><br>
		<label>Artista: </label> <input class="form-control" type="text" placeholder="Artista" type="text" name="autor"><br>
		<label>Album: </label> <input class="form-control" type="text" placeholder="Album"  type="text" name="album"><br>
		<label>Genero: </label> <input class="form-control" type="text" placeholder="Genero"  type="text" name="genero"><br>
		<label>Duração: </label> <input class="form-control" type="time" name="duracao"><br>
		<button>Adicionar música</button>
	</form>
</div>


<?php
include 'footer.php';
?>