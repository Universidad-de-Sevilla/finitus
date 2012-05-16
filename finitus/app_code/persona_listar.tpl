<div style="padding:8px; border:1px solid maroon;">
<form name="buscar" method="post" action="index.php?page=personas_listar">
  <p>Búsqueda por nombre, apellido, correo o dni/nie (sin letra)
  <input name="busqueda" value="{$busqueda}" />
  <input type="submit" value="Buscar" /></p>
</form>
</div>

<table>
<tr>
  <th>Id</th>
  <th>Nombre</th>
  <th>Apellidos</th>
  <th>Correo</th>
</tr>
{foreach from=$personas item=persona}
<tr>
  <td>{$persona.id}</td>
  <td>{$persona.nombre}</td>
  <td>{$persona.apellidos}</td>
  <td>{$persona.correo}</td>
</tr>
{/foreach}
</table>
