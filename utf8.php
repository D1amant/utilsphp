<?php



class utf8 {


 public static  function utf8_encode_all($entrada) { 
 
 
   switch(getType($entrada)) {
   
       case "boolean":
       case "integer":
       case "double":
       case "resource":
         return $entrada;
       break;
   
       case "string":
           $entrada =  utf8_encode($entrada);
       break;
       case "array":
   
         foreach ($entrada as $chave => $valor) {
                   $entrada[$chave] = utf8_encode_all($valor);
                         }
   
       break;
   
       case "object":
   
         foreach ($entrada as $chave => $valor) {
                   $entrada->{$chave} = utf8_encode_all($valor);
                         }
         break;
       case "NULL":
       case "unknown type":
         return "";
       break;
     }
   return $entrada;
 } 



}
