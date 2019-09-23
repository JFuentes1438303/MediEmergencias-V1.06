<select class="form-control inputs" name="triage" id="triage">
	<option value="Seleccione.." selected="on">Seleccione..</option>

	<?php 
		include("conexion.php");
		$sql = "SELECT * FROM triage";
			if(!$result = $db ->query($sql)){
				die ('Hay un error en la consulta [' .$db->error .']');
			}
			while($row = $result->fetch_assoc()){
				$iid_triage = stripcslashes($row["id_triage"]);
				$ttriage = stripcslashes($row["triage"]);
				echo"<option value=$iid_triage>$ttriage</option>";
			}
	?>

</select>