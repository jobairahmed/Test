<?php 

// $names = array(1, 2, 3,4);
//  $names = array('sakib' ,'rakib');



// foreach ($names as $nam) {
//  	echo $nam;
//  }

//  // $names = array('sakib'=>'30', 'rakib'=>'40');
//  // foreach ($names as $nam => $age) {
//  // 	echo "Name: ".$nam ."Age: ".$age;
//  // 	echo "<br>";
//  // }

//  // $cars = array( 'sujan',
//  // 		array('BMW', 20, 10),
//  // 		array('BMW', 20, 10),
//  // 		array('BMW', 20, 10),
//  // 		array('BMW', 20, 10)
//  // );

//  // for ($i=0; $i <=3 ; $i++) { 
//  // 	for ($j=0; $j <=2; $j++) { 
//  // 		echo $cars[$i][$j];
//  // 		echo "<br>";
//  // 	}
//  // }

// /*function hi($num, $num2){
// 	return $num + $num2;
// }*/


// // $sum =hi(7,5);

// // for ($i=0; $i <10 ; $i++) { 
// // 	echo "$sum";
// // }

// $multi = [
// 	1,3,5,
// 	[
// 		2,4,5, 
// 		[
// 			1,345,5,
// 			[
// 				23,5,6
// 			]
// 		]
// 	]

// ];


// for($i=0; $i<count($multi); $i++)
// {
// 	if(!is_array($multi[$i])){
// 		echo $multi[$i];
// 		for($i=0; $i<count($multi); $i++){
// 			if(!is_array($multi[$i])){
// 		echo $multi[$i];
// 	}
// 		}
// 	}

// }


function moon($m){
	for ($i=1; $i <=10 ; $i++) { 
		$result = $m*$i;
		//echo $m."*".$i."=".$result;
		echo "{$m}*{$i}={$result} <br>";
		
	}
}
 moon(8);

?>