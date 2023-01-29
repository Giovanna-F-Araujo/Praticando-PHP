<html>
  <head>
    <title>Signos</title>
  </head>
  <body>
   
    <?php

      //Parte 1 - Print exercício
      function signo($d, $m) {
        if ($m == "3"  AND $d >= "20") { $signo = "Áries";       }   //Áries       20/03 a 20/04
          elseif ($m == "4"  AND $d <= "20") { $signo = "Áries";       }   //Áries       20/03 a 20/04
          elseif ($m == "4"  AND $d >= "21") { $signo = "Touro";       }   //Touro       21/04 a 20/05
          elseif ($m == "5"  AND $d <= "20") { $signo = "Touro";       }   //Touro       21/04 a 20/05
          elseif ($m == "5"  AND $d >= "21") { $signo = "Gêmeos";      }   //Gêmeos      21/05 a 20/06
          elseif ($m == "6"  AND $d <= "20") { $signo = "Gêmeos";      }   //Gêmeos      21/05 a 20/06
          elseif ($m == "6"  AND $d >= "21") { $signo = "Câncer";      }   //Câncer      21/06 a 21/07
          elseif ($m == "7"  AND $d <= "21") { $signo = "Câncer";      }   //Câncer      21/06 a 21/07
          elseif ($m == "7"  AND $d >= "22") { $signo = "Leão";        }   //Leão        22/07 a 22/08
          elseif ($m == "8"  AND $d <= "22") { $signo = "Leão";        }   //Leão        22/07 a 22/08
          elseif ($m == "8"  AND $d >= "23") { $signo = "Virgem";      }   //Virgem      23/08 a 22/09
          elseif ($m == "9"  AND $d <= "22") { $signo = "Virgem";      }   //Virgem      23/08 a 22/09
          elseif ($m == "9"  AND $d >= "23") { $signo = "Libra";       }   //Libra       23/09 a 22/10
          elseif ($m == "10" AND $d <= "22") { $signo = "Libra";       }   //Libra       23/09 a 22/10
          elseif ($m == "10" AND $d >= "23") { $signo = "Escorpião";   }   //Escorpião   23/10 a 21/11
          elseif ($m == "11" AND $d <= "21") { $signo = "Escorpião";   }   //Escorpião   23/10 a 21/11
          elseif ($m == "11" AND $d >= "22") { $signo = "Sagitário";   }   //Sagitário   22/11 a 21/12
          elseif ($m == "12" AND $d <= "21") { $signo = "Sagitário";   }   //Sagitário   22/11 a 21/12
          elseif ($m == "12" AND $d >= "22") { $signo = "Capricórnio"; }   //Capricórnio 22/12 a 21/01
          elseif ($m == "1"  AND $d <= "21") { $signo = "Capricórnio"; }   //Capricórnio 22/12 a 21/01
          elseif ($m == "1"  AND $d >= "21") { $signo = "Aquário";     }   //Aquário     21/01 a 18/02
          elseif ($m == "2"  AND $d <= "18") { $signo = "Aquário";     }   //Aquário     21/01 a 18/02    
          elseif ($m == "2"  AND $d >= "19") { $signo = "Peixes";      }   //Peixes      19/02 a 19/03
          elseif ($m == "3"  AND $d <= "19") { $signo = "Peixes";      }   //Peixes      19/02 a 19/03
          else { $signo = "Não Reconhecido"; }
            
        //Parte 2 - Print exercício
          return $signo;

} 
$nome = "Giovanna Ferreira Araujo"
$dia = 04;
$mes = 10;
$ano = 2001;
$idade = 2022 - $ano;
$signo = signo($dia,$mes);


echo "</br> Olá, " .$nome;
echo "</br> Sua idade é: " .$idade;
echo "</br>Seu signo é :" .$signo;
echo "</br>O signo solar sinaliza características da sua personalidade, mas você tem outros signos marcantes, 
como o ascendente ou a lua, por exemplo. Lendo a posição de todos os signos no seu Mapa Astral você pode mergulhar num caminho de 
autoconhecimento e entender quem de fato você é, como se relaciona e muito mais. Boa sorte em explorar cada vez mais.";

 ?>
  </body>
</html>|