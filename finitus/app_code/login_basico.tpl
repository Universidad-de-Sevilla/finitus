<form method="post" action="index.php?page=login_basico" id="formlogin">
  <input type="hidden" name="acceso" value="1" />
  <input type="hidden" name="rol" value="{$rol}" />
  <ul>
    <li><label for="correo">Correo</label> 
    <input type="text" name="correo" id="correo" class="inp" />
  	</li>
	
    <li><label for="nif">NIF</label> 
    <input type="password" name="nif" id="nif" class="inp" /></li>
    
    <li><input type="submit" class="submit-btn" value="Enviar" /></li>
  </ul>
</form>
