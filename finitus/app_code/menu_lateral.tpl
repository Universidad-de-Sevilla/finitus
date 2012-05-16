<h1>finitus</h1>
{if $_usuario}
  <p>{$_usuario->nombre} {$_usuario->apellidos} - 
  {if $_usuario->rol_actual == 1}
    Perfil Alumno
  {else if $_usuario->rol_actual == 2}
    Perfil Profesor
  {else if $_usuario->rol_actual ==3}
    Perfil Gestor
  {/if}
  </p>
{/if}
