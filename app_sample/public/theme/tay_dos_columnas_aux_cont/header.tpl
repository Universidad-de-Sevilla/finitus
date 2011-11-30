<!DOCTYPE HTML> 
<html>
<head>
  <title>{$_nombre_pagina} - Universidad de Sevilla</title>
  <meta charset="UTF-8">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
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
  <!-- termina menu superior -->

  <h1>icasus</h1>

  <p id="layoutdims"> 
    {if $_usuario}
      <div id='usuario'>
        <a href='javascript:window.history.back();'> Volver</a>  
        &nbsp;
        <a href='index.php?page=usuario_datos&id_usuario={$_usuario->nif}'>{$_usuario->nombre} {$_usuario->apellidos}</a> 
        &nbsp;
        <a href='index.php?page=login'> Salir</a>
      </div>
    {/if}
  </p>
</div>

<div class="colmask leftmenu">
  <div class="colright">
    <div class="col1wrap">
      <div class="col1">
        <h2>{$_nombre_pagina}</h2>
        {if $smarty.get.aviso}<p class='aviso'>{$smarty.get.aviso}</p>{/if}
        {if $smarty.get.error}<p class='error'>{$smarty.get.error}</p>{/if}
        {if $aviso}<p class='aviso'>{$aviso}</p>{/if}
        {if $error}<p class='error'>{$error}</p>{/if}

        <!-- Content Column start -->
	
