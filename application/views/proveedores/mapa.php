
<section style="margin-left: 50px; margin-right: 50px;">


<div class="row">

<legend align="center">Proveedor</legend>
<div>
<a role="button" class="btn btn-primary btn-lg" href="<?php echo site_url("proveedores/listado/datos");?>">Ficha</a>
<a role="button" class="btn btn-primary btn-lg" href="<?php echo site_url("proveedores/listado/mapa");?>">Mapa</a>
<a role="button" class="btn btn-primary btn-lg" href="<?php echo site_url("proveedores/listado/contactos");?>">Contacto</a>
</div> 

<legend align="center">Fichas</legend>

<table class="table table-striped display" style="margin-left: 50px; margin left:30px"> <!-- Tabla de competencias -->
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

                <style>
            #map-canvas {
                width: 500px;
                height: 400px;
                background-color: #CCC;
            }
        </style>

        <script src="http://maps.googleapis.com/maps/api/js"></script>

        <script>
        var Rotterdam = new google.maps.LatLng(52.395715,4.888916);

        function initialize(){
            var mapProp = {
                center:Rotterdam,
                zoom:7,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
  
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

                var myCity = new google.maps.Circle({
                    center:Rotterdam,
                    radius:20000,
                    strokeColor:"#0000FF",
                    strokeOpacity:0.8,
                    strokeWeight:2,
                    fillColor:"#0000FF",
                    fillOpacity:0.4
                });

                myCity.setMap(map);

                // Zoom to 9 when clicking on marker
                google.maps.event.addListener(marker,'click',function() {
                    map.setZoom(9);
                    map.setCenter(marker.getPosition());
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
</section>


