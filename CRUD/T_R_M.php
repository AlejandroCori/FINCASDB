<html>
	<head>

	</head>
	<body>
		<center>
		<form method="POST" action="T_R_Mbd.php" name="modi">
		<table border="1">
			<tr>
				<td colspan="2">Modificar</td>
			</tr>   
			<tr> 
				<td>
                    nRecibo 
				</td>		
				<td>
					<input type="text" name="txtnre">
				</td>
			</tr>
			<tr>
				<td>
                    Fecha
				</td>		
				<td>
					<input type="text" name="txtfec">
				</td>
			</tr>
			<tr>
				<td>
                    Importe 
				</td>		
				<td><input type="text" name="txtimp"></td>
			</tr>
            <tr>
				<td>
                    Numero
				</td>		
				<td><input type="text" name="txtnum"></td>
			</tr>
            <tr>
				<td>
                    CIF 
				</td>		
				<td><input type="text" name="txtcif"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="Modificar" value="env">
				</td>
			</tr>
		</table>
		</form>
	</center>
	</body>
</html>