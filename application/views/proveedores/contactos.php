
<section style="margin-left: 50px; margin-right: 50px;">


<div class="row">

<legend align="center">Proveedor</legend>
<div>
<a role="button" class="btn btn-primary btn-lg" href="<?php echo site_url("proveedores/listado/datos");?>">Ficha</a>
<a role="button" class="btn btn-primary btn-lg" href="<?php echo site_url("proveedores/listado/mapa");?>">Mapa</a>
<a role="button" class="btn btn-primary btn-lg" href="<?php echo site_url("proveedores/listado/contactos");?>">Contacto</a>
</div> 

<legend align="center">Contacto</legend>
<div align="center">
                <table style="margin-left: 50px; margin left:30px">
            <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="ncontacto">Nombre del Contacto: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="ncontacto">                       
                        </td>
                    </div>
                </form>
            </tr>
            <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="ccontacto">Codigo del Contacto: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="ccontacto"></td>
                    </div>
                </form>
             </tr>  
             <tr> 
                <form class="form-inline">
                    <div class="form-group">
                        <td> <label for="direccion">Direccion: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="direccion"></td>
                    </div>
                </form>
            </tr>
            <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td> <label for="rfc">RFC: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="rfc"></td>
                        <td> <label for="rfc">Provincia: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="provincia"></td>
                    </div>
                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="telefono">Telefono: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="telefono"></td>
                        <td> <label for="email">Email: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="email"></td>
                    </div>
                </form>
                </tr>
                
                
</table>
</div>
                <div class="col-sm-offset-8 col-sm-10">
                                        <a role="button" class="btn btn-success" href="<?php echo site_url("proveedores/listado/aecontacto");?>">Editar</a>
                </div>
            </div>

</div>

</section>