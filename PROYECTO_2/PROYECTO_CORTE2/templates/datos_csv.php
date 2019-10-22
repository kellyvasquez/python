{% include 'includes/header.php' %}
		{% include 'includes/menu.php' %}
		
		<div class="container">
			<div class="container">
				<div class="titulo">Datos CSV</div>
					<div class="contenido">
						<div class="row">
							<div class="col-md-10 offset-md-1 texto">
								<table class="table">
								  <thead>
								    <tr>
								      <th scope="col">Nombre Equipo</th>
								      <th scope="col">Puntos de Clasificacion</th>
								    </tr>
								  </thead>
								  <tbody>
								  {% for obj in object_list %}
							      <tr>
							        <td>{{ obj['Nombre Equipo'] }}</td>
							        <td>{{ obj['Puntos de Clasificacion'] }}</td>

							      </tr>
							    {% endfor %}

								    </tr>
								  </tbody>
								</table>

								<button>
									<a href="./static/futbol.csv">Exportar a CSV</a>
								</button>
							</div>
						</div>
					</div>
				</div>	
		</div>
	</body>
</html>