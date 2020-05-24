<?php 
include 'conexao.php';
include 'header.php';

$id_playlist = $_POST['idplaylist'];
$id_musica = $_POST['idmusica'];

$sql = "INSERT INTO musica_playlist(playlist, musica, status_musica) VALUES ('$id_playlist','$id_musica', '1')";

$conexao->query($sql);

?>
<div style="margin-left: 22%; margin-top: 0%" id="page-wrapper">
	<div class="titulo">
    	<div class="row">
      		<div class="col-lg-12">
      			<div class="musicat">
					<h1> Música adicionada com sucesso </h1>
					<a class="okda" href="../playlist.php?id=<?php echo $id_playlist; ?>">OK!</a>
				</div>
			</div>
		</div>
	</div>
</div>


