<?php

$titulo = "Musicfy";
include 'header.php';
include 'controller/funcoes.php';
?>


	<div style="margin-left: 22%; margin-top: 0%" id="page-wrapper">
		<div class="titulo">
    		<div class="row">
      			<div class="col-lg-12">
      				<h1>Musicfy</h1>
      				<p>O seu catálogo de músicas e playlists!</p><br>
					<?php
					playlists();
					?>
				</div>
			</div>
		</div>
	</div>


<?php
include 'footer.php';
?>