<section>
        <div class="container">

<h2 align="center">Listado de Proovedores</h2><hr>
    <table id="styling" class="table tablesorter"> <!-- Tabla de competencias -->
    <thead>
        <tr>
            <th>Co.</th>
            <th>Proovedor</th>
            <th>RFC</th>
            <th>Pais</th>
            <th>Estado</th>
            <th>Categoría</th>
        </tr>   
    </thead>
    <tbody>
        <?php if ($proovedores != NULL) {
                foreach ($proovedores as $c): ?>
        <tr>
            <td><?php echo $c['idProovedor']?></td>
            <td><a href="<?=site_url()?>/proveedores/listado/datos/<?=$c['idProovedor']?>"><?php echo $c['Nombre']?></a></td>
            <td><?php echo $c['RFC']?></td>
            <td><?php echo $c['Pais']?></td>
            <td><?php echo $c['Estado']?></td>
            <td><?php echo $c['Categoria']?></td>
            <td>
                <a type='button' class='btn btn-default' aria-label='Left Align' href="<?=site_url()?>/proveedores/listado/contacto/<?=$c['idProovedor']?>">
                    <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                </a>
                <a type='button' class='btn btn-default' aria-label='Left Align' href="<?=site_url()?>/proveedores/listado/borrar/<?=$c['idProovedor']?>">
                    <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                </a>
            </td>
        </tr>
    <?php endforeach;}?>
    
    </tbody>
</table>
    </div>

    <br>
                    <br>
                    <div style="float:center;" class="col-sm-offset-8 col-sm-10">
                                        <a role="button" class="btn btn-success" href="<?=site_url()?>/menu/proveedores">Ir a página principal de Proveedores</a>
                </div>
</section>