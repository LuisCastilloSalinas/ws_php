<?php
class Servicio_factorial {
/**
* Calcula el factorial de un numero
* @param float radio
* @return float
*/
function factorial($n) {

	$aux=1;
	for($i=2;$i<=$n;$i++){
		$aux=$aux * $i;
	}

	return $aux;
}

}

?>