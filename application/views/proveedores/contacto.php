<section>

    <form class="form-inline" method="POST" action="<?=site_url()?>/proveedores/listado/update_proovedor">
              <div class="col-sm-offset-1">
                <?php foreach ($proovedores as $e): ?>
                <div class="form-group">


                    <br>
                    <blockquote>
                        <p>Proveedor</p>
                    </blockquote>
                    

                    <table style="margin-left: 50px; margin left:30px">
            <tr>
                    <div class="form-group">
                        <td><label for="idProvador">ID: </label></td>
                        <td><input type="text"  class="form-control"  class="form-control" name="idProovedor" value="<?php echo $e['idp']; ?>"></td>
                    </div>
                
            </tr>
            <tr>
                    <div class="form-group">
                        <td><label for="Nombre">Nombre: </label></td>
                        <td><input type="text"  class="form-control"  class="form-control" name="Nombre" value="<?php echo $e['no']; ?>"></td>
                    </div>
             </tr>  
             <tr> 
                <tr>
                    <div class="form-group">
                        <td><label for="Direccion">Direccion: </label></td>
                        <td><input type="text"  class="form-control"  class="form-control" name="Direccion" value="<?php echo $e['dir']; ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="codigopostal">Codigo Postal: </label></td>
                        <td><input type="text"  class="form-control"  class="form-control" name="codigoPostal" value="<?php echo $e['cp']; ?>"></td>
                    </div>
                    <div class="form-group">
                        <td><label for="Poblacion">Poblacion: </label></td>
                        <td><input type="text"  class="form-control"  class="form-control" name="Estado" value="<?php echo $e['est']; ?>"></td>
                    </div>
                
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="Pais">Pais: </label></td>
                        <td><input type="text"  class="form-control"  class="form-control" name="Provincia" value="<?php echo $e['pro']; ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="numero1">Telefono Trabajo: </label></td>
                        <td><input type="text"  class="form-control"  class="form-control" name="Numero1" value="<?php echo $e['No1']; ?>"></td>
                    </div>
                    <div class="form-group">
                        <td><label for="numero2">Telefono Particular: </label></td>
                        <td><input type="text"  class="form-control"  class="form-control" name="Numero2" value="<?php echo $e['No2']; ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="numero3">Movil: </label></td>
                        <td><input type="text"  class="form-control"  class="form-control" name="Numero3" value="<?php echo $e['No3']; ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="correo1">Email 1: </label></td>
                        <td><input type="text"  class="form-control"  class="form-control" name="Correo1" value="<?php echo $e['Co1']; ?>"></td>
                    </div>
                    <div class="form-group">
                        <td><label for="correo2">Email 2: </label></td>
                        <td><input type="text"  class="form-control" class="form-control" name="Correo2" value="<?php echo $e['Co2']; ?>"></td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="Twiter1">Red Social 1: </label></td>
                        <td><input type="text"  class="form-control" class="form-control" name="Facebook1" value="<?php echo $e['Fa1']; ?>"></td>
                    </div>
                    <div class="form-group">
                        <td><label for="Facebook1">Red Social 2: </label></td>
                        <td><input type="text"  class="form-control"  class="form-control" name="Faceboo2" value="<?php echo $e['Fa2']; ?>"></td>
                    </div>
                </tr>
</table>
                        
                       
            </div>
            <?php endforeach ?>
            </div>

            <br>
            <div class="col-sm-offset-8 col-sm-10">
<button type="submit" class="btn btn-success">Editar</button>
<a type="button" class="btn btn-danger" href="<?=site_url()?>/proveedores/listado/">Cancelar</a>
</div>

</form>

<br>
                    <br>
                    <div style="float:center;" class="col-sm-offset-8 col-sm-10">
                                        <a role="button" class="btn btn-success" href="<?=site_url()?>/menu/proveedores">Ir a página principal de Proveedores</a>
                </div>

</section>