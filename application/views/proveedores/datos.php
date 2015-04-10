
<section style="margin-left: 50px; margin-right: 50px;">


<div class="row">

<legend align="center">Proveedor</legend>
<div>
<a role="button" class="btn btn-primary btn-lg" href="<?php echo site_url("proveedores/listado/datos");?>">Ficha</a>
<a role="button" class="btn btn-primary btn-lg" href="<?php echo site_url("proveedores/listado/mapa");?>">Mapa</a>
<a role="button" class="btn btn-primary btn-lg" href="<?php echo site_url("proveedores/listado/contactos");?>">Contacto</a>
</div> 

<legend align="center">Fichas</legend>
<div align="center">
                <table style="margin-left: 50px; margin left:30px">
            <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="idProvador">ID: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="idProvador"></td>
                    </div>
                </form>
            </tr>
            <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="Nombre">Nombre: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="Nombre"></td>
                    </div>
                </form>
             </tr>  
             <tr> 
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="Empresa">Empresa: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="Empresa"></td>
                    </div>
                </form>
            </tr>
            <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="titulodecortesia">Titulo de Cortesia: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="titulodecortesia"></td>
                    </div>
                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="puestofuncion">Puesto Funcion: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="puestofuncion"></td>
                    </div>
                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="Direccion">Direccion: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="Direccion"></td>
                    </div>
                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="codigopostal">Codigo Postal: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="cosigopostal"></td>
                    </div>
                    <div class="form-group">
                        <td><label for="Poblacion">Poblacion: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="Poblacion"></td>
                    </div>
                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="Pais">Pais: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="Pais"></td>
                    </div>
                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="Provincia">Provincia: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="Provincia"></td>
                    </div>
                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="numero1">Telefono Trabajo: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="numero1"></td>
                    </div>
                    <div class="form-group">
                        <td><label for="numero2">Telefono Particular: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="numero2"></td>
                    </div>
                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="numero3">Movil: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="numero3"></td>
                    </div>
                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="correo1">Email 1: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="correo1"></td>
                    </div>
                    <div class="form-group">
                        <td><label for="correo2">Email 2: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="correo2"></td>
                    </div>
                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="Twiter1">Red Social 1: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="Web"></td>
                    </div>
                    <div class="form-group">
                        <td><label for="Facebook1">Red Social 2: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="Web"></td>
                    </div>
                </form>
                </tr>
</table>
</div>
                <div class="col-sm-offset-8 col-sm-10">
                                        <a role="button" class="btn btn-success" href="<?php echo site_url("proveedores/contacto");?>">Editar</a>
                </div>
            </div>

</div>

</section>