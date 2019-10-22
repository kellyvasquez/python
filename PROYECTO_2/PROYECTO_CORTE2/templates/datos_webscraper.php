{% include 'includes/header.php' %}
		{% include 'includes/menu.php' %}
		
		<div class="container">
			<div class="container">
				<div class="titulo">Datos Web Scraping</div>
					<div class="contenido">
						<div class="row">
							<div class="col-md-10 offset-md-1 texto">
								<table class="table">
								  <thead>
								    <tr>
								      <th scope="col">#</th>
								      <th scope="col">Nombre Equipo</th>
								      <th scope="col">Partidos Jugados</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <th scope="row">1</th>
								      <td>{{ nombre_equipos[0] }}</td>
								      <td>{{ partidos_jugados[1] }}</td>
								    </tr>
								    </tr>
								  </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>	
		</div>
	</body>
</html>