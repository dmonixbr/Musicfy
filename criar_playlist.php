<?php
$titulo = "Criar playlist";
include 'header.php';
?>
<div style="text-align: center; margin: 20px; margin-left: 700px;margin-right: 350px;">
	<form action="controller/add_playlist.php" method="GET">
		<label>Nome: </label> <input class="form-control" type="text" placeholder="Nome da playlist" type="text" name="nome"><br>
		<label>Descrição: </label> <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao"></textarea><br>
		<button>Criar Playlist</button>
	</form>
</div>

<?php
include 'footer.php';
?>