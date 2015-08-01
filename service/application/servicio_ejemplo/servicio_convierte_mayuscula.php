<?php
class Servicio_convierte_mayuscula {
/**
* Convierte una cadena string de minuscula
* a mayuscula con la funcion strtopper
* @param string palabra
* @return string
*/
function convertMayuscula($palabra) {
return ($palabra = strtoupper($palabra));
}

}
?>