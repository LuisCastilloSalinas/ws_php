<?php
class Servicio_verificador_correo {
/**
* Verifica un mail 
* @param string $mail
* @return boolean
*/
function RutValidate($email) {
  // Primero, checamos que solo haya un símbolo @, y que los largos sean correctos
  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) 
  {
    // correo inválido por número incorrecto de caracteres en una parte, o número incorrecto de símbolos @
    return false;
  }
  // se divide en partes para hacerlo más sencillo
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) 
  {
    if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) 
    {
      return false;
    }
  } 
  // se revisa si el dominio es una IP. Si no, debe ser un nombre de dominio válido
  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) 
  { 
     $domain_array = explode(".", $email_array[1]);
     if (sizeof($domain_array) < 2) 
     {
        return false; // No son suficientes partes o secciones para se un dominio
     }
     for ($i = 0; $i < sizeof($domain_array); $i++) 
     {
        if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) 
        {
           return false;
        }
     }
  }
  return true;
}  

}
?>