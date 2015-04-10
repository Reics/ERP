<section>
        <div class="container">

<h2 align="center">Listado de Proovedores</h2><hr>
    <table class="table table-striped display" id="dataTable"> <!-- Tabla de competencias -->
    <thead>
        <tr>
            <th>Proovedor</th>
            <th>Provincia</th>
            <th>Códio de Proovedor</th>
            <th>Categoría</th>
            <th>Ultima modificación</th>
        </tr>   
    </thead>
    <tbody>
        <?php if ($proovedores != NULL) {
                foreach ($proovedores as $c): ?>
        <tr>
            <td><a href="<?php echo site_url("proveedores/listado/datos");?>"><?php echo $c['proovedor']?></a></td>
            <td><?php echo $c['Provincia']?></td>
            <td><?php echo $c['idProovedor']?></td>
            <td><?php echo $c['Nombre']?></td>
            <td>05/03/2015</td>
            <td>
                <a type='button' class='btn btn-default' aria-label='Left Align' href="<?php echo site_url("proveedores/listado/contacto");?>">
                    <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                </a>
                <a type='button' class='btn btn-default' aria-label='Left Align' href="<?php echo site_url("proveedores/listado/contacto");?>">
                    <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                </a>
            </td>
        </tr>
    <?php endforeach;}?>
    
    </tbody>
</table>

    

    </div>
</section>