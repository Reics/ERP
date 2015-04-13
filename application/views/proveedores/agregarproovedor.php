
<section>
    <?php if ($proovedores != NULL) {
                foreach ($proovedores as $c): ?>
    <form class="form-inline" method="POST" action="<?=site_url()?>/proveedores/listado/update_proveedor/<?=$c['idProovedor']?>">
  <div class="form-group">
    
  <table style="margin-left: 50px; margin left:30px">
    
            <tr>
                
                    <div class="form-group">
                        <td><label for="ncontacto">Nombre del Proovedor: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Nombre" value="<?php echo $c['Nombre']?>"></td>
                        <td> <label for="rfc">RFC: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="RFC" value="<?php echo $c['RFC']?>" ></td>
                    </div>

            </tr>  
             <tr> 
                    <div class="form-group">
                        <td> <label for="direccion">Direccion: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Direccion" value="<?php echo $c['Direccion']?>" ></td>
                    </div>
                    <div class="form-group">
                        <td> <label for="direccion">Código Postal: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="codigoPostal" value="<?php echo $c['codigoPostal']?>"></td>
                    </div>
            </tr>
            <tr>
                    <div class="form-group">
                        <td> <label for="rfc">Estado: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Estado" value="<?php echo $c['Estado']?>"></td>
                        <td> <label for="rfc">Pais: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Pais" value="<?php echo $c['Pais']?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td> <label for="rfc">Numero 1: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Numero1" value="<?php echo $c['Numero1']?>"></td>
                        <td> <label for="rfc">Numero 2: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Numero2" value="<?php echo $c['Numero2']?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td> <label for="rfc">Movil: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Numero3" value="<?php echo $c['Numero3']?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td> <label for="rfc">Correo 1: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Correo1" value="<?php echo $c['Correo1']?>"></td>
                        <td> <label for="rfc">Correo 2: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Correo2" value="<?php echo $c['Correo2']?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td> <label for="rfc">Facebook: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Correo3" value="<?php echo $c['Correo3']?>"></td>
                    </div>
                </tr>
 <tr><div class="form-group">
                <td><label for="Categoria">Categoría</label></td>
    <td><select id="Categoria" name="Categoria" class="form-control">
        <option value="">Seleciona una opción</option>
        <option value="Materiales de construccion (arena, tabique, combras, etc)"> Materiales de construccion (arena, tabique, combras, etc)</option>
        <option value="Muros,celosias,recubrimientos,pisos y plafones">Muros,celosias,recubrimientos,pisos y plafones</option>
        <option value="Maquinaria, equipo y herramientas">Maquinaria, equipo y herramientas</option>
        <option value="Puertas, ventanas, cristales, tragaluz, closet y cerrajeria">Puertas, ventanas, cristales, tragaluz, closet y cerrajeria</option>
        <option value="Productos para obra secundaria como mobiliario y herramientas">Productos para obra secundaria como mobiliario y herramientas</option>
    </select> </td></div>
    </tr>
                
           
</table>
<br>
  <div class="col-sm-offset-8 col-sm-10">
<button type="submit" class="btn btn-success">Guardar</button>
<a type="button" class="btn btn-danger" href="<?=site_url()?>/proveedores/listado/">Cancelar</a>
</div>


</div>
</form> 
<?php endforeach;}?>   
<br>
                    <br>
                    <div style="float:center;" class="col-sm-offset-8 col-sm-10">
                                        <a role="button" class="btn btn-success" href="<?=site_url()?>/menu/proveedores">Ir a página principal de Proveedores</a>
                </div>
</section>
