	
<?php
require('fpdf.php');





class PDF extends FPDF
{
	// Cabecera de página
	function Header()
	{
	    // Logo
	    $this->Image('img/logo.png',10,8,33);
	    // Arial bold 15
	    $this->SetFont('Arial','B',15);
	    // Movernos a la derecha
	    $this->Cell(80);
	    // Título
	    $this->Cell(30,10,'Registro de pasajeros',0,1,'C');
	    // Salto de línea
	    $this->Ln(20);
	}

	// Cargar los datos
	function LoadData($file)
	{
	    // Leer las líneas del fichero
		/*$data = array();
	    while ($linea=sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
	    	$data[0][] = $linea[]
	    }



	    $lines = file($file);
	    $data = array();
	    foreach($lines as $line)
	        $data[] = explode(';',trim($line));
	    return $data;*/
	}

	// Tabla simple
	function BasicTable($header, $data)
	{
	    // Cabecera
	    foreach($header as $col)
	        $this->Cell(40,7,$col,1);
	    $this->Ln();

	    include('scripts/conexion.php');

	    $query = "SELECT * FROM reg_pasajero";

		$resultado = sqlsrv_query($conexion,$query) or 
		die ("No se puedo ejecutar consulta");


	    while ($linea=sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
	    	$this->Cell(40,6,$linea['nombre_pasajero'],1);
	    	$this->Cell(40,6,$linea['apellido_paterno'],1);
	    	$this->Cell(40,6,$linea['apellido_materno'],1);
	    	$this->Cell(40,6,$linea['email_pasajero'],1);
	    	$this->Ln();

	    }

	    /*
	    // Datos
	    foreach($data as $row)
	    {
	        foreach($row as $col)
	            $this->Cell(40,6,$col,1);
	        $this->Ln();
	    }*/
	}


	// Una tabla más completa
	function ImprovedTable($header, $data)
	{
	    // Anchuras de las columnas
	    $w = array(40, 35, 45, 40);
	    // Cabeceras
	    for($i=0;$i<count($header);$i++)
	        $this->Cell($w[$i],7,$header[$i],1,0,'C');
	    $this->Ln();
	    // Datos
	    foreach($data as $row)
	    {
	        $this->Cell($w[0],6,$row[0],'LR');
	        $this->Cell($w[1],6,$row[1],'LR');
	        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
	        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
	        $this->Ln();
	    }
	    // Línea de cierre
	    $this->Cell(array_sum($w),0,'','T');
	}

	// Tabla coloreada
	function FancyTable($header, $data)
	{
	    // Colores, ancho de línea y fuente en negrita
	    $this->SetFillColor(255,0,0);
	    $this->SetTextColor(255);
	    $this->SetDrawColor(128,0,0);
	    $this->SetLineWidth(.3);
	    $this->SetFont('','B');
	    // Cabecera
	    $w = array(40, 35, 45, 40);
	    for($i=0;$i<count($header);$i++)
	        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	    $this->Ln();
	    // Restauración de colores y fuentes
	    $this->SetFillColor(224,235,255);
	    $this->SetTextColor(0);
	    $this->SetFont('');
	    // Datos
	    $fill = false;
	    foreach($data as $row)
	    {
	        $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
	        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
	        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
	        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
	        $this->Ln();
	        $fill = !$fill;
	    }
	    // Línea de cierre
	    $this->Cell(array_sum($w),0,'','T');
	}

	// Pie de página
	function Footer()
	{
	    // Posición: a 1,5 cm del final
	    $this->SetY(-15);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Número de página
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}


$pdf = new PDF();
// Títulos de las columnas
$header = array('Nombres', 'Apellido Paterno', 'Apellido materno', 'Email');
// Carga de datos
$pdf->AliasNbPages();
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->BasicTable($header,null);
$pdf->Output();
?>