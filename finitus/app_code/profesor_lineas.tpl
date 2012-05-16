<div class="acciones">
  <a href="index.php?page=linea_crear">Proponer línea</a>
</div>

<table>
<tr>
  <th>Nombre línea de investigación</th>
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
