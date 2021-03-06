<h5>Nueva solicitud de credito</h5><!-- //TITULO DEL MODAL *************************************************************************************************-->
			<!-- INICIAN ELEMENTOS DEL FORMULARIO (CAMBIAR DEPENDIENDO DEL FORMULARIO A TRABAJAR) *****************************************************************-->
			<div class="card-panel">
				<div class="row">
					<ul id="tabs-swipe-demo" class="tabs swipeable">
					    <li class="tab col s3 "><a class="active teal-text waves-effect waves-teal" href="#personales"><i class="material-icons">contact_phone</i> Datos Personales</a></li>
					    <li class="tab col s3 " ><a  class="teal-text waves-effect waves-teal" href="#familiares" ><i class="material-icons">supervisor_account</i> Datos Familiares</a></li>
					    <li class="tab col s3 "><a class=" teal-text waves-effect waves-teal" href="#laborales"><i class="material-icons">business</i> Datos Laborales</a></li>
					    <li class="tab col s3 "><a class=" teal-text waves-effect waves-teal" href="#referencias"><i class="material-icons">assignment</i> Referencias</a></li>
		  			</ul>
					
					<div id="personales" class="col s12 white swipeable">
						<div class="row">
							<div class="input-field col s12"> 
					          <input id="nom" name="nom" type="text" class="validate" required autofocus="true">
					          <label id="lnom" for="nom">Nombre completo</label>
	        				</div>
						</div>
						<div class="row">
							<div class="input-field col s3">
								<label for="sex">Sexo</label> 
							</div>
							<div class="input-field inline col s3">
									<input class="with-gap" name="sex" type="radio" id="mas" checked />
									<label for="mas">Masculino</label> 	
							</div>
							<div class="input-field inline col s3">
									<input class="with-gap" name="sex" type="radio" id="fem"  />	
									<label for="fem">Femenino</label>
							</div>
							<br><br><br>
						</div>
						<div class="row">
							<div class="input-field col s12">	
								<input id="fec" name="fec" type="date" class="datepicker" >
								<label for="fec" >Fecha de nacimiento</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12"> 
						         <input id="dui" name="dui" type="text"  minlength="10" maxlength="10">
						         <label for="dui">DUI</label>
	        				</div>
	        			</div>
	        			<div class="row">
							<div class="input-field col s12">
								<input type="text" name="nit" id="nit" >
								<label for="nit">NIT</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">			  		
					          <textarea id="dir" name="dir" class="materialize-textarea"></textarea>
					          <label for="dir">Direcci&oacute;n</label>
						    </div>			    
						</div>	
						<div class="row">
							<div class="input-field col s12">
								<input type="text" name="pro" id="pro" >
								<label for="pro">Profesi&oacute;n u oficio</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<select class="" id="est" name="est">
							      <option value="" disabled selected>Seleccione un estado</option>
							      <option value="1">Option 1</option>
							      <option value="2">Option 2</option>
							      <option value="3">Option 3</option>
							    </select>
								<label for="est">Estado civil</label>
							</div>
						</div>	
						<div class="row">
							<div class="input-field col s12">
								<input type="text" name="tel" id="tel" >
								<label for="tel">Tel&eacute;fono fijo</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" name="cel" id="cel" >
								<label for="cel">Tel&eacute;fono celular</label>
							</div>
						</div>						
					</div>

					<div id="familiares" class="col s12 white swipeable">
						<div class="row">
							<div class="input-field col s12"> 
					          <input id="nomc" name="nomc" type="text" class="validate" >
					          <label for="nomc">Nombre conyugue</label>
	        				</div>
						</div>
						<div class="row">
							<div class="input-field col s3">
								<label for="sexc">Sexo conyugue</label> 
							</div>
							<div class="input-field inline col s3">
									<input class="with-gap" name="sexc" type="radio" id="masc" checked />
									<label for="masc">Masculino</label> 	
							</div>
							<div class="input-field inline col s3">
									<input class="with-gap" name="sexc" type="radio" id="femc"  />	
									<label for="femc">Femenino</label>
							</div>
							<br><br><br>
						</div>
						<div class="row">
							<div class="input-field col s12">	
								<input id="fecc" name="fecc" type="date" class="datepicker" >
								<label for="fecc" class="">Fecha de nacimiento conyugue</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12"> 
						         <input id="duic" name="duic" type="text"  minlength="10" maxlength="10">
						         <label for="duic">DUI conyugue</label>
	        				</div>
	        			</div>
	        			<div class="row">
							<div class="input-field col s12">
								<input type="text" name="nitc" id="nitc" >
								<label for="nitc">NIT conyugue</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">			  		
					          <textarea id="dirc" name="dirc" class="materialize-textarea"></textarea>
					          <label for="dirc">Direcci&oacute;n conyugue</label>
						    </div>			    
						</div>	
						<div class="row">
							<div class="input-field col s12">
								<input type="text" name="proc" id="proc" >
								<label for="proc">Profesi&oacute;n u oficio conyugue</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<select class="" id="estc" name="estc">
							      <option value="" disabled selected>Seleccione un estado</option>
							      <option value="1">Option 1</option>
							      <option value="2">Option 2</option>
							      <option value="3">Option 3</option>
							    </select>
								<label for="estc">Estado civil conyugue</label>
							</div>
						</div>	
						<div class="row">
							<div class="input-field col s12">
								<input type="text" name="telc" id="telc" >
								<label for="telc">Tel&eacute;fono fijo conyugue</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" name="celc" id="celc" >
								<label for="celc">Tel&eacute;fono celular conyugue</label>
							</div>
						</div>	
						<div class="row">
							<div class="input-field col s12">
								<input type="text" name="lugc" id="lugc">
								<label for="lugc">Lugar de trabajo conyugue</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">			  		
					          	<textarea id="dirtc" name="dirtc" class="materialize-textarea"></textarea>
					          	<label for="dirtc">Direcci&oacute;n de trabajo conyugue</label>
						    </div>			    
						</div>
							
					</div>

		  			<div id="laborales" class="col s12 white swipeable">
		  				<div class="row">
							<div class="input-field col s12">
								<input type="text" name="lugt" id="lugt">
								<label for="lugt">Lugar de trabajo</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="dirt" name="dirt" class="materialize-textarea"></textarea>
								<label for="dirt">Direcci&oacute;n de trabajo</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" name="telt" id="telt">
								<label for="telt">Tel&eacute;fono de trabajo</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" name="jefe" id="jefe">
								<label for="jefe">Jefe inmediato</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="pues" name="pues" class="materialize-textarea"></textarea>
								<label for="pues">Puesto de trabajo</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" name="timet" id="timet">
								<label for="timet">Tiempo de trabajo</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">			  		
								<input type="number" name="suel" value="0.00" onchange="sumi()" id="suel" min="0.00">
								<label for="suel" class="active">Sueldo mensual</label>
							</div>			    
						</div>
						
						<div class="row">
							<div class="input-field col s12">			  		
								<input type="number" value="0.00" name="otroi" id="otroi" onchange="sumi()" min="0.00" >
								<label class="active" for="otroi">Otros ingresos</label>
							</div>			    
						</div>
						<div class="row">
							<div class="input-field col s12">			  		
								<input type="text" name="toti" class='teal-text'  id="toti" disabled="true" value="0.00">
								<label for="toti" class="active">Total ingresos ($)</label>
							</div>			    
						</div>
						<div class="row">
							<div class="input-field col s12">			  		
								<input type="number" name="gasv" id="gasv" onchange="sume()" value="0.00" min="0.00">
								<label for="gasv" class="active">Gasto vida</label>
							</div>			    
						</div>
						<div class="row">
							<div class="input-field col s12">			  		
								<input type="number" name="pagd" id="pagd" onchange="sume()" value='0.00' min="0.00">
								<label for="pagd" class="active">Pago de deudas</label>
							</div>			    
						</div>
						<div class="row">
							<div class="input-field col s12">			  		
								<input type="number" name="otroe" id="otroe" onchange="sume()" value="0.0" min="0.00">
								<label for="otroe" class="active">Otros egresos</label>
							</div>			    
						</div>
						<div class="row">
							<div class="input-field col s12">			  		
								<input type="number" class='teal-text' name="tote" id="tote" value="0.00" disabled="true" min="0.00">
								<label for="tote" class="active">Total egresos</label>
							</div>			    
						</div>
		  			</div>
		  			
		  			<div id="referencias" class="col s12 white swipeable">
		  				<div class="row">
							<div class="input-field col s12"> 
					          	<input id="nomr" name="nomr" type="text" class="validate" autofocus="true">
					          	<label for="nomr">Nombre referencia</label>
	        				</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="dirr" name="dirr" class="materialize-textarea"></textarea>
								<label for="dirr">Direcci&oacute;n de referencia</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" name="telr" id="telr">
								<label for="telr">Tel&eacute;fono fijo de referencia</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" name="celr" id="celr">
								<label for="celr">Celular de referencia</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="lugtr" name="lugtr" class="materialize-textarea"></textarea>
								<label for="lugtr">Lugar de trabajo de referencia</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="dirtr" name="dirtr" class="materialize-textarea"></textarea>
								<label for="dirtr">Direcci&oacute;n de trabajo de referencia</label>
							</div>
						</div>
		  			</div>		
		  		</div>
		  		 <div class="row center-align" style="margin: auto">
			  		<div class="col s12 center-align">		
						<ul id="tabs-swipe-demo" class="tabs swipeable">
						    <li class="tab col s3 "><a class="active teal-text waves-effect waves-teal" onclick="focuss(1);"><i class="material-icons">contact_phone</i>  </a></li>
						    <li class="tab col s3 "><a  class="teal-text waves-effect waves-teal"  onclick="focuss(2);"><i class="material-icons">supervisor_account</i>  </a></li>
						    <li class="tab col s3 "><a class=" teal-text waves-effect waves-teal" id="op3" onclick="focuss(3);"><i class="material-icons">business</i>  </a></li>
						    <li class="tab col s3 "><a class=" teal-text waves-effect waves-teal"  onclick="focuss(4);"><i class="material-icons">assignment</i> </a></li>
				  		</ul>
			  		</div>
			  	</div>
			  	
				
			</div>
			<input type="hidden" name="auxx" id="auxx" value="0">
			<input type="hidden" name="cod" id="cod">