<head>
	<title>ejemplo para practicar</title>
</head>
<body>
	<center>
		<form method="POST" action="T_CU_Mdb.php"  name="modi">
		<table border="1">
			<tr>
        <td colspan="2">modificar un registro</td>
			</tr>
            <tr> 
				<td>
                    idCuenta 
				</td>		
				<td>
					<input type="text" name="txtidc">
				</td>
			</tr>
			<tr>
				<td>
                    DC 
				</td>		
				<td>
					<input type="text" name="txtdc">
				</td>
			</tr>
			<tr>
				<td>
                    Sucursal 
				</td>
				<td><input type="text" name="txtsuc"></td>
			</tr>
      <tr> 
				<td>
                    Saldo 
				</td>		
				<td>
					<input type="text" name="txtsal">
				</td>
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
                    nContrato 
				</td>		
				<td>
					<input type="text" name="txtnco">
				</td>
			</tr>
      <tr> 
				<td>
                    codBanco 
				</td>		
				<td>
					<input type="text" name="txtcod">
				</td>
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