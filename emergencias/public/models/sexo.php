<select class="form-control inputs" name="sexo" id="sexo" required>
	<option value="Seleccione.." selected="on">Seleccione..</option>

	<?php 
		include("conexion.php");
		$sql = "SELECT * FROM sexo";
			if(!$result = $db ->query($sql)){
				die ('Hay un error en la consulta [' .$db->error .']');
			}
			while($row = $result->fetch_assoc()){
				$iid_sexo = stripcslashes($row["id_sexo"]);
				$ssexo = stripcslashes($row["sexo"]);
				echo"<option value=$iid_sexo>$ssexo</option>";
			}
	?>

</select>