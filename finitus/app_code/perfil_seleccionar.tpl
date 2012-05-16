<p>Seleccione el perfil con el que desea trabajar</p>
<select name="perfil">
  {foreach from=$_usuario->alumnos item=alumno}
    <option value="alumnos-{$alumno->id}">Alumno: {$alumno->titulo->nombre}</option>
  {/foreach}
</select>
