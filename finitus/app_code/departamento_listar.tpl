<div style = "padding:8px; border:1px solid marron;">
	<form name="buscar" method="post" action="index.php?page=departamento_listar">
		<p>Búsqueda por id, nombre 
			<input name="busqueda" value=""/>
			<input type="submit" value="Buscar"/>
		</p>
	</form>
</div>


<table>
<tr>
  <th>Id</th>
  <th>Nombre</th>
  <th>Acción</th>
</tr>
{foreach $departamentos as $departamento}
<tr>
  <td>{$departamento->id}</td>
  <td>{$departamento->nombre}</td>
  <td><a href="index.php?page=departamento_editar&id={$departamento->id}">Editar</a></td>
</tr>
{/foreach}
</table>
