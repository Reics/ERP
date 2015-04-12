
<section style="margin-left: 50px; margin-right: 50px;">
<?php foreach ($proovedores as $e): ?>
<div class="row">

<legend align="center">Proveedor</legend>
<div>
    
<a role="button" class="btn btn-primary btn-lg" href="<?=site_url()?>/proveedores/listado/datos/<?=$e['idProovedor']?>">Ficha</a>
<a role="button" class="btn btn-primary btn-lg" href="<?=site_url()?>/proveedores/listado/mapa/<?=$e['idProovedor']?>">Mapa</a>
<a role="button" class="btn btn-primary btn-lg" href="<?=site_url()?>/proveedores/listado/contactos/<?=$e['idProovedor']?>">Contacto</a>

<legend align="center">Fichas</legend>

<table class="table table-striped display" style="margin-left: 50px; margin left:30px"> <!-- Tabla de competencias -->
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Direccion</th>
                        </tr>   
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div id="map-canvas"></div>
                            </td>
                            <td>
                                Dirección: <?php echo $e['Direccion']; ?><br>
                                Código Postal: <?php echo $e['codigoPostal']; ?> <br>
                                Pais: <?php echo $e['Pais']; ?> <br>
                                Estado: <?php echo $e['Estado']; ?> <br>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php endforeach ?>

                <br>
                    <br>
                    <div style="float:center;" class="col-sm-offset-8 col-sm-10">
                                        <a role="button" class="btn btn-success" href="<?=site_url()?>/menu/proveedores">Ir a página principal de Proveedores</a>
                </div>
</section>