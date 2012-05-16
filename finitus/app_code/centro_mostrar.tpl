<p>Identificador: {$centro->id}</p>
<p>Centro: {$centro->nombre}</p>

<table>
	<tr>
		<th>Identificador</th>
		<th>Departamento</th>
	</tr>
	{foreach $centros_departamentos as $departamento}
		<tr>
			<td>{$departamento->departamento->id}</td>
			<td>{$departamento->departamento->nombre}</td>
		</tr>
	{/foreach}	
</table>
