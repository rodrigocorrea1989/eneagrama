<?php

$fecha=htmlentities(addslashes($_GET["fecha"]));
$nombre=$_GET["nombre"];
$fechaNacimiento=htmlentities(addslashes($_GET["fechaNacimiento"]));
$edad=htmlentities(htmlentities($_GET["edad"]));
$sexo=htmlentities(addslashes($_GET["sexo"]));
$estadoCivil=htmlentities(addslashes($_GET["estadoCivil"]));
$profesion=htmlentities(addslashes($_GET["profesion"]));
$signo=htmlentities(addslashes($_GET["signo"]));


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


/*  clases */

/* consigna 2 */
$posicion1=$_GET["posicion1"];
$posicion2=$_GET["posicion2"];
$posicion3=$_GET["posicion3"];
$mas=$_GET["mas"];
$menos=$_GET["menos"];
$media=$_GET["media"];



/*  consigna 2 */


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
$pdf->Output();





/* pdf */




?>