<html>

	<head>
		<meta charset="utf-8">
		<title>zarb</title>
		
		<style>
			table td {
				border:1px solid #000;
				padding: 20px;
			}
		</style>
	</head>

	<body>
		<table>
		<?php

			if( isset($_POST['number1']) && is_numeric($_POST['number1']) )
			{
				for ($i=0; $i <= $_POST['number1']; $i++) { 
				    echo "<tr>";
					for ($j=0; $j <= $_POST['number1']; $j++) { 
						echo "<td>" . ($i*$j) . "</td>";
					}
					echo "</tr>";
				}
			}

		?>
	</table>

		<form action="" method="post">
			<input type="text" name="number1" />
			<input type="submit" value="submit" />
		</form>



	</body>

</html>