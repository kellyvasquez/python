		<nav class="navbar navbar-expand-lg fixed-top menu sombra">
			<div class="container-fluid">
				<button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbar">
					<span class="fas fa-align-center blanco"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<div class="nav-link text-center">
								<a href="/" class="font-weight-bold blanco"><i class="fas fa-home"></i> Inicio</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<div class="nav-link text-center">
								<a class="font-weight-bold blanco"><i></i> TIPOS DE CONSULTA DATOS</a><br>
								<div id="header">
									<li><a href="" class="font-weight-bold blanco"><i></i> WebScrapper</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<ul class="nav">
											<li><a href="webscraper">Mostrar Datos</a></li>
											<li><a href="graficas_webscraping">Graficas</a></li>
										</ul>
									</li>
									<li><a href="" class="font-weight-bold blanco"><i></i>CSV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<ul class="nav">
											<li><a href="csv">Mostrar Datos</a></li>
											<li><a href="graficas_csv">Graficas</a></li>
										</ul>
									</li>	
									<li><a href="" class="font-weight-bold blanco"><i></i>Base de Datos</a>&nbsp;&nbsp;
										<ul class="nav">
											<li><a href="basedatos">Mostrar Datos</a></li>
											<li><a href="graficas_bd">Graficas</a></li>
										</ul>
									</li>	
								</div>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<div class="nav-link text-center">
								
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<br/><br/><br/><br/>
		{% with mensajes = get_flashed_messages(with_categories=True) %}
			{% if mensajes %}
				{% for categoria, mensaje in mensajes %}
					<script type="text/javascript">
						swal({
							title: "",
							text: "{{mensaje}}",
							timer: 2000,
							type: "{{categoria}}",
							showConfirmButton: false
						});
					</script>
				{% endfor%}
			{% endif %}
		{% endwith %}