<?php
include 'controller/conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM musica WHERE id = '$id'";
$musica = $conexao->query($sql);
$musica = $musica->fetch_assoc();

$titulo = $musica['nome'];
include 'header.php';
?>
	<div style="margin-left: 22%; margin-top: 0%" id="page-wrapper">
		<div class="titulo">
    		<div class="row">
      			<div class="col-lg-12">
					<div class="musicat">
						<h1><?php echo($musica['nome']); ?></h1>
						<h4><?php echo($musica['autor']); ?></h4><br><br>
					
						<p class="atributo">Album: </p>
						<p><?php echo($musica['album']); ?></p><br>
						<p class="atributo">Genero: </p>
						<p><?php echo($musica['genero']); ?></p><br>
						<p class="atributo">Duração: </p>
						<p><?php echo($musica['duracao']); ?></p><br>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
include 'footer.php';
?>