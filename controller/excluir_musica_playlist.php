<?php
$id_musica = $_POST['idmusica'];
$id_playlist = $_POST['idplaylist'];

include 'conexao.php';
include 'header.php';

$sql = "UPDATE musica_playlist SET status_musica = '0' WHERE playlist = '$id_playlist' and musica = '$id_musica'";

$conexao->query($sql);

?>

<div style="margin-left: 22%; margin-top: 0%" id="page-wrapper">
	<div class="titulo">
    	<div class="row">
      		<div class="col-lg-12">
      			<div class="musicat">
					<h2>música excluida da playlist com sucesso!</h2>

					<a href="../playlist.php?id=<?php echo $id_playlist; ?>">OK!</a>
				</div>
			</div>
		</div>
	</div>
</div>