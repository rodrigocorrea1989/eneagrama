<?php

include("headerManual.php");

?>
<div class="container mt-5 mb-3">
<div class="card">
  <div class="card-body">
  <div class="row">
    <div class="col-sm">
    <form action="exportEneagramaManual.php" method="POST"> 
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

  </tbody>
</table>


  </tbody>
</table></center>


    </div>
    <div class="col-sm">
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
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">1</label></td>
      <td><input type="number" class="form-control" name="clase1" id="formGroupExampleInput" required></td>
</div>  

    </tr>
    <div class="form-group">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">2</label></td>
      <td><input type="number" class="form-control" name="clase2" id="formGroupExampleInput" required></td>
</div>  

    </tr>
    <div class="form-group">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">3</label></td>
      <td><input type="number" class="form-control" name="clase3" id="formGroupExampleInput" required></td>
</div>  

    </tr>
    <div class="form-group">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">4</label></td>
      <td><input type="number" class="form-control" name="clase4" id="formGroupExampleInput" required></td>
</div>  

    </tr>   <div class="form-group">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">5</label></td>
      <td><input type="number" class="form-control" name="clase5" id="formGroupExampleInput" required></td>
</div>  

    </tr>
    <div class="form-group">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">6</label></td>
      <td><input type="number" class="form-control" name="clase6" id="formGroupExampleInput" required></td>
</div>  

    </tr>
    <div class="form-group">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">7</label></td>
      <td><input type="number" class="form-control" name="clase7" id="formGroupExampleInput" required></td>
</div>  
    </tr>
    <div class="form-group">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">8</label></td>
      <td><input type="number" class="form-control" name="clase8" id="formGroupExampleInput" required></td>
</div>  

    </tr>
    <div class="form-group">
      <td class="bg-dark text-light pl-lg-5 pr-lg-5"><label for="formGroupExampleInput">9</label></td>
      <td><input type="number" class="form-control" name="clase9" id="formGroupExampleInput" required></td>
</div>  

    </tr>
    <tr>
  </tbody>
</table>


  </tbody>
</table></center>
    </div>
   
  </div>
  <center><button type="submit" class="btn btn-primary mt-5">Exportar Eneagrama PDF</button></center>
    </form>
</div>
</div>
</div>


<?php

include("footer.php");


?>