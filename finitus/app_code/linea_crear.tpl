{if $aviso}<p class='aviso'>{$aviso}</p>{/if} 
{if $error}<p class='error'>{$error}</p>{/if} 

<form method="post" action="index.php?page=linea_grabar" id="linea">
	<li><label for="nombre">Nombre</label> <br />
    <input type="text" name="nombre" id="nombre" class="inp" /></li>
    
	<li><label for="titulo">Titulación</label> <br />
    <select name="titulo" id="titulo">
	  {foreach from=$titulos item=titulo}
		<option value="{$titulo->id}">{$titulo->nombre}</option>
	  {/foreach}
	</select>
	</li>
	
	<li><label for="area">Áreas de conocimiento</label> <br />
    <select name="area" id="area">
	  {foreach from=$areas item=area}
		<option value="{$area->id}">{$area->nombre}</option>
	  {/foreach}
	</select>
	</li>
	
    <li><input type="submit" class="submit-btn" value="Enviar" /></li>
</form>

