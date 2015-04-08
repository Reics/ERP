<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<section>
<legend style="color:#black">Agregar Productos a Presupuesto</legend>
<form class="form-horizontal">
    <div class="form-group">
	
    <div class="col-md-3">
    </div>
    <div class="row">
        <div class="col-md-3">
            <label class="col-md-3 control-label" style="width: 100px;" for="producto">Producto</label>
            <select class="form-control" name="producto" id="producto">
                <option value="primero">Primero</option>
                <option value="segundo">Segundo</option>
            </select>
        </div>
        <div class="col-md-3">
            <label class="col-md-3 control-label" style="width: 100px;" for="cantidad">Cantidad</label>
            <input id="cantidad" name="cantidad" type="text" placeholder="0" class="form-control input-md">
        </div>
    </div>
    </div>


    <div class="form-group">

    <div class="col-md-3">
    </div>
	<div class="row">
        <div class="col-md-3">
            <label class="col-md-3 control-label" style="width: 130px;" for="precio">Precio Unitario</label>  
    	    <input id="precio" name="precio" type="text" placeholder="$0.00" class="form-control input-md">
        </div>
        <div class="col-md-3">
            <label cclass="col-md-3 control-label" style="width: 140px;" for="importe">Importe</label>
            <input id="importe" name="importe" type="text" placeholder="$0.00" class="form-control input-md">
        </div>
    </div>

    <div class="row" style="margin-top: 50px; margin-left: 175px;" >
        <div class="col-md-4" style="margin-: 50px">
        <button id="Guardar" name="Guardar" class="btn btn-success">Agregar</button>
      </div>
      <div class="col-md-4" style="margin-left: 330px;">
        <button id="Cancelar" name="Cancelar" class="btn btn-danger">Cancelar</button>
      </div>
    </div>

  </form>

</section>
</body>
