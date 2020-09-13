<?php 

if (isset($_POST['submit'])) {
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$operation = $_POST['operation'];

	if (is_numeric($number1) && is_numeric($number2)) {
		if ($operation=='plus') {
			$total = $number1 + $number2;
		}
		if ($operation=='minus') {
			$total = $number1 - $number2;
		}
		if ($operation=='multiply') {
			$total = $number1 * $number2;
		}
		if ($operation=='divided') {
			$total = $number1 / $number2;
		}
		if ($operation=='moduls') {
			$total = $number1 % $number2;
		}
	
	}
	else{
		echo "input number, otherwise number will not count";
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
						<select name="operation" multiple>
							<option value="plus">+</option>
							<option value="minus">-</option>
							<option value="multiply">*</option>
							<option value="divided">/</option>
							<option value="moduls">%</option>
						</select>
					</div>
					<div>
						<label>Total</label><br>
						<input type="submit" name="submit">
						<?php 
						if (isset($total)) {
							echo "=$total"; 
						}
						
						?>
					</div>
				</form>
			</div>
		</div>				
	</div>
	
</body>
</html>