<?php 
$total = "";
	if (isset($_POST['submit'])) {
		$number1 = $_POST['number1'];
		$number2 = $_POST['number2'];
		$operation = $_POST['operation'];


		if(is_numeric($number1) && is_numeric($number2)){

			if($operation == 'plus'){
				$total = $number1 + $number2;
			}
			if($operation == 'minus'){
				$total = $number1 - $number2;
			}
			if ($operation == 'multiply'){
				$total = $number1 * $number2;
			}
			if ($operation == 'divided by'){
				$total = $number1 / $number2;
			}
			if ($operation == 'modulas'){
				$total = $number1 % $number2;
			}
		}
		$total = "{$total}";
	}
	else{
		echo "Input numeric number";
	}

?>

<!DOCTYPE html>
<!-- code by webdevtrick ( https://webdevtrick.com) -->
<html>
	<head>
		<title>Simple Calculator In PHP | Webdevtrick.com</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		
	<div class="container" style="margin-top: 50px">
	    <div class="row">
	    	<div class="col-md-4 offset-md-1">
	    		<form action="" method="post">
	    			<div class="card bg-danger">
	    				<div class="card-body">
	    					<div class="card-header text-center text-white bg-dark">
	    						Calculator
	    					</div>
	    					<div class="row">
	    						<div class="col-sm-8">
	    							<div class="form-group">
	    						<label for="number1" class="text-white">Number1</label><br>
	    						<input id="number1" type="text" name="number1">
	    					</div>
	    					<div class="form-group">
	    						<label for="number2" class="text-white">Number2</label><br>
	    						<input id="number2" type="text" name="number2">
	    					</div>
	    						</div>
	    						<div class="col-sm-4">
	    							<div class="mt-4 pt-5" >
	    								<select name="operation" id="">
	    								<option value="plus">+</option>
	    								<option value="minus">-</option>
	    								<option value="multiply">*</option>
	    								<option value="divided by">/</option>
	    								<option value="modulas">%</option>
	    							</select>
	    							</div>    							
	    						</div>
	    						<div class="col-sm-12">
	    							<div class="text-center">
	    								<input type="submit" name="submit" value="submit">
	    								<?php 
	    								if(isset($total)){
	    									echo "=$total";
	    								}
	    								?>
	    								<input type="reset" value="Reset"> 
	    							</div>    							
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    		</form>
	    	</div>
	    	<div class="col-md-4 offset-md-1">
	    		<form action="" method="post">
	    			<div class="card bg-success">
	    				<div class="card-body">
	    					<div class="card-header text-center text-white bg-dark">
	    						Calculator
	    					</div>
	    					<div class="row">
	    						<div class="col-sm-8">
	    							<div class="form-group">
	    						<label for="number" class="text-white">Number1</label><br>
	    						<input id="number" type="text" name="number1">
	    					</div>
	    					<div class="form-group">
	    						<label for="numberr" class="text-white">Number2</label><br>
	    						<input id="numberr" type="text" name="number2">
	    					</div>
	    						</div>
	    						<div class="col-sm-4">
	    							<div class="mt-4 pt-5" >
	    								<select name="operation" id="">
	    								<option value="plus">+</option>
	    								<option value="minus">-</option>
	    								<option value="multiply">*</option>
	    								<option value="divided by">/</option>
	    								<option value="modulas">%</option>
	    							</select>
	    							</div>    							
	    						</div>
	    						<div class="col-sm-12">
	    							<div class="text-center">
	    								<input type="submit" name="submit" value="submit">
	    								<?php 
	    								if(isset($total)){
	    									echo "=$total";
	    								}
	    								?>
	    								<input type="reset" value="Reset"> 
	    							</div>    							
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    		</form>
	    	</div>
	    </div>
	    <div class="row mt-5">
	    	<div class="col-md-4 offset-md-4">
	    		<form action="" method="post">
	    			<div class="card bg-primary">
	    				<div class="card-body">
	    					<div class="card-header text-center text-white bg-dark">
	    						Calculator
	    					</div>
	    					<div class="row">
	    						<div class="col-sm-8">
	    							<div class="form-group">
	    						<label for="number3r" class="text-white">Number1</label><br>
	    						<input id="number3r" type="text" name="number1">
	    					</div>
	    					<div class="form-group">
	    						<label for="number4r" class="text-white">Number2</label><br>
	    						<input id="number4r" type="text" name="number2">
	    					</div>
	    						</div>
	    						<div class="col-sm-4">
	    							<div class="mt-4 pt-5" >
	    								<select name="operation" id="">
	    								<option value="plus">+</option>
	    								<option value="minus">-</option>
	    								<option value="multiply">*</option>
	    								<option value="divided by">/</option>
	    								<option value="modulas">%</option>
	    							</select>
	    							</div>    							
	    						</div>
	    						<div class="col-sm-12">
	    							<div class="text-center">
	    								<input type="submit" name="submit" value="submit">
	    								<?php 
	   			 							if (isset($total)) {
	   			 								echo "=$total";
	   			 							}
	    								?>
	    								<input type="reset" value="Reset"> 
	    							</div>    							
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    		</form>
	    	</div>
	    </div>
	</div>		    				    			   	
	</body>
</html>