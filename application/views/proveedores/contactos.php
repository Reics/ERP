
<section style="margin-left: 50px; margin-right: 50px;">

<div class="row">

<legend align="center">Proveedor</legend>
<div>
<?php foreach ($proovedores as $e): ?>
<a role="button" class="btn btn-primary btn-lg" href="<?=site_url()?>/proveedores/listado/datos/<?=$e['idp']?>">Ficha</a>
<a role="button" class="btn btn-primary btn-lg" href="<?=site_url()?>/proveedores/listado/mapa/<?=$e['idp']?>">Mapa</a>
<a role="button" class="btn btn-primary btn-lg" href="<?=site_url()?>/proveedores/listado/contactos/<?=$e['idp']?>">Contacto</a>
<?php break; endforeach?>
</div> 

<legend align="center">Contacto</legend>
<?php foreach ($proovedores as $e): ?>
<div align="center">
                <table style="margin-left: 50px; margin left:30px">
                    
            <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="ncontacto">Nombre del Contacto: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="ncontacto" value="<?php echo $e['No']; ?>">                       
                        </td>
                    </div>
                </form>
            </tr>
            <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="ccontacto">Codigo del Contacto: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="ccontacto" value="<?php echo $e['idc']; ?>"></td>
                    </div>
                </form>
             </tr>
             <tr> 
                <form class="form-inline">
                    <div class="form-group">
                        <td> <label for="direccion">Direccion: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="direccion" value="<?php echo $e['Dir']; ?>"></td>
                    </div>
                </form>
            </tr>
            <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td> <label for="rfc">RFC: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="rfc" value="<?php echo $e['RFC']; ?>"></td>
                        <td> <label for="rfc">Provincia: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="provincia" value="<?php echo $e['Pro']; ?>"></td>
                    </div>
                </form>
                </tr>
                <?php /*
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="telefono">Telefono: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="telefono" value="<?php echo $e['No1']; ?>"></td>
                        <td> <label for="email">Email: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="email" value="<?php echo $e['Co1']; ?>"></td>
                    </div>
                </form>
                </tr>
                */ ?>
               
</table>
</div>
<br>
                <div class="col-sm-offset-8 col-sm-10">
                                        <a role="button" class="btn btn-success" href="<?=site_url()?>/proveedores/listado/aecontacto/<?=$e['idc']?>">Editar</a>
                </div>
            </div>
            <?php endforeach?> 

</div>
</section>