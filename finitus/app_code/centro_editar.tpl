<form name="centro" action="index.php?page=centro_grabar" method="post">
	<label>Código </label>{$centro->id}<input type="hidden" name="id" value="{$centro->id}"/><br/>
	<label>Nombre Centro </label><input type="text" name="nombre" value="{$centro->nombre}"/><br/>
	<input type="submit" value="Grabar"/>
</form>
