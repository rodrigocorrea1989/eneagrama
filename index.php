<?php

include("header.php");

?>
<div class="container mt-5 mb-3">
<div class="card">
  <div class="card-body">
    <form action="afm1.php" method="POST"> 
    <center><table>
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <div class="form-group">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">Fecha</label></td>
      <td><input type="date" class="form-control" name="fecha" id="formGroupExampleInput" placeholder="Example input" required></td>
</div>  

    </tr>
    <tr>
    <div class="form-group">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">Nombre</label></td>
      <td><input type="name" class="form-control" name="nombre" id="formGroupExampleInput"  required></td>
  </div>      
    </tr>
    <tr>
    <div class="form-group">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">Fecha de Nacimiento</label></td>
      <td><input type="date" class="form-control" name="fechaNacimiento" id="formGroupExampleInput" placeholder="Example input" required></td>
</div>  

    </tr>
    <tr>
    <div class="form-group">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">Edad</label></td>
      <td><input type="number" class="form-control" name="edad" id="formGroupExampleInput"  required></td>
</div>  

    </tr>
    <tr>
    <div class="form-group">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">Sexo</label></td>
      <td><select id="inputState" name="sexo" class="form-control">
        <option selected>Femenino</option>
        <option>Maculino</option>
      </select></td>
</div>  
<tr>
<div class="form-group ">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">Estado Civil</label></td>
      <td><select id="inputState" name="estadoCivil" class="form-control">
        <option selected>Casado</option>
        <option>Soltero</option>
        <option>En Pareja</option>
        <option>De Novio</option>
        <option>Viudo</option>
        <option>Divorciado</option>
      </select></td>
</div>  

    </tr>
    <tr>
    <div class="form-group">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">Ocupación/Profesión</label></td>
      <td><input type="text" class="form-control" name="profesion" id="formGroupExampleInput"  required></td>
  </div>      
    </tr>
    <tr>
<div class="form-group">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">Signo del Zódiaco</label></td>
      <td><select id="inputState" name="signo" class="form-control">
        <option selected>Aries</option>
        <option>Leo</option>
        <option>Sagitario</option>
        <option>Tauro</option>
        <option>Virgo</option>
        <option>Capricornio</option>
        <option>Géminis</option>
        <option>Libra</option>
        <option>Acuario</option>
        <option>Cáncer</option>
        <option>Escorpio</option>
        <option>Piscis</option>
      </select></td>
</div>  

    </tr>
  </tbody>
</table>


  </tbody>
</table></center>

<center><button type="submit" class="btn btn-primary mt-5">Comenzar</button></center>
    </form>
</div>
</div>
</div>


<?php

include("footer.php");


?>