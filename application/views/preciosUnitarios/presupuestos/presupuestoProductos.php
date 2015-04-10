<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h2>P001         ALUMARK S.A       Edificios Apartamentales</h2><hr>
        

<table class="table table-striped" id="dataTable">
    <thead>    
        <tr>
            <th>Materiales</th>
            <th>Unidad</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Importe</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>        
        
        <?php if ($preciounitario != NULL) {
            foreach ($preciounitario as $p): ?>
                <tr>
                    <td><?php echo $p['materiales']; ?></td>
                    <td><?php echo $p['unidad']; ?></td>
                    <td><?php echo $p['cantidad']; ?></td>
                    <td>
                        <a type="button" class="btn btn-default" aria-label="Left Align" href="<?=site_url()?>/preguntas/set_form/<?=$p['idencuesta']?>">
                            <span class='glyphicon glyphicon-plus' aria-hidden='true'></span>
                        </a>
                        <a type="button" class="btn btn-default" aria-label="Left Align" href="<?=site_url()?>/encuestas/update_form/<?=$p['idencuesta']?>">
                            <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                        </a>
                        <a type="button" class="btn btn-default" aria-label="Left Align" href="<?=site_url()?>/encuestas/delete/<?=$p['idencuesta']?>">
                            <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                        </a>
                    </td>
                </tr>
        <?php endforeach;  
        } ?>
        
    </tbody>
</table>

<hr> <!-- Botones -->
<div align="right">
    <h3>Total</h3>
    <button type="button" class="btn btn-danger">Regresar</button>
    <a type="button" class="btn btn-primary" href="<?= site_url() ?>/encuestas/set_form">Agregar Producto</a>
</div>
    </body>
</html>
