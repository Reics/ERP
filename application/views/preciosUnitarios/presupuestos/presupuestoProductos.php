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
        
        <h2></h2><hr>
        

<table class="table table-striped" id="dataTable">
    <thead>    
        <tr>
            <th>Materiales</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Importe</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>        
        
        <?php if ($presupuesto != NULL) {
            foreach ($presupuesto as $p): ?>
                <tr>
                    <td><?php echo $p['idPreciosUnitarios']; ?></td>
                    <td><?php echo $p['cantidad']; ?></td>
                    <td><?php echo $p['precio_unitario']; ?></td>
                    <td><?php echo $p['cantidad'] * $p['precio_unitario']; ?></td>
                    <td>
                        
                        <a type="button" class="btn btn-default" aria-label="Left Align" >
                            <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                        </a>
                        <a type="button" class="btn btn-default" aria-label="Left Align" >
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
    <a type="button" class="btn btn-primary" >Agregar Producto</a>
</div>
    </body>
</html>
