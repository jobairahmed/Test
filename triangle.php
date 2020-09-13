<?php 

if (isset($_POST['submit'])) {
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$number3 = $_POST['number3'];

	if (is_numeric($number1) && is_numeric($number2) && is_numeric($number3)) {
		if (($number1==$number2)==$number3) {
			echo "triangle";
		}
		else{
			echo "not";
		}
	}
	
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form action="" method="post">
					<div>
						<label>Number1</label><br>
						<input type="text" name="number1">
					</div>
					<div>
						<label>Number2</label><br>
						<input type="text" name="number2">
					</div>
					<div>
						<label>Number3</label><br>
						<input type="text" name="number3">
					</div>				
					<div>
						<label>Total</label><br>
						<input type="submit" name="submit">
						
						
				
					</div>
				</form>
			</div>
		</div>				
	</div>
	
</body>
</html>