<?php

 $Peso=$_POST["Peso"];
  $Altura=$_POST["Altura"];

 $Resultado=$Peso/pow($Altura,2);

  if ($Resultado<18) {
    echo round($Resultado,2)." Tu peso es Bajo ";
  }else if($Resultado >=18 and $Resultado<=24.9) {
     echo round($Resultado,2)." Tu peso es Normal ";
  }else if($Resultado >=25 and $Resultado<=26.9) {
    echo round($Resultado,2)." Tu peso es Sobrepeso ";
  }else if($Resultado >27) {
    echo round($Resultado,2) ." Tu peso es Obesidad ";
  }
?><br>
<a href="index.php">Regresar</a>
