<?php
function playlists(){
	$conexao = new mysqli("localhost","root","","Musicfy");
	$sql = "SELECT * FROM playlist WHERE status = '1'";
	$playlist = $conexao->query($sql);

	if($playlist->num_rows > 0){
?>
		<table>
			<tr>
				<th>ID</th>
				<th>Playlist</th>
				<th>Descrição</th>
				<th>Opções</th>
			</tr>
<?php
		while($linha = $playlist->fetch_assoc()){
?>
			<tr>
				<th><?php echo $linha['id']; ?></th>
				<td><a href="playlist.php?id=<?php echo $linha['id']; ?>"><?php echo $linha['nome']; ?></td>
				<td><?php echo $linha['descricao']; ?></td>
				<td><a href="controller/editar_playlist.php?id=<?php echo $linha['id']; ?>">Editar</a>|<a href="controller/excluir_playlist.php?id=<?php echo $linha['id']; ?>">Excluir</a></td>
			</tr>
<?php
		}
		echo "</table>";
	}
	else
		echo "Nenhuma playlist registrada";
}

function musicas(){
	$conexao = new mysqli("localhost","root","","Musicfy");
	$sql = "SELECT * FROM musica WHERE status = '1'";
	$musica = $conexao->query($sql);

	if($musica->num_rows > 0){
?>
		<table>
			<tr>
				<th>ID</th>
				<th>Música</th>
				<th>Artista</th>
				<th>Album</th>
				<th>Genero</th>
				<th>Duração</th>
				<th>Opções</th>
			</tr>
<?php
		while($linha = $musica->fetch_assoc()){
?>
			<tr>
				<th><?php echo $linha['id']; ?></th>
				<td><a href="musica.php?id=<?php echo $linha['id']; ?>"><?php echo $linha['nome']; ?></a></td>
				<td><?php echo $linha['autor']; ?></td>
				<td><?php echo $linha['album']; ?></td>
				<td><?php echo $linha['genero']; ?></td>
				<td><?php echo $linha['duracao']; ?></td>
				<td><a href="controller/editar_musica.php?id=<?php echo $linha['id']; ?>">Editar</a>|<a href="controller/excluir_musica.php?id=<?php echo $linha['id']; ?>">Excluir</a></td>
				<td>
					<form action="controller/musica_playlist.php" method="POST">
						<input type="hidden" name="idmusica" value="<?php echo $linha['id']; ?>">
						<input type="submit" value="Add a uma Playlist">
					</form>
				</td>
			</tr>
<?php
		}
		echo "</table>";
	}
	else "Não existem músicas registradas no sistema";
}

function musica_playlist($_id){
	$conexao = new mysqli("localhost","root","","Musicfy");
	$sql = "SELECT * FROM playlist WHERE status = '1'";
	$playlists = $conexao->query($sql);								#variavel usada pra teste da lista de filmes

	if($playlists->num_rows > 0){                              #checa se tem alguma coisa no BD
		echo "<table>";
		echo "<tr><th>ID</th><th>Nome</th><th>Opções</th></tr>";

		while($linha = $playlists->fetch_assoc()) {	#gerador da tabela
 ?>					
			<tr>							
			<td><?php echo $linha['id']; ?></td>
			<td><?php echo $linha['nome']; ?></td>
			<td> <form action="adesao_m_pl.php" method="POST">
				<input type="hidden" name="idmusica" value="<?php echo $_id; ?>">
				<input type="hidden" name="idplaylist" value="<?php echo $linha['id']; ?>">
				<input type="submit" value="Adicionar">
			</form> </td>
			</tr>
<?php 
	}
		echo "</table>";
	}
	else echo "0 playlists registradas"; 
}


function exibicao_playlist($_id){
	$id = $_id;
	$conn = new mysqli("localhost","root","","Musicfy");
	$sql = "SELECT musica FROM musica_playlist WHERE playlist = '$id'and status_musica = '1'";

	$musica = $conn->query($sql);								#variavel usada pra entrada da query
	if($musica->num_rows > 0){
?>
	<table>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Artista</th>
			<th>Album</th>
			<th>Genero</th>
			<th>Duração</th>
			<th>Opções</th>
		</tr>
<?php
	while($resultado = $musica->fetch_assoc()){
		foreach ($resultado as $key) {
			$sql1 = "SELECT * FROM musica WHERE id = '$key'"; #exibir a query apenas
			$musica1 = $conn->query($sql1);
			while($linha = $musica1->fetch_assoc()){ ?>
				<tr>
					<th><?php echo $linha['id']; ?></th>
					<td><a href="musica.php?id=<?php echo $linha['id']; ?>"><?php echo $linha['nome']; ?></a></td>
					<td><?php echo $linha['autor']; ?></td>
					<td><?php echo $linha['album']; ?></td>
					<td><?php echo $linha['genero']; ?></td>
					<td><?php echo $linha['duracao']; ?></td>
					<td><form action="controller/excluir_musica_playlist.php" method="POST">
						<input type="hidden" name="idmusica" value="<?php echo $linha['id']; ?>">
						<input type="hidden" name="idplaylist" value="<? echo $id; ?>">
						<input type="submit" name="" value="Excluir">
					</form></td>
				</tr>
<?php
			}
		}
	}
}
else 
	echo "nenhuma música registrada na playlist";
}

?>