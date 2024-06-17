<?php
//consultar nombre de un recurso
function getNrec($con, $nik){
	$selectl = $con->prepare("SELECT `nombre` FROM administrador WHERE id=?");	
	$selectl->bind_param('i', $nik);	
	$selectl->execute();
	$result = $selectl->get_result();
	$row = $result->fetch_assoc();	
	$selectl->close();
	return $row['nombre'];
}

?>