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

/*  llevar hasta el final */

$respuesta=htmlentities(addslashes($_POST["respuesta"]));


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

if($respuesta=="true"){
  $clase2++;
}

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
    <form action="con3.php" method="POST">
    <center><h3 class="text-dark"><strong> A continuación encontrarás 9 afirmaciones de las cuales debes seleccionar las tres con las que más te identifiques y ordenarlas con los números 1, 2 y 3 por el orden de importancia que tienen para vos.</strong></h3></center><br>
    <!-- consigna 2 -->
        <input type="number" name="afm1"> Evito el conflicto, porque trato de comprender y mediar en cualquier situación.<br>
        <input type="number" name="afm2" > Evito la cólera y el enojo, porque no es correcto irritarse.<br>
        <input type="number" name="afm3"> Evito la mediocridad, porque no quiero ser uno más.<br>
        <input type="number" name="afm4"> Evito reconocer y atender mis propias necesidades, priorizando las necesidades de los otros.<br>
        <input type="number" name="afm5"> Evito cualquier tipo de irresponsabilidad.<br>
        <input type="number" name="afm6" > Evito la debilidad, porque no hay nada imposible para mí.<br>
        <input type="number" name="afm7" > Evito la confusión, porque necesito tener las ideas claras<br>
        <input type="number" name="afm8" > Evito el dolor, porque siempre veo lo positivo de la vida.<br>
        <input type="number"  name="afm9" > Evito el fracaso a toda costa, porque creo que siempre se puede hacer algo más.<br><br>
 
    <!-- consigna 2 -->
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
  <center><button type="submit" class="btn btn-primary">Siguiente</button></center>
</div>

</form>



    </div>
</div>





<?php

include("footer.php");

?>