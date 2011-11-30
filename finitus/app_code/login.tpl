{if $aviso}<p class='aviso'>{$aviso}</p>{/if} 
{if $error}<p class='error'>{$error}</p>{/if} 

<form method="post" action="index.php?page=login" id="formlogin">
    <input type="hidden" name="acceso" value="1" />
    <li><label for="correo">Correo</label> <br />
    <input type="text" name="correo" id="correo" class="inp" />
	</li>
	
    <li><label for="nif">NIF</label> <br />
    <input type="password" name="nif" id="nif" class="inp" /></li>
    
	<li><input type="submit" class="submit-btn" value="Enviar" /></li>
</form>
