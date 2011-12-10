{if $solicitudes}
  {foreach from=$solicitudes item=solicitud}
    <li>{$solicitud->nombre}</li>
  {/foreach}
{else}
  <p class="aviso">Todavía no ha seleccionado ninguna línea</p>
{/if}

{if $lineas}
  <form name="nuevalinea" action="index.php?page=solicitud_grabar" method="post">
    <li>
      <select name="lineas">
        {foreach from=$lineas item=linea}
          <option value="{$linea->id}">{$linea->nombre}</option>
        {/foreach}
      </select>
      &nbsp;
      <input type="submit" value="Añadir" />
    </li>
  </form>
{else}
  <p class="aviso">No hay ninguna línea definida en este momento</p>
{/if}
