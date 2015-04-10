
<section>
    <form class="form-inline" method="POST" action="<?=site_url()?>/proveedores/listado/update">
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
                        <td><label for="ccontacto">Codigo del Contacto: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="idContacto" value="<?php echo $e['idContacto']; ?>"></td>
                    </div>
             </tr>  
             <tr> 
                    <div class="form-group">
                        <td> <label for="direccion">Direccion: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Direccion" value="<?php echo $e['Direccion']; ?>"></td>
                    </div>
            </tr>
            <tr>
                    <div class="form-group">
                        <td> <label for="rfc">RFC: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="RFC" value="<?php echo $e['RFC']; ?>"></td>
                        <td> <label for="rfc">Provincia: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Provincia" value="<?php echo $e['Provincia']; ?>"></td>
                    </div>
                </tr>
                <?php /*
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="telefono">Telefono: </label></td>
                        <td><input type="text" class="form-control" class="form-control" id="telefono"></td>
                        <td> <label for="email">Email: </label></td>
                        <td><input type="text" class="form-control" class="form-control" id="email"></td>
                    </div>
                </form>
                </tr>
                */ ?>
                
         <?php break; endforeach?> 
            
</table>
<br>
  <div class="col-sm-offset-8 col-sm-10">
<button type="submit" class="btn btn-success">Guardar</button>
<a type="button" class="btn btn-danger" href="<?=site_url()?>/proveedores/listado/">Cancelar</a>
</div>


</div>
</form>   
</section>
