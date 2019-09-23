<select class="form-control inputs" name="region" id="region">
	<option value="Seleccione.." selected="on">Seleccione..</option>

	<?php 
		include("conexion.php");
		$sql = "SELECT * FROM region";
			if(!$result = $db ->query($sql)){
				die ('Hay un error en la consulta [' .$db->error .']');
			}
			while($row = $result->fetch_assoc()){
				$iid_region = stripcslashes($row["id_region"]);
				$rregion = stripcslashes($row["region"]);
				echo"<option value=$iid_region>$rregion</option>";
			}
	?>

</select>