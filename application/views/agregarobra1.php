
<section style="height:100%; width:100%;">

<div style="background-color:#013;" align="center">
<img src="//localhost/GitHub/ERP/images/sida.jpg"   alt="logo" width="367" height="60"  />
</div>

<div>
<table height="7%"  style=" height:5%; width:100%; border: solid #013;">
  <td style="width: 100%; font-size: 18px; color: #013;" align="center">&nbsp;</td>
</table>
<table style=" height:10%; width:100%; border: solid #013;">

<tr align="center">
<td  align="center" bgcolor="#999999"><strong><em>Profesionistas</em></strong></td>
<td  align="center"><strong><em>Proveedores</em></strong></td>
<td align="center"><strong><em>Presupuestos</em></strong></td></tr>
</table>
</div>

<br /><hr />
<h3	align="center">Nueva Obra</h3>
<hr />
<fieldset>
<form class="form-horizontal">


<div class="container">
<div class="row">
      <div class='col-sm-6'>
  <div class="form-group">
    <label class="col-xs-3 control-label" for="nomobra">Nombre de la Obra</label>
    <div class="col-sm-6">
      <input id="nomobra" name="nomobra" type="text" placeholder="" class="form-control input-md" >
    </div>
  </div></div></div></div>
  
<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
             <label class="col-xs-3 control-label" for="nomobra">Fecha de inicio</label>
                <div class='input-group date' id='fechainicio'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#fechainicio').datetimepicker();
            });
        </script>
    </div>
</div>
  
  
  
  
  
  <div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
             <label class="col-xs-3 control-label" for="nomobra">Fecha de Termino</label>
                <div class='input-group date' id='fechafin'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#fechafin').datetimepicker();
            });
        </script>
    </div>
</div>




<button name="agregar" class="btn btn-primary" style=" alignment-adjust:middle; margin:5px; width:200px" >Agregar</button>
</form></fieldset>

<a href="verobra">
<button name="cerrar" class="btn btn-danger" style=" alignment-adjust:middle; width:200px; margin:4px;">Cancelar</button>
</a> 

</section>



