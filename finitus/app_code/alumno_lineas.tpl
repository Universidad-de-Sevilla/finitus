{if $solicitudes}
<ul>
  {foreach from=$solicitudes item=solicitud}
    <li>Prof. {$solicitud->linea->profesor->persona->nombre} {$solicitud->linea->profesor->persona->apellidos} - {$solicitud->linea->nombre} </li>
  {/foreach}
</ul>
  {else}
  <p class="aviso">Todavía no ha seleccionado ninguna línea</p>
{/if}

{if $lineas}
  <form name="nuevalinea" action="index.php?page=solicitud_grabar" method="post">
    <li>
      <select name="linea_id">
        {foreach from=$lineas item=linea}
          <option value="{$linea->id}">Prof. {$solicitud->linea->profesor->persona->nombre} {$solicitud->linea->profesor->persona->apellidos} - {$linea->nombre}</option>
        {/foreach}
      </select>
      &nbsp;
      <input type="submit" value="Añadir" />
    </li>
  </form>
{else}
  <p class="aviso">No hay ninguna línea definida en este momento</p>
{/if}
