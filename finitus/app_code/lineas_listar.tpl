<table>
<tr>
  <th>Nombre l�nea de investigaci�n</th>
  <th>Plazas totales</th>
  <th>Profesor</th>
</tr>
{foreach from=$lineas item=linea}
  <tr>
    <td>{$linea->nombre}</td>
    <td>{$linea->plazas_totales}</td>
    <td>{$linea->profesor_id}</td>
  </tr>
{/foreach}

</table>