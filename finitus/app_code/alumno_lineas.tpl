<h2>Líneas seleccionadas</h2>
{foreach from=$solicitudes item=solicitud}
  <li>{$solicitud->nombre}</li>
{/foreach}

<form name="nuevalinea" action="index.php?page=solicitud_grabar" method="post">
  <li>
    <select name="lineas">
      {foreach from=$lineas item=linea}
        <option value="{$linea->id}">{$linea->nombre}</option>
      {/foreach}
    </select>
    &nbsp;
    <input type="submit" value="Guardar" />
  </li>
</form>
