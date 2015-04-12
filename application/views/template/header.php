<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $header['title'];?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet">

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
     
