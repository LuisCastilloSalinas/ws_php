<?php
class Servicio_ejemplo {
/**
* Calcula el área de un circulo utilizando el parámetro recibido
* en la siguiente fórmula:
* (radio ^ 2) * π
* @param float radio
* @return float
*/
function areaCirculo($radio) {
return (pow($radio, 2) * M_PI);
}

/**
* Calcula el área de un circulo utilizando el parámetro recibido
* en la siguiente fórmula:
* 2 * π * radio
* @param float radio
* @return float
*/
function perimetroCirculo($radio) {
return (2 * M_PI * $radio);
}
}
?>