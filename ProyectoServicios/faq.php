<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MySchool-FAQ</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<link href="https://unpkg.com/ionicons@4.1.2/dist/css/ionicons.min.css" rel="stylesheet">
	</head>

	<?php
		require_once('header.html');
 	?>

	<body class="cuerpo">
		<div class="container py-5">
		<div class="card rounded-0">
	    <div class="card-header titulo-faq">
				<h3 class="mb-0 text-center">Preguntas Frecuentes</h3>
			</div>

			<div class="panel-group" id="accordion">

				<div class="card">
			    <div class="card-header preg">
			      <h4 class="mb-0">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
								1. ¿Qué es Servicios a Domicilio?
							</a>
			      </h4>
			    </div>
			    <div id="collapse1" class="panel-collapse collapse in">
			      <div class="card-body">
							Servicios a Domicilio es un sitio que conecta a los que demandan servicios de reparación con los profesionales que brindan el servicio.
						</div>
			    </div>
			  </div>

				<div class="card">
			    <div class="card-header preg">
			      <h4 class="mb-0">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
								2. ¿Cúanto me cobra Servicios a Domicilio por recomendarme un proveedor?
							</a>
			      </h4>
			    </div>
			    <div id="collapse2" class="panel-collapse collapse">
			      <div class="card-body">
							Se cobra un monto fijo de $100 una vez que el trabajo ha sido aprobado por el cliente.
						</div>
			    </div>
			  </div>

				<div class="card">
			    <div class="card-header preg">
			      <h4 class="mb-0">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
								3. ¿Cómo elige Servicios a Domicilio lo proveedores?
							</a>
			      </h4>
			    </div>
			    <div id="collapse3" class="panel-collapse collapse">
			      <div class="card-body">
							Los proveedores de servicios son homologados por Servicios a Domicilio.  Deber cumplir con las certificaciones correspondientes y son entrevistados y evaluados por nuestro comité de evaluación.
						</div>
			    </div>
			  </div>

				<div class="card">
			    <div class="card-header preg">
			      <h4 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
								4. ¿Qué especialidades puedo encontrar en Servicios a Domicilio?
							</a>
						</h4>
					</div>
					<div id="collapse4" class="panel-collapse collapse">
						<div class="card-body">
							Las especialidades son las siguientes:
							<ul style="list-style-type:disc">
								<li>Plomería</li>
								<li>Electricidad</li>
								<li>Gas</li>
								<li>Pintura</li>
								<li>Albañilería</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="card">
			    <div class="card-header preg">
			      <h4 class="mb-0">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
								5. ¿Los profesionales cuentan son los seguros correspondientes?
							</a>
			      </h4>
			    </div>
			    <div id="collapse5" class="panel-collapse collapse">
			      <div class="card-body">
							Si, Servicios a Domicilio controla que todos los profesionales cuenten con seguros vigentes, tanto de responsabilidad civil como de accidentes laborales.
						</div>
			    </div>
			  </div>

				<div class="card">
			    <div class="card-header preg">
			      <h4 class="mb-0">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
								6. ¿Quién emite la factura para pagar el servicio?
							</a>
			      </h4>
			    </div>
			    <div id="collapse6" class="panel-collapse collapse">
			      <div class="card-body">
							Cada profesional emite su factura. Servicios a Domicilio controla que todos los profesionales tengan todos sus documentos fiscales en regla.
						</div>
			    </div>
			  </div>

				<div class="card">
			    <div class="card-header preg">
			      <h4 class="mb-0">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
								7. ¿Los trabajos tienen garantía?
							</a>
			      </h4>
			    </div>
			    <div id="collapse7" class="panel-collapse collapse">
			      <div class="card-body">
							Si, Servicios a Domicilio brinda la garantía de 6 meses una vez que el cliente aprobó el servicio.
						</div>
			    </div>
			  </div>

				<div class="card">
			    <div class="card-header preg">
			      <h4 class="mb-0">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
								8. ¿Los profesionales son evaluados por los clientes?
							</a>
			      </h4>
			    </div>
			    <div id="collapse8" class="panel-collapse collapse">
			      <div class="card-body">
							Si, los clientes deberán evaluar a los profesionales para que poder llevar un historial de sus trabajos y medir la satisfacción de los clientes.
						</div>
			    </div>
			  </div>

			</div>
		</div>
		</div>

		<script src="js/bootstrap.min.js"></script>

	</body>

	<?php
		require_once('footer.html');
	?>

</html>
