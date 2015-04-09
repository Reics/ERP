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
        
        <h2>Productos</h2><hr>
        

<table class="table table-striped" id="dataTable">
    <thead>    
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio Unitario^v</th>
            <th>Unidad</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>        
        
                <tr>
                    <td>id</td>
                    <td>Nombre</td>
                    <td>Unidad</td>
                    <td>
                        <a type="button" class="btn btn-default" aria-label="Left Align">
                            <span class='glyphicon glyphicon-plus' aria-hidden='true'></span>
                        </a>
                        <a type="button" class="btn btn-default" aria-label="Left Align">
                            <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
                        </a>
                        <a type="button" class="btn btn-default" aria-label="Left Align">
                            <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
                        </a>
                    </td>
                </tr>
        
    </tbody>
</table>

<hr> <!-- Botones -->
<div align="right">
    <button type="button" class="btn btn-danger">Salir</button>
    <a type="button" class="btn btn-primary">Agregar Producto</a>
</div>
    </body>
</html>
