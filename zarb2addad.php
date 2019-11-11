<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>zarb 2 adad</title>
</head>
<body>

	<form action="" method="post">
		<label for="num1">number 1 :</label><br />
		<input value="<?php if(isset($_POST['number1'])) echo $_POST['number1']; ?>" id="num1" type="text" name="number1" />
		<br />
		<label for="num2">number 2 :</label><br />
		<input id="num2" value="<?php if(isset($_POST['number2'])) echo $_POST['number2']; ?>" type="text" name="number2" />
		<br />
		<input type="submit" value="Submit">
	</form>

	<?php

	if( isset($_POST['number1']) && isset($_POST['number2']) )
	{

		if( is_numeric($_POST['number1']) && is_numeric($_POST['number2']) )
		{

			echo "zarb : " . ($_POST['number1'] * $_POST['number2']);

		}
		else 
		{
			echo "user jan adad faghat vared kon";
		}

	}

	?>

</body>
</html>