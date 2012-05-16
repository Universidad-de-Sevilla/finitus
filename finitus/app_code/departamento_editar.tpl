<form name="departamento" action="index.php?page=departamento_grabar" method="post">
	<label>Código </label>{$departamento->id}<input type="hidden" name="id" value="{$departamento->id}"/><br/>
	<label>Nombre Departamento </label><input type="text" name="nombre" value="{$departamento->nombre}"/><br/>
	<input type="submit" value="Grabar"/>
</form>
