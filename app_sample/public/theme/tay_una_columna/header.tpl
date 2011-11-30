<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" >
<head>
  <title>{$_nombre_pagina} - Portal del responsable</title>
  <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
  <meta name="description" content="Portal del responsable para el seguimiento de actividades formativas 
    del PAS de la Universidad de Sevilla" />
  <meta name="keywords" content="Universidad de Sevilla, formación, recursos humanos, cursos" />
  <link rel="stylesheet" type="text/css" href="theme/taylor_c/css/main.css">
  <link rel="stylesheet" type="text/css" href="theme/taylor_c/css/tablesort.css">
  {foreach from=$_javascript item=script} 
    <script type='text/javascript' src="js/{$script}.js"></script>
  {/foreach}
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>

<body>

  <div id="header">
		<div id="logo"><a href="http://www.us.es/"><img src="theme/taylor_c/images/logo.jpg" /></a></div>
    <h4>SERVICIO DE FORMACIÓN Y DESARROLLO DEL PAS · UNIVERSIDAD DE SEVILLA</h4>
    <h1><a href="index.php?page=personal_listar">Portal del responsable</a></h1>
    
    <!-- Upper Menu start -->
    {include file='menu_superior.tpl'}
    <!-- Upper Menu end -->

    <p id="layoutdims"> 
      {if $_usuario}
          {$_usuario->nombre} {$_usuario->apellidos} 
      {/if}
    </p>
  </div>

  <div class="colmask fullpage">
    <div class="col1">
      <h2>{$_nombre_pagina}</h2>
      {if $aviso}<p class='aviso'>{$aviso}</p>{/if}
      {if $error}<p class='error'>{$error}</p>{/if}

      <!-- Content Column start -->
	
