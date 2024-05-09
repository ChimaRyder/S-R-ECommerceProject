<?php
require('fpdf/fpdf.php');
include ('connect.php');

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 20);

$pdf->Cell(71, 10, '', 0, 0);
$pdf->Cell(59, 5, 'INVOICE', 0, 0);
$pdf->Cell(59, 10, '', 0, 1);


$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(190, 6, 'List of Female Customers', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 6, 'ID', 1, 0, 'C');
$pdf->Cell(65, 6, 'Name', 1, 0, 'C');
$pdf->Cell(35, 6, 'Gender', 1, 0, 'C');
$pdf->Cell(35, 6, 'Email', 1, 1, 'C');



$pdf->SetFont('Arial', '', 10);


$sqlfind = "select Customer_ID, First_Name, Last_Name, Gender, Email from tblcustomer where Gender ='Female'";
$smthn = mysqli_query($connection, $sqlfind);


while ($row = mysqli_fetch_assoc($smthn)) {
    $pdf->Cell(30, 6, $row['Customer_ID'], 1, 0, 'C');
    $pdf->Cell(65, 6, $row['First_Name']." ".$row['Last_Name'], 1, 0, 'C');
    $pdf->Cell(35, 6, $row['Gender'], 1, 0, 'C');
    $pdf->Cell(35, 6, $row['Email'], 1, 1, 'C');
}

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(190, 6, 'List of Customers whose First Name Starts with S', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(60, 6, 'ID', 1, 0, 'C');
$pdf->Cell(65, 6, 'Name', 1, 0, 'C');
$pdf->Cell(65, 6, 'Email', 1, 1, 'C');


$pdf->SetFont('Arial', '', 10);



$sqlfind = "select Seller_ID, First_Name, Last_Name, Email from tblseller where First_Name like 'S%'";
$smthn = mysqli_query($connection, $sqlfind);

while ($row = mysqli_fetch_assoc($smthn)) {
    $pdf->Cell(60, 6, $row['Seller_ID'], 1, 0, 'C');
    $pdf->Cell(65, 6, $row['First_Name']." ".$row['Last_Name'], 1, 0, 'C');
    $pdf->Cell(65, 6, $row['Email'], 1, 1, 'C');
}



$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(190, 6, 'List of Recently Added Products', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 6, 'ID', 1, 0, 'C');
$pdf->Cell(80, 6, 'Product Name', 1, 0, 'C');
$pdf->Cell(35, 6, 'Seller', 1, 0, 'C');
$pdf->Cell(32, 6, 'Price', 1, 0, 'C');
$pdf->Cell(33, 6, 'Stock', 1, 1, 'C');


$pdf->SetFont('Arial', '', 10);

$query = "SELECT Product_ID, Product_Name, seller.First_Name, seller.Last_Name, Price, Stock 
            from tblproduct, tblstore, tblseller as seller 
            WHERE tblproduct.Store_ID = tblstore.Store_ID 
            AND seller.Seller_ID = tblstore.Seller_ID
            ORDER BY Date_Created";
$smthn = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($smthn)) {
    $pdf->Cell(10, 6, $row['Product_ID'], 1, 0, 'C');
    $pdf->Cell(80, 6, $row['Product_Name'], 1, 0, 'C');
    $pdf->Cell(35, 6, $row['First_Name']." ".$row['Last_Name'], 1, 0, 'C');
    $pdf->Cell(32, 6, "P".number_format($row['Price'],2), 1, 0, 'C');
    $pdf->Cell(33, 6, $row['Stock'], 1, 1, 'C');
}

$pdf->Output();
?>