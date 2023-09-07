<?php
require_once 'conexSql.php';
if (isset($_POST['res'])) {
	// echo $_POST['res'];
	$query = "SELECT u.tipo, u.nom_usu, u.apellido, u.ci,t.tel, u.contrasena, u.estado from Usuarios u join Usuarios_tel t on u.ci = t.ci ORDER BY u.tipo,u.nom_usu,u.apellido,u.ci,t.tel";
	$result = mysqli_query($conn, $query);
	$json = array();
	if ($result) {
		while ($row = mysqli_fetch_assoc($result)) {
			$json[] = array(
				'tipo' => $row['tipo'],
				'nom_usu' => $row['nom_usu'],
				'apellido' => $row['apellido'],
				'ci' => $row['ci'],
				'tel' => $row['tel'],
				'contrasena' => $row['contrasena'],
				'estado' => $row['estado'],
			);
		}
		echo json_encode($json);

	} else {
		echo "No devuelve nada";
	}

}
?>