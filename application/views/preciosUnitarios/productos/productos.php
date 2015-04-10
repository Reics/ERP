<section>       
        <h2>Productos</h2><hr>
        

<table class="table table-striped" id="dataTable">
    <thead>    
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio Unitario</th>
            <th>Unidad</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>        
        <?php if ($producto != NULL) {
            foreach ($producto as $p): ?>
                    <tr>
                    <td><?php echo $p['idPreciosUnitarios']; ?></td>
                    <td><?php echo $p['Nombre']; ?></td>
                    <td><?php echo $p['precioUnitario']; ?></td>
                    <td><?php echo $p['UnidadMedida']; ?></td>
                    <td>
                        <a type="button" class="btn btn-default" aria-label="Left Align" href="<?php echo site_url("preciosUnitarios/productos/editar");?>">
                            <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                        </a>
                        <a type="button" class="btn btn-default" aria-label="Left Align">
                            <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                        </a>
                    </td>
                </tr>
                <?php endforeach;
                }?>
        
    </tbody>
</table>

<hr> <!-- Botones -->
<div align="right">
    <button type="button" class="btn btn-danger">Salir</button>
    <a type="button" class="btn btn-primary" href="<?php echo site_url("preciosUnitarios/productos/agregar");?>">Agregar Producto</a>
</div>
</section>