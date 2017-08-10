<?php
include $_SERVER["DOCUMENT_ROOT"] . "database/client.php";

$ACID = $_GET['accid'];
$name = $_GET['name'];				  ;
$prod_name = $_GET['section'];
$dept_name = $_GET['clientType'];

$html = '
<div class="row">
 <div class="col-md-12 text-center">
	<h3>Borrower Amortization Table</h3>
 </div>
 <br>
 <div class="col-md-12">
	<table>
		<tr>
			<td colspan="3" width="100%">Account No: <span style="font-weight:bold;">'.$ACID.'</span></td>
			<td>Date Generated: <span style="font-weight:bold;">may/12/1993</span></td>
		</tr>
		<tr>
			<td colspan="3" width="100%">Client Name: <span style="font-weight:bold;">'.$name.'</span></td>
			<td>Interest Amount: <span style="font-weight:bold;">'.number_format(4000,2,'.',',').'</span></td>
		</tr>
		<tr>
			<td colspan="3" width="100%">Department: <span style="font-weight:bold;">'.$prod_name.'</span></td>
			<td>Date Maturity: <span style="font-weight:bold;">asdfasdf</span></td>
		</tr>
		<tr>
			<td colspan="3" width="100%">Payment Interval: <span style="font-weight:bold;">'.$dept_name.'</span></td>
			<td>No. of Amortization: <span style="font-weight:bold;">bbbbbb</span></td>
		</tr>
		<tr>
			<td colspan="3" width="100%">Term: <span style="font-weight:bold;">cccccccccccc Days</span></td>
		</tr>
	</table>
	
  <div class="col-md-12">
 <hr>
<table class="amort_table">
	<thead>
		<tr class="headerrow">
			<th>Date</th>
			<th>Principal</th>
			<th>Interest</th>
			<th>Total</th>
		</tr>
	</thead>
		<tbody>';
	for($i = 0; $i < 2; $i++){
		
	$html .='	<tr class="oddrow">
			<td>asdfasdfasdf</td>
			<td>sdfsfsdfsdf</td>
			<td>sfsdfsdfsf</td>
			<td>adfasdfsdf</td>
		</tr>';
	}

	$html.='
	<tr>
		<th>Grand Total</th>
		<th>'.number_format(200,2,'.',',').'</th>
		<th>'.number_format(08088,2,'.',',').'</th>
		<th>'.number_format(88888888,2,'.',',').'</th>
	</tr>
	</tbody>
	</table>
	</div>
	</div>
</div>
</div>
</div>
';


//==============================================================
//==============================================================
//==============================================================

include('mpdf.php');

$mpdf=new mPDF('c'); 

$mpdf->SetDisplayMode('fullpage');
$mpdf->SetTitle('Amortization');
$mpdf->SetAuthor('MyLoan User');
// LOAD a stylesheet
$stylesheet = file_get_contents('mpdfstyleA4.css');
$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html);

$mpdf->Output();

exit;
//==============================================================
//==============================================================
//==============================================================

?>