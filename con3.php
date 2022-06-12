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

$clase1=htmlentities(addslashes($_POST["clase1"]));
$clase2=htmlentities(addslashes($_POST["clase2"]));
$clase3=htmlentities(addslashes($_POST["clase3"]));
$clase4=htmlentities(addslashes($_POST["clase4"]));
$clase5=htmlentities(addslashes($_POST["clase5"]));
$clase6=htmlentities(addslashes($_POST["clase6"]));
$clase7=htmlentities(addslashes($_POST["clase7"]));
$clase8=htmlentities(addslashes($_POST["clase8"]));
$clase9=htmlentities(addslashes($_POST["clase9"]));

/* afimarcion de consignas 2  */

$afm1=htmlentities(addslashes($_POST["afm1"]));
$afm2=htmlentities(addslashes($_POST["afm2"]));
$afm3=htmlentities(addslashes($_POST["afm3"]));
$afm4=htmlentities(addslashes($_POST["afm4"]));
$afm5=htmlentities(addslashes($_POST["afm5"]));
$afm6=htmlentities(addslashes($_POST["afm6"]));
$afm7=htmlentities(addslashes($_POST["afm7"]));
$afm8=htmlentities(addslashes($_POST["afm8"]));
$afm9=htmlentities(addslashes($_POST["afm9"]));



if($afm1==1){

  $afm1="Evito el conflicto, porque trato de comprender y mediar en cualquier situación.";

  $posicion1=$afm1;

}else if($afm2==1){

  $afm2="Evito la cólera y el enojo, porque no es correcto irritarse.";

  $posicion1=$afm2;

}else if($afm3==1){

  $afm3="Evito la mediocridad, porque no quiero ser uno más.";

  $posicion1=$afm3;

}else if($afm4==1){

  $afm4="Evito reconocer y atender mis propias necesidades, priorizando las necesidades de los otros.";

  $posicion1=$afm4;

}else if($afm5==1){

  $afm5="Evito cualquier tipo de irresponsabilidad.";

  $posicion1=$afm5;

}else if($afm6==1){

  $afm6="Evito la debilidad, porque no hay nada imposible para mí.";

  $posicion1=$afm6;

}else if($afm7==1){

  $afm7="Evito la confusión, porque necesito tener las ideas claras.";

  $posicion1=$afm7;

}else if($afm8==1){

  $afm8="Evito el dolor, porque siempre veo lo positivo de la vida.";

  $posicion1=$afm8;

}else if($afm9==1){

  $afm9="Evito el fracaso a toda costa, porque creo que siempre se puede hacer algo más.";

  $posicion1=$afm9;

}




if($afm1==2){

  $afm1="Evito el conflicto, porque trato de comprender y mediar en cualquier situación.";

  $posicion2=$afm1;

}else if($afm2==2){

  $afm2="Evito la cólera y el enojo, porque no es correcto irritarse.";

  $posicion2=$afm2;

}else if($afm3==2){

  $afm3="Evito la mediocridad, porque no quiero ser uno más.";

  $posicion2=$afm3;

}else if($afm4==2){

  $afm4="Evito reconocer y atender mis propias necesidades, priorizando las necesidades de los otros.";

  $posicion2=$afm4;

}else if($afm5==2){

  $afm5="Evito cualquier tipo de irresponsabilidad.";

  $posicion2=$afm5;

}else if($afm6==2){

  $afm6="Evito la debilidad, porque no hay nada imposible para mí.";

  $posicion2=$afm6;

}else if($afm7==2){

  $afm7="Evito la confusión, porque necesito tener las ideas claras.";

  $posicion2=$afm7;

}else if($afm8==2){

  $afm8="Evito el dolor, porque siempre veo lo positivo de la vida.";

  $posicion2=$afm8;

}else if($afm9==2){

  $afm9="Evito el fracaso a toda costa, porque creo que siempre se puede hacer algo más.";

  $posicion2=$afm9;

}




if($afm1==3){

  $afm1="Evito el conflicto, porque trato de comprender y mediar en cualquier situación.";

  $posicion3=$afm1;

}else if($afm2==3){

  $afm2="Evito la cólera y el enojo, porque no es correcto irritarse.";

  $posicion3=$afm2;

}else if($afm3==3){

  $afm3="Evito la mediocridad, porque no quiero ser uno más.";

  $posicion3=$afm3;

}else if($afm4==3){

  $afm4="Evito reconocer y atender mis propias necesidades, priorizando las necesidades de los otros.";

  $posicion3=$afm4;

}else if($afm5==3){

  $afm5="Evito cualquier tipo de irresponsabilidad.";

  $posicion3=$afm5;

}else if($afm6==3){

  $afm6="Evito la debilidad, porque no hay nada imposible para mí.";

  $posicion3=$afm6;

}else if($afm7==3){

  $afm7="Evito la confusión, porque necesito tener las ideas claras.";

  $posicion3=$afm7;

}else if($afm8==3){

  $afm8="Evito el dolor, porque siempre veo lo positivo de la vida.";

  $posicion3=$afm8;

}else if($afm9==3){

  $afm9="Evito el fracaso a toda costa, porque creo que siempre se puede hacer algo más.";

  $posicion3=$afm9;

}



/* afimarcion de consignas 2  */

?>
 <style>
    input[type=number] {
   width: 35px;
}

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
 </style> 
    
<div class="container mt-5 mb-5">
<div class="card">
  <div class="card-body">
<form action="resumen.php" method="POST">
<center><h3 class="text-dark"><strong> Por último, a continuación encontrarás algunos
verbos, marca en el recuadro con "2" el verbo
con el que más te identificas, y con "1" el
verbo con el que menos te identificas
</strong></h3></center><br>
  <div class="row">
    <div class="col-sm">
       <!-- consigna 3 -->
       <input type="number" name="verbo1"> Realizar<br>
        <input type="number" name="verbo2" > Alegrar<br>
        <input type="number" name="verbo3"> Observar<br>
        <input type="number" name="verbo4"> Liderar<br>
        <input type="number" name="verbo5"> Serenar<br>
   
    </div>
    <div class="col-sm">
    <input type="number" name="verbo6" > Cooperar<br>
        <input type="number" name="verbo7" > Ayudar<br>
        <input type="number" name="verbo8" > Crear<br>
        <input type="number"  name="verbo9" > Organizar<br><br>
         <!-- consigna 3 -->
    </div>
</div>  


  <!-- llevar hasta el final -->
  <input type="hidden" value="<?php echo $fecha ?>" name="fecha">
  <input type="hidden" value="<?php echo $nombre ?>" name="nombre">
  <input type="hidden" value="<?php echo $fechaNacimiento ?>" name="fechaNacimiento">
  <input type="hidden" value="<?php echo $edad?>" name="edad">
  <input type="hidden" value="<?php echo $sexo ?>" name="sexo">
  <input type="hidden" value="<?php echo $estadoCivil ?>" name="estadoCivil">
  <input type="hidden" value="<?php echo $profesion ?>" name="profesion">
  <input type="hidden" value="<?php echo $signo ?>" name="signo">
  <!-- llevar hasta el final -->

  <!-- clases -->
  <input type="hidden" value="<?php echo $clase1 ?>" name="clase1">
  <input type="hidden" value="<?php echo $clase2 ?>" name="clase2">
  <input type="hidden" value="<?php echo $clase3 ?>" name="clase3">
  <input type="hidden" value="<?php echo $clase4 ?>" name="clase4">
  <input type="hidden" value="<?php echo $clase5 ?>" name="clase5">
  <input type="hidden" value="<?php echo $clase6 ?>" name="clase6">
  <input type="hidden" value="<?php echo $clase7 ?>" name="clase7">
  <input type="hidden" value="<?php echo $clase8 ?>" name="clase8">
  <input type="hidden" value="<?php echo $clase9?>" name="clase9">
  <!-- clases -->

  <!-- valores consigna 2 -->
  <input type="hidden" value="<?php echo $posicion1 ?>" name="posicion1">
  <input type="hidden" value="<?php echo $posicion2 ?>" name="posicion2">
  <input type="hidden" value="<?php echo $posicion3 ?>" name="posicion3">
  <center><button type="submit" class="btn btn-primary">Siguiente</button></center>
</div>

</form>



    </div>
</div>
</div>





<?php

include("footer.php");

?>