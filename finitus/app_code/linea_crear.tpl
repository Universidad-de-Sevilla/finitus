{if $aviso}<p class='aviso'>{$aviso}</p>{/if} 
{if $error}<p class='error'>{$error}</p>{/if} 

<form method="post" action="index.php?page=linea_grabar" id="linea">
    <input type="hidden" name="profesor_id" value="1" />
  <ul>
    <li><label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" class="inp" /></li>
      
    <li><label for="titulo_id">Titulación</label>
      <select name="titulo_id" id="titulo">
      {foreach from=$titulos item=titulo}
        <option value="{$titulo->id}">{$titulo->nombre}</option>
      {/foreach}
    </select>
    </li>
    
    <li><label for="area_id">Áreas de conocimiento</label>
      <select name="area_id" id="area">
      {foreach from=$areas item=area}
        <option value="{$area->id}">{$area->nombre}</option>
      {/foreach}
    </select>
    </li>
    
    <li><input type="submit" class="submit-btn" value="Enviar" /></li>
  </ul>
</form>

