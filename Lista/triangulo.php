<html>
 <head>
  <title>Triangulos</title>
 </head>
 <body>
 
 <?php 
  $ladoA = 10;
  $ladoB = 5;
  $ladoC = 10;

  if( ($ladoA + $ladoB > $ladoC) && ($ladoA + $ladoC > $ladoB) && ($ladoB + $ladoC > $ladoA) ){
   if($ladoA==$ladoB && $ladoB==$ladoC)
    echo "Triangulo Equilatero";
   elseif ($ladoA==$ladoB || $ladoA == $ladoC || $ladoB==$ladoC)
    echo "Triângulo Isoceles";
   else
    echo "Triângulo Escaleno";
  }else
   echo "Não é um triângulo";
 ?>
 </body>
</html>






<html>
  <head>
    <title>Exercicío Triângulo</title>
  </head>
  <body>
  <?php 
  <?php 

  $ladoA = 10;
  $ladoB = 5;
  $ladoC = 10;

  echo"</br> Triângulos";

  if( ($ladoA + $ladoB > $ladoC) && ($ladoA + $ladoC > $ladoB) && ($ladoB + $ladoC > $ladoA) {
   if($ladoA==$ladoB && $ladoB==$ladoC) {
      echo "Triangulo Equilátero";
    }elseif ($ladoA==$ladoB || $ladoA == $ladoC || $ladoB==$ladoC){
        echo "Triângulo Isóceles";
    } else {
        echo "Triângulo Escaleno";
    }else {
        echo "Não é um triângulo";
    }

  echo"</br>";
 ?>
}
  </body>
</html>