<?php



$fecha=htmlentities(addslashes($_GET["fecha"]));
$nombre=$_GET["nombre"];
$fechaNacimiento=htmlentities(addslashes($_GET["fechaNacimiento"]));
$edad=htmlentities(htmlentities($_GET["edad"]));
$sexo=htmlentities(addslashes($_GET["sexo"]));
$estadoCivil=htmlentities(addslashes($_GET["estadoCivil"]));
$profesion=htmlentities(addslashes($_GET["profesion"]));
$signo=htmlentities(addslashes($_GET["signo"]));
$porcentajeAcercar=htmlentities(addslashes($_GET["porcentajeAcercar"]));
$posicionAcercar=htmlentities(addslashes($_GET["posicionAcercar"]));
$porcentajeAlejar=htmlentities(addslashes($_GET["porcentajeAlejar"]));
$posicionAlejar=htmlentities(addslashes($_GET["posicionAlejar"]));
$porcentajeCombativo=htmlentities(addslashes($_GET["porcentajeCombativo"]));
$posicionCombativo=htmlentities(addslashes($_GET["posicionCombativo"]));
$porcentajeSumisos=htmlentities(addslashes($_GET["porcentajeSumisos"]));
$posicionSumisos=htmlentities(addslashes($_GET["posicionSumisos"]));
$porcentajeRetirados=htmlentities(addslashes($_GET["porcentajeRetirados"]));
$posicionRetirados=htmlentities(addslashes($_GET["posicionRetirados"]));
$porcentajeReactivos=htmlentities(addslashes($_GET["porcentajeReactivos"]));
$posicionReactivos=htmlentities(addslashes($_GET["posicionReactivos"]));
$porcentajeEficaces=htmlentities(addslashes($_GET["porcentajeEficaces"]));
$posicionEficaces=htmlentities(addslashes($_GET["posicionEficaces"]));
$porcentajeOptimistas=htmlentities(addslashes($_GET["porcentajeOptimistas"]));
$posicionOptimistas=htmlentities(addslashes($_GET["posicionOptimistas"]));
$porcentajeEnfrentar=htmlentities(addslashes($_GET["porcentajeEnfrentar"]));
$posicionEnfrentar=htmlentities(addslashes($_GET["posicionEnfrentar"]));
$eneagrama="Eneagrama de ".$nombre;

/*  clases */

$clase1=htmlentities(addslashes($_GET["clase1"]));
$clase2=htmlentities(addslashes($_GET["clase2"]));
$clase3=htmlentities(addslashes($_GET["clase3"]));
$clase4=htmlentities(addslashes($_GET["clase4"]));
$clase5=htmlentities(addslashes($_GET["clase5"]));
$clase6=htmlentities(addslashes($_GET["clase6"]));
$clase7=htmlentities(addslashes($_GET["clase7"]));
$clase8=htmlentities(addslashes($_GET["clase8"]));
$clase9=htmlentities(addslashes($_GET["clase9"]));


$totalClases=$clase1+$clase2+$clase3+$clase4+$clase5+$clase6+$clase7+$clase8+$clase9;

/*  clases */


/* consigna 2 */
$posicion1=$_GET["posicion1"];
$posicion2=$_GET["posicion2"];
$posicion3=$_GET["posicion3"];
$mas=$_GET["mas"];
$menos=$_GET["menos"];
$media=$_GET["media"];


/*  consigna 2 */

/* cantidad de atributos sobre la media  */

$mayor_media=0;

if($clase1 > $media){

$mayor_media++;

}

if($clase2 > $media){

$mayor_media++;    

}

if($clase3 > $media){

$mayor_media++;    
    
}

if($clase4 > $media){

$mayor_media++;    
    
}

if($clase5 > $media){

$mayor_media++;    
    
}


if($clase6 > $media){

$mayor_media++;    
        
}

if($clase7 > $media){

$mayor_media++;    
        
}

if($clase8 > $media){

$mayor_media++;    
        
}

if($clase9 > $media){

$mayor_media++;    
        
}


/* cantidad de atributos sobre la media  */


/* cantidad de atributos menor la media  */

$menor_media=0;

if($clase1 < $media){

$menor_media++;

}

if($clase2 < $media){

$menor_media++;    

}

if($clase3 < $media){

$menor_media++;    
    
}

if($clase4 < $media){

$menor_media++;    
    
}

if($clase5 < $media){

$menor_media++;    
    
}


if($clase6 < $media){

$menor_media++;    
        
}

if($clase7 < $media){

$menor_media++;    
        
}

if($clase8 < $media){

$menor_media++;    
        
}

if($clase9 < $media){

$menor_media++;    
        
}


/* cantidad de atributo menor la media  */


/* cantidad de atributos menor la media  */

$igual_media=0;

if($clase1 == $media){

$igual_media++;

}

if($clase2 == $media){

$igual_media++;    

}

if($clase3 == $media){

$igual_media++;    
    
}

if($clase4 == $media){

$igual_media++;    
    
}

if($clase5 == $media){

$igual_media++;    
    
}


if($clase6 == $media){

$igual_media++;    
        
}

if($clase7 == $media){

$igual_media++;    
        
}

if($clase8 == $media){

$igual_media++;    
        
}

if($clase9 == $media){

$igual_media++;    
        
}



/* cantidad de atributo menor la media  */



/* pdf */

require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('img/eneagrama.jpg',1,1,208);
$pdf->SetFont('Arial','B',11);
$pdf->Text(56,31.5,$fecha);
$pdf->Text(56,36.5,utf8_decode($nombre));
$pdf->Text(56,43.5,$fechaNacimiento);
$pdf->Text(56,50,$edad);
$pdf->Text(135,31.5,$estadoCivil);
$pdf->Text(135,43.5,$profesion);
$pdf->Text(135,50,$signo);
$pdf->Text(170,69,$media);
$pdf->SetFont('Arial','B',16);
$pdf->Text(150,100,$clase1);
$pdf->Text(169,137,$clase2);
$pdf->Text(163,175,$clase3);
$pdf->Text(125,204,$clase4);
$pdf->Text(78,204,$clase5);
$pdf->Text(43,175,$clase6);
$pdf->Text(39,137,$clase7);
$pdf->Text(57,100,$clase8);
$pdf->Text(104,82,$clase9);
$pdf->SetFont('Arial','B',10);
$pdf->Text(44,270,utf8_decode($posicion1));
$pdf->Text(44,277,utf8_decode($posicion2));
$pdf->Text(44,283,utf8_decode($posicion3));
$pdf->Text(44,242,utf8_decode($menos));
$pdf->Text(44,248,utf8_decode($mas));

$pdf->AddPage();
$pdf->Image('img/eneagramadef.jpg',1,1,208);
$pdf->SetFont('Arial','B',30);
$pdf->Text(6,38,utf8_decode($nombre));
$pdf->SetFont('Arial','B',16);
$pdf->Text(168,73.5,$fecha);
$pdf->SetFont('Arial','B',10);
$pdf->Text(11,57.6,$clase1);
$pdf->Text(24.5,57.6,$clase2);
$pdf->Text(39.5,57.6,$clase3);
$pdf->Text(55,57.6,$clase4);
$pdf->Text(68,57.6,$clase5);
$pdf->Text(82.5,57.6,$clase6);
$pdf->Text(97,57.6,$clase7);
$pdf->Text(112,57.6,$clase8);
$pdf->Text(126.5,57.6,$clase9);
$pdf->SetTextColor(253,253,253);
$pdf->Text(95,62.5,$media);
$pdf->SetTextColor(0,0,0);
$pdf->Text(98,66.2,$mayor_media);
$pdf->Text(98,70.2,$igual_media);
$pdf->Text(98,74.5,$menor_media);


/* Dispersión de atributos con respecto a la media  */

$pdf->SetFont('Arial','B',8.5);

if($clase1 < $media){

$dispersion_1="Bajo";


}else if($clase1 > $media){

  $dispersion_1="Sobre";
  
}else if($clase1 == $media){

  $dispersion_1="Igual"; 

}

$pdf->Text(8,88,$dispersion_1);


if($clase2 < $media){

  $dispersion_2="Bajo";
  
  
  }else if($clase2 > $media){
  
    $dispersion_2="Sobre";
    
  }else if($clase2 == $media){

    $dispersion_2="Igual";
  
  }
  
  $pdf->Text(23,88,$dispersion_2);


  if($clase3 < $media){

    $dispersion_3="Bajo";
    
    
    }else if($clase3 > $media){
    
      $dispersion_3="Sobre";
      
    }else if($clase3 == $media){

      $dispersion_3="Igual";
  
    
    }
    
    $pdf->Text(37,88,$dispersion_3);


    if($clase4 < $media){

      $dispersion_4="Bajo";  
      
      
      }else if($clase4 > $media){
      
        $dispersion_4="Sobre";
        
      }else if($clase4 == $media){

        $dispersion_4="Igual";
      
      }
      
      $pdf->Text(53,88,$dispersion_4);

      
    if($clase5 < $media){

      $dispersion_5="Bajo";
      
      
      }else if($clase5 > $media){
      
        $dispersion_5="Sobre";
        
      }else if($clase5 == $media){

        $dispersion_5="Igual";
      
      }
      
      $pdf->Text(67,88,$dispersion_5);

      if($clase6 < $media){

        $dispersion_6="Bajo";
        
        
        }else if($clase6 > $media){
        
          $dispersion_6="Sobre";
          
        }else if($clase6 == $media){

          $dispersion_6="Igual";
        
        }
        
        $pdf->Text(82,88,$dispersion_6);

        if($clase7 < $media){

          $dispersion_7="Bajo";
          
          
          }else if($clase7 > $media){
          
            $dispersion_7="Sobre"; 
            
          }else if($clase7 == $media){

            $dispersion_7="Igual";
          
          }
          
          $pdf->Text(95,88,$dispersion_7); 


          if($clase8 < $media){

            $dispersion_8="Bajo";

            
            }else if($clase8 > $media){
            
              $dispersion_8="Sobre";
      
              
            }else if($clase8 == $media){

              $dispersion_8="Igual";
            
            }
            
            $pdf->Text(110,88,$dispersion_8);

            if($clase9 < $media){

              $dispersion_9="Bajo";
              
              
              }else if($clase9 > $media){
              
                $dispersion_9="Sobre";

                
              }else if($clase9 == $media){

                $dispersion_9="Igual";

              
              }
              
              $pdf->Text(125,88,$dispersion_9);



$pdf->SetFont('Arial','B',10);



/* Dispersión de atributos con respecto a la media  */



/* Ejes de equilibrio */

$pdf->Text(10,103.9,$clase4);
$pdf->Text(25,103.9,$clase5);
$pdf->Text(40,103.9,$clase3);
$pdf->Text(55,103.9,$clase6);
$pdf->Text(69,103.9,$clase2);
$pdf->Text(83,103.9,$clase7);
$pdf->Text(98,103.9,$clase1);
$pdf->Text(113,103.9,$clase8);
$pdf->Text(127,103.9,$clase9);

$pdf->SetFont('Arial','B',7);

//mayor a 13

if($media > 13){

  //SER
  $ser=array($clase4,$clase5);
  $ser_media=($clase4+$clase5)/2;
  
  sort($ser);
  
  $sernum1=$ser[1];
  $sernum2=$ser[0];
  
  $sertotal=$sernum1-$sernum2;
  
  
  if($sertotal <= 3){

    if($ser_media > $media){

      $ser_char="EJE SOBRE LA MEDIA";
      $pdf->Text(6,113.5,$ser_char);

    }else if($ser_media < $media){

      $ser_char="EJE BAJO LA MEDIA";
      $pdf->Text(6,113.5,$ser_char);

    }else if($ser_media == $media){

      $ser_char="EJE EN LA MEDIA";
      $pdf->Text(6,113.5,$ser_char);

    }  

  }else{

    $ser_char="NO HAY EJE";
    $pdf->Text(11,113.5,$ser_char);

  }

  
 //TENER 
 $tener=array($clase3,$clase6);
 $tener_media=($clase3+$clase6)/2;
 
 sort($tener);
 
 $tenernum1=$tener[1];
 $tenernum2=$tener[0];
 
 $tenertotal=$sernum1-$sernum2;
 
 
 if($tenertotal <= 3){

   if($tener_media > $media){

     $tener_char="EJE SOBRE LA MEDIA";
     $pdf->Text(35,113.5,$tener_char);

   }else if($tener_media < $media){

     $tener_char="EJE BAJO LA MEDIA";
     $pdf->Text(35,113.5,$tener_char);

   }else if($tener_media == $media){

    $tener_char="EJE EN LA MEDIA";
    $pdf->Text(35,113.5,$tener_char);

  } 

 }else{

   $tener_char="NO HAY EJE";
   $pdf->Text(40,113.5,$tener_char);

 }

  
 //COMUNICAR 
  
 $comunicar=array($clase2,$clase7);
 $comunicar_media=($clase2+$clase7)/2;
  
 sort($comunicar);
 
 $comunicarnum1=$comunicar[1];
 $comunicarnum2=$comunicar[0];
 
 $comunicartotal=$comunicarnum1-$comunicarnum2;

 if($comunicartotal <= 3){

  if($comunicar_media > $media){

    $comunicar_char="EJE SOBRE LA MEDIA";
    $pdf->Text(64,113.5,$comunicar_char); 

  }else if($comunicar_media < $media){
    $comunicar_char="EJE BAJO LA MEDIA";
    $pdf->Text(64,113.5,$comunicar_char);

  }else if($comunicar_media == $media){

    $comunicar_char="EJE EN LA MEDIA";
    $pdf->Text(64,113.5,$comunicar_char);

  } 

 }else{

  $comunicar_char="NO HAY EJE";
  $pdf->Text(70,113.5,$comunicar_char);

}
  
  
//HACER  
  
  $hacer=array($clase1,$clase8);
  $hacer_media=($clase1+$clase8)/2;
  
  sort($hacer);

  $hacernum1=$hacer[1];
  $hacernum2=$hacer[0];
  $hacertotal=$hacernum1-$hacernum2;

  if($hacertotal <= 3){

    if($hacer_media > $media){
  
      $hacer_char="EJE SOBRE LA MEDIA";
      $pdf->Text(93,113.5,$hacer_char); 
  
    }else if($hacer_media < $media){
      $hacer_char="EJE BAJO LA MEDIA";
      $pdf->Text(94,113.5,$hacer_char);
  
    }else if($hacer_media == $media){

      $hacer_char="EJE EN LA MEDIA";
      $pdf->Text(94,113.5,$hacer_char);

    } 
  
   }else{
  
    $hacer_char="NO HAY EJE";
    $pdf->Text(100,113.5,$hacer_char);
  
  }

 
  //Estar
  
  $estar=array($clase9);
  $estar_media=($clase9)/1;

  
  sort($estar);
  
  $estarnum1=$hacer[0];
  $estartotal=$estarnum1;

    if($estartotal > $media){
  
      $estar_char="EJE SOBRE";
      $pdf->Text(121.5,113.5,$estar_char); 
  
    }else if($estar_media < $media){
      $estar_char="EJE BAJO";
      $pdf->Text(122,113.5,$estar_char);
  
    }else if($estar_media == $media){

      $estar_char="EJE EN";
      $pdf->Text(122,113.5,$estar_char);

    } 
  

  
  //menor a 13

  if($media <= 13){

    //SER
    $ser=array($clase4,$clase5);
    $ser_media=($clase4+$clase5)/2;
    
    sort($ser);
    
    $sernum1=$ser[1];
    $sernum2=$ser[0];
    
    $sertotal=$sernum1-$sernum2;
    
    
    if($sertotal <= 2){
  
      if($ser_media > $media){
  
        $ser_char="EJE SOBRE LA MEDIA";
        $pdf->Text(6,113.5,$ser_char);
  
      }else if($ser_media < $media){
  
        $ser_char="EJE BAJO LA MEDIA";
        $pdf->Text(6,113.5,$ser_char);
  
      }else if($ser_media == $media){

        $ser_char="EJE EN LA MEDIA";
        $pdf->Text(6,113.5,$ser_char);
  
      } 
  
    }else{
  
      $ser_char="NO HAY EJE";
      $pdf->Text(11,113.5,$ser_char);
  
    }
  
    
   //TENER 
   $tener=array($clase3,$clase6);
   $tener_media=($clase3+$clase6)/2;
   
   sort($tener);
   
   $tenernum1=$tener[1];
   $tenernum2=$tener[0];
   
   $tenertotal=$sernum1-$sernum2;
   
   
   if($tenertotal <= 2){
  
     if($tener_media > $media){
  
       $tener_char="EJE SOBRE LA MEDIA";
       $pdf->Text(35,113.5,$tener_char);
  
     }else if($tener_media < $media){
  
       $tener_char="EJE BAJO LA MEDIA";
       $pdf->Text(35,113.5,$tener_char);
  
     }else if($tener_media == $media){

      $tener_char="EJE EN LA MEDIA";
      $pdf->Text(35,113.5,$tener_char);

    } 
  
   }else{
  
     $tener_char="NO HAY EJE";
     $pdf->Text(40,113.5,$tener_char);
  
   }
  
    
   //COMUNICAR 
    
   $comunicar=array($clase2,$clase7);
   $comunicar_media=($clase2+$clase7)/2;
    
   sort($comunicar);
   
   $comunicarnum1=$comunicar[1];
   $comunicarnum2=$comunicar[0];
   
   $comunicartotal=$comunicarnum1-$comunicarnum2;
  
   if($comunicartotal <= 2){
  
    if($comunicar_media > $media){
  
      $comunicar_char="EJE SOBRE LA MEDIA";
      $pdf->Text(64,113.5,$comunicar_char); 
  
    }else if($comunicar_media < $media){
      $comunicar_char="EJE BAJO LA MEDIA";
      $pdf->Text(64,113.5,$comunicar_char);
  
    }else if($comunicar_media == $media){

      $comunicar_char="EJE EN LA MEDIA";
      $pdf->Text(64,113.5,$comunicar_char);

    } 
  
   }else{
  
    $comunicar_char="NO HAY EJE";
    $pdf->Text(70,113.5,$comunicar_char);
  
  }
    
    
  //HACER  
    
    $hacer=array($clase1,$clase8);
    $hacer_media=($clase1+$clase8)/2;
    
    sort($hacer);
  
    $hacernum1=$hacer[1];
    $hacernum2=$hacer[0];
    $hacertotal=$hacernum1-$hacernum2;
  
    if($hacertotal <= 2){
  
      if($hacer_media > $media){
    
        $hacer_char="EJE SOBRE LA MEDIA";
        $pdf->Text(93,113.5,$hacer_char); 
    
      }else if($hacer_media < $media){
        $hacer_char="EJE BAJO LA MEDIA";
        $pdf->Text(94,113.5,$hacer_char);
    
      }else if($hacer_media == $media){

        $hacer_char="EJE EN LA MEDIA";
        $pdf->Text(93,113.5,$hacer_char);
  
      } 
    
     }else{
    
      $hacer_char="NO HAY EJE";
      $pdf->Text(100,113.5,$hacer_char);
    
    }
  
   
    //Estar
    
    $estar=array($clase9);
    $estar_media=($clase9)/1;
  
    
    sort($estar);
    
    $estarnum1=$hacer[0];
    $estartotal=$estarnum1;
  
      if($estartotal > $media){
    
        $estar_char="EJE SOBRE";
        $pdf->Text(121.5,113.5,$estar_char); 
    
      }else if($estar_media < $media){
        $estar_char="EJE BAJO";
        $pdf->Text(122,113.5,$estar_char);
    
      }else if($estar_media == $media){

        $estar_char="EJE EN";
        $pdf->Text(122,113.5,$estar_char);
  
      } 
    
    }   

}

$pdf->SetFont('Arial','B',10);


/*  Ejes de equilibrio*/


/* En la Personalidad  */

//pensamiento

//pensamiento_inductivo
$pdf->Text(164,98,$clase2);
$pdf->Text(164,102.5,$clase3);
$pdf->Text(164,106.5,$clase4);
$total_inductivo=$clase2+$clase3+$clase4;
$pdf->Text(192,98,$total_inductivo);
$porcentaje_inductivo=(100*$total_inductivo)/$totalClases;
$pdf->Text(192,102.5,round($porcentaje_inductivo)."%");

//pensamiento_deductivo
$pdf->Text(164,116,$clase5);
$pdf->Text(164,120.5,$clase6);
$pdf->Text(164,124.6,$clase7);
$total_deductivo=$clase5+$clase6+$clase7;
$pdf->Text(192,116,$total_deductivo);
$porcentaje_deductivo=(100*$total_deductivo)/$totalClases;
$pdf->Text(192,120.5,round($porcentaje_deductivo)."%");

//pensamiento analógico
$pdf->Text(164,134.1,$clase8);
$pdf->Text(164,138.4,$clase9);
$pdf->Text(164,142.6,$clase1);
$total_analogico=$clase8+$clase9+$clase1;
$pdf->Text(192,134.2,$total_analogico);
$porcentaje_analogico=(100*$total_analogico)/$totalClases;
$pdf->Text(192,138.5,round($porcentaje_analogico)."%");

//inteligencia

//inteligencia_practica

$pdf->Text(164,157,$clase1);
$pdf->Text(164,161.3,$clase3);
$pdf->Text(164,165.5,$clase7);
$total_practica=$clase1+$clase3+$clase7;
$pdf->Text(192,156.9,$total_practica);
$porcentaje_practica=(100*$total_practica)/$totalClases;
$pdf->Text(192,161.2,round($porcentaje_practica)."%");

//inteligencia_analitica

$pdf->Text(164,175,$clase2);
$pdf->Text(164,179.5,$clase5);
$pdf->Text(164,184,$clase9);
$total_analitica=$clase2+$clase5+$clase9;
$pdf->Text(192,175,$total_analitica);
$porcentaje_analitica=(100*$total_analitica)/$totalClases;
$pdf->Text(192,179.5,round($porcentaje_analitica)."%");

//inteligencia_emocional
$pdf->Text(164,193.4,$clase4);
$pdf->Text(164,198,$clase6);
$pdf->Text(164,202.5,$clase8);
$total_emocional=$clase4+$clase6+$clase8;
$pdf->Text(192,193.4,$total_emocional);
$porcentaje_emocional=(100*$total_emocional)/$totalClases;
$pdf->Text(192,198,round($porcentaje_emocional)."%");


//posicion inductivo

$posicion_inductivo=" ";

if($porcentaje_inductivo > $porcentaje_deductivo && $porcentaje_inductivo > $porcentaje_analogico ){

  $posicion_inductivo="MAYOR";

} else if ($porcentaje_inductivo  < $porcentaje_deductivo && $porcentaje_inductivo < $porcentaje_analogico ){

  $posicion_inductivo="MENOR";

}else if ($porcentaje_inductivo > $porcentaje_deductivo && $porcentaje_inductivo < $porcentaje_analogico  ){

  $posicion_inductivo="MEDIO";

}else if ($porcentaje_inductivo < $porcentaje_deductivo && $porcentaje_inductivo > $porcentaje_analogico  ){

  $posicion_inductivo="MEDIO";
 
}else if ($porcentaje_inductivo > $porcentaje_deductivo OR $porcentaje_inductivo > $porcentaje_analogico  ){

  $posicion_inductivo="MAYOR";
  

}else if ($porcentaje_inductivo < $porcentaje_deductivo && $porcentaje_inductivo == $porcentaje_analogico  ){

  $posicion_inductivo="MENOR";

}else if ($porcentaje_inductivo == $porcentaje_deductivo && $porcentaje_inductivo > $porcentaje_analogico  ){

  $posicion_inductivo="MAYOR";

}else if ($porcentaje_inductivo < $porcentaje_deductivo && $porcentaje_inductivo == $porcentaje_analogico  ){

  $posicion_inductivo="MENOR";

}else if ($porcentaje_inductivo == $porcentaje_deductivo && $porcentaje_inductivo > $porcentaje_analogico  ){

  $posicion_inductivo="MAYOR";

}else if ($porcentaje_inductivo == $porcentaje_deductivo && $porcentaje_inductivo < $porcentaje_analogico  ){

  $posicion_inductivo="MENOR";

}else if ($porcentaje_inductivo == $porcentaje_deductivo && $porcentaje_inductivo == $porcentaje_analogico  ){

  $posicion_inductivo="MENOR";

}
$pdf->SetFont('Arial','B',8);
$pdf->Text(190,106.5,$posicion_inductivo);


//posicion deductivo

$posicion_deductivo=" ";

if($porcentaje_deductivo > $porcentaje_inductivo && $porcentaje_deductivo > $porcentaje_analogico ){

  $posicion_deductivo="MAYOR";

} else if ($porcentaje_deductivo  < $porcentaje_inductivo && $porcentaje_deductivo < $porcentaje_analogico ){

  $posicion_deductivo="MENOR";

}else if ($porcentaje_deductivo > $porcentaje_inductivo && $porcentaje_deductivo < $porcentaje_analogico  ){

  $posicion_deductivo="MEDIO";

}else if ($porcentaje_deductivo < $porcentaje_inductivo && $porcentaje_deductivo > $porcentaje_analogico  ){

  $posicion_deductivo="MEDIO";
 
}else if ($porcentaje_deductivo > $porcentaje_inductivo OR $porcentaje_deductivo > $porcentaje_analogico  ){

  $posicion_deductivo="MAYOR";
  

}else if ($porcentaje_deductivo < $porcentaje_inductivo && $porcentaje_deductivo == $porcentaje_analogico  ){

  $posicion_deductivo="MENOR";

}else if ($porcentaje_deductivo == $porcentaje_inductivo && $porcentaje_deductivo > $porcentaje_analogico  ){

  $posicion_deductivo="MAYOR";

}else if ($porcentaje_deductivo < $porcentaje_inductivo && $porcentaje_deductivo == $porcentaje_analogico  ){

  $posicion_deductivo="MENOR";

}else if ($porcentaje_deductivo == $porcentaje_inductivo && $porcentaje_deductivo > $porcentaje_analogico  ){

  $posicion_deductivo="MAYOR";

}else if ($porcentaje_deductivo == $porcentaje_inductivo && $porcentaje_deductivo < $porcentaje_analogico  ){

  $posicion_deductivo="MENOR";

}else if ($porcentaje_deductivo == $porcentaje_inductivo && $porcentaje_deductivo == $porcentaje_analogico  ){

  $posicion_deductivo="MENOR";

}
$pdf->SetFont('Arial','B',8);
$pdf->Text(190,124.5,$posicion_deductivo);


//posicion analógico

$posicion_analogico=" ";

if($porcentaje_analogico > $porcentaje_inductivo && $porcentaje_analogico > $porcentaje_deductivo ){

  $posicion_analogico="MAYOR";

} else if ($porcentaje_analogico  < $porcentaje_inductivo && $porcentaje_analogico < $porcentaje_deductivo ){

  $posicion_analogico="MENOR";

}else if ($porcentaje_analogico > $porcentaje_inductivo && $porcentaje_analogico < $porcentaje_deductivo  ){

  $posicion_analogico="MEDIO";

}else if ($porcentaje_analogico < $porcentaje_inductivo && $porcentaje_analogico > $porcentaje_deductivo  ){

  $posicion_analogico="MEDIO";
 
}else if ($porcentaje_analogico > $porcentaje_inductivo OR $porcentaje_analogico > $porcentaje_deductivo  ){

  $posicion_analogico="MAYOR";
  

}else if ($porcentaje_analogico < $porcentaje_inductivo && $porcentaje_analogico == $porcentaje_deductivo  ){

  $posicion_analogico="MENOR";

}else if ($porcentaje_analogico == $porcentaje_inductivo && $porcentaje_analogico > $porcentaje_deductivo  ){

  $posicion_analogico="MAYOR";

}else if ($porcentaje_analogico < $porcentaje_inductivo && $porcentaje_analogico == $porcentaje_deductivo  ){

  $posicion_analogico="MENOR";

}else if ($porcentaje_analogico == $porcentaje_inductivo && $porcentaje_analogico > $porcentaje_deductivo  ){

  $posicion_analogico="MAYOR";

}else if ($porcentaje_analogico == $porcentaje_inductivo && $porcentaje_analogico < $porcentaje_deductivo  ){

  $posicion_analogico="MENOR";

}else if ($porcentaje_analogico == $porcentaje_inductivo && $porcentaje_analogico == $porcentaje_deductivo  ){

  $posicion_analogico="MENOR";

}
$pdf->SetFont('Arial','B',8);
$pdf->Text(190,143,$posicion_analogico);

//posicion inteligencia práctica


$posicion_practica=" ";

if($porcentaje_practica > $porcentaje_analitica && $porcentaje_practica > $porcentaje_emocional ){

  $posicion_practica="MAYOR";

} else if ($porcentaje_practica  < $porcentaje_analitica && $porcentaje_practica < $porcentaje_emocional ){

  $posicion_practica="MENOR";

}else if ($porcentaje_practica > $porcentaje_analitica && $porcentaje_practica < $porcentaje_emocional  ){

  $posicion_practica="MEDIO";

}else if ($porcentaje_practica < $porcentaje_analitica && $porcentaje_practica > $porcentaje_emocional  ){

  $posicion_practica="MEDIO";
 
}else if ($porcentaje_practica > $porcentaje_analitica OR $porcentaje_practica > $porcentaje_emocional  ){

  $posicion_practica="MAYOR";
  

}else if ($porcentaje_practica < $porcentaje_analitica && $porcentaje_practica == $porcentaje_emocional  ){

  $posicion_practica="MENOR";

}else if ($porcentaje_practica == $porcentaje_analitica && $porcentaje_practica > $porcentaje_emocional  ){

  $posicion_practica="MAYOR";

}else if ($porcentaje_practica < $porcentaje_analitica && $porcentaje_practica == $porcentaje_emocional  ){

  $posicion_practica="MENOR";

}else if ($porcentaje_practica == $porcentaje_analitica && $porcentaje_practica > $porcentaje_emocional  ){

  $posicion_practica="MAYOR";

}else if ($porcentaje_practica == $porcentaje_analitica && $porcentaje_practica < $porcentaje_emocional  ){

  $posicion_practica="MENOR";

}else if ($porcentaje_practica == $porcentaje_analitica && $porcentaje_practica == $porcentaje_emocional  ){

  $posicion_practica="MENOR";

}
$pdf->SetFont('Arial','B',8);
$pdf->Text(190,165.5,$posicion_practica);

//posicion inteligencia analitica


$posicion_analitica=" ";

if($porcentaje_analitica > $porcentaje_practica && $porcentaje_analitica > $porcentaje_emocional ){

  $posicion_analitica="MAYOR";

} else if ($porcentaje_analitica  < $porcentaje_practica && $porcentaje_analitica < $porcentaje_emocional ){

  $posicion_analitica="MENOR";

}else if ($porcentaje_analitica > $porcentaje_practica && $porcentaje_analitica < $porcentaje_emocional  ){

  $posicion_analitica="MEDIO";

}else if ($porcentaje_analitica < $porcentaje_practica && $porcentaje_analitica > $porcentaje_emocional  ){

  $posicion_analitica="MEDIO";
 
}else if ($porcentaje_analitica > $porcentaje_practica OR $porcentaje_analitica > $porcentaje_emocional  ){

  $posicion_analitica="MAYOR";
  

}else if ($porcentaje_analitica < $porcentaje_practica && $porcentaje_analitica == $porcentaje_emocional  ){

  $posicion_analitica="MENOR";

}else if ($porcentaje_analitica == $porcentaje_practica && $porcentaje_analitica > $porcentaje_emocional  ){

  $posicion_analitica="MAYOR";

}else if ($porcentaje_analitica < $porcentaje_practica && $porcentaje_analitica == $porcentaje_emocional  ){

  $posicion_analitica="MENOR";

}else if ($porcentaje_analitica == $porcentaje_practica && $porcentaje_analitica > $porcentaje_emocional  ){

  $posicion_analitica="MAYOR";

}else if ($porcentaje_analitica == $porcentaje_practica && $porcentaje_analitica < $porcentaje_emocional  ){

  $posicion_analitica="MENOR";

}else if ($porcentaje_analitica == $porcentaje_practica && $porcentaje_analitica == $porcentaje_emocional  ){

  $posicion_analitica="MENOR";

}
$pdf->SetFont('Arial','B',8);
$pdf->Text(190,183.8,$posicion_analitica);

//posicion inteligencia emocional

$posicion_emocional=" ";

if($porcentaje_emocional > $porcentaje_practica && $porcentaje_emocional > $porcentaje_analitica ){

  $posicion_emocional="MAYOR";

} else if ($porcentaje_emocional  < $porcentaje_practica && $porcentaje_emocional < $porcentaje_analitica ){

  $posicion_emocional="MENOR";

}else if ($porcentaje_emocional > $porcentaje_practica && $porcentaje_emocional < $porcentaje_analitica  ){

  $posicion_emocional="MEDIO";

}else if ($porcentaje_emocional < $porcentaje_practica && $porcentaje_emocional > $porcentaje_analitica  ){

  $posicion_emocional="MEDIO";
 
}else if ($porcentaje_emocional > $porcentaje_practica OR $porcentaje_emocional > $porcentaje_analitica  ){

  $posicion_emocional="MAYOR";
  

}else if ($porcentaje_emocional < $porcentaje_practica && $porcentaje_emocional == $porcentaje_analitica  ){

  $posicion_emocional="MENOR";

}else if ($porcentaje_emocional == $porcentaje_practica && $porcentaje_emocional > $porcentaje_analitica  ){

  $posicion_emocional="MAYOR";

}else if ($porcentaje_emocional < $porcentaje_practica && $porcentaje_emocional == $porcentaje_analitica  ){

  $posicion_emocional="MENOR";

}else if ($porcentaje_emocional == $porcentaje_practica && $porcentaje_emocional > $porcentaje_analitica  ){

  $posicion_emocional="MAYOR";

}else if ($porcentaje_emocional == $porcentaje_practica && $porcentaje_emocional < $porcentaje_analitica  ){

  $posicion_emocional="MENOR";

}else if ($porcentaje_emocional == $porcentaje_practica && $porcentaje_emocional == $porcentaje_analitica  ){

  $posicion_emocional="MENOR";

}
$pdf->SetFont('Arial','B',8);
$pdf->Text(190,202,$posicion_emocional);


/* En la Personalidad  */

/* Ejes de polaridad  */

$pdf->Text(10,145,$clase1);
$pdf->Text(25,145,$clase5);
$pdf->Text(40,145,$clase2);
$pdf->Text(55,145,$clase6);
$pdf->Text(69,145,$clase3);
$pdf->Text(83,145,$clase7);
$pdf->Text(98,145,$clase4);
$pdf->Text(113,145,$clase8);
$pdf->Text(127,145,$clase9);

$orden_aire=$clase1+$clase5;
if($orden_aire > $media ){


  $orden_aire_char2="sobre media";

}else if($orden_aire < $media){


  $orden_aire_char2="bajo media";

}else if($orden_aire == $media){

  $orden_aire_char2="igual media";

}

$pdf->SetFont('Arial','B',9);
$pdf->Text(25,148.8,utf8_decode($orden_aire));
//$pdf->Text(10,163,utf8_decode($orden_aire_char1));
$pdf->Text(10,164,utf8_decode($orden_aire_char2));


$relacion_agua=$clase2+$clase6;
if($relacion_agua > $media ){

  $relacion_agua_char2="sobre media";

}else if($relacion_agua < $media){


  $relacion_agua_char2="bajo media";

}else if($relacion_agua == $media){

  $relacion_agua_char1="igual media";

}
$pdf->Text(55,148.8,$relacion_agua);
//$pdf->Text(39,163,utf8_decode($relacion_agua_char1));
$pdf->Text(39,164,utf8_decode($relacion_agua_char2));


$imagen_tierra=$clase3+$clase7;
if($imagen_tierra > $media ){

  $imagen_tierra_char2="sobre media";

}else if($imagen_tierra < $media){

  $imagen_tierra_char2="bajo media";

}else if($imagen_tierra == $media){

  $imagen_tierra_char2="igual media";

}

//$pdf->Text(68,163,utf8_decode($imagen_tierra_char1));
$pdf->Text(83,148.8,$imagen_tierra);
$pdf->Text(68,164,utf8_decode($imagen_tierra_char2));

$fuerza_fuego=$clase4+$clase8;
if($fuerza_fuego > $media ){

  $fuerza_fuego_char2="sobre media";

}else if($fuerza_fuego < $media){

  $fuerza_fuego_char2="bajo media";

}else if($fuerza_fuego == $media){

  $fuerza_fuego_char2="igual media";

}

//$pdf->Text(98.8,163,utf8_decode($fuerza_fuego_char1));
$pdf->Text(113,148.8,$fuerza_fuego);
$pdf->Text(98.8,164,utf8_decode($fuerza_fuego_char2));

$luz=$clase9;
if($luz > $media ){


  $luz_char2="Sobre";

}else if($luz < $media){


  $luz_char2="Bajo";

}else if($luz == $media){

  $luz_char2="Igual";

}

//$pdf->Text(126,163,utf8_decode($luz_char1));
$pdf->Text(127,148.8,$luz);
$pdf->Text(126,164,utf8_decode($luz_char2));
$pdf->Text(8,148.8,utf8_decode("Total"));
$pdf->Text(38,148.8,utf8_decode("Total"));
$pdf->Text(67,148.8,utf8_decode("Total"));
$pdf->Text(97,148.8,utf8_decode("Total"));

$max_poladridad=max($orden_aire,$relacion_agua,$imagen_tierra,$fuerza_fuego,$luz);
$min_polaridad=min($orden_aire,$relacion_agua,$imagen_tierra,$fuerza_fuego,$luz);


//max polaridad
if($orden_aire == $max_poladridad){

$pdf->Text(10,161,utf8_decode("Más alto"));

}

if($relacion_agua == $max_poladridad){

  $pdf->Text(39,161,utf8_decode("Más alto"));
   
}

if($imagen_tierra == $max_poladridad){

  $pdf->Text(68,161,utf8_decode("Más alto"));
   
}

if($fuerza_fuego == $max_poladridad){

  $pdf->Text(98.8,161,utf8_decode("Más alto"));
   
}

if($luz == $max_poladridad){

  $pdf->Text(126,161,utf8_decode("Más"));
   
}

//min polaridad
if($orden_aire == $min_polaridad){

  $pdf->Text(10,161,utf8_decode("Más Bajo"));
  
  }
  
  if($relacion_agua == $min_polaridad){
  
    $pdf->Text(39,161,utf8_decode("Más Bajo"));
     
  }
  
  if($imagen_tierra == $min_polaridad){
  
    $pdf->Text(68,161,utf8_decode("Más Bajo"));
     
  }
  
  if($fuerza_fuego == $min_polaridad){
  
    $pdf->Text(98.8,161,utf8_decode("Más Bajo"));
     
  }
  
  if($luz == $min_polaridad){
  
    $pdf->Text(126,161,utf8_decode("Bajo"));
     
  }


$pdf->SetFont('Arial','B',8);

/* Ejes de polaridad  */

/* polaridad en la personalidad  */

$pdf->Text(21,180.3,$clase1);
$pdf->Text(21,183.8,$clase2);
$pdf->Text(21,187.2,$clase3);
$pdf->Text(21,190.8,$clase8);
$pdf->Text(69,180.3,$clase4);
$pdf->Text(69,183.8,$clase5);
$pdf->Text(69,187.2,$clase6);
$pdf->Text(69,190.8,$clase7);
$pdf->Text(128,180.3,$clase9);
$total_activo=$clase1+$clase2+$clase3+$clase8;
$promedio_activo=($clase1+$clase2+$clase3+$clase8)/4;
$porcentaje_activo=(100*$total_activo)/$totalClases;
$pdf->Text(45,180.3,$total_activo);
$pdf->Text(45,183.8,$promedio_activo);
$pdf->Text(44.7,187.2,round($porcentaje_activo)."%");
$total_receptivo=$clase4+$clase5+$clase6+$clase7;
$pdf->Text(93,180.3,$total_receptivo);
$promedio_receptivo=($clase4+$clase5+$clase6+$clase7)/4;
$pdf->Text(92.7,183.8,$promedio_receptivo);
$porcentaje_receptivo=(100*$total_receptivo)/$totalClases;
$pdf->Text(92,187.2,round($porcentaje_receptivo)."%");
$porcentaje_neutro=(100*$clase9)/$totalClases;
$pdf->Text(127,185.2,round($porcentaje_neutro)."%");

//ACTIVO

$posicion_activo;

if($porcentaje_activo > $porcentaje_receptivo && $porcentaje_activo > $porcentaje_neutro ){

  $posicion_activo="MAYOR";

} else if ($porcentaje_activo  < $porcentaje_receptivo && $porcentaje_activo < $porcentaje_neutro ){

  $posicion_activo="MENOR";

}else if ($porcentaje_activo > $porcentaje_receptivo && $porcentaje_activo < $porcentaje_neutro  ){

  $posicion_activo="MEDIO";

}else if ($porcentaje_activo < $porcentaje_receptivo && $porcentaje_activo > $porcentaje_neutro  ){

  $posicion_activo="MEDIO";
 
}else if ($porcentaje_activo > $porcentaje_receptivo OR $porcentaje_activo > $porcentaje_neutro  ){

  $posicion_activo="MAYOR";
  

}else if ($porcentaje_activo < $porcentaje_receptivo && $porcentaje_activo == $porcentaje_neutro  ){

  $posicion_activo="MENOR";

}else if ($porcentaje_activo == $porcentaje_receptivo && $porcentaje_activo > $porcentaje_neutro  ){

  $posicion_activo="MAYOR";

}else if ($porcentaje_activo < $porcentaje_receptivo && $porcentaje_activo == $porcentaje_neutro  ){

  $posicion_activo="MENOR";

}else if ($porcentaje_activo == $porcentaje_receptivo && $porcentaje_activo > $porcentaje_neutro  ){

  $posicion_activo="MAYOR";

}else if ($porcentaje_activo == $porcentaje_receptivo && $porcentaje_activo < $porcentaje_neutro  ){

  $posicion_activo="MENOR";

}else if ($porcentaje_activo == $porcentaje_receptivo && $porcentaje_activo == $porcentaje_neutro  ){

  $posicion_activo="MENOR";

}

$pdf->SetFont('Arial','B',7);
$pdf->Text(43,190.8,$posicion_activo);

//RECEPTIVO

$posicion_receptivo;

if($porcentaje_receptivo > $porcentaje_activo && $porcentaje_receptivo > $porcentaje_neutro ){

  $posicion_receptivo="MAYOR";

} else if ($porcentaje_receptivo  < $porcentaje_activo && $porcentaje_receptivo < $porcentaje_neutro ){

  $posicion_receptivo="MENOR";

}else if ($porcentaje_receptivo > $porcentaje_activo && $porcentaje_receptivo < $porcentaje_neutro  ){

  $posicion_receptivo="MEDIO";

}else if ($porcentaje_receptivo < $porcentaje_activo && $porcentaje_receptivo > $porcentaje_neutro  ){

  $posicion_receptivo="MEDIO";
 
}else if ($porcentaje_receptivo > $porcentaje_activo OR $porcentaje_receptivo > $porcentaje_neutro  ){

  $posicion_receptivo="MAYOR";
  

}else if ($porcentaje_receptivo < $porcentaje_activo && $porcentaje_receptivo == $porcentaje_neutro  ){

  $posicion_receptivo="MENOR";

}else if ($porcentaje_receptivo == $porcentaje_activo && $porcentaje_receptivo > $porcentaje_neutro  ){

  $posicion_receptivo="MAYOR";

}else if ($porcentaje_receptivo < $porcentaje_activo && $porcentaje_receptivo == $porcentaje_neutro  ){

  $posicion_receptivo="MENOR";

}else if ($porcentaje_receptivo == $porcentaje_activo && $porcentaje_receptivo > $porcentaje_neutro  ){

  $posicion_receptivo="MAYOR";

}else if ($porcentaje_receptivo == $porcentaje_activo && $porcentaje_receptivo < $porcentaje_neutro  ){

  $posicion_receptivo="MENOR";

}else if ($porcentaje_receptivo == $porcentaje_activo && $porcentaje_receptivo == $porcentaje_neutro  ){

  $posicion_receptivo="MENOR";

}

$pdf->SetFont('Arial','B',7);
$pdf->Text(91,190.8,$posicion_receptivo);

//NEUTRO

$posicion_neutro;

if($porcentaje_neutro > $porcentaje_activo && $porcentaje_neutro > $porcentaje_receptivo ){

  $posicion_neutro="MAYOR";

} else if ($porcentaje_neutro  < $porcentaje_activo && $porcentaje_neutro < $porcentaje_receptivo ){

  $posicion_neutro="MENOR";

}else if ($porcentaje_neutro > $porcentaje_activo && $porcentaje_neutro < $porcentaje_receptivo  ){

  $posicion_neutro="MEDIO";

}else if ($porcentaje_neutro < $porcentaje_activo && $porcentaje_neutro > $porcentaje_receptivo  ){

  $posicion_neutro="MEDIO";
 
}else if ($porcentaje_neutro > $porcentaje_activo OR $porcentaje_neutro > $porcentaje_receptivo  ){

  $posicion_neutro="MAYOR";
  

}else if ($porcentaje_neutro < $porcentaje_activo && $porcentaje_neutro == $porcentaje_receptivo  ){

  $posicion_neutro="MENOR";

}else if ($porcentaje_neutro == $porcentaje_activo && $porcentaje_neutro > $porcentaje_receptivo  ){

  $posicion_neutro="MAYOR";

}else if ($porcentaje_neutro < $porcentaje_activo && $porcentaje_neutro == $porcentaje_receptivo  ){

  $posicion_neutro="MENOR";

}else if ($porcentaje_neutro == $porcentaje_activo && $porcentaje_neutro > $porcentaje_receptivo  ){

  $posicion_neutro="MAYOR";

}else if ($porcentaje_neutro == $porcentaje_activo && $porcentaje_neutro < $porcentaje_receptivo  ){

  $posicion_neutro="MENOR";

}else if ($porcentaje_neutro == $porcentaje_activo && $porcentaje_neutro == $porcentaje_receptivo  ){

  $posicion_neutro="MENOR";

}

$pdf->SetFont('Arial','B',7);
$pdf->Text(125,190.8,$posicion_neutro);


$pdf->SetFont('Arial','B',8);

/* polaridad en la personalidad  */

/* Análisis de polaridad por triadas  */

//area de la acción
$pdf->Text(32,213.3,$clase8);
$pdf->Text(32,217.3,$clase9);
$pdf->Text(32,221,$clase1);
$total_area_de_accion=$clase8+$clase9+$clase1;
$pdf->Text(32,224.5,$total_area_de_accion);
$porcentaje_area_de_accion=(100*$total_area_de_accion)/$totalClases;
$pdf->Text(32,228,round($porcentaje_area_de_accion)."%");
//area de la sensibilidad
$pdf->Text(64,213.3,$clase2);
$pdf->Text(64,217.3,$clase3);
$pdf->Text(64,221,$clase4);
$total_area_de_sensibilidad=$clase2+$clase3+$clase4;
$pdf->Text(64,224.5,$total_area_de_sensibilidad);
$porcentaje_area_de_sensibilidad=(100*$total_area_de_sensibilidad)/$totalClases;
$pdf->Text(64,228,round($porcentaje_area_de_sensibilidad)."%");
//area del pensamiento
$pdf->Text(95,213.3,$clase5);
$pdf->Text(95,217,$clase6);
$pdf->Text(95,221,$clase7);
$total_area_de_pensamiento=$clase5+$clase6+$clase7;
$pdf->Text(95,224.5,$total_area_de_pensamiento);
$porcentaje_area_de_pensamiento=(100*$total_area_de_pensamiento)/$totalClases;
$pdf->Text(94.5,228,round($porcentaje_area_de_pensamiento)."%");


$pdf->SetFont('Arial','B',7);
//menor mayor medio AREA DE ACCION


$pos_are_de_accion=array($clase1,$clase8,$clase9);

sort($pos_are_de_accion);

$paa1=$pos_are_de_accion[0];
$paa2=$pos_are_de_accion[1];
$paa3=$pos_are_de_accion[2];

if($clase8 == $paa3 ){

  $pdf->Text(40.5,213.3,"MAYOR");

}else if($clase8 == $paa2){

  $pdf->Text(40.5,213.3,"MEDIO");

}else if($clase8 == $paa1){

  $pdf->Text(40.5,213.3,"MENOR");

}

if($clase9 == $paa3 ){

  $pdf->Text(40.5,216.8,"MAYOR");

}else if($clase9 == $paa2){

  $pdf->Text(40.5,216.8,"MEDIO");

}else if($clase9 == $paa1){

  $pdf->Text(40.5,216.8,"MENOR");

}

if($clase1 == $paa3 ){

  $pdf->Text(40.5,220.8,"MAYOR");

}else if($clase1 == $paa2){

  $pdf->Text(40.5,220.8,"MEDIO");

}else if($clase1 == $paa1){

  $pdf->Text(40.5,220.8,"MENOR");

}



//menor mayor medio AREA DE SENSIBILIDAD
$pos_are_de_sensibilidad=array($clase2,$clase3,$clase4);

sort($pos_are_de_sensibilidad);

$pas1=$pos_are_de_sensibilidad[0];
$pas2=$pos_are_de_sensibilidad[1];
$pas3=$pos_are_de_sensibilidad[2];

if($clase2 == $pas3 ){

  $pdf->Text(72,213.3,"MAYOR");

}else if($clase2 == $pas2){

  $pdf->Text(72,213.3,"MEDIO");

}else if($clase2 == $pas1){

  $pdf->Text(72,213.3,"MENOR");

}

if($clase3 == $pas3 ){

  $pdf->Text(71.5,217,"MAYOR");

}else if($clase3 == $pas2){

  $pdf->Text(71.5,217,"MEDIO");

}else if($clase3 == $pas1){

  $pdf->Text(71.5,217,"MENOR");

}

if($clase4 == $pas3 ){

  $pdf->Text(71.5,220.8,"MAYOR");

}else if($clase4 == $pas2){

  $pdf->Text(71.5,220.8,"MEDIO");

}else if($clase4 == $pas1){

  $pdf->Text(71.5,220.8,"MENOR");

}

//menor mayor medio AREA DE PENSAMIENTO

$pos_are_de_pensamiento=array($clase5,$clase6,$clase7);

sort($pos_are_de_pensamiento);

$pap1=$pos_are_de_pensamiento[0];
$pap2=$pos_are_de_pensamiento[1];
$pap3=$pos_are_de_pensamiento[2];

if($clase5 == $pap3 ){

  $pdf->Text(102,212.8,"MAYOR");

}else if($clase5 == $pap2){

  $pdf->Text(102,212.8,"MEDIO");

}else if($clase5 == $pap1){

  $pdf->Text(102,212.8,"MENOR");

}

if($clase6 == $pap3 ){

  $pdf->Text(102,216.8,"MAYOR");

}else if($clase6 == $pap2){

  $pdf->Text(102,216.8,"MEDIO");

}else if($clase6 == $pap1){

  $pdf->Text(102,216.8,"MENOR");

}

if($clase7 == $pap3 ){

  $pdf->Text(102,220.8,"MAYOR");

}else if($clase7 == $pap2){

  $pdf->Text(102,220.8,"MEDIO");

}else if($clase7 == $pap1){

  $pdf->Text(102,220.8,"MENOR");

}


/*  expresión de la personalidad actual */

$pdf->SetFont('Arial','B',8);

$manifiesto=$clase8+$clase2+$clase5;
$pdf->Text(114,213.3,$manifiesto);

$oculto=$clase9+$clase3+$clase6;
$pdf->Text(114,217.3,$oculto);

$diversificado=$clase1+$clase4+$clase7;
$pdf->Text(114,221.3,$diversificado);

/*  expresión de la personalidad actual */




//posición area de la acción
$posicion_area_de_accion;

if($porcentaje_area_de_accion > $porcentaje_area_de_pensamiento && $porcentaje_area_de_accion > $porcentaje_area_de_sensibilidad ){

  $posicion_area_de_accion="MAYOR";

} else if ($porcentaje_area_de_accion  < $porcentaje_area_de_pensamiento && $porcentaje_area_de_accion < $porcentaje_area_de_sensibilidad ){

  $posicion_area_de_accion="MENOR";

}else if ($porcentaje_area_de_accion > $porcentaje_area_de_pensamiento && $porcentaje_area_de_accion < $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_accion="MEDIO";

}else if ($porcentaje_area_de_accion < $porcentaje_area_de_pensamiento && $porcentaje_area_de_accion > $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_accion="MEDIO";
 
}else if ($porcentaje_area_de_accion > $porcentaje_area_de_pensamiento OR $porcentaje_area_de_accion > $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_accion="MAYOR";
  

}else if ($porcentaje_area_de_accion < $porcentaje_area_de_pensamiento && $porcentaje_area_de_accion == $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_accion="MENOR";

}else if ($porcentaje_area_de_accion == $porcentaje_area_de_pensamiento && $porcentaje_area_de_accion > $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_accion="MAYOR";

}else if ($porcentaje_area_de_accion < $porcentaje_area_de_pensamiento && $porcentaje_area_de_accion == $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_accion="MENOR";

}else if ($porcentaje_area_de_accion == $porcentaje_area_de_pensamiento && $porcentaje_area_de_accion > $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_accion="MAYOR";

}else if ($porcentaje_area_de_accion == $porcentaje_area_de_pensamiento && $porcentaje_area_de_accion < $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_accion="MENOR";

}else if ($porcentaje_area_de_accion == $porcentaje_area_de_pensamiento && $porcentaje_area_de_accion == $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_accion="MENOR";

}

$pdf->SetFont('Arial','B',8);
$pdf->Text(28.5,232,$posicion_area_de_accion);


//posicion area de sensibilidad

$posicion_area_de_sensibilidad;

if($porcentaje_area_de_sensibilidad > $porcentaje_area_de_pensamiento && $porcentaje_area_de_sensibilidad > $porcentaje_area_de_accion ){

  $posicion_area_de_sensibilidad="MAYOR";

} else if ($porcentaje_area_de_sensibilidad  < $porcentaje_area_de_pensamiento && $porcentaje_area_de_sensibilidad < $porcentaje_area_de_accion ){

  $posicion_area_de_sensibilidad="MENOR";

}else if ($porcentaje_area_de_sensibilidad > $porcentaje_area_de_pensamiento && $porcentaje_area_de_sensibilidad < $porcentaje_area_de_accion  ){

  $posicion_area_de_sensibilidad="MEDIO";

}else if ($porcentaje_area_de_sensibilidad < $porcentaje_area_de_pensamiento && $porcentaje_area_de_sensibilidad > $porcentaje_area_de_accion  ){

  $posicion_area_de_sensibilidad="MEDIO";
 
}else if ($porcentaje_area_de_sensibilidad > $porcentaje_area_de_pensamiento OR $porcentaje_area_de_sensibilidad > $porcentaje_area_de_accion  ){

  $posicion_area_de_sensibilidad="MAYOR";
  

}else if ($porcentaje_area_de_sensibilidad < $porcentaje_area_de_pensamiento && $porcentaje_area_de_sensibilidad == $porcentaje_area_de_accion  ){

  $posicion_area_de_sensibilidad="MENOR";

}else if ($porcentaje_area_de_sensibilidad == $porcentaje_area_de_pensamiento && $porcentaje_area_de_sensibilidad > $porcentaje_area_de_accion  ){

  $posicion_area_de_sensibilidad="MAYOR";

}else if ($porcentaje_area_de_sensibilidad < $porcentaje_area_de_pensamiento && $porcentaje_area_de_sensibilidad == $porcentaje_area_de_accion  ){

  $posicion_area_de_sensibilidad="MENOR";

}else if ($porcentaje_area_de_sensibilidad == $porcentaje_area_de_pensamiento && $porcentaje_area_de_sensibilidad > $porcentaje_area_de_accion  ){

  $posicion_area_de_sensibilidad="MAYOR";

}else if ($porcentaje_area_de_sensibilidad == $porcentaje_area_de_pensamiento && $porcentaje_area_de_sensibilidad < $porcentaje_area_de_accion  ){

  $posicion_area_de_sensibilidad="MENOR";

}else if ($porcentaje_area_de_sensibilidad == $porcentaje_area_de_pensamiento && $porcentaje_area_de_sensibilidad == $porcentaje_area_de_accion  ){

  $posicion_area_de_sensibilidad="MENOR";

}

$pdf->SetFont('Arial','B',7);
$pdf->Text(61.7,232,$posicion_area_de_sensibilidad);




//posición area de pensamiento

$posicion_area_de_pensamiento;

if($porcentaje_area_de_pensamiento > $porcentaje_area_de_accion && $porcentaje_area_de_pensamiento > $porcentaje_area_de_sensibilidad ){

  $posicion_area_de_pensamiento="MAYOR";

} else if ($porcentaje_area_de_pensamiento  < $porcentaje_area_de_accion && $porcentaje_area_de_pensamiento < $porcentaje_area_de_sensibilidad ){

  $posicion_area_de_pensamiento="MENOR";

}else if ($porcentaje_area_de_pensamiento > $porcentaje_area_de_accion && $porcentaje_area_de_pensamiento < $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_pensamiento="MEDIO";

}else if ($porcentaje_area_de_pensamiento < $porcentaje_area_de_accion && $porcentaje_area_de_pensamiento > $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_pensamiento="MEDIO";
 
}else if ($porcentaje_area_de_pensamiento > $porcentaje_area_de_accion OR $porcentaje_area_de_pensamiento > $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_pensamiento="MAYOR";
  

}else if ($porcentaje_area_de_pensamiento < $porcentaje_area_de_accion && $porcentaje_area_de_pensamiento == $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_pensamiento="MENOR";

}else if ($porcentaje_area_de_pensamiento == $porcentaje_area_de_accion && $porcentaje_area_de_pensamiento > $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_pensamiento="MAYOR";

}else if ($porcentaje_area_de_pensamiento < $porcentaje_area_de_accion && $porcentaje_area_de_pensamiento == $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_pensamiento="MENOR";

}else if ($porcentaje_area_de_pensamiento == $porcentaje_area_de_accion && $porcentaje_area_de_pensamiento > $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_pensamiento="MAYOR";

}else if ($porcentaje_area_de_pensamiento == $porcentaje_area_de_accion && $porcentaje_area_de_accion < $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_pensamiento="MENOR";

}else if ($porcentaje_area_de_pensamiento == $porcentaje_area_de_accion && $porcentaje_area_de_accion == $porcentaje_area_de_sensibilidad  ){

  $posicion_area_de_pensamiento="MENOR";

}

$pdf->SetFont('Arial','B',7);
$pdf->Text(92,232,$posicion_area_de_pensamiento);

//expresion de la personalidad actual

//manifiesto
$pdf->SetFont('Arial','B',8.5);
$porcentaje_manifiesto=(100*$manifiesto)/$totalClases;
$pdf->Text(120,213,round($porcentaje_manifiesto)."%");

//oculto
$pdf->SetFont('Arial','B',8.5);
$porcentaje_oculto=(100*$oculto)/$totalClases;
$pdf->Text(120,217,round($porcentaje_oculto)."%");

//diversificado
$pdf->SetFont('Arial','B',8.5);
$porcentaje_diversificado=(100*$diversificado)/$totalClases;
$pdf->Text(120,221,round($porcentaje_diversificado)."%");

//posicion de expresion de la personalidad actual

//posicion manifiesto
$posicion_manifiesto;

if($porcentaje_manifiesto > $porcentaje_oculto && $porcentaje_manifiesto > $porcentaje_diversificado){

  $posicion_manifiesto="MAYOR";

} else if ($porcentaje_manifiesto  < $porcentaje_oculto && $porcentaje_manifiesto < $porcentaje_diversificado ){

  $posicion_manifiesto="MENOR";

}else if ($porcentaje_manifiesto > $porcentaje_oculto && $porcentaje_manifiesto < $porcentaje_diversificado  ){

  $posicion_manifiesto="MEDIO";

}else if ($porcentaje_manifiesto < $porcentaje_oculto && $porcentaje_manifiesto > $porcentaje_diversificado  ){

  $posicion_manifiesto="MEDIO";
 
}else if ($porcentaje_manifiesto > $porcentaje_oculto OR $porcentaje_manifiesto > $porcentaje_diversificado  ){

  $posicion_manifiesto="MAYOR";
  

}else if ($porcentaje_manifiesto < $porcentaje_oculto && $porcentaje_manifiesto == $porcentaje_diversificado  ){

  $posicion_manifiesto="MENOR";

}else if ($porcentaje_manifiesto == $porcentaje_oculto && $porcentaje_manifiesto > $porcentaje_diversificado  ){

  $posicion_manifiesto="MAYOR";

}else if ($porcentaje_manifiesto < $porcentaje_oculto && $porcentaje_manifiesto == $porcentaje_diversificado  ){

  $posicion_manifiesto="MENOR";

}else if ($porcentaje_manifiesto == $porcentaje_oculto && $porcentaje_manifiesto > $porcentaje_diversificado  ){

  $posicion_manifiesto="MAYOR";

}else if ($porcentaje_manifiesto == $porcentaje_oculto && $porcentaje_manifiesto < $porcentaje_diversificado  ){

  $posicion_manifiesto="MENOR";

}else if ($porcentaje_manifiesto == $porcentaje_oculto && $porcentaje_manifiesto == $porcentaje_diversificado  ){

  $posicion_manifiesto="MENOR";

}

$pdf->SetFont('Arial','B',5.8);
$pdf->Text(129.5,213,$posicion_manifiesto);

//posicion oculto

$posicion_oculto;

if($porcentaje_oculto > $porcentaje_manifiesto && $porcentaje_oculto > $porcentaje_diversificado){

  $posicion_oculto="MAYOR";

} else if ($porcentaje_oculto  < $porcentaje_manifiesto && $porcentaje_oculto < $porcentaje_diversificado ){

  $posicion_oculto="MENOR";

}else if ($porcentaje_oculto > $porcentaje_manifiesto && $porcentaje_oculto < $porcentaje_diversificado  ){

  $posicion_oculto="MEDIO";

}else if ($porcentaje_oculto < $porcentaje_manifiesto && $porcentaje_oculto > $porcentaje_diversificado  ){

  $posicion_oculto="MEDIO";
 
}else if ($porcentaje_oculto > $porcentaje_manifiesto OR $porcentaje_oculto > $porcentaje_diversificado  ){

  $posicion_oculto="MAYOR";
  

}else if ($porcentaje_oculto < $porcentaje_manifiesto && $porcentaje_oculto == $porcentaje_diversificado  ){

  $posicion_oculto="MENOR";

}else if ($porcentaje_oculto == $porcentaje_manifiesto && $porcentaje_oculto > $porcentaje_diversificado  ){

  $posicion_oculto="MAYOR";

}else if ($porcentaje_oculto < $porcentaje_manifiesto && $porcentaje_oculto == $porcentaje_diversificado  ){

  $posicion_oculto="MENOR";

}else if ($porcentaje_oculto == $porcentaje_manifiesto && $porcentaje_oculto > $porcentaje_diversificado  ){

  $posicion_oculto="MAYOR";

}else if ($porcentaje_oculto == $porcentaje_manifiesto && $porcentaje_oculto < $porcentaje_diversificado  ){

  $posicion_oculto="MENOR";

}else if ($porcentaje_oculto == $porcentaje_manifiesto && $porcentaje_oculto == $porcentaje_diversificado  ){

  $posicion_oculto="MENOR";

}

$pdf->SetFont('Arial','B',5.8);
$pdf->Text(129.5,216.5,$posicion_oculto);

//posicion diversificado

$posicion_diversificado;

if($porcentaje_diversificado > $porcentaje_manifiesto && $porcentaje_diversificado > $porcentaje_oculto){

  $posicion_diversificado="MAYOR";

} else if ($porcentaje_diversificado  < $porcentaje_manifiesto && $porcentaje_diversificado < $porcentaje_oculto ){

  $posicion_diversificado="MENOR";

}else if ($porcentaje_diversificado > $porcentaje_manifiesto && $porcentaje_diversificado < $porcentaje_oculto  ){

  $posicion_diversificado="MEDIO";

}else if ($porcentaje_diversificado < $porcentaje_manifiesto && $porcentaje_diversificado > $porcentaje_oculto  ){

  $posicion_diversificado="MEDIO";
 
}else if ($porcentaje_diversificado > $porcentaje_manifiesto OR $porcentaje_diversificado > $porcentaje_oculto  ){

  $posicion_diversificado="MAYOR";
  

}else if ($porcentaje_diversificado < $porcentaje_manifiesto && $porcentaje_diversificado == $porcentaje_oculto  ){

  $posicion_diversificado="MENOR";

}else if ($porcentaje_diversificado == $porcentaje_manifiesto && $porcentaje_diversificado > $porcentaje_oculto  ){

  $posicion_diversificado="MAYOR";

}else if ($porcentaje_diversificado < $porcentaje_manifiesto && $porcentaje_diversificado == $porcentaje_oculto  ){

  $posicion_diversificado="MENOR";

}else if ($porcentaje_diversificado == $porcentaje_manifiesto && $porcentaje_diversificado > $porcentaje_oculto  ){

  $posicion_diversificado="MAYOR";

}else if ($porcentaje_diversificado == $porcentaje_manifiesto && $porcentaje_diversificado < $porcentaje_oculto  ){

  $posicion_diversificado="MENOR";

}else if ($porcentaje_diversificado == $porcentaje_manifiesto && $porcentaje_diversificado == $porcentaje_oculto  ){

  $posicion_diversificado="MENOR";

}

$pdf->SetFont('Arial','B',5.8);
$pdf->Text(129.5,220.5,$posicion_diversificado);


/* Análisis de polaridad por triadas  */

/* vincularidad */

/* Enfrentar */
$pdf->SetFont('Arial','B',8);
$pdf->Text(23,243.2,$clase1);
$pdf->Text(23,246.9,$clase3);
$pdf->Text(23,251,$clase8);
$total_enfrentar=$clase1+$clase3+$clase8;
$pdf->Text(44,243.5,$total_enfrentar);
$porcentajeEnfrentarRedondeado=round($porcentajeEnfrentar)."%";
$pdf->Text(44,246.9,$porcentajeEnfrentarRedondeado);
$pdf->Text(40.5,251,$posicionEnfrentar);

/* Acercar */
$pdf->SetFont('Arial','B',8);
$pdf->Text(23,258,$clase2);
$pdf->Text(23,262,$clase6);
$pdf->Text(23,265.5,$clase7);
$total_acercar=$clase2+$clase6+$clase7;
$pdf->Text(44,258,$total_acercar);
$porcentajeAcercarRedondeado=round($porcentajeAcercar)."%";
$pdf->Text(44,262,$porcentajeAcercarRedondeado);
$pdf->Text(40.5,265.8,$posicionAcercar);

/* Alejar */
$pdf->Text(23,273,$clase4);
$pdf->Text(23,276.5,$clase5);
$pdf->Text(23,280.2,$clase9);
$total_alejar=$clase4+$clase5+$clase9;
$pdf->Text(44,273,$total_alejar);
$porcentajeAlejarRedondeado=round($porcentajeAlejar)."%";
$pdf->Text(44,276.5,$porcentajeAlejarRedondeado);
$pdf->Text(40.5,280.5,$posicionAlejar);

/* vincularidad */


/* Solución Conflictos Internos  */

/* Combativos */
$pdf->SetFont('Arial','B',8);
$pdf->Text(69,243.5,$clase3);
$pdf->Text(69,247.2,$clase7);
$pdf->Text(69,251,$clase8);
$total_combativo=$clase3+$clase7+$clase8;
$pdf->Text(88,243.5,$total_combativo);
$porcentajeCombativoRedondeado=round($porcentajeCombativo)."%";
$pdf->Text(88,247.2,$porcentajeCombativoRedondeado);
$pdf->SetFont('Arial','B',6.8);
$pdf->Text(85.5,251,$posicionCombativo);

/*  sumisos */
$pdf->SetFont('Arial','B',8);
$pdf->Text(69,258,$clase1);
$pdf->Text(69,261.8,$clase2);
$pdf->Text(69,265.8,$clase6);
$total_sumisos=$clase1+$clase2+$clase6;
$pdf->Text(88,258,$total_sumisos);
$porcentajeSumisosRedondeado=round($porcentajeSumisos)."%";
$pdf->Text(88,262,$porcentajeSumisosRedondeado);
$pdf->SetFont('Arial','B',6.8);
$pdf->Text(85.5,265.8,$posicionSumisos);

/* retirados  */
$pdf->SetFont('Arial','B',8);
$pdf->Text(69,272.7,$clase4);
$pdf->Text(69,276.7,$clase5);
$pdf->Text(69,280.7,$clase9);
$total_retirados=$clase4+$clase5+$clase9;
$pdf->Text(88,272.8,$total_retirados);
$porcentajeRetiradosRedondeado=round($porcentajeRetirados)."%";
$pdf->Text(88,276.7,$porcentajeRetiradosRedondeado);
$pdf->SetFont('Arial','B',6.8);
$pdf->Text(85.5,280.2,$posicionRetirados);

/*  Solución Conflictos Internos */

/* Reacción ante problemas */

/* reactivos */

$pdf->SetFont('Arial','B',8);
$pdf->Text(110,243.5,$clase6);
$pdf->Text(110,247.2,$clase4);
$pdf->Text(110,251,$clase8);
$total_reactivos=$clase6+$clase4+$clase8;
$pdf->Text(130,243.5,$total_reactivos);
$porcentajeReactivosRedondeado=round($porcentajeReactivos)."%";
$pdf->Text(130,247.2,$porcentajeReactivosRedondeado);
$pdf->SetFont('Arial','B',6.8);
$pdf->Text(127,251,$posicionReactivos);

/* eficaces */

$pdf->SetFont('Arial','B',8);
$pdf->Text(110,258,$clase3);
$pdf->Text(110,261.8,$clase1);
$pdf->Text(110,265.8,$clase5);
$total_eficaces=$clase3+$clase1+$clase5;
$pdf->Text(130,258,$total_eficaces);
$porcentajeEficacesRedondeado=round($porcentajeEficaces)."%";
$pdf->Text(130,262,$porcentajeEficacesRedondeado);
$pdf->SetFont('Arial','B',6.8);
$pdf->Text(127,265.8,$posicionEficaces);

/* optimistas  */
$pdf->SetFont('Arial','B',8);
$pdf->Text(110,272.7,$clase9);
$pdf->Text(110,276.7,$clase2);
$pdf->Text(110,280.7,$clase7);
$total_optimistas=$clase9+$clase2+$clase7;
$pdf->Text(130,272.8,$total_optimistas);
$porcentajeOptimistasRedondeado=round($porcentajeOptimistas)."%";
$pdf->Text(130,276.7,$porcentajeOptimistasRedondeado);
$pdf->SetFont('Arial','B',6.8);
$pdf->Text(127,280.2,$posicionOptimistas);

/* Miedos Circunstanciales  */

$max_clases=array($clase1,$clase2,$clase3,$clase4,$clase5,$clase6,$clase7,$clase8,$clase9);

sort($max_clases);

$min1=$max_clases[0];
$min2=$max_clases[1];
$min3=$max_clases[2];
$max_miedos=$max_clases[8];


if($clase1 == $min1 && $clase1 < $max_miedos or $clase1 == $min2 && $clase1 < $max_miedos or $clase1 == $min3 && $clase1 < $max_miedos ){

$cir1_1="Perder la libertad. No puedo ";
$cir1_2="ser natural, me siento asfixiado.";  
$num1=-0.50;

$pdf->SetFont('Arial','B',8.1);
$pdf->Text(159.5,216,$cir1_1);
$pdf->Text(159.5,219,$cir1_2);
$pdf->Text(150,219.5,$num1);


}else {
  $cir1_1="No";
  $cir1_2=" ";  
  $num1=0.50;

$pdf->SetFont('Arial','B',8.1);
$pdf->Text(150,219.5,$num1);
$pdf->SetFont('Arial','B',11);
$pdf->Text(173,217,$cir1_1);
$pdf->Text(159.5,219,$cir1_2);


}

if($clase2 == $min1 && $clase2 < $max_miedos or $clase2== $min2 && $clase2 < $max_miedos or $clase2 == $min3 && $clase2 < $max_miedos){

  $cir2_1="Sufrir afectivamente. ";
  $cir2_2="Vincularidad. Amar.";  
  $num2=-0.50;
  
  $pdf->SetFont('Arial','B',8.1);
  $pdf->Text(159.5,224,$cir2_1);
  $pdf->Text(159.5,227,$cir2_2);
  $pdf->Text(150,228,$num2);
  
  
  }else {
    $cir2_1="No";
    $cir2_2=" ";  
    $num2=0.50;

    $pdf->SetFont('Arial','B',8.1);
    $pdf->Text(150,228,$num2);
    $pdf->SetFont('Arial','B',11);
    $pdf->Text(173,226,$cir2_1);
    $pdf->Text(159.5,227,$cir2_2);
    
  
  
  }

  if($clase3 == $min1 && $clase3 < $max_miedos or $clase3 == $min2 && $clase3 < $max_miedos or $clase3 == $min3 && $clase3 < $max_miedos){

    $cir3_1=" Perder, fracasar.  ";
    $cir3_2="O miedo al logro.";  
    $num3=-0.50;
    
    $pdf->SetFont('Arial','B',8.1);
    $pdf->Text(159.5,233,$cir3_1);
    $pdf->Text(160,236,$cir3_2);
    $pdf->Text(150,237,$num3);
    
    
    }else {

      $cir3_1="No";
      $cir3_2=" ";  
      $num3=0.50;
  
      $pdf->SetFont('Arial','B',8.1);
      $pdf->Text(150,237,$num3);
      $pdf->SetFont('Arial','B',11);
      $pdf->Text(173,235,$cir3_1);
      $pdf->Text(160,236,$cir3_2);
      
    
    
    }

    if($clase4 == $min1 && $clase4 < $max_miedos or $clase4 == $min2 && $clase4 < $max_miedos or $clase4 == $min3 && $clase4 < $max_miedos ) {

      $cir4_1=" Verse a si mismo. Introspección.  ";
      $cir4_2="No esta feliz con quién es. ";  
      $cir4_3="Perdonarse.";
      $num4=-0.50;
      
      $pdf->SetFont('Arial','B',7.5);
      $pdf->Text(159.5,240,utf8_decode($cir4_1));
      $pdf->Text(160,243,utf8_decode($cir4_2));
      $pdf->Text(160,246,utf8_decode($cir4_3));
      $pdf->SetFont('Arial','B',8.1);
      $pdf->Text(150,246,$num4);
      
      
      }else {
  
        $cir4_1="No";
        $cir4_2=" ";  
        $num4=0.50;
    
        $pdf->SetFont('Arial','B',8.1);
        $pdf->Text(150,246,$num4);
        $pdf->SetFont('Arial','B',11);
        $pdf->Text(173,243,$cir4_1);
        $pdf->Text(160,236,$cir4_2);
        
      
      
      }

      if($clase5 == $min1 && $clase5 < $max_miedos or $clase5 == $min2 && $clase5 < $max_miedos or $clase5 == $min3 && $clase5 < $max_miedos){

        $cir5_1=" Ver la realidad, sufrir.  ";
        $cir5_2="No quiere o no puede aceptar. ";  
        $cir5_3="Algo no digiere.";
        $num5=-0.50;
        
        $pdf->SetFont('Arial','B',7.5);
        $pdf->Text(159.5,249.5,utf8_decode($cir5_1));
        $pdf->Text(160,252,utf8_decode($cir5_2));
        $pdf->Text(160,254.5,utf8_decode($cir5_3));
        $pdf->SetFont('Arial','B',8.1);
        $pdf->Text(150,254,$num5);
        
        
        }else {
    
          $cir5_1="No";
          $cir5_2=" ";  
          $num5=0.50;
      
          $pdf->SetFont('Arial','B',8.1);
          $pdf->Text(150,254,$num5);
          $pdf->SetFont('Arial','B',11);
          $pdf->Text(173,252,$cir5_1);
          $pdf->Text(160,236,$cir5_2);
          
        
        
        }

        if($clase6 == $min1 && $clase1 < $max_miedos or $clase6 == $min2 && $clase6 < $max_miedos or $clase6 == $min3 && $clase6 < $max_miedos){

          $cir6_1="  Perder la libertad.  ";
          $cir6_2="Revisar compromisos u ";  
          $cir6_3="obligaciones que se ha creado.";
          $num6=-0.50;
          
          $pdf->SetFont('Arial','B',7.5);
          $pdf->Text(159.5,258,utf8_decode($cir6_1));
          $pdf->Text(161,260.5,utf8_decode($cir6_2));
          $pdf->Text(161,263,utf8_decode($cir6_3));
          $pdf->SetFont('Arial','B',8.1);
          $pdf->Text(150,262.5,$num6);
          
          
          }else {
      
            $cir6_1="No";
            $cir6_2=" ";  
            $num6=0.50;
        
            $pdf->SetFont('Arial','B',8.1);
            $pdf->Text(150,262.5,$num6);
            $pdf->SetFont('Arial','B',11);
            $pdf->Text(173,261,$cir6_1);
            $pdf->Text(160,236,$cir6_2);
            
          
          
          }

          if($clase7 == $min1 && $clase7 < $max_miedos or $clase7 == $min2 && $clase7 < $max_miedos or $clase7 == $min3 && $clase7 < $max_miedos){

            $cir7_1="Disfrutar. Darse permisos.";
            $cir7_2="Soltar responsabilidades ";  
            $cir7_3="y control. (Irresponsable)";
            $num7=-0.50;
            
            $pdf->SetFont('Arial','B',7.5);
            $pdf->Text(159.5,266.5,utf8_decode($cir7_1));
            $pdf->Text(159.5,269,utf8_decode($cir7_2));
            $pdf->Text(159.5,271,utf8_decode($cir7_3));
            $pdf->SetFont('Arial','B',8.1);
            $pdf->Text(150,271,$num7);
            
            
            }else {
        
              $cir7_1="No";
              $cir7_2=" ";  
              $num7=0.50;
          
              $pdf->SetFont('Arial','B',8.1);
              $pdf->Text(150,271,$num7);
              $pdf->SetFont('Arial','B',11);
              $pdf->Text(173,269,$cir7_1);
              $pdf->Text(160,236,$cir7_2);
              
            
            
            }

            if($clase8 == $min1 && $clase8 < $max_miedos or $clase8 == $min2 && $clase8 < $max_miedos or $clase8 == $min3 && $clase8 < $max_miedos){

              $cir8_1="Tomar una decisión de la que";
              $cir8_2="derivan otras.Cerrar o";  
              $cir8_3="terminar algo. Consecuencias.";
              $num8=-0.50;
              
              $pdf->SetFont('Arial','B',7.5);
              $pdf->Text(159.5,275,utf8_decode($cir8_1));
              $pdf->Text(159.8,277.8,utf8_decode($cir8_2));
              $pdf->Text(159.5,280,utf8_decode($cir8_3));
              $pdf->SetFont('Arial','B',8.1);
              $pdf->Text(150,280,$num8);
              
              
              }else {
          
                $cir8_1="No";
                $cir8_2=" ";  
                $num8=0.50;
            
                $pdf->SetFont('Arial','B',8.1);
                $pdf->Text(150,280,$num8);
                $pdf->SetFont('Arial','B',11);
                $pdf->Text(173,277,$cir8_1);
                $pdf->Text(160,236,$cir8_2);
              }
    
              if($clase9 == $min1 && $clase9 < $max_miedos or $clase9 == $min2 && $clase9 < $max_miedos or $clase9 == $min3 && $clase9 < $max_miedos){

                $cir8_1="Parar, retirarse y encontrarse.";
                $cir8_2="Delegar, salir de la adicción";  
                $cir8_3="a la actividad.";
                $num8=-0.50;
                
                $pdf->SetFont('Arial','B',7.5);
                $pdf->Text(159.5,284,utf8_decode($cir8_1));
                $pdf->Text(159.8,286.8,utf8_decode($cir8_2));
                $pdf->Text(159.5,289,utf8_decode($cir8_3));
                $pdf->SetFont('Arial','B',8.1);
                $pdf->Text(150,289,$num8);
                
                
                }else {
            
                  $cir8_1="No";
                  $cir8_2=" ";  
                  $num8=0.50;
              
                  $pdf->SetFont('Arial','B',8.1);
                  $pdf->Text(150,289,$num8);
                  $pdf->SetFont('Arial','B',11);
                  $pdf->Text(173,286,$cir8_1);
                  $pdf->Text(160,236,$cir8_2);
                }              
  


/* Miedos Circunstanciales  */



/* reacción ante problemas  */ 
$pdf->Output();






/* pdf */




?>