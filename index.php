<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php

            $frase = "Sóc una frase";
            echo "<p>El primer caràcter és $frase[0]<br/>"; //Mostrarà el cràcter "S"
            echo "El cinqué caràcter és $frase[5]<br/>"; //Mostrarà el cràcter "u"

           /*La funció strlen("cadena") ens retorna la longitud d'una cadena, 
            *és a dir, la quantitat de caràcters que té la cadena tenint en 
            *compte que també contabilitza el final de línia com un caràcter.*/

            $longitud = strlen($frase); //Longitud $frase
            echo "La longitud de la frase és $longitud<br/>";
            $ultimCaracter = $frase[$longitud-1]; //Mostrarà el caràcter "e"
            echo "L'últim caràcter és $ultimCaracter<br/>";
          ?>
    </body>
</html>
