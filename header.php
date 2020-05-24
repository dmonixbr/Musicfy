<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<style>
		table{
			width: 100%; 
			color: #21d75a;
			background-color: #282828;
			border-radius: 15px;
			border-collapse: collapse;
			text-align: center;
			}
			
			tr{
				border-radius: 15px;
			}

			tr:hover{
				background-color: #3a3a3a;
				transition: 0.5s;
				border-radius: 15px;
			}

			th{ 
			color: #21d75a;
			background-color: #282828;
			border-radius: 15px;
			border-collapse: collapse;
			text-align: center;
			padding-bottom: 7px;
			}

			td a{
				color: #21d75a;
			}
			td a:link{
				text-decoration: none;
			}
			td a:visited{
				text-decoration: none;
			}

			td a:hover{
				background-color: #21d75a;
				transition: 0.5s;
				border-radius: 5px;
				color: #282828;

			}
		
			button{
				background-color: #21d75a;
				color: #282828;
				border-radius: 15px;
				border: none;
				padding: 5px;
			}
			button:hover{
				background-color: #282828;
				color: #21d75a;
				transition: 0.5s;
			}

			input[type=submit]{
				background-color: #21d75a;
				color: #282828;
				border-radius: 15px;
				border: none;
			}

			input[type=submit]:hover{
				background-color: #282828;
				color: #21d75a;
				transition: 0.5s;
			}

			.titulo{
				background-color: #21d75a;
				border-radius: 15px;
			}

			.musicat{
				text-align: center;
			}
			.atributo{
				font-size: 25px;
			}

			label{
				color:#21d75a;
			}

	</style>
</head>
<body style="background-color: #121212">
	<div class="nav-side-menu">
    <div class="brand">Musicfy</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                
                <li>
                	<a href="index.php">
                  		<i class="fa fa-home" aria-hidden="true"></i> Página Inicial
                  	</a>
                </li>
            	

                
                <li>
                	<a href="musicas.php">
                	  <i class="fa fa-music" aria-hidden="true"></i> Musicas
                	</a>
                </li>

                 <li>
                  <a href="criar_playlist.php">
                  <i class="fa fa-plus-square" aria-hidden="true"></i> Criar Playlist
                  </a>
                  </li>

            </ul>
     </div>
</div>