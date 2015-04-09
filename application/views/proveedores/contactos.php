
    <section>
        <div class="container">
            <h1 align="center">Contactos</h1><hr>
        <table class="table table-striped display" id="dataTable"> <!-- Tabla de competencias -->

    <thead>
        <tr>
            <th>Nombre</th>
            <th>Código de Proovedor</th>
            <th>Categoría Materiales</th>
            <th>Teléfono</th>
            <th>Sitio web</th>
            <th>Email</th>
        </tr>   
    </thead>
    <tbody>
        <tr>
            <td>Contacto 1</td>
            <td>1</td>
            <td>Cemento y Arena</td>
            <td>495 109 3348 <br> 495 109 4597</td>
            <td>www.facebook.com</td>
            <td>miguel-alejandro-eudave-landeros@hotmail.com</td>
            <td>
                <a type='button' class='btn btn-default' aria-label='Left Align' href="<?php echo site_url("proveedores/listado/contacto");?>">
                    <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                </a>
                <a type='button' class='btn btn-default' aria-label='Left Align'>
                    <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                </a>
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td>Contacto 2</td>
            <td>2</td>
            <td>Varillas y Herramientos</td>
            <td>495 109 3348 <br> 495 109 4597 <br> 495 019 1884</td>
            <td>www.taringa.com</td>
            <td>barca_108_@hotmail.com</td>
            <td>
                <a type='button' class='btn btn-default' aria-label='Left Align' href="<?php echo site_url("proveedores/listado/contacto");?>">
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

                <div class="container">
                <hr>
    <div align="right">
        <a type="button" class="btn btn-danger" >Cancelar</a>
        <a type='button' class='btn btn-primary' aria-label='Left Align' href="<?php echo site_url("proveedores/listado/contacto");?>">
      Agregar Contacto
   </a>
        
    </div>
    </div>
    </section>