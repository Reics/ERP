<section>

   
    
    <form class="form-horizontal">
        <fieldset>
            <!-- Form Name -->
            <legend align="center">Información de Profesionista</legend>
            <div class="col-xs-6">
                <?php foreach ($registros as $fila) {
                    ?>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-6 control-label" for="nombre">Nombre</label>  
                        <div class="col-xs-6">
                            <input id="nombre" name="nombre" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->Nombre; ?>">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-6 control-label" for="apellidos">Apellidos</label>  
                        <div class="col-xs-6">
                            <input id="apellidos" name="apellidos" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->Apellidos; ?>">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-6 control-label" for="mail">E-mail</label>  
                        <div class="col-xs-6">
                            <input id="mail" name="mail" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->Email; ?>">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-6 control-label" for="paginaWeb">Página Web</label>  
                        <div class="col-xs-6">
                            <input id="paginaWeb" name="paginaWeb" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->PaginaWeb; ?>">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-6 control-label" for="skype">Skype</label>  
                        <div class="col-xs-6">
                            <input id="skype" name="skype" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->Skype; ?>">
                        </div>
                    </div>        
                    <!-- Text input-->
                    <!-- Text input--><!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-6 control-label" for="grado">Facebook</label>  
                        <div class="col-xs-6">
                            <input id="grado" name="facebook" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->facebook; ?>">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-6 control-label" for="experiencia">Twitter</label>  
                        <div class="col-xs-6">
                            <input id="twitter" name="experiencia" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->twitter; ?>">                            </div>
                    </div>
                    
                    <hr></hr>
                    <div class="form-horizontal" align="left">
                        <!-- Textarea --><h3>Direccion 1</h3>
                       
                       
                        <div class="form-group">
                            <label class="col-xs-3 control-label" for="municipio2">Calle  </label>
                            <div class="col-xs-6">
                                <input id="calle1" name="calle1" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->calle1; ?>">
                            </div>
                        </div>
                        <!-- Text input-->
                  
                      <div class="form-group">
                            <label class="col-xs-3 control-label" for="municipio1">Municipio</label>
                       <div class="col-xs-6">
                                <input id="municipio1" name="municipio1" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->delegacion_municipio1; ?>">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div>
                      <div class="form-group">
                            <label class="col-xs-3 control-label" for="estado2">Estado</label>
                            <div class="col-xs-6">
                                <input id="estado1" name="estado1" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->estado1; ?>">
                            </div>
                        </div>
                       
                <div class="form-group">
                            <label class="col-xs-3 control-label" for="numerointerior1">Numero Interior</label>
                            <div class="col-xs-6">
                                <input id="numint1" name="numint1" type="text" placeholder="" class="form-control input-md" readonly="readonly" value="<?php echo $fila->interior1; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="col-xs-3 control-label" for="numext1">Número Exterior</label>
                            <div class="col-xs-6">
                                <input id="numext1" name="numext1" type="text" placeholder="" class="form-control input-md" readonly="readonly" value="<?php echo $fila->exterior1; ?>">    </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xs-4" style="float:right; margin:40px;" >
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-6 control-label" for="telFijo">Tel. Casa</label>  
                        <div class="col-xs-6">
                            <input id="telCasa" name="telCasa" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->telefonofijo1; ?>"> 
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-6 control-label" for="movil">Móvil 1</label>  
                        <div class="col-xs-6">
                            <input id="movil1" name="movil1" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->movil1; ?>">

                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-6 control-label" for="movil">Móvil 2</label>  
                        <div class="col-xs-6">
                            <input id="movil2" name="movil2" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->movil2; ?>">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-6 control-label" for="telOficina">Tel. oficina</label>  
                        <div class="col-xs-6">
                            <input id="telOficina" name="telOficina" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->telefono_trabajo1; ?>">

                        </div>                         
                    </div><br><br><br><br><br><hr></hr>
</form>
</form>




                         <div class="form-horizontal">
                        <!-- Textarea --><h3>Dirección 2</h3>
                        <div class="form-group">
                            <label class="col-xs-4 control-label" for="calle2">Calle</label>  
                            <div class="col-xs-8">
                                <input id="calle2" name="calle2" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->delegacion_municipio2; ?>" />                    
                        </div>        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-xs-4 control-label" for="municipio">Municipio</label>  
                            <div class="col-xs-8">
                                <input id="municipio" name="municipio" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->delegacion_municipio2; ?>"
                                       >

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-xs-4 control-label" for="estado">Estado</label>  
                            <div class="col-xs-8">
                                <input id="estado" name="estado" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->estado2; ?>">

                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-xs-4 control-label" for="numint2">Número Interior</label>  
                            <div class="col-xs-8">
                                <input id="numint2" name="numint2" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->interior2; ?>"
                                     > </div>   </div>

                        <div class="form-group">
                            <label class="col-xs-4 control-label" for="numext2">Numero Exterior</label>  
                            <div class="col-xs-8">
                                <input id="numext2" name="numext2" type="text" placeholder="" class="form-control input-md"readonly="readonly" value="<?php echo $fila->exterior2; ?>"
                                       >

                            </div>
                       </div>
                   
                    
                <div class="col-xs-12">
                    <div class="col-xs-12">

                    </div>
                </div>

                <div style="float:none"></div>
                <!-- Button (Double) -->
                <div  align="center" class="col-xs-12" style="float:right; margin:5px;">
                    <div class="form-group">
                        <label class="col-xs-6 control-label" for="guardar"></label>
                        <div>

                        </div>
                    </div>    

        
</fieldset>

        </form> 

         <form class="navbar-form navbar-left" role="search" method="post" action="<?php echo base_url(); ?>index.php/listado">
            <button id="cancelar" name="id" class="btn btn-danger" type="submit" value="<?php echo $fila->ID_Profesionistas; ?>">Cancelar</button>
         </form>


        <form class="navbar-form navbar-left" role="search" method="post" action="<?php echo base_url(); ?>index.php/listado/verObras">
            <button id="id" name="id" class="btn btn-success" type="submit" value="<?php echo $fila->ID_Profesionistas; ?>">Ver Obras</button>
        </form>
       
     <form class="navbar-form navbar-left" role="search" method="post" action="<?php echo base_url(); ?>index.php/listado/verCarrera">
            <button id="id" name="id" class="btn btn-success" type="submit" value="<?php echo $fila->ID_Profesionistas; ?>">Ver carrera</button>
     </form>
   
        <form class="navbar-form navbar-left" name="form1" method="post" action="<?php echo base_url(); ?>index.php/listado/verEspecialidad" >
            <button id="vermas" name="id" class="btn btn-success" type="submit" value="<?php echo $fila->ID_Profesionistas; ?>"> Ver especialidad </button>
        </form>

       
        <form class="navbar-form navbar-left" method="post" action="<?php echo base_url(); ?>index.php/listado/modifica" >
        <button id="modificar" name="id" class="btn btn-warning" value="<?php echo $fila->ID_Profesionistas; ?>">Modificar</button>    
        </form>
        

        <form class="navbar-form navbar-left" method="post" action="<?php echo base_url(); ?>index.php/listado/elimina">
        <button id="id" name="id" class="btn btn-danger" value="<?php echo $fila->ID_Profesionistas; ?>">Eliminar</button>  
        </form>
    <?php }
    ?>

</section>