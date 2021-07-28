<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gráfica de nacimientos</title>
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>	
	<style>
		body {
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  background-size: cover;
		  -o-background-size: cover;
		}
	</style>	
</head>
<body>
	<div class="container">
		<h1 style="text-align: center;">			
			<b style="color: black; text-decoration: none;">
				Gráfica de nacimientos del 2019.
			</b><br>
			<b style="font-size: 20px; color: black; text-decoration: none;">
			Tarda como 15s en cargar la grafica ya que estoy utilizando todos los datos que trae la BD de nacimiento  </b><br>

		</h1>
		<div class="row" style="opacity:0.95; /* Opacidad 85% */">
			<div class="col-sm-12">
				<div class="panel panel-primary">
				<!--Gráfica de nacimiento -->
					<div class="panel panel-heading">
					</div>
						<canvas id="grafica"></canvas>
					<script type="text/javascript" src="scriptGenero.js"></script>
					<div class="panel panel-body" id="muestra200607">
						<div class="row">
							<div class="col-sm-12">
								<div id="cargaMovi200507"></div>
							</div>							
						</div>
					</div>									
				</div>
			</div>
		</div>
        <h1 style="text-align: center;">
			<b style="font-size: 20px; color: black; text-decoration: none;">
            By. Perez Lopez Jose Andres
		</h1>
	</div>
</body>
</html>

<script type="text/javascript">
	 $(document).ready(function(){
		 $('#cargaMovi200507').load('DatosGenero.php');
	 });

</script>

