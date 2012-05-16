<!DOCTYPE HTML> 
<html>
<head>
  <title>{$_nombre_pagina} - Finitus</title>
  <meta charset="utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="description" content="Aplicación para la selección y asignación de trabajos de fin de grado y master" />
  <meta name="keywords" content="universidad, investigación, grado, master" />
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
</div>

<div class="colmask leftmenu">
  <div class="colright">
    <div class="col1wrap">
      <div class="col1">
        <h2>{$_nombre_pagina}</h2>
            {if isset($error)}<p class="error">{$error}</p>{/if}
            {if isset($smarty.get.error)}<p class="error">{$smarty.get.error}</p>{/if}
            {if isset($aviso)}<p class="aviso">{$aviso}</p>{/if}
            {if isset($smarty.get.aviso)}<p class="aviso">{$smarty.get.aviso}</p>{/if}
		        <!-- Content Column start -->
	
