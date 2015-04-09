<section style="margin-left: 50px; margin-right: 50px;">
	<div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#fichas">Fichas</a></li>
            <li><a data-toggle="tab" href="#contactos">Contactos</a></li>
            <li><a data-toggle="tab" href="#mapas">Mapas</a></li>
        </ul>

        <div class="tab-content">
            <div id="fichas" class="tab-pane fade in active">
                <h1 align="center">Fichas</h1><hr>

                <table>
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
                        <td><label for="puestofuncion">Puesto Función: </label></td>
                        <td><input type="text" readonly="readonly" class="form-control" id="puestofuncion"></td>
                    </div>
                </form>
                </tr>
                <tr>
                <form class="form-inline">
                    <div class="form-group">
                        <td><label for="Direccion">Dirección: </label></td>
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
                        <td><label for="Poblacion">Población: </label></td>
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
                <div class="col-sm-offset-8 col-sm-10">
                    <button type="submit" class="btn btn-success">Editar</button>
                </div>
            </div>

            <div id="contactos" class="tab-pane fade">
                <h1 align="center">Contactos</h1><hr>

                <table class="table table-striped display" id="dataTable"> <!-- Tabla de competencias -->
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Código de Proovedor</th>
                                    <th>Categoría</th>
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

                    <div align="right">
                        <button type="submit" class="btn btn-success">Agregar Contacto</button>
                    </div>
            </div>

            <div id="mapas" class="tab-pane fade">
                <h1 align="center">Mapa</h1><hr>

                <table class="table table-striped display" > <!-- Tabla de competencias -->
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Direccion</th>
                        </tr>   
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div id="map-canvas"></div>
                            </td>
                            <td>
                                Dirección: El siglo del torreon N°471 Nte. <br>
                                Código Postal: 80050 <br>
                                Pais: México <br>
                                Estado: Aguascalientes <br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</section>