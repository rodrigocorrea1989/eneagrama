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


/*  clases */

$clase1=0;
$clase2=0;
$clase3=0;
$clase4=0;
$clase5=0;
$clase6=0;
$clase7=0;
$clase8=0;
$clase9=0;


/*  clases */

?>

<div class="container mt-5 mb-5">
<div class="card">
  <div class="card-body">
      <span class="bg-dark text-light p-2">Eneagrama de <?php echo $nombre ?></span><br><br>
    <center><span>1 de 270</span></center><br>
<form action="afm2.php" method="POST">
    <center><h3 class="text-dark"><strong> Protejo a quienes se encuentran bajo mi autoridad.</strong></h3></center><br>
<div class="container col-lg-6  col-sm-4">
  <div class="row ml-5">
    <div class="col">
    <div class="form-check">
            <input class="form-check-input" name="respuesta" type="radio" name="exampleRadios" id="exampleRadios1" value="true" checked>
            <label class="form-check-label" for="exampleRadios1">
      Me identifico
  </label>
</div>
    </div>
    <div class="col">
    <div class="form-check">
  <input class="form-check-input" type="radio" name="respuesta" name="exampleRadios" id="exampleRadios1" value="false">
  <label class="form-check-label" for="exampleRadios1">
    No me identifico
  </label>
</div>
    </div>
  </div><br>
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
  <input type="hidden" value="<?php echo $clase9 ?>" name="clase9">
  <!-- clases -->
  <center><button type="submit" class="btn btn-primary">Siguiente</button></center>
  
</div>

</form>



    </div>
</div>
</div>


<?php

include("footer.php");

?>