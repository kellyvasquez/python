{% include 'includes/header.php' %}
		{% include 'includes/menu.php' %}
		
		<div class="container">
			<div class="titulo">Datos Bases de Datos</div>
			<div class="contenido">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">Nombre Equipo</th>
						      <th scope="col">Partidos Jugados</th>
						    </tr>
						  </thead>
						  <tbody>
								  {% for obj in object_list %}
							      <tr>
							        <td>{{ obj[] }}</td>
							        <td>{{ obj[] }}</td>

							      </tr>
							    {% endfor %}
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