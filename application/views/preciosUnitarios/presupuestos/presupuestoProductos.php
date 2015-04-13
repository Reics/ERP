
        
        <legend style="margin-top:20px;">Productos del presupuesto</legend>
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
        <?php $total = 0 ?>
        <?php if ($presupuesto != NULL) {
            foreach ($presupuesto as $p): ?>
        
                <tr>
                    <td><?php echo $p['nombre']; ?></td>
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
                <h3>Total: <?php echo $total = $total + ($p['cantidad'] * $p['precio_unitario'])  ?></h3> 
        <?php endforeach;  
        } ?>
        
    </tbody>
</table>

<hr> <!-- Botones -->
<div align="right">
    <button type="button" class="btn btn-danger">Regresar</button>
    <a type="button" class="btn btn-primary" >Agregar Producto</a>
</div>
