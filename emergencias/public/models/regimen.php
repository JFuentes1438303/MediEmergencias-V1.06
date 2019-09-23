<select class="form-control inputs" name="regimen" id="regimen">
	<option value="Seleccione.." selected="on">Seleccione..</option>

	<?php 
		include("conexion.php");
		$sql = "SELECT * FROM regimen";
			if(!$result = $db ->query($sql)){
				die ('Hay un error en la consulta [' .$db->error .']');
			}
			while($row = $result->fetch_assoc()){
				$iid_regimen = stripcslashes($row["id_regimen"]);
				$rregimen = stripcslashes($row["regimen"]);
				echo"<option value=$iid_regimen>$rregimen</option>";
			}
	?>

</select>