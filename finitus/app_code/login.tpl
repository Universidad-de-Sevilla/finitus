{if $aviso}<p class='aviso'>{$aviso}</p>{/if} 
{if $error}<p class='error'>{$error}</p>{/if} 

<form method="post" action="index.php?page=login" id="formlogin">
    <input type="hidden" name="acceso" value="1" />
    <label for="correo">Correo</label> <br />
    <input type="text" name="correo" id="correo" class="inp" />
    <label for="nif">NIF</label> <br />
    <input type="password" name="nif" id="nif" class="inp" /><br />
    <input type="submit" class="submit-btn" value="Enviar" />
</form>

{if $alumno}
<h1>{$alumno->nombre} {$alumno->apellidos}</h1>
{/if}