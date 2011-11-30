<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>{$_nombre_aplicacion} - {$_nombre_pagina}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" type="text/css" href="theme/linneo/css/main.css">

{foreach from=$_javascript item=script} 
	<script type='text/javascript' src="js/{$script}.js"></script>
{/foreach}
</head>

<body>
<div id="wrap">
	<div id="cabecera">
		<div id="logo"><a href="http://www.us.es/"><img src="theme/linneo/images/logo.jpg" align="left" /></a></div>
		<p class="subtitulo">Una aplicación hecha con Cáscara y mucho cariño</p>
		<h1>{$_nombre_pagina}</h1>
	
	{if $_usuario}
		<div id='usuario'>
			<a href='javascript:window.history.back();'> Volver</a>  
			&nbsp;
			<a href='index.php?page=usuario_datos&id_usuario={$_usuario.id_usuario}>{$_usuario.login}</a> 
			&nbsp;
			<a href='index.php?page=login'> Salir</a>
		</div>
	{/if}
	</div><!-- #cabecera -->

	<div id='principal'>
		
		<div id="menu">
			{include file='menu.tpl'}
		</div><!-- #menu -->

		<div id="contenido">
