<section>

<!-- NOMBRE DE LA VISTA -->

<legend style="color:#black">Editar producto</legend>
<form class="form-horizontal">
   

<div class="col-md-3">
        <input id="Search" name="Search" type="text" placeholder="Search..." class="form-control input-md">
        </div> 

<div class="row"> </div> 
        

<!-- NOMBRE DEL PRODUCTO -->
	
	<div class="col-md-3">
	<label class="col-md-3 control-label" style="width: 0px;" for="cantidad">Nombre del Producto</label>

	<!-- CAMPO DE TEXTO: NOMBRE DEL PRODUCTO -->         
     
	<input id="nombre_producto" name="nombre_producto" type="text" placeholder="Ingresa Nombre" class="form-control input-md">
        
	</div>

        
<div class="row"> </div>        


<!-- UNIDAD DE MEDIDA -->
	<div class="row">
	<div class="col-md-3">
            <label class="col-md-3 control-label" style="width: 0px;" for="producto">Unidad de medida</label>
            
            <!-- SELECCIONAR MEDIDA -->

            <select class="form-control" name="medida_producto" id="medida_producto">
                <option value="kilogramos">Kilogramos</option>
                <option value="toneladas">Toneladas</option>
                <option value="metros">Metros</option>
            </select>

	</div>
	</div>

	
<div class="row"> </div> 
    
    
<!-- PRECIO UNITARIO -->
	<div class="row">
        <div class="col-md-3">
            <label class="col-md-3 control-label" style="width: 0px;" for="precio">Precio Unitario</label>  
             
             <!-- CAMPO DE TEXTO: NOMBRE DEL PRODUCTO --> 
    	     <input id="precio-unitario" name="precio_unitario" type="text" placeholder="0" class="form-control input-md">
        </div>
	</div>
        
        
<div class="row"> </div> 


<!-- CATEGORÍA -->
	<div class="row">        
        <div class="col-md-3">
        
            <label class="col-md-3 control-label" style="width: 0px;" for="importe">Categoría</label>
            
            <!-- SELECCIONAR CATEGORÍA -->
            <select class="form-control" name="medida_producto" id="medida_producto">
            <option value="obraNegra">Obra Negra</option>
               </select>           
        </div>
    </div>



<div class="row"> </div> 
<div class="row"> </div> 


    
<!-- GUARDAR -->
    <div class="row" style="margin-top: 50px; margin-left: 300px;" >
        <div class="col-md-4" style="margin-: 50px">
        <button id="Guardar" name="Guardar" class="btn btn-success">Guardar</button>
<!-- CANCELAR -->
        <button id="Cancelar" name="Cancelar" class="btn btn-danger">Cancelar</button>
    </div>
    </div>



     
     
  </form>
</section>
