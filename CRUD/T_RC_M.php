<html>
	<head>

	</head>
	<body>
		<center>
		<form method="POST" action="T_RC_Mdb.php" name="modi">
		<table border="1">
			<tr>
				<td colspan="2">modificar un registro</td>
			</tr>   
            <tr> 
				<td>
                    nRecibo Cuota
				</td>		
				<td>
					<input type="text" name="txtnrc">
				</td>
			</tr>
			<tr>
				<td>
                    importe
				</td>		
				<td>
					<input type="text" name="txtinp">
				</td>
			</tr>
			<tr>
				<td>
                    Fecha 
				</td>		
				<td><input type="text" name="txtfec"></td>
			</tr>
			<tr>
				<td>
                    Estado 
				</td>		
				<td><input type="text" name="txtest"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="Modificar" value="env">
					<input type="reset" name="borrar">
				</td>
			</tr>
		</table>
		</form>
	</center>
	</body>
</html>