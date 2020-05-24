<?php
$titulo = "Musicas";
include 'header.php';
?>




<?php
include_once 'controller/funcoes.php';
?>

	<div style="margin-left: 22%; margin-top: 0%" id="page-wrapper">
    	<div class="row">
      		<div class="col-lg-12">
      			<form action="criar_musica.php" method="none">
					<button>Adicionar música ao sistema</button>
				</form><br>
<?php
musicas();
?>

			</div>
		</div>
	</div>


<?php

include 'footer.php';
?>