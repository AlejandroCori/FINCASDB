<html>
	<head>

	</head>
	<body>
		<center>
		<form method="POST" action="T_B_Mdb.php" name="modi">
		<table border="1">
			<tr>
				<td colspan="2">modificar un registro</td>
			</tr>   
			<tr>
                    <td>
                        CodBanco
                    </td>
                    <td>
                        <input type="text" name="txt1">
                    </td>
                </tr>
                <tr>
                    <td>
                        Contacto
                    </td>
                    <td>
                        <input type="text" name="txt2">
                    </td>
                </tr>
                <tr>
                    <td>
                        Nombre
                    </td>
                    <td><input type="text" name="txt3"></td>
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