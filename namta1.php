<?php 
function namta($data){
	$number = $data['number1'];
	if (is_numeric($number)) {
		for ($i=1; $i <=10 ; $i++) { 
			$total = $number*$i;
			echo "{$number}*{$i}={$total} <br>";
		}
	}
	else
	{
		echo "Only numeric number";
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
						<label>Input Your Number</label><br>
						<input type="text" name="number1">
					</div>
					
					<div>
						
						<input type="submit" name="submit">
						
					</div>
				</form>
				<?php 
						if (isset($_POST['submit'])) {
							namta($_POST);
						}
						
						?>
			</div>
		</div>				
	</div>
	
</body>
</html>