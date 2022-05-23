<?php
require_once "connection.php";
require('fpdf/fpdf.php');

 if(isset($_POST['final'])){
	 $fid=$_POST['fid'];
	 $fname=$_POST['fname'];
	 $type=$_POST['type'];
	 $cost=$_POST['cost'];
	 $sum=$_POST['sum'];
	 $amount=$_POST['amount'];
	 $fet="SELECT cid from milk_center m ,farmer f where f.f_vid=m.village_id and f.id='$fid'";
	 $query_run=mysqli_query($conn,$fet);

	 $res=mysqli_fetch_array($query_run);
	 $cid=$res['cid'];
	$sql="INSERT into bill (farmer_id,farmer_name,center_id,quantity,amount)values('$fid','$fname','$cid','$sum','$amount')";

	$query_run=mysqli_query($conn,$sql);
	if($query_run)
	{
			class myPDF extends FPDF{
				function header()
				{
					$this->Image("images/NATURE-ONE-DAIRY-CORPORATE-LOGO-01.png",10,6);
					$this->SetFont("Arial","I",15);
					$this->Cell(276,5,"farmer billing",0,0,'C');
				$this->Ln();}
			}




		$pdf=new FPDF();

		$pdf->AddPage();
		$pdf->SetFont("Arial","I",15);
		$pdf->Cell(30,10,"date :",0,0);
		$pdf->Cell(70,10,date("d-m-Y"),0,1);
		$pdf->Cell(30,10,"time :",0,0);
		$pdf->Cell(70,10,time(),0,1);
		$pdf->Cell(30,10,"center id: ",0,0,);
		$pdf->Cell(90,10,$cid,0,1,);
		$pdf->Line(10,40,200,40);
		$pdf->Cell(50,10,"bill id: :",0,0,'C');
		$pdf->Cell(70,10,234,0,1);
		$pdf->Cell(50,10,"farmer_id :",0,0,'C');
		$pdf->Cell(70,10,$fid,0,1);
		$pdf->Cell(50,10,"farmer_name: ",0,0,'C');
		$pdf->Cell(90,10,$fname,0,1,);
		$pdf->Cell(50,10,"milk_type: ",0,0,'C');
		$pdf->Cell(90,10,$type,0,1,);
		$pdf->Cell(50,10,"cost per litre: ",0,0,'C');
		$pdf->Cell(90,10,$cost,0,1,);
		$pdf->Line(10,90,200,90);
		$pdf->Cell(170,10,"quantity suplied =",0,0,);
		$pdf->Cell(20,10,$sum,0,1,);
		$pdf->Cell(170,10,"net amount =",0,0,);
		$pdf->Cell(20,10,$amount,0,1,);
		$pdf->Output();

	}
	else{
		echo "error in adding billing";
	}
 }?>
