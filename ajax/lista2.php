<?php
	switch ($_POST['empresa']) {
		case 'ignacio':
			$detalle = '<div class="col-md-12 derecha">
					<b><h3>Getspenst</h3></b>
					<p><b>Categoria:</b> Infantil<br>
					<b>Número de páginas:</b> 340<br>
					<b>Precio:</b><s> Gs 150.000</s><br>
					<b>Si compras desde la web:</b> Gs 80.000<br>
					<b><h3>Sinopsis de Getspenst:
					</h3></b>Ignacio Hermoso es director de Responsabilidad Corporativa y Desarrollo Sostenible de Oilgas International,
					multinacional del sector petroquímico con implantación en Europa, África y Oriente Medio.
					Una mañana recibe una llamada desde Oilgas Ibérica, su planta de distribución de refino en España, y le comunican que se acaba
					de producir un accidente laboral en dicha planta; un empleado, que ha caído desde varios metros.</p>
				</div>';
			break;
		
		case 'bosque':
			$detalle = '<div class="col-md-12 derecha">
					<b><h3>El Bosque Negro</h3></b>
					<p><b>Categoria:</b> Infantil<br>
					<b>Número de páginas:</b> 150<br>
					<b>Precio:</b><s> 80.000 Gs.</s><br>
					<b>Si compras desde la web:</b> 50.000 Gs.<br>
					<b><h3>Sinopsis:
					</h3></b>Steve Hillard es director de Responsabilidad Corporativa y Desarrollo Sostenible de Oilgas International,
					multinacional del sector petroquímico con implantación en Europa, África y Oriente Medio.
					Una mañana recibe una llamada desde Oilgas, su planta de distribución de refino en España, y le comunican que se acaba
					de producir un accidente laboral en dicha planta; un empleado, que ha caído desde varios metros.</p>
				</div>';
			break;

		case 'espana':
			$detalle = '<h3 style="color: rgb(68, 63, 63);">Cadena España</h3>
						  <ul>
								<li>ESPAÑA MCAL. LOPEZ</li>
								<li>ESPAÑA LAURELTY</li>
								<li>ESPAÑA SL CENTRO</li>
								<li>ESPAÑA CAPIATA</li>
						  </ul>';
			break;

			case 'salemma':
			$detalle = '<h3 style="color: rgb(68, 63, 63);">Salemma</h3>
						  <ul>
								<li>SALEMMA CARMELITAS</li>
								<li>SALEMMA MULTIPLAZA</li>
								<li>SALEMMA SL</li>
								<li>SALEMMA CENTRAL</li>
						  </ul>';
			break;

			case 'Gran Via':
			$detalle = '<h3 style="color: rgb(68, 63, 63);">Supermercados Gran Via</h3>
						  <ul>
								<li>GRAN VÍA CHOFERES</li>
								<li>GRAN VÍA ROYAL</li>
						  </ul>';
			break;

			case 'Pueblo':
			$detalle = '<h3 style="color: rgb(68, 63, 63);">Hipermercados Pueblo</h3>
						  <ul>
								<li>PUEBLO MRA</li>
								<li>PUEBLO FDO.</li>
								<li>PUEBLO SAN VICENTE</li>
						  </ul>';
			break;

			case 'Los Jardines':
			$detalle = '<h3 style="color: rgb(68, 63, 63);">Los Jardines Express</h3>
						  <ul>
								<li>LOS JARDINES LUQUE
								<li>LOS JARDINES EXPRESS CURVA ROMERO</li>
								<li>LOS JARDINES EXPRESS PRIMAVERA</li>
								<li>LOS JARDINES EXPRESS MORACUE</li>
								<li>TODO CARNE SPORTIVO LUQUEÑO</li>
								<li>LOS JARDINES FDO</li>
						  </ul>';
			break;

				case 'Real':
			$detalle = '<h3 style="color: rgb(68, 63, 63);">Supermercados Real</h3>
						  <ul>
								<li>REAL VM</li>
								<li>REAL SV</li>
								<li>REAL FDO</li>
								<li>REAL ACCSUR</li>
								<li>REAL ÑEMBY</li>
								<li>REAL CAP R1</li>
								<li>REAL CAP R2</li>
						  </ul>';
			break;
		default;
			$detalle = "todavia no definimos el valor";
			break;
	}

	echo $detalle;
?>