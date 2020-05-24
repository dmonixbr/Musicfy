<?php
include 'controller/conexao.php';


$id = $_GET['id'];

$sql = "SELECT * FROM playlist WHERE id = '$id'";
$playlist = $conexao->query($sql);
$playlist = $playlist->fetch_assoc();

$titulo = $playlist['nome'];
include 'header.php';
?>


<div style="margin-left: 22%; margin-top: 0%" id="page-wrapper">
	<div class="titulo">
    <div class="row">
   		<div class="col-lg-12">
			<h1><?php echo($playlist['nome']); ?></h1>
			<p><?php echo($playlist['descricao']); ?></p><br>

<?php 
require_once 'controller/funcoes.php';

exibicao_playlist($id);
?>
		</div>
	</div>
</div>
</div>
<?php
include 'footer.php';
?>