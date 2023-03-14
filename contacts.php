<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact's</title>
</head>
<body>
	<form>
		<?php
		$contacts = array(
			"Name" => array('Madi','Almat','Batyr','Baha'),
			"Number" => array('+77078434331','+777075805805','+77071609063','+77082117393'),
			"Work" => array('President in EU','Footbol','Programmist in EU','Minister in kz')
		);
		echo "<table border='1'><tr>";

		foreach ($contacts as $key => $value) {
			echo "<th>$key</th>";
		};

		echo "</tr>";
		
			for ($i=0; $i < count(end($contacts))-1; $i++) { 
				echo "<tr>";
				foreach ($contacts as $val) {
					echo "<td>$val[$i]</td>";
				};
				echo "</tr>";
			}
			
		echo "</table>";
		?>
	</form>
</body>
</html>
