<section>
        <div class="container">

<h2 align="center">Listado de Proovedores</h2><hr>

    <div class="row">
        <div class="col-md-3">
            <label>Categoría</label>
            <select class="form-control" name="cuatrimestre" id="cuatrimestre">
                <option value="primero">Cemento y Arena</option>
                <option value="segundo">Varillas y Herramientas</option>
            </select>
        </div>

        <div class="col-md-3">
            <label>Provincia</label>
            <select class="form-control" name="especialidad" id="especialidad">
                <option value="redes">México</option>
                <option value="software">Estados Unidos</option>
            </select>
        </div>
    </div>

        <h2 align="center"></h2><hr>


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
        <tr>
            <td><a href="<?php echo site_url("proveedores/listado/datos");?>">Proovedor 1</a></td>
            <td>Estados Unidos</td>
            <td>1</td>
            <td>Cemento y Arena</td>
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
    </tbody>
    <tbody>
        <tr>
            <td>Proovedor 2</td>
            <td>México</td>
            <td>2</td>
            <td>Varillas y Herramientas</td>
            <td>05/03/2015</td>
            <td>
                <a type='button' class='btn btn-default' aria-label='Left Align'>
                    <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                </a>
                <a type='button' class='btn btn-default' aria-label='Left Align'>
                    <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                </a>
            </td>
        </tr>
    </tbody>
</table>

    

    </div>
</section>