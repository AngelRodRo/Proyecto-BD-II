					<tr>
						<td>
							<label for='identificacion'>Nro. de Identificación:</label>
						</td>
						<td>
							<input type='text' name='identificacion"+i+"' id='identificacion'>
						</td>
					</tr>
					<tr>
						<td>
							<label for='tipo_identificacion'>Tipo de Identificación:</label>
						</td>
						<td>
							<select id='tipo_identificacion' name='tipo_identificacion"+i+"'>
							  <option value='D.N.I'>Documento Nacional de Identidad</option>
							  <option value='Carnet Estrangeria'>Carnet de Estrangeria</option>
							  <option value='Cédula de Extrangeria'>Cédula de Extrangeria</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for='nombre'>Nombres: </label>
						</td>
						<td>
							<input type='text' name='nombre"+i+"' id='nombre'>
						</td>
					</tr>
					<tr>
						<td>
							<label for='apellido_paterno'>Apellido Paterno: </label>
						</td>
						<td>
							<input type='text' name='apellido_paterno"+i+"' id='apellido_paterno'>
						</td>
					</tr>
					<tr>
						<td>
							<label for='apellido_materno'>Apellido Materno: </label>
						</td>
						<td>
							<input type='text' name='apellido_materno"+i+"' id='apellido_materno'>
						</td>
					</tr>					
					<tr>
						<td>
							<label for='fecha_nacimiento'>Fecha de Nacimiento: </label>
						</td>
						<td>
							<input type='date' name='fecha_nacimiento"+i+"' id='fecha_nacimiento'>
						</td>
					</tr>					
					<tr>
						<td>
							<label for='email'>Email: </label>
						</td>
						<td>
							<input type='text' name='email"+i+"' id='email'>
						</td>
					</tr>					
					<tr>
						<td>
							<label>Seleccione el sexo:</label>
						</td>
						<td>
							<input type='radio' name='sexo"+i+"' id='varon' value='M'>
								<label for='varon'>Varón</label>
							<br/> 
							<input type='radio' name='sexo"+i+"' id='mujer' value='F'>
								<label for='mujer'>Mujer</label>
						</td>
					</tr>
					<tr>
						<td>
							<label for='pais'>Pais: </label>
						</td>
						<td>
							<select id='pais' name='pais"+i+"'>
								<?php echo $opciones ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for='pasajes'>Nro_pasajes: </label>
						</td>
						<td>
							<select id='pasajes' name='pasajes"+i+"'>
								<?php echo $pasajes ?>
							</select>
						</td>						
					</tr>	
