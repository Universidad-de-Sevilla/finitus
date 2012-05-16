<table>
<tr>
  <th>Código</th>
  <th>Nombre Centro</th>
  <th>Acciones</th>
</tr>
{foreach $centros as $centro}
  <tr>
    <td>{$centro->id}</td>
    <td>{$centro->nombre}</td>
    <td><a href="index.php?page=centro_editar&id={$centro->id}">Editar</a> - <a href="index.php?page=centro_mostrar&id={$centro->id}">Mostrar</a></td>    
  </tr>
{/foreach}

</table>