<!DOCTYPE HTML> 
<html>
<head>
  <title>{$_nombre_pagina} - Finitus</title>
  <meta charset="utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="description" content="Aplicación para la selección y asignación de trabajos de fin de grado y master" />
  <meta name="keywords" content="universidad, investigación, grado, master" />
  <meta name="robots" content="index, follow" />
  <link rel="stylesheet" type="text/css" href="theme/tay_dos_columnas_aux_cont/css/main.css">
  <link rel="stylesheet" type="text/css" href="theme/tay_dos_columnas_aux_cont/css/layout.css">
  <link rel="stylesheet" type="text/css" href="theme/css_comun/validation.css">
  {foreach from=$_javascript item=script} 
    <script type='text/javascript' src="js/{$script}.js"></script>
  {/foreach}
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>

<div id="header">
  <!-- empieza menu superior -->
  {include file='menu_superior.tpl'}
  
    {if $_usuario}
      <div id='usuario'>
        <a href='index.php?page=usuario_datos&id_usuario={$_usuario->nif}'>{$_usuario->nombre} {$_usuario->apellidos}</a> 
        &nbsp;
        <a href='index.php?page=login'> Salir</a>
      </div>
    {/if}
  <!-- termina menu superior -->

  <h1>finitus</h1>

</div>

<div class="colmask leftmenu">
  <div class="colright">
    <div class="col1wrap">
      <div class="col1">
        <h2>{$_nombre_pagina}</h2>
		        <!-- Content Column start -->
	
