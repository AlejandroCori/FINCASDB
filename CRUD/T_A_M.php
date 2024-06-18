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
                    nColegiado 
				</td>		
				<td>
					<input type="text" name="txtnCo">
				</td>
			</tr>
			<tr>
				<td>
                    DNI 
				</td>		
				<td>
					<input type="text" name="txtdni">
				</td>
			</tr>
			<tr>
				<td>
                    Nombre 
				</td>		
				<td><input type="text" name="txtnom"></td>
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