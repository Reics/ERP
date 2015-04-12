<section>
    <legend style="margin-top:20px;">Productos</legend>
    
    <table class="table table-striped" id="dataTable">
        <thead>    
            <tr>
                <th>ID</th>
                <th>Contratista</th>
                <th>Fecha</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody> 
            
            <?php
            if ($presupuesto != NULL) {
                foreach ($presupuesto as $p):
                    ?>
                    <tr>
                        <td><?php echo $p['idPresupuesto']; ?></td>
                        <td><?php echo $p['contratista']; ?></td>
                        <td><?php echo $p['fecha_inicio']; ?></td>
                        <td>
                            <a type="button" class="btn btn-default" aria-label="Left Align"  href="<?= site_url() ?>/preciosUnitarios/presupuestos/indexproduct/<?= $p['idPresupuesto'] ?>">
                                <span class='glyphicon glyphicon-list' aria-hidden='true'></span>
                            </a>
                            <a type="button" class="btn btn-default" aria-label="Left Align" href="<?= site_url() ?>/preciosUnitarios/presupuestos/update_form/<?= $p['idPresupuesto'] ?>">
                                <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                            </a>
                            <a type="button" class="btn btn-default" aria-label="Left Align" href="<?= site_url() ?>/preciosUnitarios/presupuestos/delete/<?= $p['idPresupuesto'] ?>">
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
        <a type="button" class="btn btn-danger" href="<?php echo site_url("menu/preciosUnitarios/"); ?>">Salir</a>
        <a type="button" class="btn btn-primary" href="<?php echo site_url("preciosUnitarios/presupuestos/set_form"); ?>" >Agregar Presupuesto</a>
    </div>
</section>