<html>
	<head>

	</head>
	<body>
		<center>
		<form method="POST" action="T_A_Mdb.php" name="modi">
		<table border="1">
			<tr>
				<td colspan="2">modificar un registro</td>
			</tr>   
			<tr> 
				<td>
                    nContrato 
				</td>		
				<td>
					<input type="text" name="txtnCo">
				</td>
			</tr>
			<tr>
				<td>
                    CIF 
				</td>		
				<td>
					<input type="text" name="txtcif">
				</td>
			</tr>
			<tr>
				<td>
                    ColegioID
				</td>		
				<td><input type="text" name="txtcol"></td>
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