<?php

include("header.php");

/*  llevar hasta el final */

$fecha=htmlentities(addslashes($_POST["fecha"]));
$nombre=htmlentities(addslashes($_POST["nombre"]));
$fechaNacimiento=htmlentities(addslashes($_POST["fechaNacimiento"]));
$edad=htmlentities(addslashes($_POST["edad"]));
$sexo=htmlentities(addslashes($_POST["sexo"]));
$estadoCivil=htmlentities(addslashes($_POST["estadoCivil"]));
$profesion=htmlentities(addslashes($_POST["profesion"]));
$signo=htmlentities(addslashes($_POST["signo"]));
$fechaLatino=date("d-m-Y",strtotime($fecha));
$fechaLatinoNacimiento=date("d-m-Y",strtotime($fechaNacimiento));

/*  llevar hasta el final */


/*  clases */

$clase1=htmlentities(addslashes($_POST["clase1"]));
$clase2=htmlentities(addslashes($_POST["clase2"]));
$clase3=htmlentities(addslashes($_POST["clase3"]));
$clase4=htmlentities(addslashes($_POST["clase4"]));
$clase5=htmlentities(addslashes($_POST["clase5"]));
$clase6=htmlentities(addslashes($_POST["clase6"]));
$clase7=htmlentities(addslashes($_POST["clase7"]));
$clase8=htmlentities(addslashes($_POST["clase8"]));
$clase9=htmlentities(addslashes($_POST["clase9"]));


/*  clases */

/*  valores consigna 2 */

$posicion1=htmlentities(addslashes($_POST["posicion1"]));
$posicion2=htmlentities(addslashes($_POST["posicion2"]));
$posicion3=htmlentities(addslashes($_POST["posicion3"]));

/*  valores consigna 2 */

/*  verbos consigna 3 */
$verbo1=htmlentities(addslashes($_POST["verbo1"]));
$verbo2=htmlentities(addslashes($_POST["verbo2"]));
$verbo3=htmlentities(addslashes($_POST["verbo3"]));
$verbo4=htmlentities(addslashes($_POST["verbo4"]));
$verbo5=htmlentities(addslashes($_POST["verbo5"]));
$verbo6=htmlentities(addslashes($_POST["verbo6"]));
$verbo7=htmlentities(addslashes($_POST["verbo7"]));
$verbo8=htmlentities(addslashes($_POST["verbo8"]));
$verbo9=htmlentities(addslashes($_POST["verbo9"]));


$mas;

if($verbo1==1){

  $verbo1="Realizar";

  $mas=$verbo1;

}else if($verbo2==1){

  $verbo2="Alegrar";

  $mas=$verbo2;

}else if($verbo3==1){

  $verbo3="Observar";

  $mas=$verbo3;

}else if($verbo4==1){

  $verbo4="Liderar";

  $mas=$verbo4;

}else if($verbo5==1){

  $verbo5="Serenar";
  
  $mas=$verbo5;

}else if($verbo6==1){

  $verbo6="Cooperar";
  
  $mas=$verbo6;

}else if($verbo7==1){

  $verbo7="Ayudar";
  
  $mas=$verbo7;

}else if($verbo8==1){

  $verbo8="Crear";
  
  $mas=$verbo8;

}else if($verbo9==1){

  $verbo9="Organizar";
  
  $mas=$verbo9;

}


$menos;

if($verbo1==2){

  $verbo1="Realizar";

  $menos=$verbo1;

}else if($verbo2==2){

  $verbo2="Alegrar";

  $menos=$verbo2;

}else if($verbo3==2){

  $verbo3="Observar";

  $menos=$verbo3;

}else if($verbo4==2){

  $verbo4="Liderar";

  $menos=$verbo4;

}else if($verbo5==2){

  $verbo5="Serenar";
  
  $menos=$verbo5;

}else if($verbo6==2){

  $verbo6="Cooperar";
  
  $menos=$verbo6;

}else if($verbo7==2){

  $verbo7="Ayudar";
  
  $menos=$verbo7;

}else if($verbo8==2){

  $verbo8="Crear";
  
  $menos=$verbo8;

}else if($verbo9==2){

  $verbo9="Organizar";
  
  $menos=$verbo9;

}



/* verbos consinga 3  */


/* calcular la media  */


$max=max($clase1,$clase2,$clase3,$clase4,$clase5,$clase6,$clase7,$clase8,$clase9);
$min=min($clase1,$clase2,$clase3,$clase4,$clase5,$clase6,$clase7,$clase8,$clase9);



$media=($max+$min)/2;




/*  calcular la media */

/* PLANILLA PARA EL FORMADOR */

$totalClases=$clase1+$clase2+$clase3+$clase4+$clase5+$clase6+$clase7+$clase8+$clase9;

$atributo1=$clase1;
$atributo2=$clase2;
$atributo3=$clase3;
$atributo4=$clase4;
$atributo5=$clase5;
$atributo6=$clase6;
$atributo7=$clase7;
$atributo8=$clase8;
$atributo9=$clase9;


/* Vincularidad */

/* enfrentar */

$total_enfrentar=$atributo1+$atributo3+$atributo8;

$porcentaje_enfrentar=(100*$total_enfrentar)/$totalClases;


/* enfrentar */

/* acercar */

$total_acercar=$atributo2+$atributo6+$atributo7;

$porcentaje_acercar=(100*$total_acercar)/$totalClases;


/* acercar */

/* alejar  */

$total_alejar=$atributo4+$atributo5+$atributo9;

$porcentaje_alejar=(100*$total_alejar)/$totalClases;


/* alejar  */

/* Vincularidad  */

/* Solución conflictos interntos  */

/* combativos  */

$total_combativo=$atributo3+$atributo7+$atributo8;

$porcentaje_combativo=(100*$total_combativo)/$totalClases;


/*  combativos */

/* sumisos  */

$total_sumisos=$atributo1+$atributo2+$atributo6;

$porcentaje_sumisos=(100*$total_sumisos)/$totalClases;


/* sumisos  */

/*  retirados */

$total_retirados=$atributo4+$atributo5+$atributo9;

$porcentaje_retirados=(100*$total_retirados)/$totalClases;


/* retirados  */


/* Solución conflictos interntos  */

/* Reacción ante problemas  */

  /* reactivos  */

  $total_reactivos=$atributo6+$atributo4+$atributo8;

  $porcentaje_reactivos=(100*$total_reactivos)/$totalClases;



  /* reactivos  */

  /* eficaces  */

  $total_eficaces=$atributo3+$atributo1+$atributo5;

  $porcentaje_eficaces=(100*$total_eficaces)/$totalClases;


  /* eficaces  */

  /* optimistas  */

  $total_optimistas=$atributo9+$atributo2+$atributo7;

  $porcentaje_optimistas=(100*$total_optimistas)/$totalClases;


  /* optimistas  */

/* Reacción ante problemas  */

/* posiciones vincular */

//posicion enfrentar

$posicion_enfrentar=" ";

if($porcentaje_enfrentar > $porcentaje_acercar && $porcentaje_enfrentar > $porcentaje_alejar ){

  $posicion_enfrentar="MAYOR";

} else if ($porcentaje_enfrentar  < $porcentaje_acercar && $porcentaje_enfrentar < $porcentaje_alejar ){

  $posicion_enfrentar="MENOR";

}else if ($porcentaje_enfrentar > $porcentaje_acercar && $porcentaje_enfrentar < $porcentaje_alejar  ){

  $posicion_enfrentar="MEDIO";

}else if ($porcentaje_enfrentar < $porcentaje_acercar && $porcentaje_enfrentar > $porcentaje_alejar  ){

  $posicion_enfrentar="MEDIO";
 
}else if ($porcentaje_enfrentar > $porcentaje_acercar OR $porcentaje_enfrentar > $porcentaje_alejar  ){

  $posicion_enfrentar="MAYOR";
  

}else if ($porcentaje_enfrentar < $porcentaje_acercar && $porcentaje_enfrentar == $porcentaje_alejar  ){

  $posicion_enfrentar="MENOR";

}else if ($porcentaje_enfrentar == $porcentaje_acercar && $porcentaje_enfrentar > $porcentaje_alejar  ){

  $posicion_enfrentar="MAYOR";

}else if ($porcentaje_enfrentar < $porcentaje_acercar && $porcentaje_enfrentar == $porcentaje_alejar  ){

  $posicion_enfrentar="MENOR";

}else if ($porcentaje_enfrentar == $porcentaje_acercar && $porcentaje_enfrentar > $porcentaje_alejar  ){

  $posicion_enfrentar="MAYOR";

}else if ($porcentaje_enfrentar == $porcentaje_acercar && $porcentaje_enfrentar < $porcentaje_alejar  ){

  $posicion_enfrentar="MENOR";

}else if ($porcentaje_enfrentar == $porcentaje_acercar && $porcentaje_enfrentar == $porcentaje_alejar  ){

  $posicion_enfrentar="MENOR";

}


//posicion enfrentar


//posicion acercar

$posicion_acercars=" ";

if($porcentaje_acercar > $porcentaje_enfrentar && $porcentaje_acercar > $porcentaje_alejar ){

  $posicion_acercar="MAYOR";

} else if ($porcentaje_acercar  < $porcentaje_enfrentar && $porcentaje_acercar < $porcentaje_alejar ){

  $posicion_acercar="MENOR";

}else if ($porcentaje_acercar > $porcentaje_enfrentar && $porcentaje_acercar < $porcentaje_alejar  ){

  $posicion_acercar="MEDIO";

}else if ($porcentaje_acercar < $porcentaje_enfrentar && $porcentaje_acercar > $porcentaje_alejar  ){

  $posicion_acercar="MEDIO";
 
}else if ($porcentaje_acercar > $porcentaje_enfrentar OR $porcentaje_acercar > $porcentaje_alejar  ){

  $posicion_acercar="MAYOR";
  

}else if ($porcentaje_acercar < $porcentaje_enfrentar && $porcentaje_acercar == $porcentaje_alejar  ){

  $posicion_acercar="MENOR";

}else if ($porcentaje_acercar == $porcentaje_enfrentar && $porcentaje_acercar > $porcentaje_alejar  ){

  $posicion_acercar="MAYOR";

}else if ($porcentaje_acercar < $porcentaje_enfrentar && $porcentaje_acercar == $porcentaje_alejar  ){

  $posicion_acercar="MENOR";

}else if ($porcentaje_acercar == $porcentaje_enfrentar && $porcentaje_acercar > $porcentaje_alejar  ){

  $posicion_acercar="MAYOR";

}else if ($porcentaje_acercar == $porcentaje_enfrentar && $porcentaje_acercar < $porcentaje_alejar  ){

  $posicion_acercar="MENOR";

}else if ($porcentaje_acercar == $porcentaje_enfrentar && $porcentaje_acercar == $porcentaje_alejar  ){

  $posicion_acercar="MENOR";

}



//posicion acercar

//posicion alejar

$posicion_alejar=" ";

if($porcentaje_alejar > $porcentaje_enfrentar && $porcentaje_alejar > $porcentaje_acercar ){

  $posicion_alejar="MAYOR";

} else if ($porcentaje_alejar  < $porcentaje_enfrentar && $porcentaje_alejar < $porcentaje_acercar ){

  $posicion_alejar="MENOR";

}else if ($porcentaje_alejar > $porcentaje_enfrentar && $porcentaje_alejar < $porcentaje_acercar  ){

  $posicion_alejar="MEDIO";

}else if ($porcentaje_alejar < $porcentaje_enfrentar && $porcentaje_alejar > $porcentaje_acercar  ){

  $posicion_alejar="MEDIO";
 
}else if ($porcentaje_alejar > $porcentaje_enfrentar OR $porcentaje_alejar > $porcentaje_acercar  ){

  $posicion_alejar="MAYOR";
  

}else if ($porcentaje_alejar < $porcentaje_enfrentar && $porcentaje_alejar == $porcentaje_acercar  ){

  $posicion_alejar="MENOR";

}else if ($porcentaje_alejar == $porcentaje_enfrentar && $porcentaje_alejar > $porcentaje_acercar  ){

  $posicion_alejar="MAYOR";

}else if ($porcentaje_alejar < $porcentaje_enfrentar && $porcentaje_alejar == $porcentaje_acercar  ){

  $posicion_alejar="MENOR";

}else if ($porcentaje_alejar == $porcentaje_enfrentar && $porcentaje_alejar > $porcentaje_acercar  ){

  $posicion_alejar="MAYOR";

}else if ($porcentaje_alejar == $porcentaje_enfrentar && $porcentaje_alejar < $porcentaje_acercar  ){

  $posicion_alejar="MENOR";

}else if ($porcentaje_alejar == $porcentaje_enfrentar && $porcentaje_alejar == $porcentaje_acercar  ){

  $posicion_alejar="MENOR";

}


//posicion alejar

/* posiciones vincular  */


/* posiciones solución conflictos internos  */

//posicion combativos

$posicion_combativo=" ";

if($porcentaje_combativo > $porcentaje_sumisos && $porcentaje_combativo > $porcentaje_retirados ){

  $posicion_combativo="MAYOR";

} else if ($porcentaje_combativo  < $porcentaje_sumisos && $porcentaje_combativo < $porcentaje_retirados ){

  $posicion_combativo="MENOR";

}else if ($porcentaje_combativo > $porcentaje_sumisos && $porcentaje_combativo < $porcentaje_retirados  ){

  $posicion_combativo="MEDIO";

}else if ($porcentaje_combativo < $porcentaje_sumisos && $porcentaje_combativo > $porcentaje_retirados  ){

  $posicion_combativo="MEDIO";
 
}else if ($porcentaje_combativo > $porcentaje_sumisos OR $porcentaje_combativo > $porcentaje_retirados  ){

  $posicion_combativo="MAYOR";
  

}else if ($porcentaje_combativo < $porcentaje_sumisos && $porcentaje_combativo == $porcentaje_retirados  ){

  $posicion_combativo="MENOR";

}else if ($porcentaje_combativo == $porcentaje_sumisos && $porcentaje_combativo > $porcentaje_retirados  ){

  $posicion_combativo="MAYOR";

}else if ($porcentaje_combativo < $porcentaje_sumisos && $porcentaje_combativo == $porcentaje_retirados  ){

  $posicion_combativo="MENOR";

}else if ($porcentaje_combativo == $porcentaje_sumisos && $porcentaje_combativo > $porcentaje_retirados  ){

  $posicion_combativo="MAYOR";

}else if ($porcentaje_combativo == $porcentaje_sumisos && $porcentaje_combativo < $porcentaje_retirados  ){

  $posicion_combativo="MENOR";

}else if ($porcentaje_combativo == $porcentaje_combativo && $porcentaje_combativo == $porcentaje_retirados  ){

  $posicion_combativo="MENOR";

}





//posicion combativos

//posicion sumisos

$posicion_sumisos=" ";

if($porcentaje_sumisos > $porcentaje_combativo && $posicion_sumisos > $porcentaje_acercar ){

  $posicion_sumisos="MAYOR";

} else if ($porcentaje_sumisos  < $porcentaje_combativo && $porcentaje_sumisos < $porcentaje_retirados ){

  $posicion_sumisos="MENOR";

}else if ($porcentaje_sumisos > $porcentaje_combativo && $porcentaje_sumisos < $porcentaje_retirados  ){

  $posicion_sumisos="MEDIO";

}else if ($porcentaje_sumisos < $porcentaje_combativo && $porcentaje_sumisos > $porcentaje_retirados  ){

  $posicion_sumisos="MEDIO";
 
}else if ($porcentaje_sumisos > $porcentaje_combativo OR $porcentaje_sumisos > $porcentaje_retirados  ){

  $posicion_sumisos="MAYOR";
  
}else if ($porcentaje_sumisos < $porcentaje_combativo && $porcentaje_sumisos == $porcentaje_retirados  ){

  $posicion_sumisos="MENOR";

}else if ($porcentaje_sumisos == $porcentaje_combativo && $porcentaje_sumisos > $porcentaje_retirados  ){

  $posicion_sumisos="MAYOR";

}else if ($porcentaje_sumisos < $porcentaje_combativo && $porcentaje_sumisos == $porcentaje_retirados  ){

  $posicion_sumisos="MENOR";

}else if ($porcentaje_sumisos == $porcentaje_combativo && $porcentaje_sumisos > $porcentaje_retirados  ){

  $posicion_sumisos="MAYOR";

}else if ($porcentaje_sumisos == $porcentaje_combativo && $porcentaje_sumisos < $porcentaje_retirados  ){

  $posicion_sumisos="MENOR";

}else if ($porcentaje_sumisos == $porcentaje_combativo && $porcentaje_sumisos == $porcentaje_retirados  ){

  $posicion_sumisos="MENOR";

}



//posicion sumisos

//posicion retirados

$posicion_retirados=" ";

if($porcentaje_retirados > $porcentaje_combativo && $porcentaje_retirados > $porcentaje_sumisos ){

  $posicion_retirados="MAYOR";

} else if ($porcentaje_retirados  < $porcentaje_combativo && $porcentaje_retirados < $porcentaje_sumisos ){

  $posicion_retirados="MENOR";

}else if ($porcentaje_retirados > $porcentaje_combativo && $porcentaje_retirados < $porcentaje_sumisos  ){

  $posicion_retirados="MEDIO";

}else if ($porcentaje_retirados < $porcentaje_combativo && $porcentaje_retirados > $porcentaje_sumisos  ){

  $posicion_retirados="MEDIO";
 
}else if ($porcentaje_retirados > $porcentaje_combativo OR $porcentaje_retirados > $porcentaje_sumisos  ){

  $posicion_retirados="MAYOR";
  

}else if ($porcentaje_retirados < $porcentaje_combativo && $porcentaje_retirados == $porcentaje_sumisos  ){

  $posicion_retirados="MENOR";

}else if ($porcentaje_retirados == $porcentaje_combativo && $porcentaje_retirados > $porcentaje_sumisos  ){

  $posicion_retirados="MAYOR";

}else if ($porcentaje_retirados < $porcentaje_combativo && $porcentaje_retirados == $porcentaje_sumisos  ){

  $posicion_retirados="MENOR";

}else if ($porcentaje_retirados == $porcentaje_combativo && $porcentaje_retirados > $porcentaje_sumisos  ){

  $posicion_retirados="MAYOR";

}else if ($porcentaje_retirados == $porcentaje_combativo && $porcentaje_retirados < $porcentaje_sumisos  ){

  $posicion_retirados="MENOR";

}else if ($porcentaje_retirados == $porcentaje_combativo && $porcentaje_retirados == $porcentaje_sumisos  ){

  $posicion_retirados="MENOR";

}





//posicion retirados

/* posiciones solución conflictos internos  */


/* reaccion ante problemas  */

//reactivos

$posicion_reactivos=" ";

if($porcentaje_reactivos > $porcentaje_eficaces && $porcentaje_reactivos > $porcentaje_optimistas ){

  $posicion_reactivos="MAYOR";

} else if ($porcentaje_reactivos  < $porcentaje_eficaces && $porcentaje_reactivos < $porcentaje_optimistas ){

  $posicion_reactivos="MENOR";

}else if ($porcentaje_reactivos > $porcentaje_eficaces && $porcentaje_reactivos < $porcentaje_optimistas  ){

  $posicion_reactivos="MEDIO";

}else if ($porcentaje_reactivos < $porcentaje_eficaces && $porcentaje_reactivos > $porcentaje_optimistas  ){

  $posicion_reactivos="MEDIO";
 
}else if ($porcentaje_reactivos > $porcentaje_eficaces OR $porcentaje_reactivos > $porcentaje_optimistas  ){

  $posicion_reactivos="MAYOR";
  

}else if ($porcentaje_reactivos < $porcentaje_eficaces && $porcentaje_reactivos == $porcentaje_optimistas  ){

  $posicion_reactivos="MENOR";

}else if ($porcentaje_reactivos == $porcentaje_eficaces && $porcentaje_reactivos > $porcentaje_optimistas  ){

  $posicion_reactivos="MAYOR";

}else if ($porcentaje_reactivos < $porcentaje_eficaces && $porcentaje_reactivos == $porcentaje_optimistas  ){

  $posicion_reactivos="MENOR";

}else if ($porcentaje_reactivos == $porcentaje_eficaces && $porcentaje_reactivos > $porcentaje_optimistas  ){

  $posicion_reactivos="MAYOR";

}else if ($porcentaje_reactivos == $porcentaje_eficaces && $porcentaje_reactivos < $porcentaje_optimistas  ){

  $posicion_reactivos="MENOR";

}else if ($porcentaje_reactivos == $porcentaje_eficaces && $porcentaje_reactivos == $porcentaje_optimistas  ){

  $posicion_reactivos="MENOR";

}





//reactivos

//eficaces


$posicion_eficacess=" ";

if($porcentaje_eficaces > $porcentaje_reactivos && $porcentaje_eficaces > $porcentaje_optimistas ){

  $posicion_eficaces="MAYOR";

} else if ($porcentaje_eficaces  < $porcentaje_reactivos && $porcentaje_eficaces < $porcentaje_optimistas ){

  $posicion_eficaces="MENOR";

}else if ($porcentaje_eficaces > $porcentaje_reactivos && $porcentaje_eficaces < $porcentaje_optimistas  ){

  $posicion_eficaces="MEDIO";

}else if ($porcentaje_eficaces < $porcentaje_reactivos && $porcentaje_eficaces > $porcentaje_optimistas  ){

  $posicion_eficaces="MEDIO";
 
}else if ($porcentaje_eficaces > $porcentaje_reactivos OR $porcentaje_eficaces > $porcentaje_optimistas  ){

  $posicion_eficaces="MAYOR";
  

}else if ($porcentaje_eficaces < $porcentaje_reactivos && $porcentaje_eficaces == $porcentaje_optimistas  ){

  $posicion_eficaces="MENOR";

}else if ($porcentaje_eficaces == $porcentaje_reactivos && $porcentaje_eficaces > $porcentaje_optimistas  ){

  $posicion_eficaces="MAYOR";

}else if ($porcentaje_eficaces < $porcentaje_reactivos && $porcentaje_eficaces == $porcentaje_optimistas  ){

  $posicion_eficaces="MENOR";

}else if ($porcentaje_eficaces == $porcentaje_reactivos && $porcentaje_eficaces > $porcentaje_optimistas  ){

  $posicion_eficaces="MAYOR";

}else if ($porcentaje_eficaces == $porcentaje_reactivos && $porcentaje_eficaces < $porcentaje_optimistas  ){

  $posicion_eficaces="MENOR";

}else if ($porcentaje_eficaces == $porcentaje_reactivos && $porcentaje_eficaces == $porcentaje_optimistas  ){

  $posicion_eficaces="MENOR";

}




//eficaces

//optimistas

$posicion_optimistas=" ";

if($porcentaje_optimistas > $porcentaje_reactivos && $porcentaje_optimistas > $porcentaje_eficaces ){

  $posicion_optimistas="MAYOR";

} else if ($porcentaje_optimistas  < $porcentaje_reactivos && $porcentaje_optimistas < $porcentaje_eficaces ){

  $posicion_optimistas="MENOR";

}else if ($porcentaje_optimistas > $porcentaje_reactivos && $porcentaje_optimistas < $porcentaje_eficaces  ){

  $posicion_optimistas="MEDIO";

}else if ($porcentaje_optimistas < $porcentaje_reactivos && $porcentaje_optimistas > $porcentaje_eficaces  ){

  $posicion_optimistas="MEDIO";
 
}else if ($porcentaje_optimistas > $porcentaje_reactivos OR $porcentaje_optimistas > $porcentaje_eficaces  ){

  $posicion_optimistas="MAYOR";
  

}else if ($porcentaje_optimistas < $porcentaje_reactivos && $porcentaje_optimistas == $porcentaje_eficaces  ){

  $posicion_optimistas="MENOR";

}else if ($porcentaje_optimistas == $porcentaje_reactivos && $porcentaje_optimistas > $porcentaje_eficaces  ){

  $posicion_optimistas="MAYOR";

}else if ($porcentaje_optimistas < $porcentaje_reactivos && $porcentaje_optimistas == $porcentaje_eficaces  ){

  $posicion_optimistas="MENOR";

}else if ($porcentaje_optimistas == $porcentaje_reactivos && $porcentaje_optimistas > $porcentaje_eficaces  ){

  $posicion_optimistas="MAYOR";

}else if ($porcentaje_optimistas == $porcentaje_reactivos && $porcentaje_optimistas < $porcentaje_eficaces  ){

  $posicion_optimistas="MENOR";

}else if ($porcentaje_optimistas == $porcentaje_reactivos && $porcentaje_optimistas == $porcentaje_eficaces  ){

  $posicion_optimistas="MENOR";

}




//optimistas


/* reaccion ante problemas  */

/* PLANILLA PARA EL FORMADOR */

?>

<div class="container mt-5 mb-5">
<div class="card">
  <div class="card-body">
      <center><h3 class="text-dark">RESUMEN</h3></center>
    <center><table class="table table-striped table-dark col-lg-6">
  <thead>
    <tr>
      <th scope="col">FECHA</th>
      <th scope="col"><?php echo $fecha ?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">NOMBRE</th>
      <th scope="col"><?php echo $nombre?></th>
    </tr>
    </tr>
    <tr>
      <th scope="row">NACIMIENTO</th>
      <th scope="col"><?php echo $fechaNacimiento?></th>
    </tr>
    </tr>
    <tr>
      <th scope="row">EDAD</th>
      <th scope="col"><?php echo $edad ?></th>
    </tr>
    </tr>
    <tr>
      <th scope="row">SEXO</th>
      <th scope="col"><?php echo $sexo ?></th>
    </tr>
    </tr>
    <tr>
      <th scope="row">ESTADO CIVIL</th>
      <th scope="col"><?php echo $estadoCivil ?></th>
    </tr>
    </tr>
    <tr>
      <th scope="row">OCUPACIÓN/PROFESIÓN</th>
      <th scope="col"><?php echo $profesion ?></th>
    </tr>
    </tr>
    <tr>
      <th scope="row">SIGNO DEL ZODIACO</th>
      <th scope="col"><?php echo $signo ?></th>
    </tr>
    </tr>
    </tr>
  </tbody>
</table></center>
    
    </div>


    <center><a class="btn btn-primary" target="_Blank" href="eneagrama.php?nombre=<?php echo $nombre ?>&fecha=<?php echo $fechaLatino ?>&fechaNacimiento=<?php echo $fechaLatinoNacimiento ?>&edad=<?php echo $edad ?>&sexo=<?php echo $sexo ?>&estadoCivil=<?php echo $estadoCivil ?>&profesion=<?php echo $profesion ?>&signo=<?php echo $signo ?>&clase1=<?php echo $clase1 ?>&clase2=<?php echo $clase2 ?>&clase3=<?php echo $clase3 ?>&clase4=<?php echo $clase4 ?>&clase5=<?php echo $clase5 ?>&clase6=<?php echo $clase6 ?>&clase7=<?php echo $clase7 ?>&clase8=<?php echo $clase8 ?>&clase9=<?php echo $clase9 ?>&posicion1=<?php echo $posicion1 ?>&posicion2=<?php echo $posicion2 ?>&posicion3=<?php echo $posicion3 ?>&mas=<?php echo $mas ?>&menos=<?php echo $menos ?>&media=<?php echo $media ?>">VER ENEAGRAMA</a></center><br><br>
    <center><a class="btn btn-primary" target="_Blank" href="eneagramaPro.php?nombre=<?php echo $nombre ?>&fecha=<?php echo $fechaLatino ?>&fechaNacimiento=<?php echo $fechaLatinoNacimiento ?>&edad=<?php echo $edad ?>&sexo=<?php echo $sexo ?>&estadoCivil=<?php echo $estadoCivil ?>&profesion=<?php echo $profesion ?>&signo=<?php echo $signo ?>&clase1=<?php echo $clase1 ?>&clase2=<?php echo $clase2 ?>&clase3=<?php echo $clase3 ?>&clase4=<?php echo $clase4 ?>&clase5=<?php echo $clase5 ?>&clase6=<?php echo $clase6 ?>&clase7=<?php echo $clase7 ?>&clase8=<?php echo $clase8 ?>&clase9=<?php echo $clase9 ?>&posicion1=<?php echo $posicion1 ?>&posicion2=<?php echo $posicion2 ?>&posicion3=<?php echo $posicion3 ?>&mas=<?php echo $mas ?>&menos=<?php echo $menos ?>&media=<?php echo $media ?>&porcentajeAcercar=<?php echo $porcentaje_acercar ?>&posicionAcercar=<?php echo $posicion_acercar ?>&porcentajeAlejar=<?php echo $porcentaje_alejar ?>&posicionAlejar=<?php echo $posicion_alejar ?>&porcentajeCombativo=<?php echo $porcentaje_combativo ?>&posicionCombativo=<?php echo $posicion_combativo ?>&porcentajeSumisos=<?php echo $porcentaje_sumisos ?>&posicionSumisos=<?php echo $posicion_sumisos ?>&porcentajeRetirados=<?php echo $porcentaje_retirados ?>&posicionRetirados=<?php echo $posicion_retirados ?>&porcentajeReactivos=<?php echo $porcentaje_reactivos ?>&posicionReactivos=<?php echo $posicion_reactivos ?>&porcentajeEficaces=<?php echo $porcentaje_eficaces ?>&posicionEficaces=<?php echo $posicion_eficaces ?>&porcentajeOptimistas=<?php echo $porcentaje_optimistas ?>&posicionOptimistas=<?php echo $posicion_optimistas ?>&porcentajeEnfrentar=<?php echo $porcentaje_enfrentar ?>&posicionEnfrentar=<?php echo $posicion_enfrentar ?>">VER ENEAGRAMA PRO</a></center><br>
</div>
</div>


<?php

//$link="<a href='http://localhost/eneagrama/eneagrama.php?nombre=$nombre&fecha=$fecha&fechaNacimiento=$fechaNacimiento&edad=$edad&sexo=$sexo&estadoCivil=$estadoCivil&profesion=$profesion&signo=$signo&clase1=$clase1&clase2=$clase2&clase3=$clase3&clase4=$clase4&clase5=$clase5&clase6=$clase6&clase7=$clase7&clase8=$clase8&clase9=$clase9&posicion1=$posicion1&posicion2=$posicion2&posicion3=$posicion3&mas=$mas&menos=$menos&media=$media&porcentajeAcercar=$porcentaje_acercar&posicionAcercar=$posicion_acercar&porcentajeAlejar=$porcentaje_alejar&posicionAlejar=$posicion_alejar&porcentajeCombativo=$porcentaje_combativo&posicionCombativo=$posicion_combativo&porcentajeSumisos=$porcentaje_sumisos&posicionSumisos=$posicion_sumisos&porcentajeRetirados=$porcentaje_retirados&posicionRetirados=$posicion_retirados&porcentajeReactivos=$porcentaje_reactivos&posicionReactivos=$posicion_reactivos&porcentajeEficaces=$porcentaje_eficaces&posicionEficaces=$posicion_eficaces&porcentajeOptimistas=$porcentaje_optimistas&posicionOptimistas=$posicion_optimistas&porcentajeEnfrentar=$porcentaje_enfrentar&posicionEnfrentar=$posicion_enfrentar'>LINK DEL ENEAGRAMA</a>";

$link="<a href='http://conocerteparatransformarte.com/eneagrama/eneagramaPRO.php?nombre=$nombre&fecha=$fecha&fechaNacimiento=$fechaNacimiento&edad=$edad&sexo=$sexo&estadoCivil=$estadoCivil&profesion=$profesion&signo=$signo&clase1=$clase1&clase2=$clase2&clase3=$clase3&clase4=$clase4&clase5=$clase5&clase6=$clase6&clase7=$clase7&clase8=$clase8&clase9=$clase9&posicion1=$posicion1&posicion2=$posicion2&posicion3=$posicion3&mas=$mas&menos=$menos&media=$media&porcentajeAcercar=$porcentaje_acercar&posicionAcercar=$posicion_acercar&porcentajeAlejar=$porcentaje_alejar&posicionAlejar=$posicion_alejar&porcentajeCombativo=$porcentaje_combativo&posicionCombativo=$posicion_combativo&porcentajeSumisos=$porcentaje_sumisos&posicionSumisos=$posicion_sumisos&porcentajeRetirados=$porcentaje_retirados&posicionRetirados=$posicion_retirados&porcentajeReactivos=$porcentaje_reactivos&posicionReactivos=$posicion_reactivos&porcentajeEficaces=$porcentaje_eficaces&posicionEficaces=$posicion_eficaces&porcentajeOptimistas=$porcentaje_optimistas&posicionOptimistas=$posicion_optimistas&porcentajeEnfrentar=$porcentaje_enfrentar&posicionEnfrentar=$posicion_enfrentar'>LINK DEL ENEAGRAMA</a>";


include("mail.php");

//header("location:xport.php?nombre=$nombre&fecha=$fecha&fechaNacimiento=$fechaNacimiento&edad=$edad&sexo=$sexo&estadoCivil=$estadoCivil&profesion=$profesion&signo=$signo&clase1=$clase1&clase2=$clase2&clase3=$clase3&clase4=$clase4&clase5=$clase5&clase6=$clase6&clase7=$clase7&clase8=$clase8&clase9=$clase9");

include("footer.php");

?>