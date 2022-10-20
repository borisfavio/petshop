<?php
include_once '../../libs/fpdf/fpdf.php';

class Reporte extends FPDF{    
   function Header(){
      //$this->Image("../assets/images/icono_alumno.jpg",27,2,50);
      $this->Image("../../assets/images/icono_alumno.jpg",27,2,20);
      $this->Ln(7);
      $this->Cell(19);
      $this->SetFont("Times", "I", 12);
      $this->Cell(17,8,utf8_decode('Reportes'),0,0,'C',FALSE);
      // Título
      $this->SetFont("Arial", "", 8);
      $this->Ln(-15);
      $this->Cell(0,9,utf8_decode('La Paz - Bolivia'),0,0,'R');
      // $this->Cell(0,19,utf8_decode('Central Piloto: 591-2-2750507 - 2750558'),0,0,'R');
      // $this->Cell(0,29,utf8_decode('Fax: (591-2) 2750517 - Casilla: 7982'),0,0,'R');
      // $this->Cell(0,39,utf8_decode('E-mail: info@cormesaltda.com - www.cormesaltda.com'),0,0,'R');
      // $this->Cell(0,49,utf8_decode('La Paz - Bolivia'),0,0,'R');
      //salto de linea
      $this->Ln(20);
      $this->Ln(4);
   }

   function Footer(){
      $this->SetY(-15);
      // Arial italic 8
      $this->SetFont('Arial','I',8);
      $this->Line(10, 342, 205, 342);
      // Número de página
      $this->Cell(50,10, "Reporte Generado el ".date("d-m-Y"),0,0,"L");
      $this->Cell(110);
      $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'R');    
   }

   function drawTable($header, $data){
      // 196 Anchuras de las columnas
      $w = array(10, 106, 20, 30, 30);
      //Cabeceras
      $this->SetFont("Arial", "B", 10);
      for($i=0; $i<count($header); $i++){
         $this->Cell($w[$i], 8, utf8_decode($header[$i]), 1, 0, 'C');
      }
      $this->Ln();
      // Datos
      $this->SetFont("Arial", "", 10);
      $total = 0;
      $i = 1;
      foreach($data as $row){
         $t = $row['cantidad'] * $row['costo'];
         $this->Cell($w[0], 8, utf8_decode($i++), 1, 0, 'C');
         $this->Cell($w[1], 8, utf8_decode($row['nombreproducto']), 1, 0, 'LR');
         $this->Cell($w[2], 8, utf8_decode($row['cantidad']), 1, 0,'C');
         $this->Cell($w[3], 8, utf8_decode($row['costo']." Bs."), 1, 0, 'C');
         $this->Cell($w[4], 8, utf8_decode($t." Bs."), 1, 0, 'C');
         $this->Ln();

         $total+= $t;

      }
            $this->SetFont("Arial", "B", 10);
            $this->Cell(166, 8, 'TOTAL: ', 0, 0,'R');
            $this->Cell(0, 8, $total." Bs.", 1, 1,'C');

   }    
}
   $reporte = new Reporte('P','mm', 'letter');
   $reporte->SetTitle("Reporte", true);
   $reporte->AliasNbPages();
   $reporte->AddPage(); 



   // $reporte->Ln(0);
   // $reporte->SetFont('Arial','B',10);
   // $reporte->Cell(0,6, utf8_decode('Nombre: '.$row['nombre_cliente']),0,1);
   // $reporte->Cell(0,6, utf8_decode('Institucion: '.$row['ci_cliente']),0,1);
   // $reporte->Cell(0,6, utf8_decode('Carrera: '.$row['ci_cliente']),0,1);
   
   $reg=mysqli_fetch_array($res);

      $reporte->Ln(0);
      $reporte->SetFont('Arial','B',10);
      $reporte->Cell(0,6, utf8_decode('Nombre: '.$reg['nombre_cliente']),0,1);
      $reporte->Cell(0,6, utf8_decode('CI/NIT: '.$reg['ci_cliente']),0,1);
      $reporte->Cell(0,6, utf8_decode('Fecha Emision: '.$reg['fecha_venta']),0,1);
   // }


   $reporte->Ln(0);
   $reporte->SetFont('Arial','B',12);
   $reporte->Cell(0, 10, utf8_decode("REPORTE VENTA"), 0 ,0, "C");
   $header = array("Nro", "CONCEPTO","CANTIDAD","P. UNITARIO","P. TOTAL");
   while($data=mysqli_fetch_array($respuesta)){
      // var_dump($data);
      // echo '<pre>',print_r($data),'</pre>';
      $data1[] = $data;
   }    
   $reporte->Ln(15);
   $reporte->drawTable($header, $data1);
   // $reporte->Output();
   echo $reporte->Output('Empleados.pdf', 'I');