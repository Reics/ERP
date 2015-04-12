
<section>
    <legend align="center">Agregar contacto</legend>
    <form class="form-inline" method="POST" action="<?=site_url()?>/proveedores/borrarcontacto/addcontacto/">
  <div class="form-group">
    
  <table style="margin-left: 50px; margin left:30px">
            <tr>
                
                    <div class="form-group">
                        <td><label for="ncontacto">Nombre del Contacto: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Nombre">                       
                        </td>
                    </div>
            </tr>
            <tr>
                    <div class="form-group">
                        <td><label for="ccontacto">RFC: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="RFC"></td>
                    </div>
             </tr>  
             <tr> 
                    <div class="form-group">
                        <td> <label for="direccion">Estado: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Direccion"></td>
                    </div>
                    <div class="form-group">
                        <td> <label for="direccion">Direccion: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Estado"></td>
                    </div>
            </tr>
            <tr>
                    <div class="form-group">
                        
                        <td> <label for="rfc">Provincia: </label></td>
                        <td><input type="text" class="form-control" class="form-control" name="Pais" ></td>
                    </div>
                </tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="telefono">Telefono: </label></td>
                        <td><input type="text" class="form-control" class="form-control" Name="Numero" ></td>
                        <td> <label for="email">Email: </label></td>
                        <td><input type="text" class="form-control" class="form-control" Name="Correo" ></td>
                    </div>
                </form>
                </tr>
                
            
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
