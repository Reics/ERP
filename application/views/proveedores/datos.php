
<section class="container">

  <form class="form-inline">
  <div class="form-group">
    <label for="idProvador">ID: </label>
    <input type="text" class="form-control" id="idProvador">
  </div>
  </form>
  <form class="form-inline">
  <div class="form-group">
    <label for="Nombre">Nombre: </label>
    <input type="text" class="form-control" id="Nombre">
  </div>
  </form>
  <form class="form-inline">
  <div class="form-group">
    <label for="Empresa">Empresa: </label>
    <input type="text" class="form-control" id="Empresa">
  </div>
  </form>
    <form class="form-inline">
  <div class="form-group">
    <label for="titulodecortesia">Titulo de Cortesia: </label>
    <input type="text" class="form-control" id="titulodecortesia">
  </div>
  </form>
<form class="form-inline">
  <div class="form-group">
    <label for="puestofuncion">Puesto Función: </label>
    <input type="text" class="form-control" id="puestofuncion">
  </div>
  </form>
<form class="form-inline">
  <div class="form-group">
    <label for="Direccion">Dirección: </label>
    <input type="text" class="form-control" id="Direccion">
  </div>
  </form>
<form class="form-inline">
    <div class="form-group">
        <label for="codigopostal">Codigo Postal: </label>
        <input type="text" class="form-control" id="cosigopostal">
    </div>
    <div class="form-group">
        <label for="Poblacion">Población: </label>
        <input type="text" class="form-control" id="Poblacion">
    </div>
  </form>
<form class="form-inline">
  <div class="form-group">
    <label for="Pais">Pais: </label>
    <input type="text" class="form-control" id="Pais">
  </div>
  </form>
<form class="form-inline">
  <div class="form-group">
    <label for="Provincia">Provincia: </label>
    <input type="text" class="form-control" id="Provincia">
  </div>
  </form>
<form class="form-inline">
    <div class="form-group">
        <label for="numero1">Telefono Trabajo: </label>
        <input type="text" class="form-control" id="numero1">
    </div>
    <div class="form-group">
        <label for="numero2">Telefono Particular: </label>
        <input type="text" class="form-control" id="numero2">
    </div>
  </form>
<form class="form-inline">
  <div class="form-group">
    <label for="numero3">Movil: </label>
    <input type="text" class="form-control" id="numero3">
  </div>
  </form>
<form class="form-inline">
    <div class="form-group">
        <label for="correo1">Email 1: </label>
        <input type="text" class="form-control" id="correo1">
    </div>
    <div class="form-group">
        <label for="correo2">Email 2: </label>
        <input type="text" class="form-control" id="correo2">
    </div>
  </form>
<form class="form-inline">
    <div class="form-group">
        <label for="Twiter1">Red Social 1: </label>
        <input type="text" class="form-control" id="Web">
    </div>
    <div class="form-group">
        <label for="Facebook1">Red Social 2: </label>
        <input type="text" class="form-control" id="Web">
    </div>
  </form>

  <div class="col-sm-offset-8 col-sm-10">
  <a type='button' class='btn btn-primary' aria-label='Left Align' href="<?php echo site_url("proveedores/listado/contacto");?>">
      Editar
   </a>

   <a type='button' class='btn btn-primary' aria-label='Left Align' href="<?php echo site_url("proveedores/listado/contactos");?>">
      Contacto
   </a>

   <a type='button' class='btn btn-primary' aria-label='Left Align' href="<?php echo site_url("proveedores/listado/mapa");?>">
      Mapa
   </a>

</div>

</section>