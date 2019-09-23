<select class="form-control inputs" name="ecivil" id="ecivil">
	<option value="Seleccione.." selected="on">Seleccione..</option>

	<?php 
		include("conexion.php");
		$sql = "SELECT * FROM estado_civil";
			if(!$result = $db ->query($sql)){
				die ('Hay un error en la consulta [' .$db->error .']');
			}
			while($row = $result->fetch_assoc()){
				$iid_estado_civil = stripcslashes($row["id_estado_civil"]);
				$eestado_civil = stripcslashes($row["estado_civil"]);
				echo"<option value=$iid_estado_civil>$eestado_civil</option>";
			}
	?>

</select>