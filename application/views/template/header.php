<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
    <script src="jquery.tablesorter.min.js"></script>
    <script type="text/javascript" src="/path/to/jquery-latest.js"></script> 
<script type="text/javascript" src="/path/to/jquery.tablesorter.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/css/bootstrap.css" rel="stylesheet" media="screen">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
        #map-canvas {
            width: 600px;
            height: 400px;
            background-color: #CCC;
        }
    </style>
    !-- choose a theme file -->
<link rel="stylesheet" href="/path/to/theme.default.css">
<!-- load jQuery and tablesorter scripts -->
<script type="text/javascript" src="/path/to/jquery-latest.js"></script>
<script type="text/javascript" src="/path/to/jquery.tablesorter.js"></script>

<!-- tablesorter widgets (optional) -->

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
            function initialize() {
                
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(44.5403, -78.5463),
                    zoom: 8,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)
            }
            google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $header['title'];?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet">

    <!--jQuery-->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/jquery-ui-1.11.4/jquery-ui.css");?>"/>
    <script src="<?php echo base_url("assets/jquery-ui-1.11.4/jquery-ui.js");?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id="#page-wrap" style="margin: auto;height: auto;min-height:100%;">
<section style="height:100%; width:100%;">
<div style="background-color:#013;" align="center">
<img src="<?php echo base_url("assets/img/sida.jpg");?>"  alt="logo" width="241" height="62"  />
</div>
<div>
<table height="7%"  style=" height:5%; width:100%; border: solid #013;">
  <td style="width: 100%; font-size: 18px; color: #013;" align="center">
    <ul class="nav nav-pills nav-justified">
      <li role="presentation" class="<?php echo $header['profecionistas'];?>"><a href="<?php echo site_url("menu/profesionistas");?>">Profesionistas</a></li>
      <li role="presentation" class="<?php echo $header['proveedores'];?>"><a href="<?php echo site_url("menu/proveedores");?>">Proveedores</a></li>
      <li role="presentation" class="<?php echo $header['presupuestos'];?>"><a href="<?php echo site_url("menu/preciosUnitarios");?>">Presupuestos</a></li>
    </ul>
  </td>
</table>
<table style=" height:5%; width:100%; border: solid #013;">
</table>
</div>
</div>
 <div class="container">
     
