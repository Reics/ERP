
<section style="margin-left: 50px; margin-right: 50px;">
<?php foreach ($proovedores as $e): ?>

<div class="row">

<legend align="center">Proveedor</legend>
<div>
<a role="button" class="btn btn-primary btn-lg" href="<?=site_url()?>/proveedores/listado/datos/<?=$e['idProovedor']?>">Ficha</a>
<a role="button" class="btn btn-primary btn-lg" href="<?=site_url()?>/proveedores/listado/mapa/<?=$e['idProovedor']?>">Mapa</a>
<a role="button" class="btn btn-primary btn-lg" href="<?=site_url()?>/proveedores/listado/contactos/<?=$e['idProovedor']?>">Contacto</a>
<legend align="center">Fichas</legend>
<div align="center">
                <table style="margin-left: 50px; margin left:30px">
                    
            <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="idProvador">ID: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="idProvador" value="<?php echo $e['idProovedor']; ?>"></td>
                    </div>
                </form>
            </tr>
            <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="Nombre">Nombre: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="Nombre" value="<?php echo $e['Nombre']; ?>"></td>
                    </div>
                </form>
             </tr>  
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="Direccion">Direccion: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="Direccion" value="<?php echo $e['Direccion']; ?>"></td>
                    </div>
                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="codigopostal">Codigo Postal: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="cosigopostal" value="<?php echo $e['codigoPostal']; ?>"></td>
                    </div>                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="Pais">Pais: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="Pais" value="<?php echo $e['Estado']; ?>"></td>
                    </div>
                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="Provincia">Provincia: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="Provincia" value="<?php echo $e['Pais']; ?>"></td>
                    </div>
                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="numero1">Telefono Trabajo: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="numero1" value="<?php echo $e['Numero1']; ?>"></td>
                    </div>
                    <div class="form-group">
                        <td><label for="numero2">Telefono Particular: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="numero2" value="<?php echo $e['Numero2']; ?>"></td>
                    </div>
                </form>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="numero3">Movil: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="numero3" value="<?php echo $e['Numero3']; ?>"></td>
                    </div>
                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="Twiter1">Correo 1:</label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="Web" value="<?php echo $e['Correo1']; ?>"></td>
                    </div>
                    <div class="form-group">
                        <td><label for="Facebook1">Correo 2:</label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="Web" value="<?php echo $e['Correo2']; ?>"></td>
                    </div>
                </form>
                </tr>
                <tr>
                    <div class="form-group">
                        <td><label for="numero3">Facebook: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="numero3" value="<?php echo $e['Correo3']; ?>"></td>
                    </div>
                </form>
                </tr>
           
</table>
</div><br>
            </div>

</div>
 <?php endforeach?>

 <br>
                    <br>
                    <div style="float:center;" class="col-sm-offset-8 col-sm-10">
                                        <a role="button" class="btn btn-success" href="<?=site_url()?>/menu/proveedores">Ir a página principal de Proveedores</a>
                </div>
</section>