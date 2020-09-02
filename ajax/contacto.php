<?php
	switch ($_POST['empresa']) {
		case 'super6':
			$detalle = '<h3 style="color: rgb(68, 63, 63);">Cadena Superseis</h3>
						  <ul>
							<li>S6 DENIS ROA</li>
							<li>S6 HIPERSEIS</li>
							<li>S6 LAURELES</li>
							<li>S6 MBURUCUYA</li>
							<li>S6 MUNDI MARK</li>
							<li>S6 TOTAL</li>
							<li>S6 LA NEGRITA</li>
						  </ul>';
			break;
		
		case 'stock':
			$detalle = '<h3 style="color: rgb(68, 63, 63);">Cadena Stock</h3>
						  <ul>
							<li>STOCK MALL</li>	
							<li>STOCK DOÑA BERTA</li>
							<li>STOCK BARRIO OBRERO</li>
							<li>STOCK BRASILIA</li>
							<li>STOCK SACRAMENTO</li>
							<li>STOCK SHOPPING MARIANO</li>
							<li>STOCK MRA REMAN</li>
							<li>STOCK LIMPIO</li>
							<li>STOCK LUQUE</li>
							<li>STOCK SAN LORENZO</li>
							<li>STOCK MCAL LOPEZ</li>
							<li>STOCK CDE</li>
							<li>STOCK MINGA GUAZU</li>
							<li>STOCK PTE FRANCO</li>
							<li>STOCK RIQUELME</li>
						  </ul>';
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