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
        
        <h2>Productos</h2><hr>
        

<table class="table table-striped" id="dataTable">
    <thead>    
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio Unitario^v</th>
            <th>Unidad</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>        
        
        <?php if ($preciounitario != NULL) {
            foreach ($preciounitario as $p): ?>
                <tr>
                    <td><?php echo $p['id']; ?></td>
                    <td><?php echo $p['Nombre']; ?></td>
                    <td><?php echo $p['Unidad']; ?></td>
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
    <button type="button" class="btn btn-danger">Salir</button>
    <a type="button" class="btn btn-primary" href="<?= site_url() ?>/encuestas/set_form">Agregar Producto</a>
</div>
    </body>
</html>
