{if $_usuario}
  {if $_usuario->rol_actual == 1}
    <ul>
      <li><a href="index.php?page=inicio">Inicio</a></li>
      <li><a href="index.php?page=alumno_lineas">Líneas seleccionadas</a></li>
      <li><a href="index.php?page=persona_mostrar&id={$_usuario->id}">Datos personales</a></li>
      <li><a href="index.php?page=acerca_de">Acerca de finitus</a></li>
    </ul>
  {else if $_usuario->rol_actual == 2}
    <ul>
      <li><a href="index.php?page=inicio">Inicio</a></li>
      <li><a href="index.php?page=profesor_lineas">Líneas propuestas</a></li>
      <li><a href="index.php?page=persona_mostrar&id={$_usuario->id}">Datos personales</a></li>
      <li><a href="index.php?page=acerca_de">Acerca de finitus</a></li>
    </ul>
  {else if $_usuario->rol_actual ==3}
    <ul>
      <li><a href="index.php?page=inicio">Inicio</a></li>
      <li><a href="index.php?page=persona_mostrar&id={$_usuario->id}">Datos personales</a></li>
      <li><a href="index.php?page=acerca_de">Acerca de finitus</a></li>
    </ul>
  {/if}
{else}
  <ul>
    <li><a href="index.php?page=inicio">Inicio</a></li>
    <li><a href="index.php?page=acerca_de">Acerca de finitus</a></li>
  </ul>
{/if}    
