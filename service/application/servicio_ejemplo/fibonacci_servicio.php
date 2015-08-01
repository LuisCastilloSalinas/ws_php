<?php
class Fibonacci_servicio {
/**
* Calcula la serie de fibonacci de un numero
* @param float n
* @return String
*/
function Calcularfibonacci($size) {
    
 	$fibonacciArray = array();
 	if($size >0 && $size==1){
 		$fibonacciArray[0] = 1; // by definition
 		return json_encode(($fibonacciArray));
 	}
 	else{
 		if($size>0){
 		$fibonacciArray[0] = 1; // by definition
		$fibonacciArray[1] = 1; // by definition
		for ($x=2; $x<=$size; $x++) {
		    $fibonacciArray[$x] = $fibonacciArray[$x-2] +
		    $fibonacciArray[$x-1];
		  }
		   
		// return array
		return json_encode(($fibonacciArray));
 		}
 	}
 	
	
}

}
?>