<!DOCTYPE HTML>
<!--
	Snapshot by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
	<title>Acción Digital</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="/assets/css/main.css" />	
	<link rel="stylesheet" href="/assets/css/carrito/bootstrap.min.css">
	
	<script src="/assets/js/jquery.min.js"></script>

</head>
<body>
	<div class="page-wrap">

		<section id="main">

			<section id="galleries">

				
				<form action="#" method="">
					<div data-role="fieldcontain">
						<label for="title">Título del evento:</label>
						<input type="text" name="title" id="title" value=""  /><br /><br />
						<!-- <label for="IdEvento">Carpeta:</label>
						<input type="text" name="IdEvento" id="IdEvento" value=""  /><br /><br /><br /><br /> -->
						<label for="IdEvento">Carpeta:</label>
						<select name="IdEvento" id="IdEvento" value="">  

								<?php 
								error_reporting (E_ALL ^ E_NOTICE);
								function debug_to_console($data) {
								    $output = $data;
								    if ( is_array( $output ) )
								        $output = implode( ',', $output);

								    echo "<script>console.log( 'Debug: " . $output . "' );</script>";
								}
								 ?> 

								<?php
									$directorio = opendir($_SERVER["DOCUMENT_ROOT"]."/assets/images/eventos/");
									$carpetas = array();
									while ($carpeta = readdir($directorio))
									{
										if (!is_dir($carpeta))
										{
											array_push($carpetas, $carpeta);
										}
									}
									sort($carpetas);

									foreach ($carpetas as $carpeta) {
								?>
										<option value="<?php echo $carpeta; ?>" >
											<?php echo $carpeta; ?>
										</option>
								<?php
									}
								?>       
					</select><br /><br />
					<!-- <script>console.log('*'+$('#IdEvento').val()+'*');</script> -->
					
					<label for="ads">Publicidades:</label>
					<select multiple name="ads[]" id="ads" value="">  
						<?php
							$adsFolder = opendir($_SERVER["DOCUMENT_ROOT"]."/assets/images/ads/");
							$ads = array();
							while ($adFile = readdir($adsFolder))
							{
								if (!is_dir($adFile))
								{
									// debug_to_console($adFile);
									array_push($ads, $adFile);
								}
							}
							sort($ads);
							// debug_to_console($ads);

							foreach ($ads as $adFile) {
						?>
								<option value="<?php echo $adFile; ?>" >
									<?php echo $adFile; ?>
								</option>
						<?php
							}
						?>       
					</select><br /><br />
					<label for="prize">Precio de cada foto:</label>
					<input type="text" name="prize" id="prize" value="" /><br /><br />
					<!-- <label for="ads">Publicidades:</label>
					<input type="text" name="ads" id="ads" value=""  /><br /><br /> -->
					<input type="submit" value="Guardar" />
				</div>      
			</form>

			<?php

			if (isset($_GET["IdEvento"])) {
				$folder = $_GET["IdEvento"];
				$directorio = opendir($_SERVER["DOCUMENT_ROOT"]."/assets/images/eventos/".$folder."/");
				$pics = array();
				$archivo = "";

				while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
				{
					if (!is_dir($archivo))
					{			
						$parts = explode('.', $archivo);
						$extension = end($parts);
						if ($extension == "jpg"  || $extension == "png") {
							array_push($pics, $archivo);
						}
					}
				}
				sort($pics);
				echo json_encode($pics);
				$file = $_SERVER["DOCUMENT_ROOT"].'/assets/datasources/'.$folder.'.json';
				$saveFile = [];
				$saveFile = array(
					'IdEvento' => $_REQUEST[IdEvento],
					'title' => $_REQUEST[title],
					'pictures' => $pics,
					'ads' => $_REQUEST[ads],
					'prize' => $_REQUEST[prize]
					);
				?>
				<!-- <script>console.log('json ' + JSON.stringify(<?php echo json_encode($saveFile) ?>));</script> -->
			<?php
				file_put_contents($file, json_encode($saveFile));
			}

			?>

		</section>
	</section>
</div>

<!-- Scripts -->


</body>
</html>