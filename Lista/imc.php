<!DOCTYPE html>
<html lang="en">
<head>
   
<?php
   
   
    $nome = "Giovanna";
    $altura = 1,51;
    $peso = 52;
    
       $imc= $peso/($altura*$altura);
       
       if($imc<18.5){
           $="Abaixo do peso normal";
           $grau="0";
       }elseif($imc<24.9){
           $classificacao="Peso Normal";
           $grau="0";
       }elseif($imc<29.9){
           $classificacao="Acima do peso normal";
           $grau="I";
       }elseif($imc<39.9){
           $classificacao="Obesidade";
           $grau="II";
       }
    

    if(isset($imc)){
        echo "<h3>O usuário ".$nome." com peso ".$peso."Kg"." e altura ".$altura. " Metros". "</h3>";
        echo "<h3>Foi classificado como ".$classificacao." Grau de obesidade: ".$grau."</h3>";
        echo "<h3>Cuide sempre da sua saúde. Procure um médico especialista.</h3>";
    }
}
 ?>
</body>
</html>