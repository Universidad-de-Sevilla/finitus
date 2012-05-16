<ul>
  <li><a href="index.php?page=inicio">Inicio</a></li>
  {if $_usuario}
    {if $_usuario->rol_actual == 1}
      <li><a href="index.php?page=alumno_lineas">Líneas seleccionadas</a></li>
    {else if $_usuario->rol_actual == 2}
      <li><a href="index.php?page=profesor_lineas">Líneas propuestas</a></li>
    {else if $_usuario->rol_actual ==3}
      <li><a href="">Profesores</a></li>
      <li><a href="">Alumnos</a></li>
      <li><a href="">Gestores</a></li>
      <li><a href="">Líneas</a></li>
    {/if}

    <li><a href="index.php?page=persona_mostrar&id={$_usuario->id}">Datos usuario</a></li>
    <li><a href='index.php?page=login'>Cerrar sesión</a></li>
  {/if}    
  <li><a href="index.php?page=acerca_de">Acerca de finitus</a></li>
</ul>
