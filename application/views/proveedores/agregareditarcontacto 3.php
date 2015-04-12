
<section>
    <?php foreach ($proovedores as $e): ?>
    <form class="form-inline" method="POST" action="<?=site_url()?>/proveedores/borrarcontacto/update/<?=$e['idContacto']?>">
        <?php break; endforeach?> 
  <div class="form-group">
    
  <table style="margin-left: 50px; margin left:30px">
    
    <?php foreach ($proovedores as $e): ?>
            <tr>
                
                    <div class="form-group">
                        <td><label for="ncontacto">Nombre del Contacto: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Nombre" value="<?php echo $e['Nombre']; ?>">                       
                        </td>
                    </div>
            </tr>
            <tr>
                    <div class="form-group">
                        <td><label for="ccontacto">RFC: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="RFC" value="<?php echo $e['RFC']; ?>"></td>
                    </div>
             </tr>  
             <tr> 
                    <div class="form-group">
                        <td> <label for="direccion">Estado: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Direccion" value="<?php echo $e['Direccion']; ?>"></td>
                    </div>
                    <div class="form-group">
                        <td> <label for="direccion">Direccion: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Estado" value="<?php echo $e['Estado']; ?>"></td>
                    </div>
            </tr>
            <tr>
                    <div class="form-group">
                        
                        <td> <label for="rfc">Provincia: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Pais" value="<?php echo $e['Pais']; ?>"></td>
                    </div>
                </tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="telefono">Telefono: </label></td>
                        <td><input type="text" class="form-control" class="form-control" Name="Numero" value="<?php echo $e['Numero']; ?>"></td>
                        <td> <label for="email">Email: </label></td>
                        <td><input type="text" class="form-control" class="form-control" Name="Correo" value="<?php echo $e['Correo']; ?>"></td>
                    </div>
                </form>
                </tr>
                
         <?php break; endforeach?> 
            
</table>
<br>
  <div class="col-sm-offset-8 col-sm-10">
<button type="submit" class="btn btn-success">Guardar</button>
<a type="button" class="btn btn-danger" href="<?=site_url()?>/proveedores/borrarcontacto/">Cancelar</a>
</div>


</div>
</form>   
<br>
                    <br>
                    <div style="float:center;" class="col-sm-offset-8 col-sm-10">
                                        <a role="button" class="btn btn-success" href="<?=site_url()?>/menu/proveedores">Ir a página principal de Proveedores</a>
                </div>
</section>
